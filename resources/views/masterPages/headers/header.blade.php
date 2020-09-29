@php
    $logo = App\Models\Logo::select('header')->first();
    $header_news  = App\Models\Articles::select('id', 'title', 'status')->wherestatus(1)->orderBy('created_at', 'desc')->get();
    $sub_headline = App\Store\index::subHeadline();
    $sub_indepth    = App\Store\index::subIndepth();
    $sub_kebijakan  = App\Store\index::subKebijakan();
    $sub_serbaSerbi = App\Store\index::subSerbaSerbi();
    $sub_konsultasi = App\Store\index::subKebijakan();
@endphp
<header>
    <div class="header-area">
        <div class="main-header">
            <div class="header-top black-bg d-none d-md-block color-gradient1">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left row" style="margin-bottom: -22px">
                                <div class="fs-13 f-b m-l-15" style="margin-top: -3px !important">
                                    <i class="fa fa-bolt"></i>
                                    <span>TERBARU</span>
                                    <span class="vertical-line"></span>
                                </div>
                                <ul id="js-news" class="js-hidden">
                                    @foreach ($header_news as $i)
                                    <li class="news-item">
                                        <a style="color: black !important" href="#">{{ $i->title }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <i class="fas fa-calendar-check m-r-2"></i>
                                    <li>
                                        <a class="f-blk" id="hari"></a>
                                        ,
                                        <a class="f-blk" id="tanggal"></a>
                                        <a class="f-blk" id="bulan"></a>
                                        <a class="f-blk" id="tahun"></a>
                                        /
                                    </li>
                                    <li>
                                        <a class="f-blk" id="jam"></a>
                                        :
                                        <a class="f-blk" id="menit"></a>
                                        :
                                        <a class="f-blk" id="detik"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom -->
            <div class="header-mid d-none d-md-block color-gradient1">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo -mt-10">
                                <a href="{{ url('/') }}">
                                    <img src="{{ config('app.ftp_src').'images/logo/'.$logo->header }}" width="150px" alt="header">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="header-banner f-right">
                                <div class="main-menu d-none d-md-block">
                                    @include('masterPages.headers.navMenu')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sticky Header -->
            <div class="header-sticky color-gradient1">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="sticky-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ config('app.ftp_src').'images/logo/'.$logo->header }}" width="150px" alt="header">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="sticky-logo">
                                <div class="header-banner f-right ">
                                    <div class="main-menu d-none d-md-block">
                                        <div>
                                            @include('masterPages.headers.navMenuSticky')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none color-gradient1">
                                <div style="display: none">
                                    <div>
                                        @include('masterPages.headers.navMobile')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    // Jam
    window.setTimeout("waktu()", 1000);

    function addZero(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = addZero(waktu.getHours());
        document.getElementById("menit").innerHTML = addZero(waktu.getMinutes());
        document.getElementById("detik").innerHTML = addZero(waktu.getSeconds());
    }

    // Hari
    arrHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]
    Hari = new Date().getDay();
    document.getElementById("hari").innerHTML = arrHari[Hari];

    // Tanggal
    Tanggal = new Date().getDate();
    document.getElementById("tanggal").innerHTML = Tanggal;

    // Bulan
    arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    Bulan = new Date().getMonth();
    document.getElementById("bulan").innerHTML = arrbulan[Bulan];

    // Tahun
    Tahun = new Date().getFullYear();
    document.getElementById("tahun").innerHTML = Tahun;

</script>