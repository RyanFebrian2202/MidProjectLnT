<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/viewBooks.css')}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body class="body">
    {{-- NAVBAR --}}
    <nav class="navbar sticky-top navbar-expand-lg navbar-light shadow-sm p-3 mb-5 bg-body rounded">
        <div class="container">
            <a class="nav-link" style="color: black; font-size: 20px" href="{{route('getHomePage')}}"><b>Perpustakaan
                    Digital</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('getHomePage')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('getBooksPage')}}">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('getManagePage')}}">Manage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('getContactPage')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    <footer>
        <br>
        <br>
        <div class="footer text-center p-3 bg-light">
            &copy; 2021 - Ryan Febrian | All Right Reserved
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
