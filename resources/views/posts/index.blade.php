@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts</h1>

        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ Str::limit($post->description, 50) }}</td>
                        <td>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Image" width="100">
                            @else
                                No image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
