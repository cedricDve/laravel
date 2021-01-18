@extends('layouts.block')
<style>
    .bg-2 {
        background-color: #474e5d;
        /* Dark Blue */
        color: #ffffff;
    }

    .bg-3 {
        background-color: #ffffff;
        /* White */
        color: #555555;
    }

</style>
@section('table_name1', 'About Us')

@section('description1')
<div style=" background-color: #d0e1d3; text-align : center" class="p-3">
    <h1 style="font-size: 35px">IT'_ers Community count <span
            style="font-weight: bold"><?php $users = DB::table('users')->count();?>{{ $users }}</span> Active Users !
    </h1>
    <h1>Our main goal is to create a great community where respect and sharing are the keywords</h1>
</div>

@endsection

@section('table_name2', 'Best Tools')

@section('description2')
<div class="d-flex">
    @include('about.cardOne')
    @include('about.cardTwo')
    @include('about.cardTree')
</div>

@endsection

@section('table_name3', 'Contact-Us By Email')

@section('description3')

@include('layouts.contact')
<div class="container-fluid bg-3 text-center  mt-5 p-2">
    <h3>Objectives</h3>
    <p>Learn to work with Laravel, exploring frameworks, creating basic layout using bootstrap and own made css, working with Php and MySQL.</p>
</div>

<div class="container-fluid bg-2 text-center mt-5 p-2">
    <h3>Achieved</h3>
    <p>I loved working with Laravel, still I had a lot to study for my exams so I could'nt work the way I would. </p>
    <p>I explored all types of routes and used group of routers able to make "admin only routes". Worked with Eloquent Models, used resource controllers, request ... Created Models, Relationships, and functions able to cummunicate easily with the database. Used to work with php artisan commands. Like always I like to code by try and error. The problem is it takes a lot of time, so for example I couldn't "beautiy" my website</p>
    <p>Tried to create a nice navbar, layouts for posts,authors, user-profile... using different layouts and controllers. Made Seeders for all the Models I used. 
    And many other things .. ;)</p>
    <p>I tried to finish all the required features and add some extra features like, the reply to email and let (event a not logged-in) user buy an item.(when he click on buy his name and email will be asked and then those will be stored in a separete table.).</p>
</div>
<aside class="col-md-12 blog-sidebar">

    <div class="p-4">
        <h4 class="font-italic">What I Used To Create This Website</h4>
        <ol class="list-unstyled mb-0 p-3">
            <li><a href="https://getbootstrap.com/docs/4.1/getting-started/introduction/" target="_blank">Bootstrap
                    documentation</a></li>
            <li><a href="https://laravel.com/docs/8.x/" target="_blank">Laravel documentation 2014</a>
                <ol class="list-unstyled mb-0 p-3">
                    <li><a href="  https://laravel.com/docs/8.x/queries" target="_blank">db queries</a></li>
                    <li><a href="https://laravel.com/docs/8.x/routing" target="_blank">routing</a></li>
                    <li><a href="https://laravel.com/docs/8.x/routing" target="_blank">urls</a></li>
                </ol>
            </li>


            <li><a href="https://laracasts.com/discuss/channels/laravel/laravel-blade-at-include-vs-at-extends?page=0"
                    target="_blank">Laracast platform/blog</a></li>
            <li><a href="https://laravel.io/" target="_blank">Laravel io</a></li>
            <li><a href="https://stackoverflow.com/" target="_blank">StackOverFlow</a>
                <ol class="list-unstyled mb-0 p-3">
                    <li><a href="https://stackoverflow.com/questions/46118148/laravel-get-a-random-user-with-where-clause?noredirect=1"
                            target="_blank">random elements from table</a></li>
                    <li><a href="https://stackoverflow.com/questions/37511893/laravel-custom-trait-not-found"
                            target="_blank">errors</a></li>
                    <li><a href="https://stackoverflow.com/questions/65546549/how-to-destroy-a-record-using-a-form-in-laravel-and-display-status"
                            target="_blank">destroy</a></li>
                </ol>
            </li>
            <li><a href="https://therichpost.com/laravel-7-sidebar-responsive-template/" target="_blank">Layout Admin
                    panel</a></li><br>
            <li>Example artisan commands used</li>
            <ol>
                <li>php artisan migrate:fresh --seed </li>
                <li>php artisan make:seeder PostSeeder </li>
                <li>php artisan make:model CourseParticipants -m </li>
                <li>php artisan make:controller CoursesController </li>
                <li>php artisan make:model --resource</li>

            </ol>

        </ol>
    </div>
</aside>


@endsection
