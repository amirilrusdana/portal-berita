@extends('layouts.main')

@section('container')

<div class="container">
    <div class="reservation-form">
        @if (session()-> has('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-top mt-1" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session()-> has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show d-flex align-top mt-1" role="alert">
            {{ session('loginError') }}
            <button type="close" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <form id="reservation-form" method="post" action="/login">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Log<em>in</em> Form</h4>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Name" class="form-label">Email address</label>
                                <input type="email" name="email" class="Name @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Number" class="form-label">Password</label>
                                <input type="password" name="password" class="Number" required>
                                @error('email')
                                <div class="invalid-feedback mt-0 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button class="main-button" type="submit">Login</button>
                            </fieldset>
                        </div>
                        <center> <small class="d-block mt-3">Not registered? <a href="/register"
                                    class="text-decoration-none">Register Now!</a></small></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
