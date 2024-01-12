<div class="d-flex flex-column align-items-center mt-5">
    <div class="col-lg-4">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <form class="col-lg-4">
        @csrf
        <div class="mb-3">
            <label for="basic-url" class="form-label">Firstname</label>
            <input type="text" wire:model="firstname" placeholder="" class="form-control">
            @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="basic-url" class="form-label">Lastname</label>
            <input type="text" wire:model="lastname" placeholder="" class="form-control">
            @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <input type="file" wire:model="file" class="form-control">
            @error('file') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        @if ($file)
        Photo Preview: <br>
        <img src="{{ $file->temporaryUrl() }}" class="img-fluid mb-3" style="width:300px;"> <br>
        @endif
        <div class="mb-3">
            <input type="radio" name="storage" id="" value="object" class="" wire:model='radio'>
            <label for="" class="form-label">Object Storage (Space Storage)</label>
        </div>
        <button type="submit" class="btn btn-primary" wire:click.prevent='save'>Submit</button>
        <label for="" class="text-secondary ms-5">Cancel</label>
    </form>
</div>
