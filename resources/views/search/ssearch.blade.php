@extends('layouts.appbuild')

@section('content')
</div>
<section class="banner" style="height: 450px;">
    <div class="container shadow search-c">
        <div class="row col-sm-12 justify-content-center ">
            <h1>Enter what you are searching for<h1>
        </div>
        <div class="row">

            <div class="col-sm-12">
                <form class="form-inline" action="{{ route('ssearch')}}" type="get" role="search">
                    <div class="col-sm-8"> <input style="width:100%;" class="form-control" type="search"
                            placeholder="Ex: 'Laravel' " name="ssearch">
                    </div>
                    <div class="col-sm-4"><button class="btn btn-outline-success" type="submit">Search</button></div>

                </form>
            </div>


        </div>
</section>




<div class="container mt-1">
    <style>
        #s-blue {
            color: #0275d8;
        }

        #s-links {
            text-decoration: none;
            color: black;
        }

        .s-user {
            color: black;
            word-break: break-all;


        }

    </style>

    @if(isset($posts))

    <h1 style="color: #0275d8;">We find something related to your search "{{$query}}": <h1>
            @foreach($posts as $post)
            <h1 style="color: #0275d8;">Post #{{$post->id}}<h1>
                    <div class="row m-2 s-user shadow mt-5"
                        style="border-left:1px solid whitesmoke; border-bottom: 1px solid #0275d8;border-right:1px solid whitesmoke;border-top: 1px solid #0275d8;">
                        <div class="col-sm-4 p-4">
                            <img class="img-fluid"
                                src="/storage/post_images/{{ $post->user_id }}/{{ $post->post_image }} "
                                alt="Image of Post">
                        </div>
                        <div class="col-sm-8 pt-2 ">
                            <div class="row">

                                <div class="col-sm-12">
                                    <h2 id="s-blue">#<a id="s-links" href="">{{$post->title}}</a></h2>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 id="s-blue">@ {{ $post->created_at }} </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>{{$post->content}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else <h1  style="color: #0275d8; border: 1px solid black; padding: 1em">We find no Posts related to your search <h1>
                            @endif

                            @if(isset($u))

                            <h1 style="color: #0275d8;">Maybe you are looking for an Author "{{$query}}" <h1>
                                    @foreach($u as $user)
                                    <div class="row m-2 s-user shadow mt-5"
                                        style="border-left:1px solid whitesmoke; border-bottom: 1px solid #0275d8;border-right:1px solid whitesmoke;border-top: 1px solid #0275d8;">
                                        <div class="col-sm-4 p-4">
                                            <img class="img-fluid"
                                                src="/storage/avatars/{{ $user->id }}/{{ $user->avatar }}" alt="">
                                        </div>
                                        <div class="col-sm-8 pt-2 ">
                                            <div class="row">

                                                <div class="col-sm-12">
                                                    <h2 id="s-blue">#<a id="s-links" href="">{{$user->name}}</a></h2>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h2 id="s-blue">@<a id="s-links" href="">{{$user->email}}</a></h2>
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
                                    @else <h1 style="color: #0275d8;">We find no Authors related to your search <h1>
                                            @endif

                                            </div>

                                            @endsection
