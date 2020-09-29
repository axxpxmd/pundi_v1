<nav>                  
    <ul>    
        <li>
            <a href="#" style="font-size: 13px !important">ULASAN <span class="fa fa-angle-down "></span></a>
            <ul class="submenu">
                @foreach ($sub_headline as $i)
                    <li><a href="#">{{ $i->n_sub_category }}</a></li>    
                @endforeach
            </ul>
        </li>
        <li>
            <a href="#" style="font-size: 13px !important">KAJIAN <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                @foreach ($sub_indepth as $i)
                    <li><a href="#">{{ $i->n_sub_category }}</a></li>
                @endforeach
            </ul> 
        </li>
        <li>
            <a href="#" style="font-size: 13px !important">KREATIVITAS <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                @foreach ($sub_kebijakan as $i)
                    <li><a href="#">{{ $i->n_sub_category }}</a></li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="#" style="font-size: 13px !important">SERBA SERBI <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                @foreach ($sub_serbaSerbi as $i)
                    <li><a href="#">{{ $i->n_sub_category }}</a></li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="#" style="font-size: 13px !important">KONSULTASI</a>
        </li>
        @if (Auth::user() != null)
        <li>
            <a href="#" style="font-size: 13px !important"">AKUN <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                <li><a href="">Edit Profil</a></li>
                <li><a href="">Kirim Tulisan</a></li>
                <li><a href="">Ketentuan Tulisan</a></li>
                <li><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </li>
        @else
        <li>
            <a href="#" style="font-size: 13px !important"">AKUN <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                <li><a href="">Kirim Tulisan</a></li>
                <li><a href="">Ketentuan Tulisan</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </li>
        @endif
        <li style="margin-left: -40px">
            <form class="form-row d-flex justify-content-center md-form form-sm mt-0" action="#" method="GET">
                <input type="text" class="row bdr-5 single-input-primary2 ml-5 w-75" name="hasil_search" style="margin-top: -8px; height: 30px;" placeholder="Search">
                <div class="input-group-prepend">
                    <button type="submit" style="border: none; background: black; height: 30px; margin-top: -8px; border-radius: 0px 5px 5px 0px">
                        <i class="fa fa-search" style="color: white"></i> 
                    </button>
                </div>
            </form>
        </li>
    </ul>
</nav>
