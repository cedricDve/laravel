@extends('layouts.appbuild')
@section('content')

        <div class="p-5">
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
        </div></div>

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
                <div class="bg-secondary p-5">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2>Login & Registration</h2>
                                    <p>The Login and Registration page. This pages will give you full access to the website. A user can also be promoted to administrator but only by an administrator himself. Many routes are used able to let that work: here you can find a code-snippets of routes used and loggin- and registration code-snippets</p>
                                    <p>When a user register, he will create a new account and will be a "regular user". Only the admin can promove a user to administartor.
                                    Each user will have a public profile and will have the possibility to read all the user details, see user profile-image and avatar, and read written posts. Of course a user can modify his account, able to do this I used a "pop-up /modal" where the user can easily modifu his informations in realtime with the database.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img class="img-fluid" src="/images/header.jpeg" alt="">
                                </div>
                                <div class="col-sm-9">
                                    <img class="img-fluid" src="/images/aa.png" alt="">
                                </div>                               
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h1>The main goal of this website was to create a full blog and also creating differnt courses where user would be able to publish code snippets, code problems , etc. and reply to each other, but most and formost learn from each other! Trying to focus on making this website so dynamically possible, not to forget mention sources and documentate code.</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Contact-Us</h2>
                            <p>A administrator is able to answer directly from the website to your emails.</p>
                            <p>Whenever you send us an eamil, we will use SMTP and gmail as sendbox. Your email address will only be used for replying back.</p>                     

                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid" src="/images/contactImage.png" alt="Image Contact form">
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="col-sm-8">
                                    <h2>Blog: Posts</h2>
                                    <p>Create, Read, Edit, Delete a post and Search for a post. </p>
                                    <div class="col-sm-12">
                                        <h2>Also</h2>
                                        <p>The admin can fully manage all of the posts.</p>
                                    </div>                                    
                                </div>
                                
                            </div>
                            <div class="col-sm-4">
                                        <h2>A Admin can conifgure </h2>
                                        <p>Users and Posts</p>
                                        <h2>A Admin can  </h2>
                                        <p>directly reply to emails</p>                                     
                                        <p>Modify the FAQ page</p>
                                    </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-4">
                                <img class="img-fluid" src="/images/pen-write.jpg" alt="">
                            </div>
                            <div class="col-sm-8">
                                <h2>Our community</h2>
                                <p>We hope we will have inoff user to maintain activity on our website, writing some posts etc. Notly courses would be avaible and or created by the admin but also a user's could create courses by adding information to a specific subject. This way the community will create the content of the website.</p>
                                <br>
                                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ut doloribus omnis nobis placeat, voluptatem, amet repellendus odio distinctio error iste nihil saepe deserunt nemo voluptates quibusdam ipsam dignissimos tempora!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
  



@endsection
