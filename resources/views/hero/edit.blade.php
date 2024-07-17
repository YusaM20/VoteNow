@extends('layouts.admin.app')

@section('title', 'Ubah Catatan')

@section('content')
    <form method="POST" action="/hero/update/{{ $hero->id }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" name="hero_role_id" id="hero_role_id">
                @foreach ($heroroles as $value)
                    <option value="{{ $value->id }}">{{ $value->role }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Hero</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $hero->name }}">
        </div>
        <div class="mb-3">
            <label for="specially" class="form-label">Specially</label>
            <input type="text" class="form-control" id="specially" name="specially" value="{{ $hero->specially }}">
        </div>
        <div class="mb-3">
            <label for="lane" class="form-label">Lane</label>
            <input type="text" class="form-control" id="lane" name="lane" value="{{ $hero->lane }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $hero->type }}">
        </div>
        <div class="mb-3">
            <label>Upload File/Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
