@extends('layouts.app')

@section('content')
<div class="container">
 <!-- profile image & description -->

<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic" style = "text-transform:capitalize;">{{$user->name}}</h1>
      <div class="row align-items-end">
      <img class="img-fluid max-width: 100%" src="/storage/avatars/{{ $user->id }}/{{ $user->avatar }}" style="height:auto;">
      </div>
      <p class="lead my-3">Active user since :<strong>
            <?php 
            $d = $user->created_at;
            $timestamp=date('d-m-Y',strtotime($d));
            echo  $timestamp; 
            $d1=strtotime($timestamp);
            $d2=ceil((time()-$d1)/60/60/24);
            if($d2>1) echo  '  (', $d2 , 'days)'; 
            echo  '  (', $d2 , 'day)';
            ?></p>
    <p class="lead my-3">
      <strong>Description</strong> <br> {{$user->biography}}
    </p>
      <p class="lead mb-0">{{$user->email}} </p>
    
    </div>
  </div>


    <!-- User posts -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
   
                <div class="card-header">All The Posts Of {{ $user->name }} </div>
                <div class="card-body">
                @foreach($posts as $post)
                <div>
                <h2 style = "text-transform:capitalize;"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h2>
                <p>{{ $post->content}}</p>
                <h4 class="pl-2" style="font-size:16px;">Posted by : {{ $post->author->name ?? "N/A"}}</h4>
                <img src="/storage/post_images/{{  $post->user_id }}/{{ $post->post_image }}" style="height:200px;">
                <h5 class="d-flex justify-content-end" style="font-size:8px; border-bottom: 1px solid #0275d8"><strong>At: {{ $post->created_at}}</strong></h5>
              
                
                </div>

                @endforeach
                   
                </div>
            </div>
         </div>
       </div>
      </div>
   </div>
</div>
@endsection
