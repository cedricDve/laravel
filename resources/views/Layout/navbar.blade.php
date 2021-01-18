<div class="row col-sm-3">
                <a class="mr-1" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="mr-1" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a class="mr-1" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- Titel Webpage  -->
            <div class="row col-sm-12 line">
                <h1 class="m-auto">IT'_ers.</h1>
            </div>
            <!-- Navabar + search  -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <!-- Button for Navigation bar when user is on small device-->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar -->
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/info') }}">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/about')}}">About-Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('/contact-us')}}">Contact-Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Posts
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('posts.create')}}">Write a Post</a>
                                <a class="dropdown-item" href="{{route('posts.index')}}">Reed all Posts</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('ssearch')}}">Find a Post</a>
                            </div>
                        </li>
                    </ul>
                    <!-- Searchbar -> this will search for Users and Posts -->
                    <form class="form-inline my-2 my-lg-0" action="{{ route('ssearch')}}" type="get" role="search" >
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="ssearch">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                     <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item pr-2">

                            <a class="nav-link btn btn-outline-success my-3 my-sm-0" href="{{ route('login') }}"
                                aria-pressed="true">{{ __('Login') }}</a>


                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success my-3 my-sm-0" href="{{ route('register') }}"
                                aria-pressed="true">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                                @if( Auth::user()->avatar != null)
                                <img class=" p-1"
                                    src="/storage/avatars/{{  Auth::user()->id }}/{{ Auth::user()->avatar }}"
                                    style="height:40px">
                                    @endif
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->admin == 1)
                            <a class="dropdown-item" href="/admin">
                                    {{ __('Admin Panel') }}
                                </a>
                                @endif
                            <a class="dropdown-item" href="/profile/{{ Auth::user()->id}}">
                                    {{ __('My Profile') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>