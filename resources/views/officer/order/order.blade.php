@extends('dashboard')
@extends('sidebar')
@section('title', 'ข้อบังคับสหกรณ์')
@section('content')
    <div class="card m-3">
        <div class="card-body">
            <b class="h3 card-title">ระเบียบสหกรณ์ปี 2565</b>
            <hr>
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยกองทุนให้ยืมเพื่อการศึกษา.pdf') }}" target="_blank"
                            class="btn btn-lg" data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">ว่าด้วยกองทุนให้ยืมเพื่อการศึกษา</b>
                                <i class="fas fa-download"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยการจ่ายและเก็บรักษาเงินสด.pdf') }}" target="_blank"
                            class="btn btn-lg" data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">ว่าด้วยการจ่ายและเก็บรักษาเงินสด</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยการใช้ทุนสะสมเพื่อพัฒนากิจการสหก.pdf') }}" target="_blank"
                            class="btn btn-lg" data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';"
                                    class="text-dark">ว่าด้วยการใช้ทุนสะสมเพื่อพัฒนากิจการสหกรณ์</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div> --}}
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยการใช้ทุนสาธารณประโยชน์.pdf') }}" target="_blank"
                            class="btn btn-lg" data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">ว่าด้วยการใช้ทุนสาธารณประโยชน์</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยการให้เงินกู้ยืมเพื่อศึกษาต่อสำหรับเจ้าหน้าที่สหกรณ์.pdf') }}"
                            target="_blank" class="btn btn-lg" data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';"
                                    class="text-dark">ว่าด้วยการให้เงินกู้ยืมเพื่อศึกษาต่อสำหรับเจ้าหน้าที่สหกรณ์</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยคณะอนุกรรมการ.pdf') }}" target="_blank" class="btn btn-lg"
                            data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">ว่าด้วยคณะอนุกรรมการ</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยค่าเบี้ยเลี้ยง-ค่าพาหนะ-ค่าเดินทาง.pdf') }}" target="_blank"
                            class="btn btn-lg" data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';"
                                    class="text-dark">ว่าด้วยค่าเบี้ยเลี้ยง-ค่าพาหนะ-ค่าเดินทาง</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยเงินยืมทดลองจ่าย.pdf') }}" target="_blank" class="btn btn-lg"
                            data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">ว่าด้วยเงินยืมทดลองจ่าย</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยเจ้าหน้าที่และข้อบังคับเกี่ยวกับการทำงาน.pdf') }}"
                            target="_blank" class="btn btn-lg" data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';"
                                    class="text-dark">ว่าด้วยเจ้าหน้าที่และข้อบังคับเกี่ยวกับการทำงาน</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยเจ้าหน้าที่และลูกจ้างสหกรณ์.pdf') }}" target="_blank"
                            class="btn btn-lg" data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">ว่าด้วยเจ้าหน้าที่และลูกจ้างสหกรณ์</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยใช้เงินทุนสะสมเพื่อการศึกษาอบรม.pdf') }}" target="_blank"
                            class="btn btn-lg" data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';"
                                    class="text-dark">ว่าด้วยใช้เงินทุนสะสมเพื่อการศึกษาอบรม</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยที่ปรึกษาของสหกรณ์.pdf') }}" target="_blank"
                            class="btn btn-lg " data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';" class="text-dark">ว่าด้วยที่ปรึกษาของสหกรณ์</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยสวัสดิการคณะกรรมการและเจ้าหน้าที่.pdf') }}" target="_blank"
                            class="btn btn-lg " data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';"
                                    class="text-dark">ว่าด้วยสวัสดิการคณะกรรมการและเจ้าหน้าที่</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <a href="{{ url('file/order/ว่าด้วยอำนาจหน้าที่และความรับผิดชอบของเจ้าหน้าที่สหกรณ์.pdf') }}"
                            target="_blank" class="btn btn-lg " data-mdb-ripple-color="#000000">
                            <div class="d-flex justify-content-between">
                                <b style="font-family: 'Kanit';"
                                    class="text-dark">ว่าด้วยอำนาจหน้าที่และความรับผิดชอบของเจ้าหน้าที่สหกรณ์</b>
                                <i class="fas fa-download ms-1"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
