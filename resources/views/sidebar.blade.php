{{-- @section('sidebar')
    <ul class="list-group list-group-light">
        <a href="/member" class="list-group-item list-group-item-action"><i class="fas fa-fingerprint ms-1 me-3"></i>ค้นหาสมาชิก</a>
        <a href="/credit" class="list-group-item list-group-item-action"><i class="fas fa-credit-card ms-1 me-3"></i>สินเชื่อ</a>
        <a href="/publish" class="list-group-item list-group-item-action"><i class="fas fa-bullhorn ms-1 me-3"></i>ประกาศภายใน</a>
        <a href="/rules" class="list-group-item list-group-item-action"><i class="fab fa-leanpub ms-1 me-3"></i>ข้อบังคับสหกรณ์</a>
        <a href="/order" class="list-group-item list-group-item-action"><i class="fas fa-book-open-reader ms-1 me-3"></i></i>ระเบียบสหกรณ์</a>
        <a href="/form" class="list-group-item list-group-item-action"><i class="far fa-clipboard ms-1 me-3"></i>แบบฟอร์มเจ้าหน้าที่</a>
        <a href="/performance" class="list-group-item list-group-item-action"><i class="fas fa-network-wired ms-1 me-3"></i>ผลการดำเนินงาน</a>
        <a href="/uploadcredit" class="list-group-item list-group-item-action"><i class="fas fa-square-poll-horizontal ms-1 me-3"></i>อัพโหลดสินเชื่อ</a>
        <a href="/report_creditconsider" class="list-group-item list-group-item-action"><i class="fas fa-atom ms-1 me-3"></i>รายงานผลการติดตามสินเชื่อ</a>
        @if (session('level_code') == 'E' || session('level_code') == 'P')
        <h6 class="bg-body-tertiary p-2 border-top border-bottom">ฝ่ายสินเชื่อ</h6>
            <a href="/credit_consider" class="list-group-item list-group-item-action"><i class="fab fa-airbnb ms-1 me-3"></i>ฝ่ายสินเชื่อสาขา</a>
        @endif
        @if (session('level_code') == 'CC' || session('level_code') == 'P')
        <h6 class="bg-body-tertiary p-2 border-top border-bottom">รับเอกสารสินเชื่อ</h6>
            <a href="/creditconsider" class="list-group-item list-group-item-action"><i class="fas fa-anchor ms-1 me-3"></i>รับเอกสารสินเชื่อสาขา</a>
        @endif
        @if (session('level_code') == 'CRM' || session('level_code') == 'P')
        <h6 class="bg-body-tertiary p-2 border-top border-bottom">ฝ่ายวิเคราะห์</h6>
            <a href="/creditconsider" class="list-group-item list-group-item-action"> <i class="fas fa-at ms-1 me-3"></i>ฝ่ายวิเคราะห์</a>
        @endif
        @if (session('level_code') == 'M' || session('level_code') == 'P')
        <h6 class="bg-body-tertiary p-2 border-top border-bottom">ผู้จัดการใหญ่</h6>
            <a href="/creditconsider" class="list-group-item list-group-item-action"> <i class="fas fa-arrows-rotate ms-1 me-3"></i>ผู้จัดการใหญ่</a>
        @endif
        @if (session('level_code') == 'HR')
        <h6 class="bg-body-tertiary p-2 border-top border-bottom">Human Resource</h6>
            <a href="upload_publish/" class="list-group-item list-group-item-action"><i class="fas fa-calendar-minus ms-1 me-3"></i>อัพโหลดประกาศ</a>
        @endif
        @if (session('level_code') == 'P')
        <h6 class="bg-body-tertiary p-2 border-top border-bottom">Admin</h6>
            <a href="/report" class="list-group-item list-group-item-action"><i class="fab fa-bandcamp ms-1 me-3"></i>รายงาน</a>
            <a href="/admin_creditconsider" class="list-group-item list-group-item-action"><i class="fas fa-baby ms-1 me-3"></i>พิจารณาสินเชื่อ</a>
            <a href="/admin_credit" class="list-group-item list-group-item-action"><i class="fas fa-bars-progress ms-1 me-3"></i>สินเชื่อ</a>
            <a href="/login_history" class="list-group-item list-group-item-action"><i class="fab fa-battle-net ms-1 me-3"></i>ประวัติการล็อกอิน</a>
            <a href="/asset_list" class="list-group-item list-group-item-action"><i class="fas fa-bicycle ms-1 me-3"></i>อัพโหลดสินทรัพย์</a>
            <a href="/news_upload" class="list-group-item list-group-item-action"><i class="fas fa-box ms-1 me-3"></i>อัพโหลดข่าวสาร</a>
            <a href="/add_performance" class="list-group-item list-group-item-action"><i class="fab fa-buromobelexperte ms-1 me-3"></i>อัพโหลดผลการดำเนินงาน</a>
            <a href="upload_publish/" class="list-group-item list-group-item-action"><i class="fas fa-calendar-minus ms-1 me-3"></i>อัพโหลดประกาศ</a>
            <a href="/edit_publish" class="list-group-item list-group-item-action"><i class="fas fa-cake-candles ms-1 me-3"></i>แก้ไขประกาศ</a>
        @endif
    </ul>
@endsection --}}

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
                        <a href="#" class="nav-link active">
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
                        <a href="#" class="nav-link active">
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
                        <a href="#" class="nav-link active">
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
                        <a href="#" class="nav-link active">
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
                        <a href="/performance" class="nav-link active">
                            <i class="nav-icon fas fa-hand-holding-heart"></i>
                            <p>
                                ผลการดำเนินงาน
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/uploadcredit" class="nav-link active">
                            <i class="nav-icon fas fa-upload"></i>
                            <p>
                                อัพโหลดสินเชื่อ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://lookerstudio.google.com/reporting/a3c8e557-198a-4a72-94cd-48c392ab7ec6" class="nav-link active" target="_blank">
                            <i class="nav-icon fas fa-map"></i>
                            <p>
                                ที่อยู่ของสมาชิก
                            </p>
                        </a>
                    </li>
                    @if (session('level_code') == 'E' || session('level_code') == 'P')
                        <h6 class="bg-body-tertiary p-2 border-top border-bottom">ฝ่ายสินเชื่อ</h6>
                        <li class="nav-item">
                            <a href="/credit_consider" class="nav-link active">
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
                            <a href="/creditconsider" class="nav-link active">
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
                            <a href="/creditconsider" class="nav-link active">
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
                            <a href="/creditconsider" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    ผู้จัดการใหญ่
                                </p>
                            </a>
                        </li>
                    @endif
                    @if (session('level_code') == 'HR')
                        <li class="nav-item">
                            <a href="/upload_publish" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    อัพโหลดประกาศ
                                </p>
                            </a>
                        </li>
                    @endif
                    @if (session('level_code') == 'P')
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
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
