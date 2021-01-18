@extends('layouts.appBuild')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Posts</div>
                <div class="card-body">
                    @foreach($posts as $post)
                    <!-- PostB 1-->
                    <div class="row mt-5 shadow">
                        <div class="col-sm-4">
                        @if($post->post_image != null)                 
                            <img class="img-fluid"
                                src="/storage/post_images/{{  $post->user_id }}/{{ $post->post_image }}"
                                alt="ImageOfPost">
                                @endif
                        </div>
                        <div class="col-sm-6">
                            <div class="row col-sm-12">
                                <h2 style="text-transform:capitalize;"><a
                                        href="/posts/{{$post->id}}">{{ $post->title }}</a>
                                </h2>
                            </div>
                            <div class="row col-sm-12">
                                <h4 class="pl-2" style="font-size:16px;"><a
                                        href="/profile/{{$post->user_id}}">Posted by : {{ $post->author->name ?? "N/A"}}</a>
                                </h4>
                            </div>
                            <div class="row col-sm-12">
                                <p>{{ $post->content}}</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                <a href="/posts/{{$post->id}}">
                                    <button class="btn btn-outline-success">View Post</button>
                                    </a>
                                </div>
                                @if($post->user_id == $id )
                                <div class="row col-sm-12 pt-2 pb-3">
                     <!-- Button trigger modal For Update User Info -->
                     <button type="button" class="btn btn-primary mr-2" data-toggle="modal"
                         data-target="#modal" id="modal-btn">
                         Edit Post
                     </button>
                     <form method="POST" action="{{ route('posts.destroy',$post) }}">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button type="submit" class="btn btn-outline-danger">Delete Post
                                                     </button>
                                             </form>
                     <!-- Modal -->
                     <div class="modal fade" id="modal" tabindex="-1" role="dialog"
                         aria-labelledby="modalTitle" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                             <!-- Handeling Errors while "keeping the modal open"
                                Without this, if an error occurs, the user cant see the error message
                                        Because the modal will be closed, when the update function will redirect back to the profile page-->
                                 @if (count($errors) > 0)
                                 <div class="alert alert-danger">
                                     <strong>Error</strong><br><br>
                                     <ul>
                                         @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                         @endforeach
                                     </ul>
                                 </div>
                                 @endif
                                 <div class="modal-erer">
                                     <h5 class="modal-title" id="exampleModalLongTitle">Edit Your Post</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <div class="row">
                                        
                                         <div class="col-sm-12 profile-modal">

                                             <form method="POST" action="{{ route('posts.update',$post) }}" class="update_user">
                                                 @csrf                                
                                                 <label for="title">title:</label>
                                                 <input name="title" type="text" value="{{$post->title}}">                                              
                                                 <textarea name="content" id="content" rows="6" cols="35">{{$post->content}}</textarea>
                                                 <button type="submit" class="btn btn-outline-success">Save
                                                     changes</button>
                                             </form>

                                         </div>
                                     </div>
                                 </div>
                                 <div class="modal-footer">

                                     <button type="button" class="btn btn-outline-secondary"
                                         data-dismiss="modal">Close</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>                
                                
                         

                                @endif
                                
                            </div>
                            <div class="row col-sm-12 d-flex mt-2">
                                <p>@ Created {{ $post->created_at}}</p>
                            </div>
                        </div>                       
                    </div>    @endforeach
                </div>
            
            </div>
        </div>
    </div>
</div>
@endsection
