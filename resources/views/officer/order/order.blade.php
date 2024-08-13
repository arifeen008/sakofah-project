@extends('dashboard')
@extends('sidebar')
@section('title', 'ข้อบังคับสหกรณ์')
@section('content')
    <div class="card m-3">
        <div class="card-header">
            <h3 class="card-title">ระเบียบสหกรณ์ปี 2565</h3>
        </div>
        <div class="card-body" style="color:black">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยกองทุนให้ยืมเพื่อการศึกษา.pdf') }}" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยกองทุนให้ยืมเพื่อการศึกษา
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยการจ่ายและเก็บรักษาเงินสด.pdf') }}" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยการจ่ายและเก็บรักษาเงินสด
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยการใช้ทุนสาธารณประโยชน์.pdf') }}" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยการใช้ทุนสาธารณประโยชน์
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยการให้เงินกู้ยืมเพื่อศึกษาต่อสำหรับเจ้าหน้าที่สหกรณ์.pdf') }}" target="_blank">
                        <div class="d-flex justify-content-between">

                            ว่าด้วยการให้เงินกู้ยืมเพื่อศึกษาต่อสำหรับเจ้าหน้าที่สหกรณ์
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยคณะอนุกรรมการ.pdf') }}" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยคณะอนุกรรมการ
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยค่าเบี้ยเลี้ยง-ค่าพาหนะ-ค่าเดินทาง.pdf') }}" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยค่าเบี้ยเลี้ยง-ค่าพาหนะ-ค่าเดินทาง
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยเงินยืมทดลองจ่าย.pdf') }}" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยเงินยืมทดลองจ่าย
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยเจ้าหน้าที่และข้อบังคับเกี่ยวกับการทำงาน.pdf') }}" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยเจ้าหน้าที่และข้อบังคับเกี่ยวกับการทำงาน
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยเจ้าหน้าที่และลูกจ้างสหกรณ์.pdf') }}" target="_blank" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยเจ้าหน้าที่และลูกจ้างสหกรณ์
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยใช้เงินทุนสะสมเพื่อการศึกษาอบรม.pdf') }}" target="_blank" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยใช้เงินทุนสะสมเพื่อการศึกษาอบรม
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยที่ปรึกษาของสหกรณ์.pdf') }}" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยที่ปรึกษาของสหกรณ์
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยสวัสดิการคณะกรรมการและเจ้าหน้าที่.pdf') }}" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยสวัสดิการคณะกรรมการและเจ้าหน้าที่
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('file/order/ว่าด้วยอำนาจหน้าที่และความรับผิดชอบของเจ้าหน้าที่สหกรณ์.pdf') }}" target="_blank">
                        <div class="d-flex justify-content-between">
                            ว่าด้วยอำนาจหน้าที่และความรับผิดชอบของเจ้าหน้าที่สหกรณ์
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

@endsection
