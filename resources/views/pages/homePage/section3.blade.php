<section class="whats-news-area m-t-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 -mt-10">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="section-tittle">
                            <div class="-mb-13">
                                <i class="fas fa-angle-up fa-lg arrow"></i>
                            </div>
                            <span class="fs-18 m-l-15 title-card"> 
                                BERITA TERBARU
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 m-t-5">
                        <div class="properties__button">                                       
                            <nav>                                                                     
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active fs-14i text-uppercase" id="nav-home-tab" data-toggle="tab" href="#semua">Semua</a>
                                    <a class="nav-item nav-link fs-14i text-uppercase" id="nav-profile-tab" data-toggle="tab" href="#card1">{{ $satu->n_kategori }}</a>
                                    <a class="nav-item nav-link fs-14i text-uppercase" id="nav-contact-tab" data-toggle="tab" href="#card2">{{ $dua->n_kategori }}</a>
                                    <a class="nav-item nav-link fs-14i text-uppercase" id="nav-last-tab" data-toggle="tab" href="#card3">{{ $tiga->n_kategori }}</a>
                                    <a class="nav-item nav-link fs-14i text-uppercase" id="nav-Sports" data-toggle="tab" href="#card4">{{ $empat->n_kategori }}</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row -mt-15">
                    <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="semua">           
                                <div class="whats-news-caption">
                                    <div class="row">
                                        @foreach ($semua as $i)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news m-b-30">
                                                <div class="what-img">
                                                    <img style="object-fit: cover; object-position: center" src="{{ config('app.ftp_src').'images/artikel/'.$i->gambar }}" height="300" alt="photo"">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="bdr-5" style="background-color: #FEBD01; color: white">
                                                        <a href="#">{{ $i->kategori->n_kategori }}</a>
                                                    </span>
                                                    <i class="fas fa-clock fa-xs m-l-10 text-grey"></i>
                                                    <span style="color: grey; margin-left: -10px">{{ substr($i->created_at, 0, 10) }}</span>
                                                    <h4><a href="#">{{ $i->judul }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="card1">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        @foreach ($headline as $i)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{ config('app.ftp_src').'images/artikel/'.$i->gambar }}" height="300" alt="photo"">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="bdr-5" style="background-color: #FEBD01; color: white">
                                                        <a href="#">{{ $i->kategori->n_kategori }}</a>
                                                    </span>
                                                    <i class="fas fa-clock fa-xs m-l-10 text-grey"></i>
                                                    <span style="color: grey; margin-left: -10px">{{ substr($i->created_at, 0, 10) }}</span>
                                                    <h4><a href="#">{{ $i->judul }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="card2">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        @foreach ($indepth as $i)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img style="object-fit: cover; object-position: center" src="{{ config('app.ftp_src').'images/artikel/'.$i->gambar }}" height="300" alt="photo"">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="bdr-5" style="background-color: #FEBD01; color: white">
                                                        <a href="#">{{ $i->kategori->n_kategori }}</a>
                                                    </span>
                                                    <i class="fas fa-clock fa-xs m-l-10 text-grey"></i>
                                                    <span style="color: grey; margin-left: -10px">{{ substr($i->created_at, 0, 10) }}</span>
                                                    <h4><a href="#">{{ $i->judul }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="card3">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        @foreach ($kebijakan as $i)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img style="object-fit: cover; object-position: center" src="{{ config('app.ftp_src').'images/artikel/'.$i->gambar }}" height="300" alt="photo"">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="bdr-5" style="background-color: #FEBD01; color: white">
                                                        <a href="#">{{ $i->kategori->n_kategori }}</a>
                                                    </span>
                                                    <i class="fas fa-clock fa-xs m-l-10 text-grey"></i>
                                                    <span style="color: grey; margin-left: -10px">{{ substr($i->created_at, 0, 10) }}</span>
                                                    <h4><a href="#">{{ $i->judul }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="card4">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        @foreach ($serbaSerbi as $i)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img style="object-fit: cover; object-position: center" src="{{ config('app.ftp_src').'images/artikel/'.$i->gambar }}" height="300" alt="photo"">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="bdr-5" style="background-color: #FEBD01; color: white">
                                                        <a href="#">{{ $i->kategori->n_kategori }}</a>
                                                    </span>
                                                    <i class="fas fa-clock fa-xs m-l-10 text-grey"></i>
                                                    <span style="color: grey; margin-left: -10px">{{ substr($i->created_at, 0, 10) }}</span>
                                                    <h4><a href="#">{{ $i->judul }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('pages.homePage.sideBar')
        </div>
        <hr width="100%" class="-mt-10" style="color: #ddd">
    </div>
</section>