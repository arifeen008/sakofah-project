<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="Islamic Savings Cooperative Sakofah" />
    <meta property="og:description" content="Official website of the Islamic Savings Cooperative Sakofah. Provides information on history, vision, mission, services (savings, loans, welfare benefits), news, and contact details." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sakofahislamic.com/" />
    <meta property="og:image" content="picture/sakofag-logo.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:site_name" content="Sakofah Islamic Cooperative" />
    <meta property="og:locale" content="th_TH" />
    <meta property="og:locale:alternate" content="en_US" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@SakofahCoop" />
    <meta name="twitter:creator" content="@SakofahCoop" />
    <meta name="twitter:title" content="Islamic Savings Cooperative Sakofah" />
    <meta name="twitter:description" content="Official website of the Islamic Savings Cooperative Sakofah. Providing savings, loans, and welfare benefits to members." />
    <meta name="twitter:image" content="picture/sakofag-logo.png" /> ```
    <title>@yield('title', default: 'สหกรณ์ออมทรัพย์อิสลามษะกอฟะฮ') | สหกรณ์ออมทรัพย์อิสลามษะกอฟะฮ</title>
    <link rel="icon" href="{{ url('picture/sakofag-logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('picture/sakofag-logo.png') }}" type="image/gif">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('library')
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y7M3HX122N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-Y7M3HX122N');
    </script>

</head>

<body>
    @include('header')
    @yield('content')
    @include('footer')
    @yield('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
