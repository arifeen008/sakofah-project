<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ url('picture/sakofag-logo.png') }}" type="image/gif" sizes="18x18">
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
    <style>
        .dropdown-menu li {
            position: relative;
        }

        .dropdown-menu .dropdown-submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .dropdown-menu .dropdown-submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li:hover>.dropdown-submenu {
            display: block;
        }

        .text-limit {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* แสดงไม่เกิน 3 บรรทัด */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <a href="/"><img src="{{ url('picture/logo-web1.jpg') }}" class="img-fluid"></a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #25d321;">
        <div class="container">
            <a class="navbar-brand me-2" href="/">
                <img src="{{ url('picture/sakofag-logo.png') }}" height="25" alt="sakofah" loading="lazy"
                    style="margin-top: -1px;" />
            </a>
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navBarButton"
                aria-controls="navBarButton" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navBarButton">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">หน้าหลัก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init data-mdb-ripple-init data-mdb-display="static"
                            class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            aria-expanded="false">
                            เกี่ยวกับเรา
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/history">ประวัติความเป็นมา</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/vision">วิสัยทัศน์ พันธกิจ วัตถุประสงค์</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/manager">คณะกรรมการและผู้บริหาร</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/office">สำนักงาน</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/structure">โครงสร้างสหกรณ์</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init data-mdb-ripple-init data-mdb-display="static"
                            class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            aria-expanded="false">
                            บริการสหกรณ์
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/register">สมัครสมาชิก</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/deposit">บริการเงินฝาก</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/credit_service">บริการสินเชื่อ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init data-mdb-ripple-init data-mdb-display="static"
                            class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            aria-expanded="false">
                            สวัสดิการสมาชิก
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/marry">สวัสดิการแต่งงาน</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/maternity">สวัสดิการคลอดบุตร</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/oldage">สวัสดิการเงินสมทบยามชรา</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/medical">สวัสดิการช่วยเหลือค่ารักษาพยาบาล</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/dead">สวัสดิการเสียชีวิต</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init data-mdb-ripple-init data-mdb-display="static"
                            class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            role="button" aria-expanded="false">
                            ข่าวสาร
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/activity">ข่าวสาร/กิจกรรมความเคลื่อนไหว</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/calender">ปฏิทินสหกรณ์</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init data-mdb-ripple-init data-mdb-display="static"
                            class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            role="button" aria-expanded="false">
                            บริการสินทรัพย์
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/homeList">บ้านพร้อมที่ดิน/ทาวน์โฮม</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/vacantList">ที่ดินเปล่า</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/condoList">คอนโด</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init data-mdb-ripple-init data-mdb-display="static"
                            class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            role="button" aria-expanded="false">
                            ดาวน์โหลด
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/document">เอกสารสำหรับสมาชิก</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/businessreport">รายงานกิจการ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init data-mdb-ripple-init data-mdb-display="static"
                            class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            role="button" aria-expanded="false">
                            ติดต่อ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">แบบประเมินการให้บริการ</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/withus">ร่วมงานกับเรา</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-mdb-dropdown-init data-mdb-ripple-init data-mdb-display="static"
                            class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            role="button" aria-expanded="false">
                            พาทเนอร์สหกรณ์
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#"><img
                                        src="{{ url('picture/takaful_logo.jpg') }}" height="25"
                                        style="margin-top: -1px;" class="me-2">ทิพยตะกาฟุล &raquo;
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://www.tiptakaful.com/th/insurance">ผลิตภัณฑ์ทิพยตะกาฟุล</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://affinity.tipinsure.com/product/affinity/takaful_branch?branch=TKF_SKF">ซื้อประกันกับทิพยตะกาฟุล</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="text-lg-start p-2" style="background-color: #25d321;">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div></div>
                <a href="/login" type="button" class="btn btn-success btn-rounded" data-mdb-ripple-init><i
                        class="fas fa-key me-3"></i>เข้าสู่ระบบ</a>
            </div>
        </div>
    </footer>
    @yield('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
