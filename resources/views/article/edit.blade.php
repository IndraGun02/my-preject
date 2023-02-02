@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="h2">Article</h1>
    <form method="POST" action="{{ route('article_update') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $article->id }}">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input class="form-control" type="text" name="image" value="{{ $article->image_url }}" required>
        </div>
        <div class="mb-3">
            <label for="excerpt" class="form-label">Excerpt</label>
            <input type="text" class="form-control" id="excerpt" name="excerpt" value="{{ $article->excerpt }}"
                required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" id="body" class="form-control" rows="5" required>{{ $article->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
</div>
@endsection
