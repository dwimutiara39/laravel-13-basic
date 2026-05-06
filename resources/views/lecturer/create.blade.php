<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    <form method="POST" action="{{ route('lecturer.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="teks" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="departmen_id" class="form-label">Departmen</label>
            <select class="form-select" @error('departmen_id') is-invalid @enderror id="departmen_id"
                name="departmen_id">
                <option value="">Choose Departmen</option>
                @foreach ($departmens as $departmen)
                    <option value="{{ $departmen->id }}" @selected(old('departmen_id') == $departmen->id)>
                        {{ $departmen->name }}
                    </option>
                @endforeach
            </select>

            @error('departmen_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <a class="btn btn-warning" href="{{ route('lecturer.index') }}" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
