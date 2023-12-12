<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <button data-mdb-toggle="sidenav" data-mdb-target="#sidenav"
                    class="btn shadow-0 p-0 me-3 d-block d-xxl-none" aria-controls="#sidenav" aria-haspopup="true">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
                <b id="content"
                    class="text-dark d-none d-md-flex w-auto my-auto">{{ 'เจ้าหน้าที่ระดับ' . $level_code }}</b>
                <ul class="navbar-nav ms-auto d-flex flex-row">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <b class="text-dark">{{ $username }}<i class="fas fa-user mx-3" loading="lazy"></i></b>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">โปรไฟล์ของฉัน</a>
                            </li>
                            <li><a class="dropdown-item" href="#">ตั้งค่า</a></li>
                            <li><a class="dropdown-item" href="#">ออกจากระบบ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
