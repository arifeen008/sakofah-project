@extends('layout')
@section('title', 'บริการเงินฝาก |สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div class="container-fluid">
        <img src="{{ url('picture/410.jpg') }}" alt="บริการเงินฝาก" class="img-fluid">
        <div class="row">
            <div class="col-md-3 mt-3">
                <img src="{{ url('picture/S__11649199.png') }}" class="img-fluid">
            </div>
            <div class="col-md-9">
                <p class="text-success my-3 kanit-font large-text">เงินฝาก /
                    เงินฝากพิเศษ</p>
                <p class="text-success my-3 custom-font">มีทั้งหมด 6
                    ประเภท</p>
                <div id="scrollspy">
                    <div class="row">
                        @foreach (['411.png', '412.png', '413.png', '415.png', '416.png'] as $index => $image)
                            <div class="col-md-4 my-3">
                                <a href="#deposit-{{ $index + 1 }}"><img src="{{ url("picture/$image") }}"
                                        class="img-fluid"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div>
            @foreach ([
            ['id' => 'deposit-1', 'image' => '417.jpg', 'icon' => 'S__11649200.png', 'title' => 'ลักษณะบริการ', 'conditions' => ['เป็นบัญชีที่เหมาะสำหรับการออมเงินระยะสั้น หรือใช้เป็นบัญชีสำหรับหมุนเวียนสามารถฝากถอนได้ทุกวันทำการไม่จำกัดจำนวนครั้งและจำนวนเงิน', 'สามารถใช้บริการฝากถอนได้ทุกสาขารวมถึงหน่วยบริการสหกรณ์เคลื่อนที่ได้โดยไม่มีค่าธรรมเนียมใด ๆ', 'สามารถใช้เป็นบัญชีเพื่อหักชำระค่าหุ้น หรือหักชำระหนี้ที่มีอยู่กับสหกรณ์ได้', 'มีไว้สำหรับรองรับเงินปันผล'], 'service_conditions' => ['เปิดบัญชีครั้งแรกไม่ต่ำกว่า 100 บาท', 'ฝาก - ถอน ได้ตลอดเวลาทำการ', 'เป็นการออมเพื่อให้สหกรณ์ฯ รักษาทรัพย์ให้ โดยไม่ได้ผลตอบแทนจากสหกรณ์']],
            ['id' => 'deposit-2', 'image' => '418.jpg', 'icon' => 'S__11649202.png', 'title' => 'ลักษณะบริการ', 'conditions' => ['เป็นบัญชีเงินฝากเพื่อการร่วมลงทุนธุรกิจกับสหกรณ์ภายใต้หลักมูฎอรอบะฮ', 'สามารถใช้บริการฝากถอนได้ทุกสาขารวมถึงหน่วยบริการสหกรณ์เคลื่อนที่ได้โดยไม่มีค่าธรรมเนียมใด ๆ'], 'service_conditions' => ['เปิดบัญชีครั้งแรกไม่ต่ำกว่า 10,000 บาท', 'ฝาก - ถอน ได้ตลอดเวลาทำการ', 'มีปันผลให้แก่สมาชิก ทุกๆ 3 เดือน ตามไตรมาสสหกรณ์']],
            ['id' => 'deposit-3', 'image' => '419-1.jpg', 'icon' => 'S__11649201.png', 'title' => 'ลักษณะบริการ', 'conditions' => ['เป็นบัญชีที่เหมาะกับบุตรหลานที่ผู้ปกครองต้องการฝากเงินสะสมให้ตั้งแต่เด็กเล็กจนโต โดยไม่ต้องการที่จะถอนออกมาใช้ จนกว่าจะครบกำหนด 5 ปี', 'เมื่อครบกำหนดสามารถปิดบัญชีพร้อมรับทุนการศึกษาจากสหกรณ์ตามเงื่อนไขที่ฝาก และสามารถฝากสะสมต่อไปได้อีก หากไม่ต้องการที่จะปิดบัญชี'], 'service_conditions' => ['เปิดบัญชีครั้งแรกตั้งแต่ 200 / 500 / 1,000 / 1,500 บาท', 'ฝากเป็นประจำทุกๆเดือน ตั้งแต่ 200 / 500 / 1,000 / 1,500 บาท', 'ฝากต่อเนื่องครบ 5 ปี สหกรณ์ฯ จะสมทบทุนการศึกษาให้ 1,200 / 3,000 / 6,000 / 9,000 บาท']],
            ['id' => 'deposit-5', 'image' => '421.jpg', 'icon' => 'S__11649201.png', 'title' => 'ลักษณะบริการ', 'conditions' => ['เป็นบัญชีเพื่อการออมเงินแบบมีเป้าหมายเพื่อการประกอบพิธีฮัจย์หรืออุมเราะห์', 'การถอนเงินจะกระทำได้ก็ต่อเมื่อถึงกำหนดเวลาเดินทางไปประกอบพิธีฮัจย์หรืออุมเราะห์'], 'service_conditions' => ['เปิดบัญชีครั้งแรกไม่ต่ำกว่า 500 บาท', 'การถอนเงินจะกระทำได้ก็ต่อเมื่อถึงกำหนดเวลาเดินทางไปประกอบพิธีฮัจย์หรืออุมเราะห์', 'เมื่อเงินฝากในบัญชีมีตั้งแต่ 10,000 บาทขึ้นไป จะได้รับเงินปันผล ทุกๆ 3 เดือนตามไตรมาสสหกรณ์']],
            ['id' => 'deposit-6', 'image' => '422.jpg', 'icon' => 'S__11649201.png', 'title' => 'ลักษณะบริการ', 'conditions' => ['เป็นบัญชีเพื่อการออมเงินแบบมีเป้าหมายเพื่อการทำกุรบาน', 'การถอนเงินจะกระทำได้กรณีทำกุรบานหรือถอนเพื่อปิดบัญชีเท่านั้น'], 'service_conditions' => ['เปิดบัญชีครั้งแรกไม่ต่ำกว่า 500 บาท', 'ฝากครั้งต่อไปไม่ต่ำกว่า 200 บาท', 'การถอนเงินจะกระทำได้กรณีทำกุรบานหรือถอนเพื่อปิดบัญชีเท่านั้น']],
        ] as $deposit)
                <div class="my-5" id="{{ $deposit['id'] }}">
                    <img src="{{ url('picture/' . $deposit['image']) }}" class="img-fluid">
                    <div class="row my-3">
                        <div class="col-md-4">
                            <img src="{{ url('picture/' . $deposit['icon']) }}" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <p class="text-success h1 my-3 kanit-font text-custom-success">
                                {{ $deposit['title'] }}</p>
                            <ol class="list-group list-group-numbered">
                                @foreach ($deposit['conditions'] as $condition)
                                    <li class="list-group-item border-0 kanit-font custom-font">
                                        {{ $condition }}
                                    </li>
                                @endforeach
                            </ol>
                            <p class="text-success h1 my-3 kanit-font" style="color: #70AD47;">
                                เงื่อนไขการให้บริการ</p>
                            <ol class="list-group list-group-numbered">
                                @foreach ($deposit['service_conditions'] as $service_condition)
                                    <li class="list-group-item border-0 custom-font">
                                        {{ $service_condition }}
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="fixed-action-btn">
        <a class="btn btn-floating btn-primary btn-lg bg-green" href="#">
            <i class="fas fa-arrow-up"></i>
        </a>
        <ul class="list-unstyled"></ul>
    </div>
@endsection
