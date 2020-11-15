
<div class="container box">
   <h3>Contact Us By Email</h3><br />
   <!--Validation -->
   @if (count($errors) > 0)
     <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
         </ul>
     </div>
   @endif
   @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
    </div>
   @endif
   <!--Form: input -->
   <form method="post" action="{{url('sendemail/send')}}">
   @csrf
    <div class="form-group">
        <label>Enter Your Name</label>
        <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
        <label>Enter Your Email</label>
        <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
        <label>Enter Your Subject</label>
        <input type="text" name="subject" class="form-control" value="" />
    </div>
    <div class="form-group">
        <label>Enter Your Message</label>
        <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>