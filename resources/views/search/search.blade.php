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
<div class="nav-fixed">
    @section('content')
</div>
<section class="banner" style="height: 450px;">
    <div class="container shadow search-c">
        <div class="row col-sm-12 justify-content-center ">
            <h1>Enter a profile name<h1>
        </div>
        <div class="row">

            <div class="col-sm-12">
                <form class="form-inline" action="{{ route('search_users')}}" type="get" role="search">
                    <div class="col-sm-8"> <input style="width:100%;" class="form-control" type="search" placeholder="Ex: 'Cédric' " name="search">
                    </div>
                    <div class="col-sm-4"><button class="btn btn-outline-success" type="submit">Search</button></div>
                   
                </form>
            </div>


        </div>
</section>
<section>








</section>
<div class="container">
    <style>
        #s-blue {
            color: #0275d8;
        }
        #s-links{
            text-decoration:none;
            color: whitesmoke;
        }
        .s-user{
            color: white;
            word-break: break-all;
           
       
        }

    </style>
  
    @if(isset($u))
    <p>The search results for your query "{{$query}}" are: </p>
    @foreach($u as $user)
    <div class="row m-2 s-user shadow mt-5" style="border-left:1px solid whitesmoke; border-bottom: 1px solid #0275d8;border-right:1px solid whitesmoke;border-top: 1px solid #0275d8;">
        <div class="col-sm-4 p-4">
            <img class="img-fluid" src="/storage/avatars/{{ $user->id }}/{{ $user->avatar }}"  alt="">
        </div>
        <div class="col-sm-8 pt-2 ">
            <div class="row">

                <div class="col-sm-12">
                    <h2 id="s-blue">#<a id="s-links" href="">{{$user->name}}</a></h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h2 id="s-blue">@<a id="s-links"href="">{{$user->email}}</a></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>{{$user->biography}}</p>
                </div>
                <div class="row">
                    <div class="col-sm-12" style="">
                        <h4>{{$user->created_at}}</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    @else 
            @endif

            @endsection
