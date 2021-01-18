@extends('layouts.appbuild')
@section('content')
<!--
<div class="d-flex" id="wrapper">
   Sidebar 
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Therichpost </div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="{{url('/admin/mails') }}" class="list-group-item list-group-item-action bg-light">Mails</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">FAQ</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Manage Users</a>
        </div>
    </div>
     /#sidebar-wrapper -->
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            @foreach($cats as $cat)
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('faqs.index', $cat->id) }}">{{ $cat->name }}</a>
            </li>
            @endforeach
            @if($admin == 1 )
            <li class="nav-item">
                <a class="nav-link" href="{{ route('faqs.create') }}">Create new Category +</a>
            </li>
            @endif
        </ul>
    </div>
    @foreach($faqs as $faq)
    <div class="card-body">
        <h5 class="card-title">{{  $faq->category }}</h5>
        <h4 class="card-title">{{  $faq->question }}</h4>
        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button"
                aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2"
                aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
        </p>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        {{  $faq->shortansw }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        {{  $faq->longansw }}
                    </div>
                </div>
            </div>
        </div>
        @if($admin ==1 )
        <!-- Button trigger modal For Update User Info -->
        <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#modal" id="modal-btn">
            Edit FAQ
        </button>
        <form method="POST" action="{{ route('faq.destroy',$faq->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete FAQ
            </button>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
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
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit FAQ {{ $faq->id }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-sm-12 profile-modal">

                                <form method="POST" action="{{ route('faq.update',$faq->id) }}" class="update_user">
                                    @csrf
                                    <p>Category: {{ $faq->category}} </p>
                                    <label for="title">title:</label>
                                    <input name="question" type="text" value="{{$faq->question}}">
                                    <textarea name="shortansw" id="content" rows="6"
                                        cols="35">{{ $faq->shortansw }}</textarea>
                                    <textarea name="longansw" id="content" rows="6"
                                        cols="35">{{ $faq->longansw }}</textarea>
                                    <button type="submit" class="btn btn-outline-success">Save
                                        changes</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    @endforeach
</div>

@endsection
