@extends('layouts.admin.app')

@section('title', 'List Hero')

@section('content')
    <div class="m-3">
        <a href="/hero/create" class="btn btn-success">Tambah Hero</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Role</th>
                <th>Name</th>
                <th>Specially</th>
                <th>Lane</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($heros as $value)
                <tr>
                    <td>{{ $value->role }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->specially }}</td>
                    <td>{{ $value->lane }}</td>
                    <td>{{ $value->type }}</td>
                    <td>
                        <a href="{{ url('/hero/edit/' . $value->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ url('/hero/delete/' . $value->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
