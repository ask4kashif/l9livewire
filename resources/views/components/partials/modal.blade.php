
 @php
 $disabled = $errors->any() || empty($this->name) || empty($this->slug) ?  true :false;
@endphp
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Tag</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent='store' >

                {{-- {{ -- Name -- }} --}}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" wire:model.lazy='name'>
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {{-- {{ -- Slug -- }} --}}

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" wire:model.lazy='slug'>
                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {{-- {{ --Submit Button -- }} --}}

                <button class="btn btn-outline-primary mt-2 shadow" wire:target='store'
                wire:loading.attr='disabled' type="submit" @if ($disabled)
                    disabled
                @endif>Create</button>
                <button type="button" class="btn btn-outline-secondary mt-2 shadow" data-dismiss="modal">Close</button>
            </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

  <div wire:ignore.self class="modal fade" id="updateTagModal" tabindex="-1" role="dialog" aria-labelledby="updateTagModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateTagModalLabel">Update Tag</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent='updateModalTag' >

                {{-- {{ -- Name -- }} --}}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" wire:model.lazy='name'>
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {{-- {{ -- Slug -- }} --}}

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" wire:model.lazy='slug'>
                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {{-- {{ --Submit Button -- }} --}}

                <button class="btn btn-outline-primary mt-2 shadow" wire:target='store'
                wire:loading.attr='disabled' type="submit" @if ($disabled)
                    disabled
                @endif>Create</button>
                <button type="button" class="btn btn-outline-secondary mt-2 shadow" data-dismiss="modal">Close</button>
            </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
