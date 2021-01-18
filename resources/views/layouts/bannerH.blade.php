<section class="banner">
    <div class="container">
        <div class="row justify-content-center pt-3">
            <h1 class="mt-5 pt-2" style="color:whitesmoke;font-weight:500;font-size:3em;">Welcome to the IT'_ers
                Community!</h1>
            <div class="container p-5">
                <!--first row containing 2 blocks -->
                <div class="row mb-2">
                    <!--first block of the first row about: Blog  -->
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
                                <p><a href="{{ route('posts.create') }}"><i class="fas fa-arrow-right"></i> Write a
                                        Post</a></p>
                                <p><a href="{{ route('posts.index') }}"><i class="fas fa-arrow-right"></i> Read all
                                        Posts</a></p>
                                <p><a href="{{ route('ssearch') }}"><i class="fas fa-arrow-right"></i> Find Post or
                                        Author</a></p>

                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <!--  class="" -->
                                <img class="p-2 bd-placeholder-img" width="250" height="250" src="/images/pen-write.jpg"
                                    alt="Image of Somebody who is writing">
                            </div>
                        </div>
                    </div>
                    <!--second block of the first row about: Contacting us  -->
                    <div class="col-md-6 col-sm-3 pt-1">
                        <div
                            class=" banner-content shadow row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong style="color:#0275d8" class="d-inline-block mb-2">Communicate with us</strong>
                                <h3 class="mb-0 pb-1">Contact-Us </h3>
                                <p class="card-text mb-auto">Able to improve this website, or able to help you with
                                    specific issues do not hesitate to contact us. Our administrators would be glad to
                                    answer all of your questions!
                                </p>
                                <p><a href="{{ route('contact-us') }}"><i class="fas fa-arrow-right"></i>Contact-Us</a>
                                </p>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <!--  class="" -->
                                <img class="p-2 bd-placeholder-img" width="250" height="250" src="/images/contactus.png"
                                    alt="Image of Somebody who is writing">
                            </div>
                        </div>
                    </div>
                    <!--second row containing 2 blocks -->
                    <!--first block of the first row about: FAQ   -->
                    <div class="col-md-6 col-sm-3 pt-1">
                        <div
                            class=" banner-content shadow row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong style="color:#0275d8" class="d-inline-block mb-2">Frequently Asked
                                    Questions</strong>
                                <h3 class="mb-0 pb-1">FAQ </h3>
                                <p class="card-text mb-auto">Able to help everyone with questions and problems
                                    related to our website we create a FAQ-page.
                                </p>
                                <p><a href="{{ url('/faqs/1') }}"><i class="fas fa-arrow-right"></i>Go to FAQ-Page</a></p>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <!--  class="" -->
                                <img class="p-2 bd-placeholder-img" width="250" height="250" src="/images/support.jpg"
                                    alt="Image of Somebody who is writing">
                            </div>
                        </div>
                    </div>
                    <!--second block of the first row about: How the website has been built  -->
                    <div class="col-md-6 col-sm-3 pt-1">
                        <div
                            class=" banner-content shadow row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong style="color:#0275d8" class="d-inline-block mb-2">How the website has been built</strong>
                                <h3 class="mb-0 pb-1">Info-Page </h3>
                                <p class="card-text mb-auto">Explaining and showing code snippets of the website. Discover how the website has been built, and maybe help us improve the website or learn more about some features we used.
                                </p>
                                <p><a href="{{ route('info') }}"><i class="fas fa-arrow-right"></i> Learn more</a></p>
                             

                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <!--  class="" -->
                                <img class="p-2 bd-placeholder-img" width="250" height="250" src="/images/read-book.jpg"
                                    alt="Image of Somebody who is writing">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
