@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
    <a href="/dashboard/posts/create" class="btn btn-secondary"> Create New Post</a>
</div>
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="table-responsive col-lg-12">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col">Title</th>
                <th scope="col" class="text-center">Category</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )

            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td class="text-center">{{ $post->category->name }}</td>
                <td class="text-center">
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span
                            data-feather="eye"></span></a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span
                            data-feather="edit"></span></a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                data-feather="trash-2"></button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection
