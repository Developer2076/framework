{{--<div class="w3-bar w3-theme-l1">--}}
{{--    <a href="#" class="w3-bar-item w3-button">Home</a>--}}
{{--    <a href="#" class="w3-bar-item w3-button">Link 1</a>--}}
{{--    <a href="#" class="w3-bar-item w3-button">Link 2</a>--}}
{{--    <a href="#" class="w3-bar-item w3-button">Link 3</a>--}}
{{--</div>--}}
<!-- Grey with black text -->
{{-- W3Nav --}}


<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{!! url('/') !!}">MEDICARE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{!! url('/') !!}">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! url('/about') !!}">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! url('/blog') !!}">BLOG</a>
            </li>
{{--            <li class="nav-item dropdown w3-dropdown-hover">--}}
{{--                <a class="nav-link dropdown-toggle w3-text-white w3-button" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    USER--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu w3-dropdown-content w3-bar-block w3-border" aria-labelledby="navbarDropdown">--}}
{{--                    @if(\Illuminate\Support\Facades\Auth::check())--}}
{{--                        <a class="dropdown-item w3-bar-item w3-button" href="{!! url('/logout') !!}">Logout</a>--}}
{{--                    @else--}}
{{--                        <a class="dropdown-item" href="{!! url('/login') !!}">Login</a>--}}
{{--                        <a class="dropdown-item" href="{!! url('/register') !!}">Register</a>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </li>--}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle w3-text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    USER
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a class="dropdown-item" href="{!! url('/logout') !!}">Logout</a>
                    @else
                        <a class="dropdown-item" href="{!! url('/login') !!}">Login</a>
                        <a class="dropdown-item" href="{!! url('/register') !!}">Register</a>
                    @endif
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! url('/contact') !!}">CONTACT</a>
            </li>
        </ul>
        {{--        <form class="form-inline my-2 my-lg-0">--}}
        {{--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
        {{--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
        {{--        </form>--}}
    </div>
</nav>
