@section('sidebar')
    <ul class="list-group list-group-light">
        <a href="/member" class="list-group-item list-group-item-action"><i class="fas fa-fingerprint ms-1 me-3"></i>ค้นหาสมาชิก</a>
        <a href="/credit" class="list-group-item list-group-item-action"><i class="fas fa-credit-card ms-1 me-3"></i>สินเชื่อ</a>
        <a href="/publish" class="list-group-item list-group-item-action"><i class="fas fa-bullhorn ms-1 me-3"></i>ประกาศภายใน</a>
        <a href="/rules" class="list-group-item list-group-item-action"><i class="fab fa-leanpub ms-1 me-3"></i>ข้อบังคับสหกรณ์</a>
        <a href="/order" class="list-group-item list-group-item-action"><i class="fas fa-book-open-reader ms-1 me-3"></i></i>ระเบียบสหกรณ์</a>
        <a href="/form" class="list-group-item list-group-item-action"><i class="far fa-clipboard ms-1 me-3"></i>แบบฟอร์มเจ้าหน้าที่</a>
        <a href="/performance" class="list-group-item list-group-item-action"><i class="fas fa-network-wired ms-1 me-3"></i>ผลการดำเนินงาน</a>
        <a href="/uploadcredit" class="list-group-item list-group-item-action"><i class="fas fa-square-poll-horizontal ms-1 me-3"></i>อัพโหลดสินเชื่อ</a>
        @if (session('level_code') == 'E' || session('level_code') == 'P')
            <a href="/credit_consider" class="list-group-item list-group-item-action"><i class="fab fa-airbnb ms-1 me-3"></i>ฝ่ายสินเชื่อสาขา</a>
        @endif
        @if (session('level_code') == 'CC' || session('level_code') == 'P')
            <a href="/creditconsider" class="list-group-item list-group-item-action"><i class="fas fa-anchor ms-1 me-3"></i>รับเอกสารสินเชื่อสาขา</a>
        @endif
        @if (session('level_code') == 'CRM' || session('level_code') == 'P')
            <a href="/creditconsider" class="list-group-item list-group-item-action"> <i class="fas fa-at ms-1 me-3"></i>ฝ่ายวิเคราะห์</a>
        @endif
        @if (session('level_code') == 'M' || session('level_code') == 'P')
            <a href="/creditconsider" class="list-group-item list-group-item-action"> <i class="fas fa-arrows-rotate ms-1 me-3"></i>ผู้จัดการใหญ่</a>
        @endif
        <a href="/report_creditconsider" class="list-group-item list-group-item-action"><i class="fas fa-atom ms-1 me-3"></i>รายงานผลการติดตามสินเชื่อ</a>
        @if (session('level_code') == 'P')
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
@endsection
