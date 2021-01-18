@extends('layouts.appbuild')

@section('content')
@foreach($email as $mail)
<div class="container">
    <div class="row mt-1 shadow">
        <div class="col-sm-4">
            <img class="img-fluid" src="/images/newMail.png" alt="ImageOfNewEmail">
        </div>
        <div class="col-sm-6">
            <div class="row col-sm-12">
                <h2>From: {{ $mail->name }}</h2>
            </div>
            <div class="row col-sm-12">
                <p>&nbsp ~ &nbsp {{$mail->email}} </p>
            </div>
            <div class="row col-sm-12">
                <h3>Subject: {{$mail->subject}}</h3>
            </div>
            <div class="row col-sm-12">
                <p>Message: {{$mail->message}}</p>
            </div>
            <!--
        <div class="row">
            <div class="col-sm-6">
            <form method="POST" action="{{ route('deleteMail')  }}">
       
            @csrf
           
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success mr-4">Delete</button>
            </div>
            </form>
            <a href="{{ route('deleteMail', $mail->email) }}">  <button type="submit" class="btn btn-outline-danger mr-4">Delete</button></a>
          
        </div>  -->
            <div class="row col-sm-12 d-flex mt-2">
                <p>@ {{$mail->created_at}}</p>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5 shadow">
    <div class="container box">
        <h3>Reply To {{ $mail->name }}</h3><br />
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
        <form method="POST" action="{{ route('replyMail') }}">
            @csrf
            <div class="form-group">
                <label>Enter Your Message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Sending to</label>
                <textarea name="mail" class="form-control" rows="1">{{$mail->email}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success mr-4">Send</button>
            </div>
        </form>
    </div>
</div>
@endforeach
@endsection
