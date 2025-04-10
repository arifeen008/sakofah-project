@extends('layout')
@section('title', 'สำนักงาน ')
@section('content')
    <div class="container mt-3" style="font-family: 'Sarabun', sans-serif;">
        <p class="h1 text-dark text-center">ที่ตั้งสาขาและจุดบริการสหกรณ์</p>
        <div class="row">
            <div class="col-md-4 my-2">
                <div class="card hover-shadow" data-mdb-modal-init data-mdb-target="#Klongyang">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/S__1776271462.jpg') }}" class="img-fluid" />
                        <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                            <div class="h-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-dark"><i class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <b class="card-title h4">สำนักงาน สาขาคลองยาง</b>
                        <p class="card-text">เลขที่ 291 หมู่ที่ 1 ตำบลคลองยาง อำเภอเกาะลันตา
                            จังหวัดกระบี่ 81120</p>
                        <p class="card-text">โทร. 075-652-525</p>
                        <a target="_blank" href="https://goo.gl/maps/LhWKe8wBYrgMiXBe7"
                            class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow" data-mdb-modal-init data-mdb-target="#Krabi">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/36643.jpg') }}" class="img-fluid" />
                        <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                            <div class="h-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-dark"><i class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title h4">สำนักงาน สาขากระบี่</h5>
                        <p class="card-text">เลขที่ 199/9-10 ถนนกระบี่-เขาทอง ตำบลปากน้ำ
                            อำเภอเมือง จังหวัดกระบี่ 81000</p>
                        <p class="card-text">โทร.075-652-525</p>
                        <a target="_blank" href="https://goo.gl/maps/5gn6PA6tpoW1B14R9"
                            class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow" data-mdb-modal-init data-mdb-target="#Aoluk">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/S__177627147.jpg') }}" class="img-fluid" />
                        <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                            <div class="h-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-dark"><i class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title h4">สำนักงาน สาขาอ่าวลึก</h5>
                        <p class="card-text">เลขที่ 59/24 หมู่ที่ 4 ตำบลคลองหิน อำเภออ่าวลึก
                            จังหวัดกระบี่ 81110</p>
                        <p class="card-text">โทร.075-665-634</p>
                        <a target="_blank" href="https://goo.gl/maps/Aihh2VsbS855rJ2R8" type="button"
                            class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow" data-mdb-modal-init data-mdb-target="#Kohlanta">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/47037.jpg') }}" class="img-fluid" />
                        <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                            <div class="h-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-dark"><i class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title h4">สำนักงาน สาขาเกาะลันตา</h5>
                        <p class="card-text">เลขที่ 100 หมู่ที่ 2 ตำบลศาลาด่าน อำเภอเกาะลันตา
                            จังหวัดกระบี่ 81150</p>
                        <p class="card-text">โทร. 075-667-226</p>
                        <a target="_blank" href="https://goo.gl/maps/HG69qg4D3qVmnFtLA" type="button"
                            class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow" data-mdb-modal-init data-mdb-target="#Klongthom">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/228620.jpg') }}" class="img-fluid" />
                        <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                            <div class="h-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-dark"><i class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title h4">สำนักงาน สาขาคลองท่อม</h5>
                        <p class="card-text">เลขที่ 218/1-2 หมู่ที่ 2 ตำบลคลองท่อมใต้
                            อำเภอคลองท่อม จังหวัดกระบี่ 81120</p>
                        <p class="card-text">โทร. 075-702-745</p>
                        <a target="_blank" href="https://goo.gl/maps/rGe5App24NWS3aze9" type="button"
                            class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow" data-mdb-modal-init data-mdb-target="#Huayluk">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/S__6094852.jpg') }}" class="img-fluid" />
                        <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                            <div class="h-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-dark"><i class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title h4">สำนักงาน สาขาห้วยลึก</h5>
                        <p class="card-text">เลขที่ 14/10 หมู่ที่ 1 ตำบลทรายขาว
                            อำเภอคลองท่อม จังหวัดกระบี่ 81170</p>
                        <p class="card-text">โทร.075-810-672</p>
                        <a target="_blank" href="https://goo.gl/maps/TR4bdqnLorU7JgWz5" type="button"
                            class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow" data-mdb-modal-init data-mdb-target="#Karnjanadid">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/120590.jpg') }}" class="img-fluid" />
                        <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                            <div class="h-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-dark"><i class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title h4">สำนักงาน สาขากาญจนดิษฐ์</h5>
                        <p class="card-text">เลขที่ 111/47 หมู่ที่ 2 ตำบลท่าทองใหม่ อำเภอกาญจนดิษฐ์ จังหวัดสุราษฏร์ธานี
                            84290</p>
                        <p class="card-text">โทร. 086-4759102</p>
                        <a target="_blank" href="https://goo.gl/maps/8twLNE6tSBevJGvy6"
                            class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow" data-mdb-modal-init data-mdb-target="#Thontuay">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/8475.jpg') }}" class="img-fluid" />
                        <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                            <div class="h-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-dark"><i class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title h4">สำนักงาน สาขาต้นทวย</h5>
                        <p class="card-text">123/2 ม.1 ต.คลองเขม้า อ.เหนือคลอง จ.กระบี่
                            81130</p>
                        <p class="card-text">โทร. 088-262-0995, 075-810534
                        </p>
                        <button type="button" class="btn btn-primary">ขอเส้นทาง</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow" data-mdb-modal-init data-mdb-target="#mobile1">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/S__5046906.jpg') }}" class="img-fluid" />

                        <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                            <div class="h-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-dark"><i class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title h4">รถโมบายเคลื่อนที่ 1</h5>
                        <p class="card-text">เขตอำเภอเมืองกระบี่/เหนือคลอง</p><br>
                        <p class="card-text">โทร.093-6529892</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow" data-mdb-modal-init data-mdb-target="#mobile2">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/S__17891338.jpg') }}" class="img-fluid" />
                        <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                            <div class="h-100 d-flex justify-content-center align-items-center">
                                <h2 class="text-dark"><i class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title h4">รถโมบายเคลื่อนที่ 2</h5>
                        <p class="card-text">เขตอำเภอคลองท่อม/เกาะลันตา</p><br>
                        <p class="card-text">โทร. 084-5220042</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card hover-shadow mb-2">
            <div class="card-header">
                <h1 class="text-danger">รถโมบายเคลื่อนที่ 1</h1>
                <strong>เขตอำเภอเมืองกระบี่/เหนือคลอง</strong>
            </div>
            <div class="card-body">
                <img src="{{ url('branch/mobile1.jpg') }}" class="w-100">
            </div>
        </div>
        <div class="card hover-shadow mb-2">
            <div class="card-header">
                <h1 class="text-danger"> รถโมบายเคลื่อนที่ 2</h1>
                <strong>เขตอำเภอคลองท่อม/เกาะลันตา</strong>
            </div>
            <div class="card-body">
                <img src="{{ url('branch/mobile2.jpg') }}" class="w-100">
            </div>
        </div>
    </div>

    <div class="modal top fade" id="Klongyang" tabindex="-1" aria-labelledby="Klongyang" aria-hidden="true"
        data-mdb-backdrop="true" data-mdb-keyboard="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered">
            <div class="modal-content">
                <img src="{{ url('branch/คลองยาง.jpg') }}" class="w-100" alt="คลองยาง">

            </div>
        </div>
    </div>
    <div class="modal top fade" id="Krabi" tabindex="-1" aria-labelledby="Krabi" aria-hidden="true"
        data-mdb-backdrop="true" data-mdb-keyboard="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered">
            <div class="modal-content">
                <img src="{{ url('branch/กระบี่.jpg') }}" class="w-100" alt="กระบี่">
            </div>
        </div>
    </div>
    <div class="modal top fade" id="Aoluk" tabindex="-1" aria-labelledby="Aoluk" aria-hidden="true"
        data-mdb-backdrop="true" data-mdb-keyboard="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered">
            <div class="modal-content">
                <img src="{{ url('branch/อ่าวลึก.jpg') }}" class="w-100" alt="อ่าวลึก">
            </div>
        </div>
    </div>
    <div class="modal top fade" id="Kohlanta" tabindex="-1" aria-labelledby="Kohlanta" aria-hidden="true"
        data-mdb-backdrop="true" data-mdb-keyboard="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered">
            <div class="modal-content">
                <img src="{{ url('branch/เกาะลันตา.jpg') }}" class="w-100" alt="เกาะลันตา">
            </div>
        </div>
    </div>
    <div class="modal top fade" id="Klongthom" tabindex="-1" aria-labelledby="Klongthom" aria-hidden="true"
        data-mdb-backdrop="true" data-mdb-keyboard="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered">
            <div class="modal-content">
                <img src="{{ url('branch/คลองท่อม.jpg') }}" class="w-100" alt="คลองท่อม">
            </div>
        </div>
    </div>
    <div class="modal top fade" id="Huayluk" tabindex="-1" aria-labelledby="Huayluk" aria-hidden="true"
        data-mdb-backdrop="true" data-mdb-keyboard="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered">
            <div class="modal-content">
                <img src="{{ url('branch/ห้วยลึก.jpg') }}" class="w-100" alt="ห้วยลึก">
            </div>
        </div>
    </div>
    <div class="modal top fade" id="Karnjanadid" tabindex="-1" aria-labelledby="Karnjanadid" aria-hidden="true"
        data-mdb-backdrop="true" data-mdb-keyboard="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered">
            <div class="modal-content">
                <img src="{{ url('branch/กาญจนดิษฐ์.jpg') }}" class="w-100" alt="กาญจนดิษฐ์">
            </div>
        </div>
    </div>
    <div class="modal top fade" id="Thontuay" tabindex="-1" aria-labelledby="Thontuay" aria-hidden="true"
        data-mdb-backdrop="true" data-mdb-keyboard="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered">
            <div class="modal-content">
                <img src="{{ url('branch/ต้นทวย.jpg') }}" class="w-100" alt="ต้นทวย">
            </div>
        </div>
    </div>
    <div class="modal top fade" id="mobile1" tabindex="-1" aria-labelledby="mobile1" aria-hidden="true"
        data-mdb-backdrop="true" data-mdb-keyboard="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered">
            <div class="modal-content">
                <img src="{{ url('branch/mobile1.jpg') }}" class="w-100" alt="mobile1">
            </div>
        </div>
    </div>
    <div class="modal top fade" id="mobile2" tabindex="-1" aria-labelledby="mobile2" aria-hidden="true"
        data-mdb-backdrop="true" data-mdb-keyboard="true">
        <div class="modal-dialog modal-xl  modal-dialog-centered">
            <div class="modal-content">
                <img src="{{ url('branch/mobile2.jpg') }}" class="w-100" alt="mobile2">
            </div>
        </div>
    </div>
@endsection
