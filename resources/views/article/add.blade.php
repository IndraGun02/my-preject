@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="h2">Article</h1>
    <form method="POST" action="{{ route('article_store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input class="form-control" type="text" name="image" required>
        </div>
        <div class="mb-3">
            <label for="excerpt" class="form-label">Excerpt</label>
            <input type="text" class="form-control" id="excerpt" name="excerpt" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" id="body" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
