@section('sidebar')
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <a href="/member" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <i class="fas fa-building fa-5x me-3"></i>
            <span class="fs-4">เจ้าหน้าที่</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/member" class="nav-link" aria-current="page">
                    <i class="fas fa-fingerprint me-3"></i>
                    ค้นหาสมาชิก
                </a>
            </li>
            <li>
                <a href="/credit" class="nav-link link-dark">
                    <i class="fas fa-credit-card me-3"></i>
                    สินเชื่อ
                </a>
            </li>
            <li>
                <a href="/publish" class="nav-link link-dark">
                    <i class="fas fa-bullhorn me-3"></i>
                    ประกาศภายใน
                </a>
            </li>
            <li>
                <a href="/rules" class="nav-link link-dark">
                    <i class="fab fa-leanpub me-3"></i>
                    ข้อบังคับสหกรณ์
                </a>
            </li>
            <li>
                <a href="/order" class="nav-link link-dark">
                    <i class="fas fa-book-open-reader me-3"></i></i>
                    ระเบียบเจ้าหน้าที่
                </a>
            </li>
            <li>
                <a href="/form" class="nav-link link-dark">
                    <i class="far fa-clipboard me-3"></i>
                    แบบฟอร์มเจ้าหน้าที่
                </a>
            </li>
            <li>
                <a href="/performance" class="nav-link link-dark">
                    <i class="fas fa-network-wired me-3"></i>
                    ผลการดำเนินงาน
                </a>
            </li>
            <li>
                <a href="/uploadcredit" class="nav-link link-dark">
                    <i class="fas fa-square-poll-horizontal me-3"></i>
                    อัพโหลดสินเชื่อ
                </a>
            </li>
            @if (session('level_code') == 'E' || session('level_code') == 'P')
                <li>
                    <a href="/credit_consider" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        ฝ่ายสินเชื่อสาขา
                    </a>
                </li>
            @endif
            @if (session('level_code') == 'CC' || session('level_code') == 'P')
                <li>
                    <a href="/creditconsider" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        รับเอกสารสินเชื่อสาขา
                    </a>
                </li>
            @endif
            @if (session('level_code') == 'CRM' || session('level_code') == 'P')
                <li>
                    <a href="/creditconsider" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        ฝ่ายวิเคราะห์
                    </a>
                </li>
            @endif
            @if (session('level_code') == 'M' || session('level_code') == 'P')
                <li>
                    <a href="/creditconsider" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        ผู้จัดการใหญ่
                    </a>
                </li>
            @endif
            <li>
                <a href="/report_creditconsider" class="nav-link link-dark">
                    <i class="fas fa-credit-card me-3"></i>
                    รายงานผลการติดตามสินเชื่อ
                </a>
            </li>
            @if (session('level_code') == 'P')
                <span class="text-center fs-4">ADMIN</span>
                <li>
                    <a href="/admin_creditconsider" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        พิจารณาสินเชื่อ
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        สินเชื่อ
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        ประวัติการล็อกอิน
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        อัพโหลดสินทรัพย์
                    </a>
                </li>
                <li>
                    <a href="/news_upload" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        อัพโหลดข่าวสาร
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        อัพโหลดผลการดำเนินงาน
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        อัพโหลดประกาศ
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fas fa-credit-card me-3"></i>
                        แก้ไขประกาศ
                    </a>
                </li>
            @endif
        </ul>
        <hr>
    </div>
@endsection
