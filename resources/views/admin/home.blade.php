@extends('layouts.appbuild')
<style>
    body {
        overflow-x: hidden;
    }

    #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
    }

    #sidebar-wrapper .list-group {
        width: 15rem;
    }

    #page-content-wrapper {
        min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
    }

    @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
    }

</style>

@section('content')
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Administrator Options </div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="{{url('/admin/mails') }}" class="list-group-item list-group-item-action bg-light">Mails</a>
            <a href="{{url('/faqs/1') }}}" class="list-group-item list-group-item-action bg-light">FAQ</a>
            <a href="{{url('/admin/manageUsers') }}" class="list-group-item list-group-item-action bg-light">Manage
                Users</a>
            <a href="{{url('/admin/managePosts') }}" class="list-group-item list-group-item-action bg-light">Manage
                Posts</a>

        </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <div class="row sm-12">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Admin Task: Reply To Email through website</h5>
                    <p class="card-text">Whenever a user will try to contact us, an email will be send but of course the
                        user expect a answer. Able to give him an answer all administartors can reply emails from
                        customer.</p>
                    <a href="{{url('/admin/mails') }}" class="btn btn-primary">Go check Mails</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Frequently Asked Questions</h5>
                    <p class="card-text">Configuring the FAQ Page.</p>
                    <a href="{{url('/faqs/1') }}" class="btn btn-primary">Configure FAQ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Users</h5>
                    <p class="card-text">Promovoting a user to Administrator or Delete a user.</p>
                    <a href="{{url('/admin/manageUsers') }}" class="btn btn-primary">Manage Users</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage all Posts</h5>
                    <p class="card-text">Modify or delete posts.</p>
                    <a href="{{url('/admin/managePosts') }}" class="btn btn-primary">Manage Posts</a>
                </div>
            </div>
        </div>
    </div>
    @endsection
