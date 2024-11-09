<div>
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="55gP035Ci1yETPzJe0O7xVhQC3PjC2zv3JIvC0iB">
        <title>Hướng dẫn bỏ phiếu</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <meta property="og:image" content="images/miss-vlu-2023-banner.png">
        <!-- Scripts -->
        <link rel="preload" as="style" href="{{asset('assets/css/app-782d0991.css')}}">
        <link rel="preload" as="style" href="{{asset('assets/css/app-1ffd0f8b.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/app-782d0991.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/app-1ffd0f8b.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>
            .img-stack li {
                width: 30px;
                height: 30px;
                display: grid;
                border-radius: 50%;
                box-shadow: 0px 0px 0px 2px rgba(255, 255, 255, 0.3);
            }
            .img-stack li img {
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img class="img-doan-hoi" src="{{asset('assets/images/logo-doan-hoi-vanlang.png')}}" alt="Van Lang Union Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active miss-text" aria-current="page" href="/">Miss & Mr UD Student Ambassador Contest-2024</a>
                            </li>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Hướng dẫn bỏ phiếu</a>
                            </li>
                            <li class="nav-item">
                                @if(session()->has('user_email'))
                                    <span class="nav-link">{{ session('user_email') }}</span> <!-- Hiển thị email -->
                                @else
                                    <a class="nav-link btn btn-primary text-white" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Đăng nhập</a> <!-- Nút Login nếu chưa đăng nhập -->
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main>
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        </div>
                    </div>
                </div>
                @php
                $purchaseGuide = \App\Models\Setting::first()->purchase_guide ?? 'Không có dữ liệu';
            @endphp

            <div class="container">
                <div class="row mt-4">
                    <h1 style="font-size: 1.5rem; font-weight: 700;">Hướng dẫn bỏ phiếu</h1>
                </div>
                <div class="row mt-2">
                    {!! $purchaseGuide !!}
                </div>
            </div>

            </main>
        </div>
        <div class="container">
            <footer class="py-3 my-4">

                <p class="text-center text-muted">© 2024 - Bản quyền thuộc về Cuộc thi Đại sứ Sinh viên Miss & Mr UD - 2024</p>
            </footer>
        </div>

        <script type="module" src="{{asset('assets/js/app-4b6ab911.js?1565858621')}}"></script>
    </body>
</html>
</div>
