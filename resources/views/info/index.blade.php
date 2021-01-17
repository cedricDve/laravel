@extends('layouts.appbuild')
@section('content')

        <div class="text-black-50 d-md-flex align-items-center h-100 p-5 text-center justify-content-center m-5">
            <div class="logoarea pt-5 pb-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/images/profile.png" alt="Alpha slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-black-50">Profiles</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/login.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-black-50">Login & Registration</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/Contact_Us.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-black-50">Contact-Us</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/newPosts.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-black-50">Blog: Posts</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="d-md-flex align-items-center h-md-100 p-5 justify-content-center">
           <!-- <section class="g-b">

                <div class="g-b-b">
                    <img src="/images/header2.jpg" alt="">
                    <div class="g-b-b-c">
                        <h1 style="text-align:center; padding-top:2%;">Titel</h1>
                        <div class="row m-5">
                            <div class="col-sm-8">
                                <h2>Titel2</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, accusantium itaque.
                                    Quaerat
                                    architecto saepe modi facere explicabo sapiente quasi earum atque. Repellendus
                                    numquam iure
                                    nulla similique soluta maxime quis autem.</p>
                            </div>
                            <div class="col-sm-4">
                                <h2>Titel2</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, accusantium itaque.
                                    Quaerat
                                    architecto saepe modi facere explicabo sapiente quasi earum atque. Repellendus
                                    numquam iure
                                    nulla similique soluta maxime quis autem.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section> -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2>Login & Registration</h2>
                                    <p>The Login and Registration page. This pages will give you full access to the website. A user can also be promoted to administrator but only by an administrator himself.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <img class="img-fluid" src="/images/header.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam quibusdam nesciunt ex,
                                mollitia
                                quisquam et, nihil aut obcaecati rerum expedita est fugit repellendus officiis
                                necessitatibus,
                                sequi blanditiis placeat unde. Unde!</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Contact-Us</h2>
                            <p>A administrator is able to answer directly from the website to your email.</p></p>

                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid" src="/images/header.jpeg" alt="">
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-8">
                                    <h2>Blog: Posts</h2>
                                    <p>Create, Read, Edit, Delete a post and Search for a post. </p>
                                    <div class="col-sm-8">
                                        <h2>Titel Content</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas numquam
                                            perferendis
                                            vitae voluptatum, dolor aspernatur eos, tempore incidunt vero modi possimus
                                            inventore ab nam eum voluptas delectus aliquid labore non.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-4">
                                <img class="img-fluid" src="/images/header.jpeg" alt="">
                            </div>
                            <div class="col-sm-8">
                                <h2>Titel Content</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas numquam perferendis
                                    vitae
                                    voluptatum, dolor aspernatur eos, tempore incidunt vero modi possimus inventore ab
                                    nam eum
                                    voluptas delectus aliquid labore non.</p>

                            </div>

                        </div>

                    </div>
                </div>
            </section>
        </div>
  



@endsection
