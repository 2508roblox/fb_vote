<div>
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="55gP035Ci1yETPzJe0O7xVhQC3PjC2zv3JIvC0iB">
        <title>Cuộc thi Đại sứ Sinh viên Miss & Mr UD - 2024</title>
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
                                <a class="nav-link" href="{{ route('voting-guide') }}">Hướng dẫn bỏ phiếu</a>
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
                            <img src="{{asset('assets/images/bg.png')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-4">
                        <h1 style="font-size: 1.5rem; font-weight: 700;">Danh sách thí sinh</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mt-4" id="contestant-1">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/1.jpg') }}" alt="Đoàn Nguyễn Phương Anh">
                                <div class="card-body">
                                    <h4>Đoàn Nguyễn Phương Anh</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 105
                                        <br>
                                        <b>Khoa thi:</b> Quan hệ công chúng - Truyền thông
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/3.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/16.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/5.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/21.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/5.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/6.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">30+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 181</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-2">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/2.jpg') }}" alt="Thái Hồng Anh">
                                <div class="card-body">
                                    <h4>Thái Hồng Anh</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 126
                                        <br>
                                        <b>Khoa thi:</b> Luật
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/3.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/13.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/18.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/22.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/9.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/23.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">48+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 149</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/3.jpg') }}" alt="Hồ Trương Ngọc Ánh">
                                <div class="card-body">
                                    <h4>Hồ Trương Ngọc Ánh</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 146
                                        <br>
                                        <b>Khoa thi:</b> Quan hệ công chúng - Truyền thông
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/1.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/24.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/23.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/21.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/23.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/3.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">28+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 125</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/4.jpg') }}" alt="Nguyễn Nhật Hoàng Cẩm">
                                <div class="card-body">
                                    <h4>Nguyễn Nhật Hoàng Cẩm</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 106
                                        <br>
                                        <b>Khoa thi:</b> Commerce
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/7.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/4.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/17.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/13.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/3.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/1.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">48+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 49</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-5">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/5.jpg') }}" alt="Nguyễn Minh Hồng Cẩm">
                                <div class="card-body">
                                    <h4>Nguyễn Minh Hồng Cẩm</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 157
                                        <br>
                                        <b>Khoa thi:</b> Nghệ thuật, Sân khấu và Điện ảnh
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/17.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/6.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/8.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/3.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/14.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/24.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">28+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 25</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-6">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/6.jpg') }}" alt="Nguyễn Võ Kim Chi">
                                <div class="card-body">
                                    <h4>Nguyễn Võ Kim Chi</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 155
                                        <br>
                                        <b>Khoa thi:</b> Ngoại ngữ
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/20.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/16.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/21.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/13.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/2.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/22.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">28+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 49</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-7">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/7.jpg') }}" alt="Nguyễn Thị Thúy Dung">
                                <div class="card-body">
                                    <h4>Nguyễn Thị Thúy Dung</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 109
                                        <br>
                                        <b>Khoa thi:</b> Tài chính - Ngân hàng
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/24.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/14.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/24.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/11.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/10.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/7.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">48+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 151</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-8">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/8.jpg') }}" alt="Phùng Lê Thanh Hà">
                                <div class="card-body">
                                    <h4>Phùng Lê Thanh Hà</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 112
                                        <br>
                                        <b>Khoa thi:</b> Ngoại ngữ
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/6.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/19.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/5.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/11.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/20.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/19.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">40+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 119</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-9">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/9.jpg') }}" alt="Võ Thị Hằng">
                                <div class="card-body">
                                    <h4>Võ Thị Hằng</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 124
                                        <br>
                                        <b>Khoa thi:</b>  Quan hệ công chúng - Truyền thông
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/5.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/1.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/20.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/13.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/21.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/7.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">33+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 106</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-11">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/11.jpg') }}" alt="Lường Thị Vĩnh Linh">
                                <div class="card-body">
                                    <h4>Lường Thị Vĩnh Linh</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 113
                                        <br>
                                        <b>Khoa thi:</b> Thương mại
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/24.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/4.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/22.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/15.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/9.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/17.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">14+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 78</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-12">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/12.jpg') }}" alt="Trần Hoàng Phương Linh">
                                <div class="card-body">
                                    <h4>Trần Hoàng Phương Linh</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 120
                                        <br>
                                        <b>Khoa thi:</b> Quan hệ công chúng - Truyền thông
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/23.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/3.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/21.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/13.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/12.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/16.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">28+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 43</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-13">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/13.jpg') }}" alt="Nguyễn Thanh Khánh Linh">
                                <div class="card-body">
                                    <h4>Nguyễn Thanh Khánh Linh</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 171
                                        <br>
                                        <b>Khoa thi:</b> Quan hệ công chúng - Truyền thông
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/19.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/16.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/22.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/18.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/24.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/5.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">19+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 72</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-14">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/14.jpg') }}" alt="Lê Thị Kim Ngân">
                                <div class="card-body">
                                    <h4>Lê Thị Kim Ngân</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 127
                                        <br>
                                        <b>Khoa thi:</b> Quan hệ công chúng - Truyền thông
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/22.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/15.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/14.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/3.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/22.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/3.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">17+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 36</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-15">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/15.jpg') }}" alt="Huỳnh Bảo Ngọc">
                                <div class="card-body">
                                    <h4>Huỳnh Bảo Ngọc</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 110
                                        <br>
                                        <b>Khoa thi:</b> Finance - Banking
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/16.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/5.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/23.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/14.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/21.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/9.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">35+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 28</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-16">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/16.jpg') }}" alt="Nguyễn Thị Hồng Nhung">
                                <div class="card-body">
                                    <h4>Nguyễn Thị Hồng Nhung</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 160
                                        <br>
                                        <b>Khoa thi:</b> Nghệ thuật ứng dụng
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/1.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/22.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/19.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/7.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/15.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/16.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">34+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 24</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-17">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/17.jpg') }}" alt="Đặng Trần Thanh Tâm">
                                <div class="card-body">
                                    <h4>Đặng Trần Thanh Tâm</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 156
                                        <br>
                                        <b>Khoa thi:</b> Quan hệ công chúng - Truyền thông
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/10.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/11.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/19.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/10.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/23.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/5.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">15+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 131</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-18">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/18.jpg') }}" alt="Nguyễn Hoàng Thu Thảo">
                                <div class="card-body">
                                    <h4>Nguyễn Hoàng Thu Thảo</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 154
                                        <br>
                                        <b>Khoa thi:</b> Tourism
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/15.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/23.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/3.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/17.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/21.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/19.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">21+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 38</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4" id="contestant-19">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/images/person/19.jpg') }}" alt="Mai Trương Bảo Trân">
                                <div class="card-body">
                                    <h4>Mai Trương Bảo Trân</h4>
                                    <p class="card-text">
                                        <b>Mã dự thi:</b> 104
                                        <br>
                                        <b>Khoa thi:</b> Fine Arts and Design
                                    </p>
                                    <ul class="img-stack d-flex">
                                            <li><img src="https://miss.votingforstudents.com/images/user/16.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/19.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/5.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/20.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/9.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li><img src="https://miss.votingforstudents.com/images/user/2.jpg" alt="member-img" style="border-radius: 100%;">
                                            </li>
                                            <li class="bg-theme">43+</li>
                                        </ul>
                                </div>
                                <div class="text-center">
                                    <p><b>Tổng số bình chọn: 33</b></p>
                                    <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#loginModal">Bình chọn ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="container">
            <footer class="py-3 my-4">

                <p class="text-center text-muted">© 2024 - Bản quyền thuộc về Cuộc thi Đại sứ Sinh viên Miss & Mr UD - 2024</p>
            </footer>
        </div>
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p>Vui lòng đăng nhập bằng tài khoản Facebook của bạn để Bình chọn ngay cho thí sinh!</p>
                        <a href="/login">
                            <img src="{{asset('assets/images/2021_Facebook_icon.svg.webp')}}" style="width: 85px;" alt="logo">
                        </a>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <a type="button" class="btn btn-success" href="/login">Continue</a>
                    </div>
                </div>
            </div>
        </div>
        <script type="module" src="{{asset('assets/js/app-4b6ab911.js?1565858621')}}"></script>
    </body>
</html>
</div>
