@section('sidebar')
    <aside class="main-sidebar sidebar-light-primary elevation-0">

        <a href="/dashboard" class="brand-link">
            <span class="brand-text font-weight-light">{{ session('username') }}</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ url('picture/sakofag-logo.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ session('username') }}</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active bg-primary">
                            <i class="nav-icon fas fa-book-open-reader"></i>
                            <p>
                                สมาชิก
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/member" class="nav-link active">
                                    <i class="nav-icon fas fa-magnifying-glass"></i>
                                    <p>ค้นหาสมาชิก</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active bg-success">
                            <i class="nav-icon fas fa-credit-card"></i>
                            <p>
                                สินเชื่อ
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/credit" class="nav-link active">
                                    <i class="nav-icon fas fa-magnifying-glass"></i>
                                    <p>ค้นหาสินเชื่อ</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active bg-warning">
                            <i class="nav-icon fas fa-graduation-cap"></i>
                            <p>
                                กฏระเบียบสหกรณ์
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/rules" class="nav-link active">
                                    <i class="nav-icon fas fa-ruler"></i>
                                    <p>ข้อบังคับสหกรณ์</p>
                                </a>
                                <a href="/order" class="nav-link active">
                                    <i class="nav-icon fas fa-ruler"></i>
                                    <p>ระเบียบสหกรณ์</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active bg-danger">
                            <i class="nav-icon fas fa-bullhorn"></i>
                            <p>
                                ประกาศ
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/publish" class="nav-link active">
                                    <i class="nav-icon fas fa-house-chimney"></i>
                                    <p>ประกาศภายใน</p>
                                </a>
                                <a href="/form" class="nav-link active">
                                    <i class="nav-icon fab fa-wpforms"></i>
                                    <p>แบบฟอร์มเจ้าหน้าที่</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/performance" class="nav-link active bg-info">
                            <i class="nav-icon fas fa-hand-holding-heart"></i>
                            <p>
                                ผลการดำเนินงาน
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/uploadcredit" class="nav-link active bg-secondary">
                            <i class="nav-icon fas fa-upload"></i>
                            <p>
                                อัพโหลดสินเชื่อ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://lookerstudio.google.com/reporting/a3c8e557-198a-4a72-94cd-48c392ab7ec6"
                            class="nav-link active bg-light" target="_blank">
                            <i class="nav-icon fas fa-map"></i>
                            <p>
                                ที่อยู่ของสมาชิก
                            </p>
                        </a>
                    </li>
                    @if (session('level_code') == 'E' || session('level_code') == 'P')
                        <h6 class="bg-body-tertiary p-2 border-top border-bottom">ฝ่ายสินเชื่อ</h6>
                        <li class="nav-item">
                            <a href="/credit_consider" class="nav-link active bg-primary">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    ฝ่ายสินเชื่อสาขา
                                </p>
                            </a>
                        </li>
                    @endif
                    @if (session('level_code') == 'CC' || session('level_code') == 'P')
                        <h6 class="bg-body-tertiary p-2 border-top border-bottom">รับเอกสารสินเชื่อ</h6>
                        <li class="nav-item">
                            <a href="/creditconsider" class="nav-link active bg-success">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    รับเอกสารสินเชื่อสาขา
                                </p>
                            </a>
                        </li>
                    @endif
                    @if (session('level_code') == 'CRM' || session('level_code') == 'P')
                        <h6 class="bg-body-tertiary p-2 border-top border-bottom">ฝ่ายวิเคราะห์</h6>
                        <li class="nav-item">
                            <a href="/creditconsider" class="nav-link active bg-warning">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    ฝ่ายวิเคราะห์
                                </p>
                            </a>
                        </li>
                    @endif
                    @if (session('level_code') == 'M' || session('level_code') == 'P')
                        <h6 class="bg-body-tertiary p-2 border-top border-bottom">ผู้จัดการใหญ่</h6>

                        <li class="nav-item">
                            <a href="/creditconsider" class="nav-link active bg-danger">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    ผู้จัดการใหญ่
                                </p>
                            </a>
                        </li>
                    @endif
                    @if (session('level_code') == 'HR')
                        <li class="nav-item">
                            <a href="/upload_publish" class="nav-link active bg-info">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    อัพโหลดประกาศ
                                </p>
                            </a>
                        </li>
                    @endif
                    @if (session('level_code') == 'P')
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active bg-secondary">
                                <i class="nav-icon fas fa-lock"></i>
                                <p>
                                    Admin
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/report" class="nav-link active">
                                        <i class="nav-icon fab fa-redhat"></i>
                                        <p>รายงาน</p>
                                    </a>
                                    <a href="/admin_creditconsider" class="nav-link active">
                                        <i class="nav-icon fab fa-redhat"></i>
                                        <p>พิจารณาสินเชื่อ</p>
                                    </a>
                                    <a href="/admin_credit" class="nav-link active">
                                        <i class="nav-icon fab fa-redhat"></i>
                                        <p>สินเชื่อ</p>
                                    </a>
                                    <a href="/login_history" class="nav-link active">
                                        <i class="nav-icon fab fa-redhat"></i>
                                        <p>ประวัติการล็อกอิน</p>
                                    </a>
                                    <a href="/asset_list" class="nav-link active">
                                        <i class="nav-icon fab fa-redhat"></i>
                                        <p>อัพโหลดสินทรัพย์</p>
                                    </a>
                                    <a href="/news_upload" class="nav-link active">
                                        <i class="nav-icon fab fa-redhat"></i>
                                        <p>อัพโหลดข่าวสาร</p>
                                    </a>
                                    <a href="/add_performance" class="nav-link active">
                                        <i class="nav-icon fab fa-redhat"></i>
                                        <p>อัพโหลดผลการดำเนินงาน</p>
                                    </a>
                                    <a href="/upload_publish" class="nav-link active">
                                        <i class="nav-icon fab fa-redhat"></i>
                                        <p>อัพโหลดประกาศ</p>
                                    </a>
                                    <a href="/edit_publish" class="nav-link active">
                                        <i class="nav-icon fab fa-redhat"></i>
                                        <p>แก้ไขประกาศ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </aside>
@endsection
