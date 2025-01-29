@extends('layout')
@section('title', 'สหกรณ์อิสลามษะกอฟะฮ จำกัด')
@section('content')
    <div id="mainCarousel" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-carousel-init>
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#mainCarousel" data-mdb-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#mainCarousel" data-mdb-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('picture/267-1.jpg') }}" class="d-block w-100" />
            </div>
            <div class="carousel-item">
                <img src="{{ url('picture/ค่านิยมเว็บ.jpg') }}" class="d-block w-100" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#mainCarousel" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#mainCarousel" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container mt-4">
        <div id="carouselTwo" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('banner/banner.jpg') }}" class="d-block w-100" data-mdb-ripple-init data-mdb-modal-init
                        data-mdb-target="#Modal2" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('picture/521-2.jpg') }}" class="d-block w-100" />
                </div>
                <div class="carousel-item ">
                    <img src="{{ url('picture/515-1.jpg') }}" class="d-block w-100" />
                </div>
                <div class="carousel-item ">
                    <img src="{{ url('picture/450.jpg') }}" class="d-block w-100" data-mdb-ripple-init data-mdb-modal-init
                        data-mdb-target="#Modal0" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('picture/345-1.jpg') }}" class="d-block w-100" data-mdb-ripple-init data-mdb-modal-init
                        data-mdb-target="#Modal1" />
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselTwo" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselTwo" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="modal fade modal-lg" id="Modal0" tabindex="-1" aria-labelledby="Modal0" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/Wjw0Eovdgg0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="modal fade modal-lg" id="Modal1" tabindex="-1" aria-labelledby="Modal1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="{{ url('picture/345.jpg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-lg" id="Modal2" tabindex="-1" aria-labelledby="Modal2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="{{ url('banner/bannerdetail.jpg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="row h-100 d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="/register" target="_blank" rel="noopener noreferrer" class="card hover-shadow">
                            <img src="{{ url('picture/433.png') }}" class="w-100">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="/deposit" target="_blank" rel="noopener noreferrer" class="card hover-shadow">
                            <img src="{{ url('picture/433-1.png') }}" class="w-100">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="/credit_service" target="_blank" rel="noopener noreferrer" class="card hover-shadow">
                            <img src="{{ url('picture/433-2.png') }}" class="w-100">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="/document" target="_blank" rel="noopener noreferrer" class="card hover-shadow">
                            <img src="{{ url('picture/433-3.png') }}" class="w-100">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="d-flex flex-row-reverse">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/Sakofah.Islam.Savings&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="340" height="500" style="border:none;overflow:hidden" scrolling="no"
                        frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <ul class="nav nav-pills nav-justified mb-3" role="tablist">
            <li class="nav-item" role="presentation">
                <a data-mdb-pill-init class="nav-link active" id="ex3-tab-1" href="#newspill1" role="tab"
                    aria-controls="newspill1" aria-selected="true"><i
                        class="fas fa-bullhorn fa-fw me-2"></i>ข่าวประชาสัมพันธ์</a>
            </li>
            <li class="nav-item" role="presentation">
                <a data-mdb-pill-init class="nav-link" id="ex3-tab-2" href="#newspill2" role="tab"
                    aria-controls="newspill2" aria-selected="false"><i
                        class="fas fa-user-group fa-fw me-2"></i>ข่าวสวัสดิการ</a>
            </li>
            <li class="nav-item" role="presentation">
                <a data-mdb-pill-init class="nav-link" id="ex3-tab-3" href="#newspill3" role="tab"
                    aria-controls="newspill3" aria-selected="false"><i
                        class="fas fa-hand-holding-medical fa-fw me-2"></i>มูลนิธิษะกอฟะฮ</a>
            </li>
            <li class="nav-item" role="presentation">
                <a data-mdb-pill-init class="nav-link" id="ex3-tab-3" href="#newspill4" role="tab"
                    aria-controls="newspill4" aria-selected="false"><i
                        class="fas fa-credit-card fa-fw me-2"></i>ข่าวสินเชื่อ</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="newspill1" role="tabpanel" aria-labelledby="ex3-tab-1">
                <div class="row">
                    @foreach ($information as $index => $item)
                        <div class="col-3">
                            <div class="card m-1">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="{{ url('uploads/' . $item->picture_name) }}" class="img-fluid w-100"
                                        style="height: 200px;" />
                                    <a href="/news/{{ $item->news_number }}">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-text text-limit">{{ $item->title }}</p>
                                </div>
                                <div class="card-footer">
                                    <small>{{ thaidate('j F Y', $item->dateupload) }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="newspill2" role="tabpanel" aria-labelledby="ex3-tab-2">
                <div class="row">
                    @foreach ($welfare as $index => $item)
                        <div class="col-3">
                            <div class="card m-1">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="{{ url('uploads/' . $item->picture_name) }}" class="img-fluid w-100"
                                        style="height: 200px;" />
                                    <a href="/news/{{ $item->news_number }}">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-text text-limit">{{ $item->title }}</p>
                                </div>
                                <div class="card-footer">
                                    <small>{{ thaidate('j F Y', $item->dateupload) }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="newspill3" role="tabpanel" aria-labelledby="ex3-tab-3">
                <div class="row">
                    @foreach ($foundation as $index => $item)
                        <div class="col-3">
                            <div class="card m-1">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="{{ url('uploads/' . $item->picture_name) }}" class="img-fluid w-100"
                                        style="height: 200px;" />
                                    <a href="/news/{{ $item->news_number }}">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-text text-limit">{{ $item->title }}</p>
                                </div>
                                <div class="card-footer">
                                    <small>{{ thaidate('j F Y', $item->dateupload) }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="newspill4" role="tabpanel" aria-labelledby="ex3-tab-3">
                <div class="row">
                    @foreach ($credit as $index => $item)
                        <div class="col-3">
                            <div class="card m-1">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="{{ url('uploads/' . $item->picture_name) }}" class="img-fluid w-100"
                                        style="height: 200px;" />
                                    <a href="/news/{{ $item->news_number }}">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-text text-limit">{{ $item->title }}</p>
                                </div>
                                <div class="card-footer">
                                    <small>{{ thaidate('j F Y', $item->dateupload) }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="text-dark mt-2">วารสารออนไลน์</h5>
                <hr>
                <div class="ratio ratio-4x3">
                    <iframe src="https://anyflip.com/bookcase/wueoy/" seamless="seamless" scrolling="no" frameborder="0"
                        allowtransparency="true" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="ratio ratio-16x9 my-3">
                            <iframe src="https://www.youtube.com/embed/m0o5aStUkYg" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="ratio ratio-16x9 my-3">
                            <iframe src="https://www.youtube.com/embed/zzvuyxuuHPs" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="ratio ratio-16x9 my-3">
                            <iframe src="https://www.youtube.com/embed/SV7IdDXAX0A" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col-2">
                <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/IKm8k">
                    <img class="rounded mx-auto d-block"
                        style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                        src="{{ url('picture/ตรากรมที่ดิน.png') }}">
                </a>
            </div>
            <div class="col-2">
                <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/VpM47">
                    <img class="rounded mx-auto d-block"
                        style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                        src="{{ url('picture/กระทรวงเกษตรและสหกรณ์.png') }}">
                </a>
            </div>
            <div class="col-2">
                <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/PRMAt">
                    <img class="rounded mx-auto d-block"
                        style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                        src="{{ url('picture/img_fd06b99e276ab69db92a5bae61228dc2.png') }}">
                </a>
            </div>
            <div class="col-2">
                <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/SCMmA">
                    <img class="rounded mx-auto d-block"
                        style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                        src="{{ url('picture/ตราสำนักงานสหกรณ์จังหวัดกระบี่.jpg') }}">
                </a>
            </div>
            <div class="col-2">
                <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/g56qA">
                    <img class="rounded mx-auto d-block"
                        style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                        src="{{ url('picture/img_12b077835cddf4f35d3a3c285545a815.jpg') }}">
                </a>
            </div>
            <div class="col-2">
                <a target="_blank" rel="noopener noreferrer" href="https://shorturl.asia/uE52O">
                    <img class="rounded mx-auto d-block"
                        style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                        src="{{ url('picture/กรมส่งเสริมสหกรณ์.png') }}">
                </a>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer"
                href="https://www.facebook.com/Sakofah.Wittayaphat.School/?ref=bookmarks">
                <img class="rounded mx-auto d-block"
                    style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                    src="{{ url('picture/crop-1588051633262.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/profile.php?id=100064546278455">
                <img class="rounded mx-auto d-block"
                    style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                    src="{{ url('picture/crop-1588051648982.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/profile.php?id=100083121019673">
                <img class="rounded mx-auto d-block"
                    style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                    src="{{ url('picture/crop-1588051777775.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/ADODSKF">
                <img class="rounded mx-auto d-block"
                    style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                    src="{{ url('picture/shellKrabi.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCffHrfpeGIw4dlLCs-IEGDg">
                <img class="rounded mx-auto d-block"
                    style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                    src="{{ url('picture/crop-1588051728377.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/Sakofah.Islam.Savings/">
                <img class="rounded mx-auto d-block"
                    style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                    src="{{ url('picture/crop-1588051745671.jpg') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/watch/UmmahChannel.Fan/">
                <img class="rounded mx-auto d-block"
                    style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                    src="{{ url('picture/logo-ummah-channel.png') }}">
            </a>
        </div>
        <div class="col-sm">
            <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/profile.php?id=100057631292290">
                <img class="rounded mx-auto d-block"
                    style="width: 100vw;height:auto;max-width:50%;display:block;margin:auto"
                    src="{{ url('picture/SOUTHERN-COFFEE-LOGO.png') }}">
            </a>
        </div>
    </div>
@endsection
