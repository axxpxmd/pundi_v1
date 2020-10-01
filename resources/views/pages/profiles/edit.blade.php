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
