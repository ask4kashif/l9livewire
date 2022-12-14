<div>
    <div class="container bg-light">
        <div class="row">
            <h4 class="text-center">Contact Form</h4>
            <div class="col-md-12">
                <form wire:submit.prevent='contactFormSubmit'>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" wire:model='name'>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" wire:model='email'>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Message</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control" wire:model='body'></textarea>
                        @error('body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-outline-primary mt-2 px-5 shadow">
                        <div wire:target='contactFormSubmit' wire:loading class="mr-2">
                            <span>Sending...</span>
                        </div>

                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
