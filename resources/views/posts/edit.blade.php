@extends('layouts.appBuild')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Edit your Post</h2>
                </div>
                <div class="card-body">
                    <div>
                        <div>
                            <h2 style="font-size : 14px">Post number <span
                                    style="font-weight : bold">{{ $post->postId }}</span></h2>
                                    

                            <textarea></textarea>
                            <textarea>{{ $post->content}}</textarea>
                            <form method="post" action="{{ route('posts.update') }}"  enctype="multipart/form-data">
                                                 @csrf
                                                 <label for="title">title:</label>
                                                 <input name="title" type="text" value="{{ $post->title}}">
                                                 <label for="content">Email:</label>
                                                 <br>
                                                
                                                 
                                                 <textarea id="content" rows="6" cols="35">{{$post->content}}</textarea>
                                                 <br>
                                                 <button type="submit" class="btn btn-outline-success">Save
                                                     changes</button>
                                             </form>
                            
                           
                          
                        </div>
                        <a href=" {{ route('posts.update',$post) }}"><button  class="btn btn-success">Save</button></a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
