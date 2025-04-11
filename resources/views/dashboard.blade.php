<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ url('picture/sakofag-logo.png') }}" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('style')    
    <title>@yield('title') | สหกรณ์อิสลามษะกอฟะฮ</title>
</head>

<body class="sidebar-mini" style="height: auto">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-lg navbar-white navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" data-widget="pushmenu" role="button">
                    <i class="fas fa-bars"></i>
                </a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="gap: 8px;">
                            <i class="fas fa-user-circle text-primary"></i>
                            <span class="text-primary fw-bold">{{ session('username') }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#">โปรไฟล์</a></li>
                            <li>
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="dropdown-item">ออกจากระบบ</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                
                
            </div>
        </nav>

        <!-- Sidebar (รวมเมนูด้านข้าง) -->
        @include('sidebar')

        <!-- Content Wrapper -->
        <div class="content-wrapper" style="min-height: 617px; background-color: white">
            <div class="content">
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        <footer class="main-footer mt-2">
            <strong>สหกรณ์อิสลามษะกอฟะฮ จำกัด</strong>
        </footer>
    </div>

    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
</body>

</html>
