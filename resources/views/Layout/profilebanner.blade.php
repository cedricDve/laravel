 <!-- Banner For Profile-->
 <!-- Script for handeling errors and show modal to user -->

 <script >
 $(document).ready(function(){
    @if (count($errors) > 0)
    {
        $('#modal').modal('show');
    }
 
    @endif
 });
  
</script>

 
     <div class="row h m-0">
         <div class="col-lg-8 col-sm-12 p-0">
             <img style="height:100%; width:100%;" src="/storage/images/{{  $user->id }}/{{ $user->image }}"
                 alt="Post Image">
             <div class="post-h">
                 <div class="row col-sm-10">
                     <h1 class="text-break">Profile of <span class="text-capitalize">{{ $user->name}}</span></h1>
                 </div>
                 @if($user->id == auth()->id())
                 <div class="row col-sm-12 pt-2 pb-3">
                     <!-- Button trigger modal For Update User Info -->
                     <button type="button" class="btn btn-primary" data-toggle="modal"
                         data-target="#modal" id="modal-btn">
                         Edit my Profile
                     </button>
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
                                     <h5 class="modal-title" id="exampleModalLongTitle">Edit Your Profile</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <div class="row">
                                         <div class="col-sm-4">
                                             <img class="img-fluid rounded-circle"
                                                 src="/storage/avatars/{{  $user->id }}/{{ $user->avatar }}"
                                                 alt="AvatarUser">
                                         </div>
                                         <div class="col-sm-8 profile-modal">

                                             <form method="POST" action="{{ route('updateUser') }}" class="update_user">
                                                 @csrf
                                                 <label for="name">Username:</label>
                                                 <input name="name" type="text" value="{{$user->name}}">
                                                 <label for="email">Email:</label>
                                                 <input name="email" type="text" value="{{$user->email}}"><br>
                                                 <label for="status">Status:</label>
                                                 <select name="status"
                                                     class="form-control @error('status') is-invalid @enderror"
                                                     name="status" value="{{ old('status') }}" autocomplete="status"
                                                     value="{{$user->status}}">
                                                     <option value="student">Student</option>
                                                     <option value="teacher">Teacher</option>
                                                     <option value="other">Other</option>
                                                 </select>
                                                 <label for="u_bio">Biography:</label>
                                                 <textarea id="u_bio" rows="6" cols="35">{{$user->biography}}</textarea>
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
                 <div class="row">
                     <div class="col-sm-4 profile-avatar">
                         <img class="rounded-circle" style="height:100%; width: 50%;"
                             src="/storage/avatars/{{  $user->id }}/{{ $user->avatar }}" alt="AvatarUser">
                     </div>
                     <div class="col-sm-8 ">
                         <div class="row col-sm-12">
                             <h5><span class="clr-blue">@</span>Member since {{ $user->created_at}}</h5>
                         </div>
                         <div class="row col-sm-12">
                             <h5 class="text-break">&nbsp Amount of Posts: 700(static)</h5>
                         </div>
                         <div class="row col-sm-12">
                             <h5 class="text-break">&nbsp Amount of Likes: 900(static)</h5>
                         </div>
                     </div>
                 </div>
               

             </div>
             

         </div>
         
         <div class="col-lg-4 col-sm-12 p-0">

             @if(isset($posts_2))
             @foreach($posts_2 as $post)
             <div class="row">
                 <div class="col-sm-12">
                     <!-- POST2-->
                     <img style="height:100%; width:100%;"
                         src="/storage/post_images/{{  $post->user_id }}/{{ $post->post_image }}" alt="Post Image">
                     <div class="post-h">
                         <div class="row col-sm-10">
                             <button class="btn btn-secondary">Category</button>
                         </div>
                         <div class="row col-sm-10">
                             <h1 class="text-break text-capitalize">titel</h1>
                         </div>
                         <div class="row">
                             <div class="col-sm-2">
                                 <img class="img-fluid rounded-circle"
                                     src="https://i0.wp.com/widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-3.png?resize=217%2C217&ssl=1"
                                     alt="AvatarUser">
                             </div>
                             <div class="col-sm-10 d-flex">
                                 <h5 class="text-break text-capitalize"><a href="#">#</a>joe Smith </h5>
                                 <p>&nbsp ~&nbsp </p>
                                 <p>@ 2 July, 11:00</p>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
             @endforeach
             @endif
         </div>

           <!--Buttons + modal-->
           <div class="row col-sm-12 p-2 justify-content-end pt-5">
                     <div class="col-sm-5 justify-content-end ">
                         <!-- Button trigger modal -->
                         <button type="button" class="btn btn-success" data-toggle="modal"
                             data-target="#Modal">
                             About {{$user->name}}
                         </button>
                         <!-- Modal -->
                         <div class="modal fade" id="Modal" tabindex="-1" role="dialog"
                             aria-labelledby="ModalTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                     </div>
                                     <div class="modal-body">
                                         <div class="row">
                                             <div class="col-sm-4">
                                                 <img class="img-fluid rounded-circle"
                                                     src="/storage/avatars/{{  $user->id }}/{{ $user->avatar }}"
                                                     alt="AvatarUser">
                                             </div>
                                             <div class="col-sm-8 profile-modal">
                                                 <div class="row col-sm-12">
                                                     <h2 class="text-capitalize"><span
                                                             class="clr-blue">#</span>{{$user->name}}</h2>
                                                 </div>
                                                 <div class="row col-sm-12">
                                                     <p><span class="green-underline">Gender:</span> {{$user->gender}}
                                                     </p>
                                                 </div>
                                                 <div class="row col-sm-12">
                                                     <p><span class="green-underline">Status:</span> {{$user->status}}
                                                     </p>
                                                 </div>
                                                 <div class="row col-sm-12">
                                                     <p><span class="green-underline">Birthday:</span>
                                                         {{$user->birthday}}</p>
                                                 </div>
                                                 <div class="row col-sm-12">
                                                     <p><span
                                                             class="green-underline">Biography:</span><br>{{$user->biography}}
                                                     </p>
                                                 </div>
                                                 <div class="row col-sm-12">
                                                     <p><span class="green-underline">Contact</span> {{$user->name}} by
                                                         mail<br><i class="fas fa-envelope clr-blue"></i>
                                                         {{$user->email}}</p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary"
                                             data-dismiss="modal">Close</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     
                     <div class="col-sm-5 d-flex justify-content-end">
                         @if($user->id == auth()->id())
                         <button class="btn btn-primary">Show All My Posts</button>
                         @else
                         <button class="btn btn-primary">Show All posts of {{ $user->name}} </button>
                         @endif
                         
                     </div>
                     <div class="col-sm-2 d-flex justify-content-end">
                       
                         <button class="btn btn-primary">New Post +</button>
                  
               
                         
                     </div>
                 </div>

