<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IT\'_ers') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- Icons font awesome -->
    <script src="https://kit.fontawesome.com/5833885897.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/css/web.css" rel="stylesheet">
</head>

<body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg nv">
        <div class="container">
            <a class="navbar-brand" href="#">IT'_ers</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- SECTION  HEADER -->

    <section class="header">
        <div class="container py-4">
            <div class="row">
                <?php $index = 0; ?>
                @foreach($posts as $post)
                <?php 
                $index ++; ?>
                @if($index < 4 ) @if($index < 2) <!-- bootstrap: 8 __ 4=12 -->
                    <div class="col-sm-8">

                        <div class="header-post">
                            <!-- Responsive image -->
                            <img class="img-fluid shadow" src="/images/header3.jpg" alt="">
                            <div class="header-post-links">
                                <a href="#"><i class="fas fa-calendar-alt">Date</i><a>
                                        <a class="mt-1" href="#"><i class="fas fa-layer-group">Category</i><a>
                            </div>
                            <div class="header-post-content">
                                <div class="row">
                                    <!-- Responsive image In fixed div: col of 3-->
                                    <div class="col-sm-3">
                                        <img class="img-fluid " src="/images/header2.jpg" alt="">
                                    </div>
                                    <!-- Info In fixed div: col of 9-->
                                    <div class="col-sm-9">
                                        <h2>Hello
                                        </h2>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($index == 2)
                    <div class="col-sm-4">
                        <div class="header-post">
                            <!-- Responsive image -->
                            <img class="img-fluid" src="/images/header3.jpg" alt="">
                            <div class="header-post-links">
                                <a href="#"><i class="fas fa-calendar-alt">Date</i><a>
                                        <a class="mt-1" href="#"><i class="fas fa-layer-group">Category</i><a>
                            </div>
                            <div class="header-post-content">
                                <div class="row">
                                    <!-- Responsive image In fixed div: col of 3-->
                                    <div class="col-sm-3">
                                        <img class="img-fluid rounded-circle" src="/images/header3.jpg" alt="">
                                    </div>
                                    <!-- Info In fixed div: col of 9-->
                                    <div class="col-sm-9">
                                        <h3>zyefgzjiay
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>





                        @endif
                        @if($index == 3)
                        <div class="header-post mt-4">
                            <!-- Responsive image -->
                            <img class="img-fluid" src="/images/header3.jpg" alt="">
                            <div class="header-post-links">
                                <a href="#"><i class="fas fa-calendar-alt">Date</i><a>
                                        <a class="mt-1" href="#"><i class="fas fa-layer-group">Category</i><a>
                            </div>
                            <div class="header-post-content">
                                <div class="row">
                                    <!-- Responsive image In fixed div: col of 3-->
                                    <div class="col-sm-3">
                                        <img class="img-fluid rounded-circle" src="/images/header3.jpg" alt="">
                                    </div>
                                    <!-- Info In fixed div: col of 9-->
                                    <div class="col-sm-9">
                                        <h3>zyefgzjiay
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @endif

                    @endforeach
            </div>
        </div>



    </section>


    <!-- SECTION  POSTS-->
    <div class="container">
    <nav class="navbar navbar-expand-lg">
        <h1 class="navbar-brand">Other posts from different users</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Write a  <span class="sr-only">new</span> Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            <span class="navbar-text">
             You can follow us the social netowrks
            </span>
        </div>
    </nav>
    </div>
    <section class="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <!-- Article for Posts -->
                    @foreach($unique_posts as $a_post)
                    <div class="row post-p">
                        <div class="col-sm-8">
                            <h3 class=" pt-1" style="text-transform:capitalize;"> {{ $a_post->title }}</h3>
                            <p>{{ $a_post->content }}</p>
                            <p style="font-size: 0.7rem;">Posted by : <span class="post-p-span">{{ $post->author->name ?? "N/A"}}</span></p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid" alt=""
                                src="/storage/post_images/{{  $a_post->user_id }}/{{ $a_post->post_image }}">
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-4">kzakfe</div>
                        <div class="col-sm-4">dalzheid</div>
                        <div class="col-sm-4">aliheli</div>

                    </div>
                    <div class="row authors">
                        <h3>Some <span class="authors-span">Popular</span> authors</h2>
                        @foreach($authors as $author)
                        <div class="col-sm-4">
                            <img class="img-fluid" src="/storage/avatars/{{  $author->id }}/{{ $author->avatar }}"
                                alt="">
                        </div>
                        <div class="col-sm-8 author pt-1 pb-2">
                            <a class="author-t" href="#"><i class="fas fa-at">
                            <span class="authors-span-w">{{ $author->name }}</span></i></a>

                            <p class="m-0">{{ $author->biography }}<p>
                                    <div class="social-link">
                                        <i class="far fa-envelope"><span class="authors-span-w">{{ $author->email }}</span></i>
                                
                                    </div>
                        </div>


                        @endforeach

                        <h4 class="cat pt-2">Popular Categories</h4>
                        <div class="categories w-100 text-center">
                            <p class="category"><a href="#">
                                    Category
                                </a></p>
                            <p class="category"><a href="#">
                                    Category
                                </a></p>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- SECTION  FOOTER-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Links</h4>
                    <ul>
                        <li> <a href="#"> google
                            </a></li>
                        <li> <a href="#"> google
                            </a></li>
                        <li> <a href="#"> google
                            </a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <a href="#">IT'_ers</a>
                    <p>ao oau eoa o </p>
                </div>

                <div class="col-md-3">
                    <h4> About Us </h4>
                    <ul>
                        <li><a href=""> Contact-Us </a></li>
                        <li><a href=""> About-Page </a> </li>
                    </ul>



                </div>
                <div class="col-md-3">
                    <h4>Links</h4>
                    <ul>
                        <li> <a href="#"> google
                            </a></li>
                        <li> <a href="#"> google
                            </a></li>
                        <li> <a href="#"> google
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="w-100 text-center credits">
                <p>Made by <a href="#">Cédric Devogelaere</a> &copy; 2020. All rights reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>
