@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<div class="container m-t-15">
    <div class="m-0">
        <i class="fa fa-home"></i>
        <a class="m-l-8 m-r-8 f-red fs-14 non-hover f-orange hover-blk" href="{{ route('/') }}">
            <span>Home</span>
        </a>
        <i class="fa fa-angle-right"></i>
        <a class="m-l-8 m-r-8 f-red fs-14 non-hover f-orange hover-blk" href="{{ route('sub-category',str_slug($article->category->n_category)) }}">
            <span>{{ $article->category->n_category }}</span>
        </a>
        <i class="fa fa-angle-right"></i>
        <span>{{substr($article->title, 0, 20)}}...</span>
    </div>
</div>
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post" style="position: -webkit-sticky">
                    <div class="blog_detail">
                        <p class="f-b fs-25 text-black">{{ $article->title }}</p>
                        <div class="mt-2">
                            <span class="bdr-5 fs-12 f-b sub-kategori-card">
                                <a class="hover-blk" href="{{ route('sub-category',str_slug($article->sub_category->n_sub_category)) }}">{{ $article->sub_category->n_sub_category }}</a>
                            </span>
                            <img src="{{ config('app.ftp_src').'images/ava/'.$article->user->photo }}" class="rounded-circle img-circular m-l-30" height="45" width="45" alt="photo">
                            <a class="text-black judul-hover" href="{{ route('other-user', str_slug($article->user->name)) }}">
                                <span class="fs-14 f-b m-l-10">{{ $article->user->name }}</span>
                            </a>
                            <i class="fas fa-clock m-l-15 text-grey"></i>
                            <span class="fs-14">{{ substr($article->created_at, 0, 40) }}</span>
                            <i class="fa fa-comments m-l-15 text-grey"></i>
                            <span class="fs-14">{{ $comment->count() }} Komentar</span>
                            <i class="fa fa-eye m-l-15 f-orange"></i>
                            <span class="fs-14">{{ $article->views }}</span>
                        </div>
                        <div class="m-b-25 mt-3">
                            @if (Storage::disk('ftp')->exists('images/artikel/' . $article->image) == true)
                            <img class="img-fluid bdr-5" width="800" src="{{ config('app.ftp_src').'images/artikel/'.$article->image }}" alt="photo">
                            @else
                            <img class="img-fluid bdr-5" width="800" src="{{ asset('images/404.png') }}" alt="photo">
                            @endif
                            <p class="text-grey fs-12">Foto: {{ $article->source_image }}</p>
                        </div>
                        <div class="mt-n3">
                            {!! str_replace(["&nbsp;", "&rdquo;", "&ldquo;", "&rsquo;", "&hellip;"],' ',$article->content) !!}
                        </div><hr>
                    </div>
                </div>
            </div>
            @include('masterPages.sideBar')
        </div>
    </div>
</section>
@include('masterPages.footer')
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#tombol_hide").click(function () {
            $("#more").show();
            $("#less").hide();
            $("#less1").hide();
        })

        $("#tombol_show").click(function () {
            $("#more").hide();
            $("#less").show();
            $("#less1").show();
        })
    });
</script>
@endsection
