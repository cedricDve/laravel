@extends('layouts.app')

@section('content')
<div class="container">
 <!-- profile image & description -->
   <div class="row align-items-end">
      <div class="col-3 pt-2 pl-4">
      <!-- profile image -->
      <img src="/images/logoB.png" style=" height: 250px;" class="rounded-circle">
      </div>
      <div class="col-9 ">
       <!-- profile information -->
         
          <div class="d-flex flex-row bd-highlight mb-3 align-items-end">
            <div class="p-2 pr-5 bd-highlight"><strong>{{$user}}</strong></div>  
            <div class="p-2 bd-highlight">active user since :<strong>
            <?php 
            $d = $user; // ->created_at;
            $timestamp=date('d-m-Y',strtotime($d));
            echo  $timestamp; 
            $d1=strtotime($timestamp);
            $d2=ceil((time()-$d1)/60/60/24);
            if($d2>1) echo  '  (', $d2 , 'days)'; 
            echo  '  (', $d2 , 'day)';
            ?>
            </div>   
            </div>       
         <div class=" flex-row bd-highlight mb-3 ">
            <div class="p-2 bd-highlight"><strong>Description</strong> <br> {{$user}}</div>
            <div class="p-2 bd-highlight"><a href="#" >{{$user}} </a></div>   
         </div>      
      
      </div>
   </div>

    <!-- User posts -->
   <div class="row p-2 pt-4">
        <!-- Bootsrap grids of 12 :  show 3 posts so => 4  -->
     <!-- User posts 1 -->
      <div class="col-4">
            <div>Title</div>
            <img class="w-100" alt="description image post1" src="/images/logoB.png">     
            <div>Description :<br>
                {{'kuegfeu'}}
            </div>
      </div>
        <!-- User posts 2 -->
        <div class="col-4">
            <div>Title</div>
            <img class="w-100" alt="description image post1" src="/images/logoB.png">    
            <div>Description :<br>
                {{'kuegfeu'}}
            </div>
      </div>
        <!-- User posts 3 -->
        <div class="col-4">
            <div>Title</div>
            <img class="w-100" alt="description image post1" src="/images/logoB.png">     
            <div>Description :<br>
                {{'kuegfeu'}}
            </div>
      </div>
   
   </div>
</div>
@endsection
