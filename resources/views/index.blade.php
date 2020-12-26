@extends('layouts.appbuild')
    @section('only-for-index')
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
    @section('content')

        @include('layouts.bannerH')

        <!-- Images for css animation -->
        <div class="set">
            <div class="animation-img"><img src="/images/laravel-logo.png" alt=""></div>
            <div class="animation-img"><img src="/images/phpsql.png" alt=""></div>

            <div class="animation-img"><img src="/images/ht.png" alt=""></div>
            <div class="animation-img"><img src="/images/js.png" alt=""></div>
        </div>
        

        @include('layouts.posts')
        



    @endsection

