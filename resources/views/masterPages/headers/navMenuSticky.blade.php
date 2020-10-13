<nav>
    <ul>
        <li>
            <a href="{{ route('category',str_slug($category1->n_category)) }}" style="font-size: 13px !important" class="text-uppercase">{{ $category1->n_category }} <span class="fa fa-angle-down "></span></a>
            <ul class="submenu">
                @foreach ($subCategory1 as $i)
                    <li><a href="sub-kategori">{{ $i->n_sub_category }}</a></li>    
                @endforeach
            </ul>
        </li>
        <li>
            <a href="{{ route('category',str_slug($category2->n_category)) }}" style="font-size: 13px !important" class="text-uppercase">{{ $category2->n_category }} <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                @foreach ($subCategory2 as $i)
                    <li><a href="sub-kategori">{{ $i->n_sub_category }}</a></li>
                @endforeach
            </ul> 
        </li>
        <li>
            <a href="{{ route('category',str_slug($category3->n_category)) }}" style="font-size: 13px !important" class="text-uppercase">{{ $category3->n_category }} <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                @foreach ($subCategory3 as $i)
                    <li><a href="sub-kategori">{{ $i->n_sub_category }}</a></li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="{{ route('category',str_slug($category4->n_category)) }}" style="font-size: 13px !important" class="text-uppercase">{{ $category4->n_category }} <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                @foreach ($subCategory4 as $i)
                    <li><a href="sub-kategori">{{ $i->n_sub_category }}</a></li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="konsultasi" style="font-size: 13px !important" class="text-uppercase">{{ $category5->n_category }}</a>
        </li>
        @if (Auth::user() != null)
        <li>
            <a href="" style="font-size: 13px !important"">AKUN <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                <li><a href="{{ route('profil') }}"><i class="fa fa-user-edit mr-2"></i>Edit Profil</a></li>
                <li><a href="kirim-tulisan"><i class="fa fa-file-alt mr-2"></i>Kirim Tulisan</a></li>
                <li><a href="{{ config('app.url'). '/ketentuan-tulisan' }}"><i class="fa fa-file-alt mr-2"></i>Ketentuan Tulisan</a></li>
                <li><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt mr-2"></i>Log Out</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </li>
        @else
       <li>
            <a href="" style="font-size: 13px !important"">AKUN <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                <li><a href="kirim-tulisan"><i class="fa fa-file-alt mr-2"></i>Kirim Tulisan</a></li>
                <li><a href="{{ config('app.url'). '/ketentuan-tulisan' }}"><i class="fa fa-file-alt mr-2"></i>Ketentuan Tulisan</a></li>
                <li><a href="{{ route('login') }}"><i class="fa fa-sign-in-alt mr-2"></i>Login</a></li>
            </ul>
        </li>
        @endif
        <li style="margin-left: -40px">
            <form class="form-row d-flex justify-content-center md-form form-sm mt-0" action="#" method="GET">
                <input type="text" class="row bdr-5 single-input-primary2 ml-5 w-75" name="hasil_search" style="margin-top: -8px; height: 30px;" placeholder="Search">
                <div class="input-group-prepend bdr-5">
                    <button type="submit" style="border: none; background:black; height: 30px; margin-top: -8px; border-radius: 0px 5px 5px 0px">
                        <i class="fa fa-search" style="color: white"></i> 
                    </button>
                </div>
            </form>
        </li>
    </ul>
</nav>

