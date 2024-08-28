@extends('layouts.main')

@section('container')

<div class="reservation-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="reservation-form" method="post" action="/register">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Sign<em>up</em> Form</h4>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" name="name" class="Name @error('name') is-invalid @enderror"
                                    id="name" placeholder="Ex. Amiril Rusdana" required autofocus
                                    value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback mt-0 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Number" class="form-label">Username</label>
                                <input type="text" name="username" class="Name @error('username') is-invalid @enderror"
                                    placeholder="Ex. amirilrusdana" id="username" required>
                                @error('username')
                                <div class="invalid-feedback mt-0 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Number" class="form-label">Email Address</label>
                                <input type="email" name="email" class="Name @error('email') is-invalid @enderror"
                                    id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback mt-0 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Number" class="form-label">Password</label>
                                <input type="password" name="password" class="Name @error('email') is-invalid @enderror"
                                    id="password" required>
                                @error('password')
                                <div class="invalid-feedback mt-0 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button class="main-button" type="submit">Register</button>
                            </fieldset>
                        </div>
                        <center> <small class="d-block mt-3">Already have an account? <a href="/login"
                                    class="text-decoration-none">Log in</a></small></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


{{--
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="registration.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-registration">
        <form action="/register" method="post">
            @csrf
            <img class="mb-4" src="bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') is-invalid
                @enderror" id="name" placeholder="name" name="name" required value="{{ old('name') }}">
<label for="floatingInput">Name</label>
@error('name')
<div class="invalid-feedback mt-0 mb-1">
    {{ $message }}
</div>
@enderror
</div>
<div class="form-floating">
    <input type="text" class="form-control @error('username') is-invalid
                @enderror" id="username" placeholder="username" name="username" required value="{{ old('username') }}">
    <label for="floatingInput">Username</label>
    @error('username')
    <div class="invalid-feedback mt-0 mb-1">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-floating">
    <input type="email" class="form-control @error('email') is-invalid
                @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
    <label for="floatingInput">Email address</label>
    @error('email')
    <div class="invalid-feedback mt-0 mb-1">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-floating">
    <input type="password" class="form-control rounded-bottom @error('password') is-invalid
                @enderror" id="password" placeholder="Password" name="password" required>
    <label for="floatingPassword">Password</label>
    @error('password')
    <div class="invalid-feedback mt-0 mb-1">
        {{ $message }}
    </div>
    @enderror
</div>
<button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
</form>
<small class="d-block mt-2">Already have an account? <a href="/login" class="text-decoration-none">Log
        in</a></small>
</main>



</body>

</html> --}}
