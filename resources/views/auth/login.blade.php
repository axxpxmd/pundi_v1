@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <div class="container">
                        <form class="needs-validation" novalidate method="POST" action="{{ route('login') }}">
                            @csrf
                            <p class="text-center fs-30 f-b f-blk m-b-30">Login</p>
                            <div class="form-group row">
                                <label class="col-sm-2 f-b col-form-label" for="email">E-MAIL</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" id="email" class="form-control input single-input-primary @error('email') is-invalid @enderror" placeholder="example@email.com"/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Email / Password salah</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 f-b col-form-label" for="password">PASSWORD</label>
                                <div class="col-sm-10">
                                    <input type="password"  name="password" id="password" class="input single-input-primary @error('password') is-invalid @enderror" placeholder="Password"/>
                                    <a href="{{ route('password.request') }}">
                                        <p class="f-blk text-right fs-15 f-red mt-2">Lupa password?</p>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button class="genric-btn primary bdr-5" type="submit" value="Log in">Login <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                            <hr>
                            <p class="f-blk -mt-20">Belum punya akun? 
                                <a href="{{ route('register') }}">
                                    <u class="f-orange hover-blk">Daftar sekarang!</u>
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            @include('masterPages.sideBar')
        </div>
    </div>
</section>
@include('masterPages.footer')
@endsection
