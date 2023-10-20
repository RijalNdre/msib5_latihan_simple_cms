<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andreas.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <style class="">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        button {
            background-color: #FBD85D;
            border: none;
            border-radius: 30px;
            width: 200px;
            height: 45px;
            transition: .3s;
        }

        button:hover {
            background-color: #3b82f6;
            box-shadow: 0 0 0 5px #3b83f65f;
            color: #fff;
        }

        .card {
            max-width: 1000px;
            padding: 1rem;
            margin-top: 30px;
            margin-bottom: 50px
        }

    </style>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white mb-5 mt-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Andreas.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Selamat datang, {{auth()->user()->name}}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('dashboard-page')}}">Upload berita</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="{{route('logout-destroy')}}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('login-page') }}">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <section class="greetings-section" id="greetings">
        <div data-aos="fade-up" data-aos-duration="1000">
            <div class="container" style="margin-top: 100px; margin-bottom:100px;">
                <center>
                    <h1 class="greetings greetings-title fw-bold">Selamat Datang di Portal Berita Harian Andreas.</h1>
                </center>
            </div>
        </div>
    </section>

    <section>
        <div data-aos="fade-up" data-aos-duration="1000">
            @foreach ($beritas as $berita)    
            <div class="card mx-auto">
                <div class="card-header">
                  Berita harian
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$berita->judul}}</h5>
                  <p class="card-text">{{$berita->isi}}</p>
                  <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- <section class="hobby hobby-section" id="hobby">
        <div data-aos="fade-up" data-aos-duration="1000">
        </div>
    </section> --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
