<div class="container">
    @if (session()->has('message'))
    <div class="alert alert-success mt-5">
        {{ session('message') }}
    </div>
    @endif
    <button class="btn btn-primary mt-3 mb-5" wire:navigate href='/'>Back</button>
    <table class="table">
        <div class="tr">
            <th>No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>File</th>
            <th>Action</th>
        </div>
        @foreach ($components as $component )
            <tr>
                <td>{{ $component->id }}</td>
                <td>{{ $component->firstname }}</td>
                <td>{{ $component->lastname }}</td>
                <td>{{ $component->file }}</td>
                <td><a href="{{ url('https://quiz4bucket.sgp1.cdn.digitaloceanspaces.com/quiz4/'.$component->file) }}"class="btn btn-primary">View</a></td>
                <td><button class="btn btn-danger" wire:click="delete({{ $component->id }})" >Delete</a></td>
            </tr>
        @endforeach
    </table>
</div>