<?php

namespace App\Http\Livewire\Tags;

use App\Models\Tag;
use Livewire\Component;

class Store extends Component
{
    public $name;
    protected $paginationTheme = 'bootstrap';
    public $tag_id;
    public $slug;
    protected $rules=[
        'name'=>['required','min:2','max:10','unique:tags,name'],
        'slug'=>['required'],
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }



    public function store()
    {
        $this->validate();

        Tag::create([
            'name'=>$this->name,
            'slug'=>$this->slug,
        ]);
        session()->flash('success','Tag created');
        $this->dispatchBrowserEvent('close-modal');
        $this->reset();
    }

    public function editTags($tag_id)
    {
        $tag=Tag::findOrFail($tag_id);

        if($tag)
        {
            $this->tag_id=$tag->id;
        }
        else{
            return redirect()->to('/tags');
        }

    }

    public function render()
    {
        $tags=Tag::orderBy('id','desc')->paginate(10);
        return view('livewire.tags.store',[
            'tags'=>$tags
        ]);
    }
}
