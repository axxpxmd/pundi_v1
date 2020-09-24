<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ config('app.ftp_src').'images/logo/'.$logo->preloader }}" width="120px" alt="photo" style="margin-bottom: 18%">
            </div>
        </div>
    </div>
</div>
@section('script')
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".preloader").fadeOut();
    })
</script>
@endsection