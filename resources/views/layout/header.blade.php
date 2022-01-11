<div class="header">
    <div class="header-logo-contain">
        <div class="logo-area">
            <div class="header-logo"></div>
            <div class="header-brand">Kwarovski</div>
        </div>
        <div class="header-signIn">

            <ul class="top-details menu-beta l-inline">
                @guest
                <li><a class="nav-item" href="{{route('login')}}">Login</a></li>
                <li><a id="registerUser" class="nav-item" href="{{route('register-user')}}">Register</a></li>
                @endguest
                @auth
                <div class="header__user">
                    <div class="header__user--avatar"></div>
                    <div class="header__user--name">{{Auth::user()->name}}</div>
                    <div class="header__user--moreinfor"></div>
                    @if(Auth::user()->is_admin == 0)
                    <button ><a href="{{route('admin')}}">Admin</a></button>
                @endif
                </div>                
                <li><a class="nav-item" href="{{route('signout')}}">Logout</a></li>
                @endauth
            </ul>



            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register-user') }}">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('signout') }}">Logout</a>
            </li> --}}
        </div>
    </div>

</div>