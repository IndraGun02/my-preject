@extends('layouts.app')

@section('css')
<style>
    img {
        max-width: 200px;
        max-height: 200px;
        min-width: 200px;
        min-height: 200px;
    }

</style>
@endsection

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-sm-10">
            <h1 class="h2">Article</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('article_add') }}" class="btn btn-primary" style="float: right">Add Article</a>
        </div>
    </div>
    <table class="table table-striped table-responsive table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Excerpt</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($article as $dt)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>
                    <img src="{{ $dt->image_url }}" width="200px" height="200px">
                </td>
                <td>{{ $dt->title }}</td>
                <td>{{ $dt->excerpt }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('article_edit', ['id'=>$dt->id]) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('article_destroy', ['id'=>$dt->id]) }}" class="btn btn-danger">delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
