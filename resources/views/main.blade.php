<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#313131" />
    <!-- Site Properties -->
    <title>Homepage - AKMarkets HTML5 Template</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{asset('assets')}}/js/vendors/uikit.min.js" as="script">
    <link rel="preload" href="{{asset('assets')}}/css/vendors/uikit.min.css" as="style">
    <link rel="preload" href="{{asset('assets')}}/css/style.css" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{asset('assets')}}/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('assets')}}/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{asset('assets')}}/fonts/rubik-v9-latin-500.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('assets')}}/fonts/rubik-v9-latin-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('assets')}}/fonts/rubik-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="logo.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/vendors/uikit.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    @include('layouts.header')
    <main>
         {{-- Yield Content --}}
        @yield('content')
        <!-- section content end -->
    </main>

    @include('layouts.footer')
    <!-- Javascript -->
    <script src="{{asset('assets')}}/js/vendors/uikit.min.js"></script>
    <script src="{{asset('assets')}}/js/vendors/indonez.min.js"></script>
    <script src="{{asset('assets')}}/js/config-theme.js"></script>
</body>

</html>