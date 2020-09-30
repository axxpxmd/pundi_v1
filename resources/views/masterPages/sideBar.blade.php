@php
$sideBar = App\Models\Articles::select('id', 'title', 'category_id', 'sub_category_id', 'image', 'author_id', 'created_at')->wherestatus(1)->orderBy('created_at', 'desc')->take(4)->get();
$poster  = App\Models\Poster::select('poster')->get();
@endphp
<div class="col-lg-4">
    <div class="blog_right_sidebar make-me-sticky ">
        <aside>
            <div class="news-poster d-lg-block">
                <div class="">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators m-b-1">
                            @foreach( $poster as $i )
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            @foreach( $poster as $i )
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img class="bdr-5" style="object-fit: cover; object-position: center;-o-object-fit: cover"  src="{{ config('app.ftp_src').'/images/poster/'.$i->poster }}" width="350" height="460" alt="poster">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="">
            <p class="text-center m-t-15 fs-14 text-grey"><i>- Advertisement -</i></p>
            <aside class="single_sidebar_widget popular_post_widget bg-transparent">
                @foreach ($sideBar as $i)
                <div class="media post_item m-t-20">
                    <img style="object-fit: cover; object-position: center" class="bdr-5" src="{{ config('app.ftp_src').'images/artikel/'.$i->image }}" width="120" height="90" alt="artikel">
                    <div class="media-body">
                        <span class="fs-13 text-uppercase">
                           <a class="f-orange" href="#">{{ $i->sub_category->n_sub_category }}</a> 
                        </span>
                        <a class="judul-hover" href="#">
                            <p class="font-weight-bold text-black">{{ $i->title }}</p>
                        </a>
                        <i class="fas fa-clock fa-sm text-grey"></i>
                        <span class="fs-13 text-grey ml-1">{{ substr($i->created_at, 0, 10) }}</span>
                    </div>
                </div>
                @endforeach
            </aside>
            <aside class="single_sidebar_widget tag_cloud_widget " style="background-color: transparent !important">
                <div class="-mb-13">
                    <i class="fas fa-angle-up fa-lg arrow"></i>
                </div>
                <span class="f-b m-l-15 widget_title f-orange"> 
                    PUNDI.OR.ID – TAJAM DAN MENCERAHKAN
                </span>
                <div class="mt-2 ml-3">
                    <p class="text-black">PUNDI.OR.ID - Tajam dan Mencerahkan</p>
                    <p class="text-black">Jl. Kebun Raya, RT. 18/RW 6, Gg. Melati, Rejosari KG. I, Yogyakarta, 55171</p>
                    <p><a class="text-black" href="{{ config('app.url'). '/tentang-kami' }}">Tentang Kami</a></p>
                    <p><a class="text-black" href="">Disclaimer</a></p>
                    <p><a class="text-black" href="">Redaksi</a></p>
                    <p><a class="text-black" href="">Media Siber</a></p>
                </div>
            </aside>
        </div>
    </div>
</div>
