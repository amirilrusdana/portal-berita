@extends('dashboard.layouts.main')

@section('container')

<form action="{{ route('categories.update', $category->slug) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Form fields -->
    <button type="submit" class="btn btn-primary">Update</button>
</form>


{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Category</h1>
</div>

<form action="{{ route('categories.update', $category->slug) }}" method="post" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name')is-invalid @enderror " id="name" name="name" required
            autofocus value="{{ old('name', $category->name) }}">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug')is-invalid @enderror " style="background-color:#dddddd"
            id="slug" name="slug" readonly value="{{ old('name', $category->slug) }}">
        @error('slug')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
</form>
<a href="/dashboard/categories" class="btn btn-secondary">Back</a> --}}
<script>
    const name = document.querySelector("#name");
    const slug = document.querySelector("#slug");

    name.addEventListener("keyup", function () {
        let preslug = name.value;
        preslug = preslug.replace(/ /g, "-");
        slug.value = preslug.toLowerCase();
    });

    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    })

</script>

@endsection
