
<div>
    <x-slot name="title">
        {{ __('Tag Store') }}
    </x-slot>
    <x-partials.modal>

    </x-partials.modal>
    <h4 class="text-center mt-4 display-5">Create form</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Create Tag
                </button>
            </div>


        </div>
        <div class="card">
            <div class="card-title">

            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach($tags as $tag)
                    <tbody>
                        <tr>
                            <td>{{$tag->name}}</td>
                            <td>{{$tag->slug}}</td>
                            <td><button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#updateTagModal" wire:click="editTags({{$tag->id}})">Edit</button> | <button class="btn btn-outline-danger">Delete</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $tags->links() }}
    </div>
@push('js')
<script>
    window.addEventListener('close-modal', event => {
        $('#exampleModal').modal('hide');
    })
    </script>

@endpush
</div>
