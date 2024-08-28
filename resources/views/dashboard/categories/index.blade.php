@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalcreate">
        Create New Category
    </button>
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
                <th scope="col">Category Name</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $categories as $category )

            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td class="text-center">
                    {{-- <a href="/dashboard/categories/edit" class="badge bg-warning"><span
                        data-feather="edit"></span></a> --}}
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')" type="submit"><span data-feather="trash-2"></button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

<!-- The Modal Create -->
<div class="modal fade" id="modalcreate">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Create Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="/dashboard/categories" method="post">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control @error('name')is-invalid @enderror " id="name"
                            placeholder="Enter category name" name="name" required autofocus
                            value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control @error('slug')is-invalid @enderror "
                            style="background-color:#dddddd" id="slug" name="slug" readonly value="{{ old('slug') }}">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <button class="btn btn-danger" data-bs-dismiss="modal" onclick="document.getElementById('name').value = ''; document.getElementById('slug').value = ''">Close</button>
            </div>

        </div>
    </div>
</div>


<script>
    <--Slug-->

    name.addEventListener("keyup", function () {
        let preslug = name.value;
        preslug = preslug.replace(/ /g, "-");
        slug.value = preslug.toLowerCase();
    });

    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    })

    function preview() {
            frame.src=URL.createObjectURL(event.target.files[0]);
        }

    const name = document.querySelector('#name')
    const slug = document.querySelector('#slug')

    name.addEventListener("keyup", function () {
        let preslug = name.value;
        preslug = preslug.replace(/ /g, "-");
        slug.value = preslug.toLowerCase();
    });

    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    })

    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

</script>


@endsection
