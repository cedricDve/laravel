@extends('layouts.appBuild')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Blog: Post</h2>
                </div>
                <div class="card-body">
                    <div>
                        <div>
                            <h2 style="font-size : 14px">Post number <span
                                    style="font-weight : bold">{{ $postId }}</span></h2>
                            <h2 style="text-transform:capitalize;">{{ $title}}</h2>
                            <p>{{ $content}}</p>
                            <h4 class="pl-2" style="font-size:16px;">Posted by : {{ $user_name}} </h4>
                            @if($image != null )                          
                            <img class='img-fluid' src="/storage/post_images/{{ $id }}/{{ $image }}"
                                style="height:200px;">
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
