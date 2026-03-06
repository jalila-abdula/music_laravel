@extends('layouts.app')

@section('content')

<h1>Edit Music</h1>
<form action="{{ route('music.update', $music->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $music->name }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Artist</label>
        <input type="text" name="artist" class="form-control" value="{{ $music->artist }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Genre</label>
        <input type="text" name="genre" class="form-control" value="{{ $music->genre }}" required>
    </div>
    <button type="submit" class="btn btn-outline-dark">Save Music</button>
    <a href="{{ route('music.index') }}" class="btn btn-outline-danger">Cancel</a>
</form>
@endsection
