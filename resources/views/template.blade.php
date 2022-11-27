<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<header class="container-fluid bg-info text-light justify-content-center text-center">
    <h1 class="p-4">Giant Book Supplier</h1>
</header>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardropdown" aria-controls="navbardropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbardropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                        Category
                    </a>
                    <ul class="dropdown-menu text-dark">
                        <li>
                            <a href="/category/1" class="dropdown-item">Action</a>
                        </li>
                        <li>
                            <a href="/category/2" class="dropdown-item">Horror</a>
                        </li>
                        <li>
                            <a href="/category/3" class="dropdown-item">Romance</a>
                        </li>
                        <li>
                            <a href="/category/4" class="dropdown-item">Non-Fiction</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/publisher">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/contactus">Contact</a>
                </li>
            </ul>
        </div>

    </div>

</nav>
<body>
    <div class="container">
        <div class="row bg-secondary mb-1">
        <div class="text-light">
            <h3 class="align-items-center"> @yield('containertitle') </h3>
        </div>
    </div>
    @yield('content')
    </div>
</body>

<footer class="container-fluid bg-info text-light justify-content-center text-center">
    <p class="m-0 p-3">@ Happy Book Store 2022</p>
</footer>
</html>
