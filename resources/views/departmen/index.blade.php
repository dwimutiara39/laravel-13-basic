<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('departmen.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($departmen as $departmen)
            <li class="list-group-item">
                {{ $loop->iteration }}. {{ $departmen->name }}
                <a class="btn btn-warning btn-sm" href="{{ route('departmen.edit', $departmen) }}" role="button">Edit</a>
                <form action="{{ route('departmen.destroy', $departmen) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda Yakin?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app>
