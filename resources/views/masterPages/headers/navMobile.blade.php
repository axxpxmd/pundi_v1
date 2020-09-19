<nav>                  
    <ul id="navigation">    
        <li>
            <a href="#">Ulasan</a>
            <ul class="submenu">
                @foreach ($sub_headline as $i)
                    <li><a href="#">{{ $i->n_sub_kategori }}</a></li>    
                @endforeach
            </ul>
        </li>
        <li>
            <a href="#">Kajian</a>
            <ul class="submenu">
                @foreach ($sub_indepth as $i)
                    <li><a href="#">{{ $i->n_sub_kategori }}</a></li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="#">Kreativitas</a>
            <ul class="submenu">
                @foreach ($sub_kebijakan as $i)
                    <li><a href="#">{{ $i->n_sub_kategori }}</a></li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="#">Serba serbi</a>
            <ul class="submenu">
                @foreach ($sub_serbaSerbi as $i)
                    <li><a href="#">{{ $i->n_sub_kategori }}</a></li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="#">Konsultasi</a>
        </li>
        @if (Auth::user() != null)
        <li>
            <a href="#">Akun</a>
            <ul class="submenu">
                <li><a href="#">Edit Profil</a></li>
                <li><a href="#">Kirim Tulisan</a></li>
                <li><a href="#">Ketentuan Tulisan</a></li>
                <li><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </li>
        @else 
        <li>
            <a href="#">Akun</a>
            <ul class="submenu">
                <li><a href="#">Kirim Tulisan</a></li>
                <li><a href="#">Ketentuan Tulisan</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </li>
        @endif
        <li>
            <form class="form-row d-flex justify-content-center md-form form-sm mt-1" action="#" method="GET">
                <div class="input-group input-group-lg" style="margin-left: 6%">
                    <input type="text" class="single-input-primary2" name="hasil_search" style="width: 82%"  placeholder="Search Keyword">
                    <div class="input-group-prepend" style="background: #FEBD01;">
                        <button type="submit" style="border: none; background: #FEBD01; width: 50px">
                            <i class="fa fa-search" style="color: white"></i> 
                        </button>
                    </div>
                </div>
            </form>
        </li>
    </ul>
</nav>
