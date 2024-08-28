<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Web {{ $tittle }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



    <!-- Bootstrap core CSS -->
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
    <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">Cover</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="/about">About</a>
                    <a class="nav-link" href="/posting">Posts</a>
                    <a class="nav-link" href="/categories">Category</a>
                </nav>
            </div>
        </header>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <main class="px-3">
            @foreach ($posting as $post)
            <h1>{{ $post["title"] }}</h1>
            <p class="lead">{{ $post["isi"] }}</p>
            <a href="" class="btn btn-lg btn-secondary fw-bold border-white bg-white">{{ $post['button'] }}</a>
            @endforeach
        </main>


        <footer class="mt-auto text-white-50">
            <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a
                    href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
        </footer>
    </div>

</body>

</html>
