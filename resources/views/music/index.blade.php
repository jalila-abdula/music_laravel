@extends('layouts.app')

@section('content')
<h1 class="mb-3">Create Music</h1>


<div class="mb-4">
    <a href="{{ route('music.create') }}" class="btn btn-outline-dark">Create Music</a>
</div>

<div class="row row-cols-1 g-4">
    @forelse($musics as $music)
        <div class="col md-4">
            <div class="card shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title mb-1">{{ $music->name }}</h5>
                        <p class="card-text mn-0 text-muted"><strong>Artist:</strong> {{ $music->artist }}</p>
                        <small class="text-uppercase"><strong>Genre:</strong> {{ $music->genre }}</small>
                    </div>
                    <div class="mt-3 text-end">
                        <div class="dropdown">
                            <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('music.edit', $music->id) }}">Edit</a></li>
                                <li>
                                    <form action="{{ route('music.destroy', $music->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" onclick="return confirm('Delete this music?')">Delete</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p>No music added yet.</p>
    @endforelse
</div>
@endsection
