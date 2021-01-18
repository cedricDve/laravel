@extends('layouts.appbuild')

@section('content')
<!-- Posts Blocks -->
<section class="s-b">
    <div class="container">
        <div class="row">
            <!-- 4POST A ROW for lg otherwise 2-->
            @foreach($courses as $course)
            <div class="col-lg-3 col-sm-6 post-l shadow mt-5 ">

                <div class="row">
                    <div class="col-sm-12"> <img class="img-fluid" src="js-a.jfif" alt=""></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 pt-4">
                            <p class="text-break text-capitalize"><a href="#">#</a>{{ $course->organisator}} </p>
                        </div>
                    </div>
                    <div class="row col-sm-12">
                        <h2>{{ $course->name}}</h2>
                    </div>
                    <div class="row col-sm-12">
                        <p>{{ $course->description}}</p>
                        <p>{{ $course->content}}</p>
                        <p>@ {{ $course->startdate}} </p>
                    </div>
                    <div class="row col-sm-12 m-3">  
                         <!-- Button trigger modal For Update User Info -->
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal" id="modal-btn">
                    Buy
                 </button>                     
                        <!-- Modal -->
                        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <!-- Handeling Errors while "keeping the modal open"
                                Without this, if an error occurs, the user cant see the error message
                                        Because the modal will be closed, when the update function will redirect back to the profile page-->
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Error</strong><br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="modal-erer">
                                        <h5 class="modal-title" id="exampleModalLongTitle">If you are sure you would
                                            like to buy this course, please fill in you name and email.</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-sm-8 profile-modal">

                                            <form method="POST" action="{{ route('courses.buy', $course->id) }}">
                                                @csrf
                                                <label for="name">Name:</label>
                                                <input name="name" type="text">
                                                <label for="email">Email:</label>
                                                <input name="email" type="text"><br>
                                                <button type="submit" class="btn btn-outline-success">Buy
                                                    Course</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-outline-secondary"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
    </div>
</section>
@endsection
