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

</body>

</html>
