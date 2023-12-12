@extends('layout')
@section('title', 'บริการเงินฝาก |สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div data-mdb-toggle="animation" data-mdb-animation="fade-in" data-mdb-animation-start="onLoad" class="containner-fluid">
        <img src="{{ url('picture/410.jpg') }}" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
            data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up" alt="บริการเงินฝาก" style="width: 100%;">
        <div class="row">
            <div class="col-md-3 mt-3">
                <img src="{{ url('picture/S__11649199.png') }}" data-mdb-toggle="animation"
                    data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                    data-mdb-animation="fade-in-up" style="width: 100%;">
            </div>
            <div class="col-md-9">
                <p class="text-success my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                    data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                    style="font-family: 'Kanit';font-size: 40px;color:#70AD47">เงินฝาก / เงินฝากพิเศษ</p>
                <p class="text-success my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                    data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                    style="font-family: 'Kanit';font-size: 35px;color:#70AD47">มีทั้งหมด 6 ประเภท</p>
                <div id="scrollspy">
                    <div class="row" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                        data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up">
                        <div class="col-md-4 my-3">
                            <a href="#deposit-1"><img src="{{ url('picture/411.png') }}" data-mdb-toggle="animation"
                                    data-mdb-animation-start="onHover" data-mdb-animation-reset="true"
                                    data-mdb-animation="tada" style="width: 100%;"></a>
                        </div>
                        <div class="col-md-4 my-3">
                            <a href="#deposit-2"><img src="{{ url('picture/412.png') }}" data-mdb-toggle="animation"
                                    data-mdb-animation-start="onHover" data-mdb-animation-reset="true"
                                    data-mdb-animation="tada" style="width: 100%;"></a>
                        </div>
                        <div class="col-md-4 my-3">
                            <a href="#deposit-3"><img src="{{ url('picture/413.png') }}" data-mdb-toggle="animation"
                                    data-mdb-animation-start="onHover" data-mdb-animation-reset="true"
                                    data-mdb-animation="tada" style="width: 100%;"></a>
                        </div>
                        <div class="col-md-4 my-3">
                            <a href="#deposit-5"><img src="{{ url('picture/415.png') }}" data-mdb-toggle="animation"
                                    data-mdb-animation-start="onHover" data-mdb-animation-reset="true"
                                    data-mdb-animation="tada" style="width: 100%;"></a>
                        </div>
                        <div class="col-md-4 my-3">
                            <a href="#deposit-6"><img src="{{ url('picture/416.png') }}" data-mdb-toggle="animation"
                                    data-mdb-animation-start="onHover" data-mdb-animation-reset="true"
                                    data-mdb-animation="tada" style="width: 100%;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-mdb-spy="scroll" data-mdb-target="#scrollspy" data-mdb-offset="0" class="scrollspy">
            <div class="my-5" id="deposit-1">
                <img src="{{ url('picture/417.jpg') }}" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                    data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up" style="width: 100%;">
                <div class="row my-3">
                    <div class="col-md-4">
                        <img src="{{ url('picture/S__11649200.png') }}" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up" style="width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <p class="text-success h1 my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                            style="font-family: 'Kanit';color:#70AD47">ลักษณะบริการ</p>
                        <ol class="list-group list-group-numbered" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up">
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เป็นบัญชีที่เหมาะสำหรับการออมเงินระยะสั้น
                                หรือใช้เป็นบัญชีสำหรับหมุนเวียนสามารถฝากถอนได้ทุกวันทำการไม่จำกัดจำนวนครั้งและจำนวนเงิน</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                สามารถใช้บริการฝากถอนได้ทุกสาขารวมถึงหน่วยบริการสหกรณ์เคลื่อนที่ได้โดยไม่มีค่าธรรมเนียมใด ๆ
                            </li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                สามารถใช้เป็นบัญชีเพื่อหักชำระค่าหุ้น หรือหักชำระหนี้ที่มีอยู่กับสหกรณ์ได้</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                มีไว้สำหรับรองรับเงินปันผล</li>
                        </ol>
                        <p class="text-success h1 my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                            style="font-family: 'Kanit';color:#70AD47">เงื่อนไขการให้บริการ</p>
                        <ol class="list-group list-group-numbered" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up">
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เปิดบัญชีครั้งแรกไม่ต่ำกว่า 100 บาท</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">ฝาก - ถอน
                                ได้ตลอดเวลาทำการ</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เป็นการออมเพื่อให้สหกรณ์ฯ รักษาทรัพย์ให้ โดยไม่ได้ผลตอบแทนจากสหกรณ์</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="my-5" id="deposit-2">
                <img src="{{ url('picture/418.jpg') }}" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                    data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up" style="width: 100%;">
                <div class="row my-3">
                    <div class="col-md-4">
                        <img src="{{ url('picture/S__11649202.png') }}" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up" style="width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <p class="text-success h1 my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                            style="font-family: 'Kanit';color:#70AD47">ลักษณะบริการ</p>
                        <ol class="list-group list-group-numbered" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up">
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เป็นบัญชีเงินฝากเพื่อการร่วมลงทุนธุรกิจกับสหกรณ์ภายใต้หลักมูฎอรอบะฮ</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                สามารถใช้บริการฝากถอนได้ทุกสาขารวมถึงหน่วยบริการสหกรณ์เคลื่อนที่ได้โดยไม่มีค่าธรรมเนียมใด ๆ
                            </li>
                        </ol>
                        <p class="text-success h1 my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                            style="font-family: 'Kanit';color:#70AD47">เงื่อนไขการให้บริการ</p>
                        <ol class="list-group list-group-numbered" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up">
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เปิดบัญชีครั้งแรกไม่ต่ำกว่า 10,000 บาท</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">ฝาก - ถอน
                                ได้ตลอดเวลาทำการ</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                มีปันผลให้แก่สมาชิก ทุกๆ 3 เดือน ตามไตรมาสสหกรณ์</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="my-5" id="deposit-3">
                <img src="{{ url('picture/419-1.jpg') }}" data-mdb-toggle="animation"
                    data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                    data-mdb-animation="fade-in-up" style="width: 100%;">
                <div class="row my-3">
                    <div class="col-md-4">
                        <img src="{{ url('picture/S__11649201.png') }}" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up" style="width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <p class="text-success h1 my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                            style="font-family: 'Kanit';color:#70AD47">ลักษณะบริการ</p>
                        <ol class="list-group list-group-numbered" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up">
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เป็นบัญชีที่เหมาะกับบุตรหลานที่ผู้ปกครองต้องการฝากเงินสะสมให้ตั้งแต่เด็กเล็กจนโต
                                โดยไม่ต้องการที่จะถอนออกมาใช้ จนกว่าจะครบกำหนด 5 ปี </li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เมื่อครบกำหนดสามารถปิดบัญชีพร้อมรับทุนการศึกษาจากสหกรณ์ตามเงื่อนไขที่ฝาก
                                และสามารถฝากสะสมต่อไปได้อีก หากไม่ต้องการที่จะปิดบัญชี</li>
                        </ol>
                        <p class="text-success h1 my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                            style="font-family: 'Kanit';color:#70AD47">เงื่อนไขการให้บริการ</p>
                        <ol class="list-group list-group-numbered" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up">
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เปิดบัญชีครั้งแรกตั้งแต่ 200 / 500 / 1,000 / 1,500 บาท</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                ฝากเป็นประจำทุกๆเดือน ตั้งแต่ 200 / 500 / 1,000 / 1,500 บาท</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                ฝากต่อเนื่องครบ 5 ปี สหกรณ์ฯ จะสมทบทุนการศึกษาให้ 1,200 / 3,000 / 6,000 / 9,000 บาท</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="my-5" id="deposit-5">
                <img src="{{ url('picture/421.jpg') }}" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                    data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up" style="width: 100%;">
                <div class="row my-3">
                    <div class="col-md-4">
                        <img src="{{ url('picture/S__11649201.png') }}" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up" style="width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <p class="text-success h1 my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                            style="font-family: 'Kanit';color:#70AD47">ลักษณะบริการ</p>
                        <ol class="list-group list-group-numbered" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up">
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เป็นบัญชีเพื่อการออมเงินแบบมีเป้าหมายเพื่อการประกอบพิธีฮัจย์หรืออุมเราะห์</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                การถอนเงินจะกระทำได้ก็ต่อเมื่อถึงกำหนดเวลาเดินทางไปประกอบพิธีฮัจย์หรืออุมเราะห์</li>
                        </ol>
                        <p class="text-success h2 my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                            style="font-family: 'Kanit';color:#70AD47">เงื่อนไขการให้บริการ</p>
                        <ol class="list-group list-group-numbered" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up">
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เปิดบัญชีครั้งแรกไม่ต่ำกว่า 500 บาท</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                การถอนเงินจะกระทำได้ก็ต่อเมื่อถึงกำหนดเวลาเดินทางไปประกอบพิธีฮัจย์หรืออุมเราะห์</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เมื่อเงินฝากในบัญชีมีตั้งแต่ 10,000 บาทขึ้นไป จะได้รับเงินปันผล ทุกๆ 3 เดือนตามไตรมาสสหกรณ์
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="mt-5" id="deposit-6">
                <img src="{{ url('picture/422.jpg') }}" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                    data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up" style="width: 100%;">
                <div class="row my-3">
                    <div class="col-md-4">
                        <img src="{{ url('picture/S__11649201.png') }}" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up" style="width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <p class="text-success h1 my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                            style="font-family: 'Kanit';color:#70AD47">ลักษณะบริการ</p>
                        <ol class="list-group list-group-numbered" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up">
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เป็นบัญชีเพื่อการออมเงินแบบมีเป้าหมายเพื่อการทำกุรบาน</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                การถอนเงินจะกระทำได้กรณีทำกุรบานหรือถอนเพื่อปิดบัญชีเท่านั้น</li>
                        </ol>
                        <p class="text-success h2 my-3" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation-on-scroll="repeat" data-mdb-animation="fade-in-up"
                            style="font-family: 'Kanit';color:#70AD47">เงื่อนไขการให้บริการ</p>
                        <ol class="list-group list-group-numbered" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation-on-scroll="repeat"
                            data-mdb-animation="fade-in-up">
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                เปิดบัญชีครั้งแรกไม่ต่ำกว่า 500 บาท</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                ฝากครั้งต่อไปไม่ต่ำกว่า 200 บาท</li>
                            <li class="list-group-item border-0" style="font-family: 'Kanit';font-size: 18px;">
                                การถอนเงินจะกระทำได้กรณีทำกุรบานหรือถอนเพื่อปิดบัญชีเท่านั้น</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-action-btn">
        <a class="btn btn-floating btn-primary btn-lg" href="#" style="background-color: #00ff00;">
            <i class="fas fa-arrow-up"></i>
        </a>
        <ul class="list-unstyled"></ul>
    </div>
@endsection
