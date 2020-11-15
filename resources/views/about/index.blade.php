
@extends('layouts.block')
@section('table_name1', 'About Us')

@section('description1')
                   <div style=" background-color: #d0e1d3; text-align : center" class="p-3">    
                   <h1 style="font-size: 35px">IT'_ers Community count <span style="font-weight: bold"><?php $users = DB::table('users')->count();?>{{ $users }}</span> Active Users !</h1>
                   <h1>Our main goal is to create a great community where respect and sharing are the keywords</h1>
                   </div>

                   
@endsection

@section('table_name2', 'Collaborators')

@section('description2')
            @include('about.cardOne')  
            @include('about.cardTwo')  

                   
@endsection

@section('table_name3', 'Test')

@section('description3')
                  
               
    @include('layouts.contact')   
                   
                   
                   
                

                   
@endsection



