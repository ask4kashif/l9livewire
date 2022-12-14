<?php

namespace App\Http\Livewire\Tags;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search='';
    public $perpage=10;
    public $orderBy='id';
    public $orderAsc=true;

    public function render()
    {

        return view('livewire.tags.index',[
            'tags'=>Tag::search($this->search)
            ->orderBy($this->orderBy,$this->orderAsc ? 'asc' : 'desc')
            ->paginate($this->perpage),
        ]);
    }
}
