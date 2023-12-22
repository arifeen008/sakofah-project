@extends('layout')
@section('title', 'สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-carousel-init>
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('picture/267-1.jpg') }}" class="d-block w-100" />
            </div>
            <div class="carousel-item">
                <img src="{{ url('picture/309-1.jpg') }}" class="d-block w-100" />
            </div>
            <div class="carousel-item">
                <img src="{{ url('picture/ค่านิยมเว็บ.jpg') }}" class="d-block w-100" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-4">
        <div id="carouselBanner" class="carousel slide carousel-dark" data-mdb-ride="carouselBanner">
            <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselBanner" data-mdb-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-mdb-target="#carouselBanner" data-mdb-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-mdb-target="#carouselBanner" data-mdb-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-mdb-target="#carouselBanner" data-mdb-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-mdb-target="#carouselBanner" data-mdb-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-mdb-target="#carouselBanner" data-mdb-slide-to="5"
                    aria-label="Slide 6"></button>
                <button type="button" data-mdb-target="#carouselBanner" data-mdb-slide-to="6"
                    aria-label="Slide 7"></button>
                <button type="button" data-mdb-target="#carouselBanner" data-mdb-slide-to="7"
                    aria-label="Slide 8"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('picture/548-1.jpg') }}" data-mdb-toggle="modal" data-mdb-target="#Modal2"
                        class="d-block w-100" />
                </div>
                <div class="carousel-item">
                    <a href="https://shorturl.asia/LGyKT" target="_blank" rel="noopener noreferrer">
                        <img src="{{ url('picture/521-2.jpg') }}" class="d-block w-100" />
                    </a>
                </div>
                <div class="carousel-item ">
                    <img src="{{ url('picture/512-3.jpg') }}" class="d-block w-100" />
                </div>
                <div class="carousel-item ">
                    <img src="{{ url('picture/515-1.jpg') }}" class="d-block w-100" />
                </div>
                <div class="carousel-item ">
                    <img src="{{ url('picture/466.jpg') }}" class="d-block w-100" />
                </div>
                <div class="carousel-item ">
                    <img src="{{ url('picture/450.jpg') }}" data-mdb-toggle="modal" data-mdb-target="#Modal0"
                        class="d-block w-100" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('picture/345-1.jpg') }}" data-mdb-toggle="modal" data-mdb-target="#Modal1"
                        class="d-block w-100" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('picture/520-1.jpg') }}" data-mdb-toggle="modal" data-mdb-target="#Modal3"
                        class="d-block w-100" />
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBanner"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselBanner"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="false"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="modal fade" id="Modal0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/Wjw0Eovdgg0" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body"><img src="{{ url('picture/345.jpg') }}" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body"><img src="{{ url('picture/548.jpg') }}" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body"><img src="{{ url('picture/520.jpg') }}" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-8">
                <div class="row h-100 d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                        <a href="/register" target="_blank" rel="noopener noreferrer" class="card hover-shadow">
                            <img src="{{ url('picture/433.png') }}" class="w-100">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="/deposit" target="_blank" rel="noopener noreferrer" class="card hover-shadow">
                            <img src="{{ url('picture/433-1.png') }}" class="w-100">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="/credit_service" target="_blank" rel="noopener noreferrer" class="card hover-shadow">
                            <img src="{{ url('picture/433-2.png') }}" class="w-100">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="/document" target="_blank" rel="noopener noreferrer" class="card hover-shadow">
                            <img src="{{ url('picture/433-3.png') }}" class="w-100">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="d-flex flex-row-reverse">
                    <iframe src="https://shorturl.asia/TVGHU" width="340" height="500"
                        style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-9">
                <h5 class="text-dark mt-2">วารสารออนไลน์</h5>
                <hr>
                <div class="ratio ratio-4x3">
                    <iframe src="https://anyflip.com/bookcase/wueoy/" seamless="seamless" scrolling="no" frameborder="0"
                        allowtransparency="true" allowfullscreen>
                    </iframe>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card mt-2">
                            <div class="card-body">
                                <h5 class="card-title text-dark">ข่าวประชาสัมพันธ์</h5>
                                <hr>
                                <div id="information" class="carousel slide carousel-fade" data-mdb-ride="carousel"
                                    data-mdb-carousel-init>
                                    <div class="carousel-indicators">
                                        @foreach ($information as $index => $item)
                                            <button type="button" data-mdb-target="#information"
                                                data-mdb-slide-to="{{ $index }}"
                                                @if ($index === 0) class="active" aria-current="true" @endif
                                                aria-label="Slide {{ $index + 1 }}">
                                            </button>
                                        @endforeach
                                    </div>
                                    <div class="carousel-inner">
                                        @foreach ($information as $index => $item)
                                            <a href="/news/{{ $item->news_number }}" target="_blank"
                                                rel="noopener noreferrer">
                                                <div class="carousel-item @if ($index === 0) active @endif">
                                                    <img src="{{ url('uploads/' . $item->picture_name) }}"
                                                        class="d-block w-100" height="250"
                                                        alt="{{ $item->title }}" />
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <p>{!! Str::limit($item->description, 60) !!}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-mdb-target="#information"
                                        data-mdb-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-mdb-target="#information"
                                        data-mdb-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mt-2">
                            <div class="card-body">
                                <h5 class="card-title text-dark">ข่าวสวัสดิการ</h5>
                                <hr>
                                <div id="welfare" class="carousel slide carousel-fade" data-mdb-ride="carousel"
                                    data-mdb-carousel-init>
                                    <div class="carousel-indicators">
                                        @foreach ($welfare as $index => $item)
                                            <button type="button" data-mdb-target="#welfare"
                                                data-mdb-slide-to="{{ $index }}"
                                                @if ($index === 0) class="active" aria-current="true" @endif
                                                aria-label="Slide {{ $index + 1 }}">
                                            </button>
                                        @endforeach
                                    </div>
                                    <div class="carousel-inner">
                                        @foreach ($welfare as $index => $item)
                                            <a href="/news/{{ $item->news_number }}" target="_blank">
                                                <div class="carousel-item @if ($index === 0) active @endif">
                                                    <img src="{{ url('uploads/' . $item->picture_name) }}" height="250"
                                                        class="d-block w-100" alt="{{ $item->title }}" />
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <p>{!! Str::limit($item->description, 60) !!}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-mdb-target="#welfare"
                                        data-mdb-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-mdb-target="#welfare"
                                        data-mdb-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mt-2">
                            <div class="card-body">
                                <h5 class="card-title text-dark">มูลนิธิษะกอฟะฮ</h5>
                                <hr>
                                <div id="foundation" class="carousel slide carousel-fade" data-mdb-ride="carousel"
                                    data-mdb-carousel-init>
                                    <div class="carousel-indicators">
                                        @foreach ($foundation as $index => $item)
                                            <button type="button" data-mdb-target="#foundation"
                                                data-mdb-slide-to="{{ $index }}"
                                                @if ($index === 0) class="active" aria-current="true" @endif
                                                aria-label="Slide {{ $index + 1 }}">
                                            </button>
                                        @endforeach
                                    </div>
                                    <div class="carousel-inner">
                                        @foreach ($foundation as $index => $item)
                                            <a href="/news/{{ $item->news_number }}" target="_blank">
                                                <div class="carousel-item @if ($index === 0) active @endif">
                                                    <img src="{{ url('uploads/' . $item->picture_name) }}" height="250"
                                                        class="d-block w-100" alt="{{ $item->title }}" />
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <p>{!! Str::limit($item->description, 60) !!}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-mdb-target="#foundation"
                                        data-mdb-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-mdb-target="#foundation"
                                        data-mdb-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mt-2">
                            <div class="card-body">
                                <h5 class="card-title text-dark">ข่าวสินเชื่อ</h5>
                                <hr>
                                <div id="credit" class="carousel slide carousel-fade" data-mdb-ride="carousel"
                                    data-mdb-carousel-init>
                                    <div class="carousel-indicators">
                                        @foreach ($credit as $index => $item)
                                            <button type="button" data-mdb-target="#credit"
                                                data-mdb-slide-to="{{ $index }}"
                                                @if ($index === 0) class="active" aria-current="true" @endif
                                                aria-label="Slide {{ $index + 1 }}">
                                            </button>
                                        @endforeach
                                    </div>
                                    <div class="carousel-inner">
                                        @foreach ($credit as $index => $item)
                                            <a href="/news/{{ $item->news_number }}" target="_blank">
                                                <div class="carousel-item @if ($index === 0) active @endif">
                                                    <img src="{{ url('uploads/' . $item->picture_name) }}" height="250"
                                                        class="d-block w-100" alt="{{ $item->title }}" />
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <p>{!! Str::limit($item->description, 60) !!}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-mdb-target="#credit"
                                        data-mdb-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-mdb-target="#credit"
                                        data-mdb-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <h3 class="text-center text-dark mt-2">เวลาละหมาด</h3>
                <iframe width="133px" height="196px" src="https://shorturl.asia/gvwxq" frameborder=0
                    scrolling=no></iframe>
                <iframe width="133px" height="196px" src="https://shorturl.asia/oTkP5" frameborder=0
                    scrolling=no></iframe>
                <iframe width="133px" height="196px" src="https://shorturl.asia/QDtN6" frameborder=0
                    scrolling=no></iframe>
                <iframe width="133px" height="196px" src="https://shorturl.asia/NqJSA" frameborder=0
                    scrolling=no></iframe>
                <a href="https://sakofahislamic.com/index/credit" target="_blank" rel="noopener noreferrer"></a>
                <div class="ratio ratio-16x9 my-3">
                    <iframe src="https://www.youtube.com/embed/m0o5aStUkYg" allowfullscreen></iframe>
                </div>
                <div class="ratio ratio-16x9 my-3">
                    <iframe src="https://www.youtube.com/embed/zzvuyxuuHPs" allowfullscreen></iframe>
                </div>
                <div class="ratio ratio-16x9 my-3">
                    <iframe src="https://www.youtube.com/embed/SV7IdDXAX0A" allowfullscreen></iframe>
                </div>
                <div class="card mb-2">
                    <a target="_blank" rel="noopener noreferrer" class="hover-shadow"
                        href="https://shorturl.asia/IKm8k">
                        <img class="rounded mx-auto d-block" width="120" height="120"
                            src="{{ url('picture/ตรากรมที่ดิน.png') }}">
                        <p class="text-center text-primary">กรมที่ดิน</p>
                    </a>
                </div>
                <div class="card mb-2">
                    <a target="_blank" rel="noopener noreferrer" class="hover-shadow"
                        href="https://shorturl.asia/VpM47">
                        <img class="rounded mx-auto d-block" width="120" height="120"
                            src="{{ url('picture/กระทรวงเกษตรและสหกรณ์.png') }}">
                        <p class="text-center text-primary">กระทรวงเกษตรและสหกรณ์</p>
                    </a>
                </div>
                <div class="card mb-2">
                    <a target="_blank" rel="noopener noreferrer" class="hover-shadow"
                        href="https://shorturl.asia/PRMAt">
                        <img class="rounded mx-auto d-block" width="120" height="120"
                            src="{{ url('picture/img_fd06b99e276ab69db92a5bae61228dc2.png') }}">
                        <p class="text-center text-primary">กรมตรวจบัญชีสหกรณ์กระบี่</p>
                    </a>
                </div>
                <div class="card mb-2">
                    <a target="_blank" rel="noopener noreferrer" class="hover-shadow"
                        href="https://shorturl.asia/SCMmA">
                        <img class="rounded mx-auto d-block" width="120" height="120"
                            src="{{ url('picture/ตราสำนักงานสหกรณ์จังหวัดกระบี่.jpg') }}">
                        <p class="text-center text-primary">สำนักงานสหกรณ์จังหวัดกระบี่</p>
                    </a>
                </div>
                <div class="card mb-2">
                    <a target="_blank" rel="noopener noreferrer" class="hover-shadow"
                        href="https://shorturl.asia/g56qA">
                        <img class="rounded mx-auto d-block" width="120" height="120"
                            src="{{ url('picture/img_12b077835cddf4f35d3a3c285545a815.jpg') }}">
                        <p class="text-center text-primary">กระทรวงแรงงาน</p>
                    </a>
                </div>
                <div class="card mb-2">
                    <a target="_blank" rel="noopener noreferrer" class="hover-shadow"
                        href="https://shorturl.asia/uE52O">
                        <img class="rounded mx-auto d-block" width="120" height="120"
                            src="{{ url('picture/กรมส่งเสริมสหกรณ์.png') }}">
                        <p class="text-center text-primary">กรมส่งเสริมสหกรณ์</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/rk6qs">
                <img class="rounded mx-auto d-block hover-shadow" width="120" height="120"
                    src="{{ url('picture/crop-1588051633262.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/TIf9w">
                <img class="rounded mx-auto d-block hover-shadow" width="120" height="120"
                    src="{{ url('picture/crop-1588051648982.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/h73Cv">
                <img class="rounded mx-auto d-block hover-shadow" width="120" height="120"
                    src="{{ url('picture/crop-1588051777775.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/DJtdT">
                <img class="rounded mx-auto d-block hover-shadow" width="120" height="120"
                    src="{{ url('picture/shellKrabi.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/CIcU8">
                <img class="rounded mx-auto d-block hover-shadow" width="120" height="120"
                    src="{{ url('picture/crop-1588051728377.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/v69Mm">
                <img class="rounded mx-auto d-block hover-shadow" width="120" height="120"
                    src="{{ url('picture/crop-1588051745671.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/ofe7y">
                <img class="rounded mx-auto d-block hover-shadow" width="120" height="120"
                    src="{{ url('picture/logo-ummah-channel.png') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/lh6Ek">
                <img class="rounded mx-auto d-block hover-shadow" width="120" height="120"
                    src="{{ url('picture/SOUTHERN-COFFEE-LOGO.png') }}">
            </a>
        </div>
    </div>
@endsection
