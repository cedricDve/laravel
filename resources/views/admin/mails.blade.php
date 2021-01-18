 @extends('layouts.appbuild')

 @section('content')
 <section class="s-b">
     <div class="container">
         <div class="row">
             <!-- 4POST A ROW for lg otherwise 2-->
             <!--Post 1-->
             @foreach($emails as $email)
             <div class="col-lg-3 col-sm-6 post-l shadow mt-5 ">
                 <div class="row">
                     <div class="col-sm-12"> <img class="img-fluid" src="js-a.jfif" alt=""></div>
                 </div>
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-8 pt-4">
                             <p class="text-break text-capitalize"><a href="#">#</a>From: {{$email->name}} </p>
                             <p class="text-break text-capitalize">&nbsp ~ &nbsp {{$email->email}} </p>

                         </div>
                         <div class="col-sm-4">
                             <img class="img-fluid rounded-circle"
                                 src="https://i0.wp.com/widgetwhats.com/app/uploads/2019/11/free-profile-photo-whatsapp-3.png?resize=217%2C217&ssl=1"
                                 alt="AvatarUser">
                         </div>
                     </div>
                     <div class="row col-sm-12">
                         <h3 class="text-break text-capitalize">Subject: {{$email->subject}}</h3>
                     </div>
                     <div class="row col-sm-12">
                         <p class="text-break text-capitalize">Message: {{$email->message}}</p>
                         <p>@ {{$email->created_at}}</p>
                     </div>
                     <div class="row col-sm-12 m-3">
                         <a href="/admin/mails/{{$email->id}}">
                             <button class="btn btn-outline-success mr-2">Reply</button>
                         </a>
                     </div>
                 </div>
             </div>
             @endforeach
         </div>
         </div>
         </section>
         @endsection
