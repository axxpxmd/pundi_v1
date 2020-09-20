@php
$image = App\Models\Images::select('id', 'footer', 'header', 'poster')->first();
@endphp
<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside>
            <div class="news-poster d-lg-block">
                <img class="bdr-5"  src="{{ config('app.ftp_src').'/images/'.$image->poster }}" width="350" alt="poster">
            </div>
        </aside>
        <div class="">
            <p class="text-center m-t-15 fs-14 text-grey"><i>- Advertisement -</i></p>
            <aside class="single_sidebar_widget popular_post_widget bg-transparent">
                @foreach ($right_sideBar as $i)
                <div class="media post_item m-t-20">
                    <img style="object-fit: cover; object-position: center" class="bdr-5" src="{{ config('app.ftp_src').'images/artikel/'.$i->gambar }}" width="120" height="90" alt="artikel">
                    <div class="media-body">
                        <span class="fs-13 text-uppercase">
                           <a class="f-orange" href="#">{{ $i->sub_kategori->n_sub_kategori }}</a> 
                        </span>
                        <a href="#">
                            <h3>{{ $i->judul }}</h3>
                        </a>
                        <i class="fas fa-clock fa-sm text-grey"></i>
                        <span class="fs-13 text-grey ml-1">{{ substr($i->created_at, 0, 10) }}</span>
                    </div>
                </div>
                @endforeach
            </aside>
        </div>
    </div>
</div>
