@extends('layouts.appbuild')
  
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

