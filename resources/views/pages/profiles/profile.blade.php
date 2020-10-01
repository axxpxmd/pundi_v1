@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<section class="blog_area section-padding" style="background-color: #F7F7F7">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <div class="card no-b">
                        <div class="card-body">
                            <div class="text-center">
                                <img class="rounded-circle img-circular" src="{{ config('app.ftp_src').'images/ava/'.Auth::user()->photo }}" height="70" width="70"  alt="Photo profile">
                                <p class="fs-22 font-weight-bold text-black mt-3">{{ Auth::user()->name }}</p>
                                <p class="text-black -mt-10">“ {{ Auth::user()->bio }} ”</p>
                                <div class="mb-2 mt-n2">
                                    <a class="f-blk" href="https://web.facebook.com/{{ Auth::user()->facebook }}" target="blank">
                                        <i class="fa fa-facebook-square fa-lg mr-2"></i>
                                    </a>
                                    <a class="f-blk" href="https://twitter.com/{{ Auth::user()->twitter }}" target="blank">
                                        <i class="fa fa-twitter-square fa-lg mr-2"></i>
                                    </a>
                                    <a class="f-blk" href="https://www.instagram.com/{{ Auth::user()->instagram }}" target="blank"> 
                                        <i class="fab fa-instagram-square fa-lg"></i>
                                    </a>
                                </div>
                                <span class="bdr-5 fs-12 pengaturan-card">
                                    <a href="{{ route('profil.edit') }}" class="text-black font-weight-bold fs-14">Pengaturan</a>
                                </span>
                            </div>
                            <div class="mt-5">
                                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active text-black" id="home-tab" data-toggle="tab" href="#home" role="tab">Artikel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-black" id="profile-tab" data-toggle="tab" href="#profile" role="tab">Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel">
                                        @if ($article->hasPages())
                                        <table class="table mt-2 table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="30" style="border-bottom: none">#</th>
                                                    <th style="border-bottom: none">Judul</th>
                                                    <th width="60">Dilihat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($article as $index => $i)
                                                <tr>
                                                    <td scope="row">{{ $index+1 }}</td>
                                                    <td><a href="" class="text-black text-decoration-none">{{ $i->title }}</a></td>
                                                    <td>{{ $i->views }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div>
                                            {{ $article->links() }}
                                        </div>
                                        @else
                                        <div class="mt-2">
                                            <img class="mx-auto d-block" src="{{ asset('images/article-not-found.png') }}" width="180" alt="">
                                            <p class="text-center font-weight-bold fs-14">Belum ada artikel</p>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel">
                                        <div class="col-md-12 mt-2">
                                            {{-- <div class="row">
                                                <label class="col-md-3 s-12"><strong>Username</strong></label>
                                                <label class="col-md-8 s-12">{{ Auth::user()->username }}</label>
                                            </div> --}}
                                            <div class="row">
                                                <label class="col-md-3 s-12"><strong>Email</strong></label>
                                                <label class="col-md-8 s-12">{{ Auth::user()->email }}</label>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 s-12"><strong>Nama Depan</strong></label>
                                                <label class="col-md-8 s-12">{{ Auth::user()->first_name }}</label>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 s-12"><strong>Nama Belakang</strong></label>
                                                <label class="col-md-8 s-12">{{ Auth::user()->last_name }}</label>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 s-12"><strong>No Telp</strong></label>
                                                <label class="col-md-8 s-12">{{ Auth::user()->no_telp }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
</script>
@endsection
