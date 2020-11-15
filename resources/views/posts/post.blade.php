@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
             
                <div>
              
                <div>
              
                <h2 style = "font-size : 14px">Post number <span style="font-weight : bold">{{ $posts }}</span></h2>
                <h2 style="text-transform:capitalize;">{{ $title}}</h2>
                <p>{{ $content}}</p>
                <h4 class="pl-2" style="font-size:16px;">Posted by : {{ $user_name}} </h4>
                
            
            
                </div>

 
              
            
            
                </div>

        
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
