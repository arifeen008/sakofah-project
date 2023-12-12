@extends('layout')
@section('title', 'สำนักงาน | สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div class="container mt-3" data-mdb-toggle="animation" data-mdb-animation="slide-in-right"
        data-mdb-animation-start="onLoad">
        <p style="font-family: 'Kanit';" class="h1 text-dark text-center">ที่ตั้งสาขาและจุดบริการสหกรณ์</p>
        <div class="row">
            <div class="col-md-4 my-2">
                <div class="card hover-shadow">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/S__1776271462.jpg') }}" class="img-fluid" />
                        <a href="/klongyang">
                            <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                                <div class="h-100 d-flex justify-content-center align-items-center">
                                    <h2 style="font-family: 'Kanit';" class="text-dark"><i
                                            class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <b style="font-family: 'Kanit';" class="card-title h4 h4">สำนักงาน สาขาคลองยาง</b>
                        <p style="font-family: 'Kanit';" class="card-text">เลขที่ 291 หมู่ที่ 1 ตำบลคลองยาง อำเภอเกาะลันตา
                            จังหวัดกระบี่ 81120</p>
                        <p style="font-family: 'Kanit';" class="card-text">โทร. 075-652-525</p>
                        <a target="_blank" style="font-family: 'Kanit';" href="https://goo.gl/maps/LhWKe8wBYrgMiXBe7"
                            class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/36643.jpg') }}" class="img-fluid" />
                        <a href="/krabi">
                            <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                                <div class="h-100 d-flex justify-content-center align-items-center">
                                    <h2 style="font-family: 'Kanit';" class="text-dark"><i
                                            class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 style="font-family: 'Kanit';" class="card-title h4">สำนักงาน สาขากระบี่</h5>
                        <p style="font-family: 'Kanit';" class="card-text">เลขที่ 199/9-10 ถนนกระบี่-เขาทอง ตำบลปากน้ำ
                            อำเภอเมือง จังหวัดกระบี่ 81000</p>
                        <p style="font-family: 'Kanit';" class="card-text">โทร.075-652-525</p>
                        <a target="_blank" style="font-family: 'Kanit';" href="https://goo.gl/maps/5gn6PA6tpoW1B14R9"
                            class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/S__177627147.jpg') }}" class="img-fluid" />
                        <a href="/aoluek'">
                            <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                                <div class="h-100 d-flex justify-content-center align-items-center">
                                    <h2 style="font-family: 'Kanit';" class="text-dark"><i
                                            class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 style="font-family: 'Kanit';" class="card-title h4">สำนักงาน สาขาอ่าวลึก</h5>
                        <p style="font-family: 'Kanit';" class="card-text">เลขที่ 59/24 หมู่ที่ 4 ตำบลคลองหิน อำเภออ่าวลึก
                            จังหวัดกระบี่ 81110</p>
                        <p style="font-family: 'Kanit';" class="card-text">โทร.075-665-634</p>
                        <a target="_blank" style="font-family: 'Kanit';" href="https://goo.gl/maps/Aihh2VsbS855rJ2R8"
                            type="button" class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/47037.jpg') }}" class="img-fluid" />
                        <a href="/kohlanta'">
                            <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                                <div class="h-100 d-flex justify-content-center align-items-center">
                                    <h2 style="font-family: 'Kanit';" class="text-dark"><i
                                            class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 style="font-family: 'Kanit';" class="card-title h4">สำนักงาน สาขาเกาะลันตา</h5>
                        <p style="font-family: 'Kanit';" class="card-text">เลขที่ 100 หมู่ที่ 2 ตำบลศาลาด่าน อำเภอเกาะลันตา
                            จังหวัดกระบี่ 81150</p>
                        <p style="font-family: 'Kanit';" class="card-text">โทร. 075-667-226</p>
                        <a target="_blank" style="font-family: 'Kanit';" href="https://goo.gl/maps/HG69qg4D3qVmnFtLA"
                            type="button" class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/228620.jpg') }}" class="img-fluid" />
                        <a href="/klongthom">
                            <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                                <div class="h-100 d-flex justify-content-center align-items-center">
                                    <h2 style="font-family: 'Kanit';" class="text-dark"><i
                                            class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 style="font-family: 'Kanit';" class="card-title h4">สำนักงาน สาขาคลองท่อม</h5>
                        <p style="font-family: 'Kanit';" class="card-text">เลขที่ 218/1-2 หมู่ที่ 2 ตำบลคลองท่อมใต้
                            อำเภอคลองท่อม จังหวัดกระบี่ 81120</p>
                        <p style="font-family: 'Kanit';" class="card-text">โทร. 075-702-745</p>
                        <a target="_blank" style="font-family: 'Kanit';" href="https://goo.gl/maps/rGe5App24NWS3aze9"
                            type="button" class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/S__6094852.jpg') }}" class="img-fluid" />
                        <a href="/huayluk'); ?>">
                            <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                                <div class="h-100 d-flex justify-content-center align-items-center">
                                    <h2 style="font-family: 'Kanit';" class="text-dark"><i
                                            class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 style="font-family: 'Kanit';" class="card-title h4">สำนักงาน สาขาห้วยลึก</h5>
                        <p style="font-family: 'Kanit';" class="card-text">เลขที่ 14/10 หมู่ที่ 1 ตำบลทรายขาว
                            อำเภอคลองท่อม จังหวัดกระบี่ 81170</p>
                        <p style="font-family: 'Kanit';" class="card-text">โทร.075-810-672</p>
                        <a target="_blank" style="font-family: 'Kanit';" href="https://goo.gl/maps/TR4bdqnLorU7JgWz5"
                            type="button" class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/S__53215240.jpg') }}" class="img-fluid" />
                        <a href="/karnjanadid">
                            <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                                <div class="h-100 d-flex justify-content-center align-items-center">
                                    <h2 style="font-family: 'Kanit';" class="text-dark"><i
                                            class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 style="font-family: 'Kanit';" class="card-title h4">สำนักงาน สาขากาญจนดิษฐ์</h5>
                        <p style="font-family: 'Kanit';" class="card-text">เลขที่ 329/29-30 หมู่ที่ 2 ตำบลท่าทองใหม่
                            อำเภอกาญจนดิษฐ์ จังหวัดสุราษฏร์ธานี 84290</p>
                        <p style="font-family: 'Kanit';" class="card-text">โทร. 077-227-403</p>
                        <a target="_blank" style="font-family: 'Kanit';" href="https://goo.gl/maps/8twLNE6tSBevJGvy6"
                            class="btn btn-primary">ขอเส้นทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/8475.jpg') }}" class="img-fluid" />
                        <a href="/thontuay">
                            <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                                <div class="h-100 d-flex justify-content-center align-items-center">
                                    <h2 style="font-family: 'Kanit';" class="text-dark"><i
                                            class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 style="font-family: 'Kanit';" class="card-title h4">สำนักงาน สาขาต้นทวย</h5>
                        <p style="font-family: 'Kanit';" class="card-text">123/2 ม.1 ต.คลองเขม้า อ.เหนือคลอง จ.กระบี่
                            81130</p>
                        <p style="font-family: 'Kanit';" class="card-text">โทร. 088-262-0995, 075-810534
                        </p>
                        <button type="button" class="btn btn-primary">ขอเส้นทาง</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/S__5046906.jpg') }}" class="img-fluid" />
                        <a href="/mobile1">
                            <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                                <div class="h-100 d-flex justify-content-center align-items-center">
                                    <h2 style="font-family: 'Kanit';" class="text-dark"><i
                                            class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 style="font-family: 'Kanit';" class="card-title h4">รถโมบายเคลื่อนที่ 1</h5>
                        <p style="font-family: 'Kanit';" class="card-text">เขตอำเภอเมืองกระบี่/เหนือคลอง</p><br>
                        <p style="font-family: 'Kanit';" class="card-text">โทร.093-6529892</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card hover-shadow">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ url('picture/S__17891338.jpg') }}" class="img-fluid" />
                        <a href="/mobile2">
                            <div class="mask" style="background-color: rgba(0, 183, 74, 0.6);">
                                <div class="h-100 d-flex justify-content-center align-items-center">
                                    <h2 style="font-family: 'Kanit';" class="text-dark"><i
                                            class="fas fa-users me-2"></i>ทำเนียบบุคลากร</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 style="font-family: 'Kanit';" class="card-title h4">รถโมบายเคลื่อนที่ 2</h5>
                        <p style="font-family: 'Kanit';" class="card-text">เขตอำเภอคลองท่อม/เกาะลันตา</p><br>
                        <p style="font-family: 'Kanit';" class="card-text">โทร. 084-5220042</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card hover-shadow mb-2">
            <div class="card-header">
                <h1 class="text-danger" style="font-family: 'Kanit';">รถโมบายเคลื่อนที่ 1</h1>
                <strong style="font-family: 'Kanit';">เขตอำเภอเมืองกระบี่/เหนือคลอง</strong>
            </div>
            <div class="card-body">
                <img src="{{ url('picture/310-1.jpg') }}" width="100%">
            </div>
        </div>
        <div class="card hover-shadow mb-2">
            <div class="card-header">
                <h1 class="text-danger" style="font-family: 'Kanit';">รถโมบายเคลื่อนที่ 2</h1>
                <strong style="font-family: 'Kanit';">เขตอำเภอคลองท่อม/เกาะลันตา</strong>
            </div>
            <div class="card-body">
                <img src="{{ url('picture/0951.jpg') }}" width="100%">
            </div>
        </div>
    </div>
@endsection
