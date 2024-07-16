@extends('layouts.admin.app')

@section('title', 'Ubah Catatan')

@section('content')
    <form method="POST" action="/hero/update/{{ $hero->id }}">
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {{-- @csrf
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" name="todo_category_id" id="todo_category_id">
                @foreach ($todocategories as $value)
                    <option value="{{ $value->id }}">{{ $value->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $todo->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $todo->description }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}
@endsection
