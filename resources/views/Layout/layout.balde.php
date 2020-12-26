<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Link to own css stylesheet -->
    <link rel="stylesheet" href="testP.css" type="text/css">
    <!--Script to Fint Awssome (icons) -->
    <script src="https://kit.fontawesome.com/5833885897.js" crossorigin="anonymous"></script>
    <!--Script & Link to Bootstrap  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <!-- Navigation Bar with Header, social Links and Navgiation Bar -->
    <section class="s-a">
        <div class="container">
            <!-- Social Links -->
            <div class="row col-sm-3">
                <a class="mr-1" href="#"><i class="fab fa-twitter"></i></a>
                <a class="mr-1" href="#"><i class="fab fa-facebook"></i></a>
                <a class="mr-1" href="#"><i class="fab fa-instagram"></i></a>
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
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About-Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact-Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Posts
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Write a Post</a>
                                <a class="dropdown-item" href="#">Reed all Posts</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Find a Post</a>
                            </div>
                        </li>
                    </ul>
                    <!-- Searchbar -> this will search for Users and Posts -->
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <!-- Banner For Profile-->

            <head>
                <div class="row h m-0">
                    <div class="col-lg-8 col-sm-12 p-0">
                        <img class="img-fluid" src="a.jpg" alt="Post Image">
                        <div class="post-h">
                            <div class="row col-sm-10">
                                <button class="btn btn-primary">Category</button>
                            </div>
                            <div class="row col-sm-10">
                                <h1 class="text-break text-capitalize">titel</h1>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <img class="img-fluid rounded-circle"
                                        src="https://i0.wp.com/widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-3.png?resize=217%2C217&ssl=1"
                                        alt="AvatarUser">
                                </div>
                                <div class="col-sm-10 d-flex">
                                    <h5 class="text-break text-capitalize"><a href="#">#</a>joe Smith </h5>
                                    <p>&nbsp ~&nbsp </p>
                                    <p>@ 2 July, 11:00</p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-6 p-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- POST2-->
                                <img class="img-fluid" src="a.jpg" alt="Post Image">
                                <div class="post-h">
                                    <div class="row col-sm-10">
                                        <button class="btn btn-primary">Category</button>
                                    </div>
                                    <div class="row col-sm-10">
                                        <h1 class="text-break text-capitalize">titel</h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img class="img-fluid rounded-circle"
                                                src="https://i0.wp.com/widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-3.png?resize=217%2C217&ssl=1"
                                                alt="AvatarUser">
                                        </div>
                                        <div class="col-sm-10 d-flex">
                                            <h5 class="text-break text-capitalize"><a href="#">#</a>joe Smith </h5>
                                            <p>&nbsp ~&nbsp </p>
                                            <p>@ 2 July, 11:00</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- POST2-->
                                <img class="img-fluid" src="a.jpg" alt="Post Image">
                                <div class="post-h">
                                    <div class="row col-sm-10">
                                        <button class="btn btn-primary">Category</button>
                                    </div>
                                    <div class="row col-sm-10">
                                        <h1 class="text-break text-capitalize">titel</h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img class="img-fluid rounded-circle"
                                                src="https://i0.wp.com/widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-3.png?resize=217%2C217&ssl=1"
                                                alt="AvatarUser">
                                        </div>
                                        <div class="col-sm-10 d-flex">
                                            <h5 class="text-break text-capitalize"><a href="#">#</a>joe Smith </h5>
                                            <p>&nbsp ~&nbsp </p>
                                            <p>@ 2 July, 11:00</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </head>
        </div>
    </section>
    <!-- Posts Blocks -->
    <section class="s-b">
        <div class="container">
            <div class="row">
                <!-- 4POST A ROW for lg otherwise 2-->
                <!--Post 1-->
                <div class="col-lg-3 col-sm-6 post-l shadow mt-5 ">

                    <div class="row">
                        <div class="col-sm-12"> <img class="img-fluid" src="js-a.jfif" alt=""></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 pt-4">
                                <p class="text-break text-capitalize"><a href="#">#</a>joe Smith </p>
                            </div>
                            <div class="col-sm-4">
                                <img class="img-fluid rounded-circle"
                                    src="https://i0.wp.com/widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-3.png?resize=217%2C217&ssl=1"
                                    alt="AvatarUser">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <h2>Titel zoefg ozeg oeu g</h2>
                        </div>
                        <div class="row col-sm-12">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, nostrum laboriosam,
                                assumenda optio non vero minus commodi corrupti iusto ad dolorem. Eos ea minus
                                repellendus perspiciatis totam fugiat velit voluptatem!</p>
                            <p>@ 2 July, 11:00</p>
                            <p>&nbsp ~&nbsp </p>
                            <p>7 Likes</p>
                        </div>
                        <div class="row col-sm-12 m-3">
                            <button class="btn btn-outline-success mr-2">View Post</button>
                            <button class="btn btn-outline-primary">Like</button>
                        </div>
                    </div>
                </div>
                <!--Post 2-->
                <div class="col-lg-3 col-sm-6 post-l shadow mt-5 ">

                    <div class="row">
                        <div class="col-sm-12"> <img class="img-fluid" src="js-a.jfif" alt=""></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 pt-4">
                                <p class="text-break text-capitalize"><a href="#">#</a>joe Smith </p>
                            </div>
                            <div class="col-sm-4">
                                <img class="img-fluid rounded-circle"
                                    src="https://i0.wp.com/widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-3.png?resize=217%2C217&ssl=1"
                                    alt="AvatarUser">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <h2>Titel zoefg ozeg oeu g</h2>
                        </div>
                        <div class="row col-sm-12">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, nostrum laboriosam,
                                assumenda optio non vero minus commodi corrupti iusto ad dolorem. Eos ea minus
                                repellendus perspiciatis totam fugiat velit voluptatem!</p>
                            <p>@ 2 July, 11:00</p>
                            <p>&nbsp ~&nbsp </p>
                            <p>7 Likes</p>
                        </div>
                        <div class="row col-sm-12 m-3">
                            <button class="btn btn-outline-success mr-2">View Post</button>
                            <button class="btn btn-outline-primary">Like</button>
                        </div>
                    </div>
                </div>
                <!--Post 3-->
                <div class="col-lg-3 col-sm-6 post-l shadow mt-5 ">

                    <div class="row">
                        <div class="col-sm-12"> <img class="img-fluid" src="js-a.jfif" alt=""></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 pt-4">
                                <p class="text-break text-capitalize"><a href="#">#</a>joe Smith </p>
                            </div>
                            <div class="col-sm-4">
                                <img class="img-fluid rounded-circle"
                                    src="https://i0.wp.com/widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-3.png?resize=217%2C217&ssl=1"
                                    alt="AvatarUser">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <h2>Titel zoefg ozeg oeu g</h2>
                        </div>
                        <div class="row col-sm-12">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, nostrum laboriosam,
                                assumenda optio non vero minus commodi corrupti iusto ad dolorem. Eos ea minus
                                repellendus perspiciatis totam fugiat velit voluptatem!</p>
                            <p>@ 2 July, 11:00</p>
                            <p>&nbsp ~&nbsp </p>
                            <p>7 Likes</p>
                        </div>
                        <div class="row col-sm-12 m-3">
                            <button class="btn btn-outline-success mr-2">View Post</button>
                            <button class="btn btn-outline-primary">Like</button>
                        </div>
                    </div>
                </div>
                <!--Post 4-->
                <div class="col-lg-3 col-sm-6 post-l shadow mt-5 ">

                    <div class="row">
                        <div class="col-sm-12"> <img class="img-fluid" src="js-a.jfif" alt=""></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 pt-4">
                                <p class="text-break text-capitalize"><a href="#">#</a>joe Smith </p>
                            </div>
                            <div class="col-sm-4">
                                <img class="img-fluid rounded-circle"
                                    src="https://i0.wp.com/widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-3.png?resize=217%2C217&ssl=1"
                                    alt="AvatarUser">
                            </div>
                        </div>
                        <div class="row col-sm-12">
                            <h2>Titel zoefg ozeg oeu g</h2>
                        </div>
                        <div class="row col-sm-12">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, nostrum laboriosam,
                                assumenda optio non vero minus commodi corrupti iusto ad dolorem. Eos ea minus
                                repellendus perspiciatis totam fugiat velit voluptatem!</p>
                            <p>@ 2 July, 11:00</p>
                            <p>&nbsp ~&nbsp </p>
                            <p>7 Likes</p>
                        </div>
                        <div class="row col-sm-12 m-3">
                            <button class="btn btn-outline-success mr-2">View Post</button>
                            <button class="btn btn-outline-primary">Like</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Posts Blocks in the length -->
            <!-- PostB 1-->
            <div class="row mt-5 shadow">
                <div class="col-sm-4">
                    <img class="img-fluid" src="js-a.jfif" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="row col-sm-12">
                        <h2>Titel zoefg ozeg oeu g</h2>
                    </div>
                    <div class="row col-sm-12">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, nostrum laboriosam,
                            assumenda optio non vero minus commodi corrupti iusto ad dolorem. Eos ea minus
                            repellendus perspiciatis totam fugiat velit voluptatem!</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-outline-success mr-4">View Post</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-outline-primary">Like</button>
                        </div>
                    </div>
                    <div class="row col-sm-12 d-flex mt-2">
                        <p>@ 2 July, 11:00</p>
                        <p>&nbsp ~ &nbsp </p>
                        <p>/ 7 Likes</p>
                        <p>&nbsp ~ &nbsp </p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="row col-sm-12">
                        <img class="img-fluid rounded-circle"
                            src="https://i0.wp.com/widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-3.png?resize=217%2C217&ssl=1"
                            alt="AvatarUser">
                    </div>
                    <div class="row col-sm-12">
                        <p class="text-break text-capitalize"><a href="#">#</a>joe Smith </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- PostB 2-->
        <div class="container">
            <div class="row mt-5 shadow">
                <div class="col-sm-4">
                    <img class="img-fluid" src="js-a.jfif" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="row col-sm-12">
                        <h2>Titel zoefg ozeg oeu g</h2>
                    </div>
                    <div class="row col-sm-12">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, nostrum laboriosam,
                            assumenda optio non vero minus commodi corrupti iusto ad dolorem. Eos ea minus
                            repellendus perspiciatis totam fugiat velit voluptatem!</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-outline-success mr-4">View Post</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-outline-primary">Like</button>
                        </div>
                    </div>
                    <div class="row col-sm-12 d-flex mt-2">
                        <p>@ 2 July, 11:00</p>
                        <p>&nbsp ~ &nbsp </p>
                        <p>/ 7 Likes</p>
                        <p>&nbsp ~ &nbsp </p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="row col-sm-12">
                        <img class="img-fluid rounded-circle"
                            src="https://i0.wp.com/widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-3.png?resize=217%2C217&ssl=1"
                            alt="AvatarUser">
                    </div>
                    <div class="row col-sm-12">
                        <p class="text-break text-capitalize"><a href="#">#</a>joe Smith </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

     <!-- Footer -->

</body>

</html>
