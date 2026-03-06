@extends('layouts.app')

@section('content')

<h1>Create Music</h1>
<form action="{{ route('music.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Artist</label>
        <input type="text" name="artist" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Genre</label>
        <input type="text" name="genre" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-outline-dark">Add Music</button>
    <a href="{{ route('music.index') }}" class="btn btn-outline-danger">Cancel</a>
</form>
@endsection
