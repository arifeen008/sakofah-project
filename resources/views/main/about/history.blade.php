@extends('layout')
@section('title', 'ประวัติความเป็นมา |สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <style>
        .main-timeline {
            position: relative;
        }

        .main-timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #939597;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        .timeline {
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -13px;
            background-color: #ebf435;
            border: 5px solid #25d321;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .left {
            padding: 0px 40px 20px 0px;
            left: 0;
        }

        .right {
            padding: 0px 0px 20px 40px;
            left: 50%;
        }

        .left::before {
            content: " ";
            position: absolute;
            top: 18px;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }

        .right::before {
            content: " ";
            position: absolute;
            top: 18px;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        .right::after {
            left: -12px;
        }

        @media screen and (max-width: 600px) {

            .main-timeline::after {
                left: 31px;
            }

            .timeline {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline::before {
                left: 60px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }

            .left::after,
            .right::after {
                left: 18px;
            }

            .left::before {
                right: auto;
            }

            .right {
                left: 0%;
            }
        }
    </style>

    <div class="container my-5" data-mdb-toggle="animation" data-mdb-animation="zoom-in" data-mdb-animation-start="onLoad">
        <b class="h1 text-dark">ประวัติความเป็นมา</b>
        <div class="container py-5">
            <div class="main-timeline">
                <div class="timeline left">
                    <div class="card hover-shadow">
                        <div class="card-body p-4">
                            <p class="h3 text-dark">ปัจจุบัน</p>
                            <p class="mb-0 text-dark">สหกรณ์อิสลามษะกอฟะฮ จำกัด ได้ย้ายมา สนง.ใหญ่ มาอยู่ที่ 291 ม.1
                                ต.คลองยาง อ.เกาะลันตา จ.กระบี่ มีทั้งหมด 7 สาขา และ 2 หน่วยบริการเคลื่อนที่</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card hover-shadow">
                        <div class="card-body p-4">
                            <p class="h3 text-dark">2552</p>
                            <p class="mb-0 text-dark">ได้ย้ายมาอยู่ที่ 119/9-10 ถ.กระบี่ ต.ปากน้ำ อ.เมือง
                                จ.กระบี่(ใกล้สามแยกวิทยาลัยเทคนิคกระบี่)</p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card hover-shadow">
                        <div class="card-body p-4">
                            <p class="text-dark h3">2542</p>
                            <p class="text-dark mb-0">ได้ขยายสาขามาเปิดกิจการ ที่ อ.เมืองกระบี่ โดยชั้นร้านอาหารอับดุลเลาะฮ์
                                เป็นสำนักงานใหญ่</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card hover-shadow">
                        <div class="card-body p-4">
                            <p class="text-dark h3">2538</p>
                            <p class="text-dark mb-0">หลังจากกองทุนฯ มีความเข้มแข็งในระดับหนึ่ง คณะบุคคลดังกล่าว
                                ดำเนินการจดทะเบียน จากกองทุนมาเป็นสหกรณ์ โดยใช้ชื่อว่า "สหกรณ์ออมทรัพย์ษะกอฟะฮอิสลาม จำกัด"
                                เมื่อวันที่ 7 กุมภาพันธ์ พ.ศ.2538</p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card hover-shadow">
                        <div class="card-body p-4">
                            <p class="text-dark h3">2535</p>
                            <p class="text-dark mb-0">คณะบุคคลร่วมกันจัดตั้ง "กองทุนออมทรัพย์ษะกอฟะฮ" ขึ้นที่ ต.คลองยาง
                                อ.เกาะลันตา จ.กระบี่โดยระดมทุนเพื่อช่วยเหลือซึ่งกันและกัน</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
