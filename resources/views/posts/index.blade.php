@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Posts</div>

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
@endsection
