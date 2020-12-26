<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/home.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/5833885897.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Header Above the Navbar => Only for welcome -->
    <section class="section-h">
        <div class="row header m-0">
            <div class="col-sm-2 above-nav-links">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-sm-10">
                <div class="header-t">
                    <h1 style="font-size:3em; color: #fff;">IT'_ers.</h1>
                </div>

            </div>
        </div>






        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <i style="color:white" class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item pr-2">

                        <a class="nav-link btn btn-outline-success " href="{{ route('login') }}"
                            aria-pressed="true">{{ __('Login') }}</a>


                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">

                        <a class="nav-link btn btn-outline-success" href="{{ route('register') }}"
                            aria-pressed="true">{{ __('Register') }}</a>


                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            <img class=" p-1" src="/storage/avatars/{{  Auth::user()->id }}/{{ Auth::user()->avatar }}"
                                style="height:40px">
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        <section class="banner">
            <div class="container">
                <div class="row justify-content-center">
                    <h1>Welcome to the IT'_ers Community!</h1>
                    <div class="row mb-2">
                        <div class="col-md-6 col-sm-3 pt-1">
                            <div
                                class=" banner-content shadow row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong style="color:#0275d8" class="d-inline-block mb-2">Read & Write</strong>
                                    <h3 class="mb-0 pb-1">Blog </h3>
                                    <p class="card-text mb-auto">Able to help everyone with questions and problems
                                        related to Computer Science, we created a
                                        blog.
                                    </p>
                                    <p><a href="#"><i class="fas fa-arrow-right"></i> Write a Post</a></p>
                                    <p><a href=""><i class="fas fa-arrow-right"></i> Read all Posts</a></p>
                                    <p><a href=""><i class="fas fa-arrow-right"></i> Find Post or Author</a></p>

                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <!--  class="" -->
                                    <img class="p-2 bd-placeholder-img" width="250" height="250"
                                        src="/images/pen-write.jpg" alt="Image of Somebody who is writing">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 pt-1">
                            <div
                                class=" banner-content shadow row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong style="color:#0275d8" class="d-inline-block mb-2">Read & Write</strong>
                                    <h3 class="mb-0 pb-1">Blog </h3>
                                    <p class="card-text mb-auto">Able to help everyone with questions and problems
                                        related to Computer Science, we created a
                                        blog.
                                    </p>
                                    <p><a href="#"><i class="fas fa-arrow-right"></i> Write a Post</a></p>
                                    <p><a href=""><i class="fas fa-arrow-right"></i> Read all Posts</a></p>
                                    <p><a href=""><i class="fas fa-arrow-right"></i> Find Post or Author</a></p>

                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <!--  class="" -->
                                    <img class="p-2 bd-placeholder-img" width="250" height="250"
                                        src="/images/pen-write.jpg" alt="Image of Somebody who is writing">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 pt-1">
                            <div
                                class=" banner-content shadow row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong style="color:#0275d8" class="d-inline-block mb-2">Read & Write</strong>
                                    <h3 class="mb-0 pb-1">Blog </h3>
                                    <p class="card-text mb-auto">Able to help everyone with questions and problems
                                        related to Computer Science, we created a
                                        blog.
                                    </p>
                                    <p><a href="#"><i class="fas fa-arrow-right"></i> Write a Post</a></p>
                                    <p><a href=""><i class="fas fa-arrow-right"></i> Read all Posts</a></p>
                                    <p><a href=""><i class="fas fa-arrow-right"></i> Find Post or Author</a></p>

                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <!--  class="" -->
                                    <img class="p-2 bd-placeholder-img" width="250" height="250"
                                        src="/images/pen-write.jpg" alt="Image of Somebody who is writing">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 pt-1">
                            <div
                                class=" banner-content shadow row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong style="color:#0275d8" class="d-inline-block mb-2">Read & Write</strong>
                                    <h3 class="mb-0 pb-1">Blog </h3>
                                    <p class="card-text mb-auto">Able to help everyone with questions and problems
                                        related to Computer Science, we created a
                                        blog.
                                    </p>
                                    <p><a href="#"><i class="fas fa-arrow-right"></i> Write a Post</a></p>
                                    <p><a href=""><i class="fas fa-arrow-right"></i> Read all Posts</a></p>
                                    <p><a href=""><i class="fas fa-arrow-right"></i> Find Post or Author</a></p>

                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <!--  class="" -->
                                    <img class="p-2 bd-placeholder-img" width="250" height="250"
                                        src="/images/pen-write.jpg" alt="Image of Somebody who is writing">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> 
<!-- Images for css animation -->
        <div class="set">
            <div class="animation-img"><img src="/images/laravel-logo.png" alt=""></div>
            <div class="animation-img"><img src="/images/phpsql.png" alt=""></div>

            <div class="animation-img"><img src="/images/ht.png" alt=""></div>
            <div class="animation-img"><img src="/images/js.png" alt=""></div>
        </div>

    </section>
    <section class="posts">
        <div class="container">
            <div>
                <h1>Posts<h1>
            </div>

            <div class="row ">
                <div class="col-sm-8 shadow post ">
                    <div class="row p-2">
                        <div class="col-sm-4 p-2 ">
                            <img class="img-fluid" src="/images/f-js-img.jpg" alt="Logo">
                        </div>
                        <div class="col-sm-8" style="border-bottom: 1px solid #0275d8;">

                            <h2>Title </h2>
                            <p>kazfeg kagekfa glzkeug filauugz lefga zeiu<p>

                                    <div class="row post-links">
                                        <div class="col-sm-4">eeeeeeeeee</div>
                                        <div class="col-sm-4">aaaaaaaa</div>
                                        <div class="col-sm-4">ooooooooo</div>
                                    </div>


                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-sm-4 shadow">
                    <h1>Popular authors</h1>
                    <div class="row m-1" style="border-left: 1px solid black">
                        <div class="col-sm-4 author-img">
                            <img class="img-fluid rounded-circle" style="border: 2px solid #0275d8"
                                src="/images/s-woman.jpg" alt="">
                        </div>
                        <div class="col-sm-8 author">
                            <h2>@Name</h2>
                            <p>Bio fugkazeug fkauzg fkuazg</p>
                            <div class="row author-links">
                                <div class="col-sm-6">eeeeeeeeee</div>
                                <div class="col-sm-6">aaaaaaaa</div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-4 ">
                    <h1>Popular Categories</h1>
                    <div class="row m-0" style="border-left: 1px solid black">
                        <div class="category-a cols-sm-4"><a href="#">Category</a></div>
                        <div class="category-a cols-sm-4"><a href="#">Category</a></div>
                        <div class="category-a cols-sm-4"><a href="#">Category</a></div>
                    </div>

                </div>
                    </div>

                </div>
                

            </div>


        </div>


    </section>


</body>

</html>
