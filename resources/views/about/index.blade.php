
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
            <div  class="d-flex">
            @include('about.cardOne')  
            @include('about.cardTwo')  
            @include('about.cardTree') 
            </div>

                   
@endsection

@section('table_name3', 'Contact-Us By Email')

@section('description3')
                  
               
    @include('layouts.contact')                    
                   
                   
    <aside class="col-md-12 blog-sidebar">
    

      <div class="p-4">
        <h4 class="font-italic">What I Used To Create This Website</h4>
        <ol class="list-unstyled mb-0 p-3">
          <li><a href="https://getbootstrap.com/docs/4.1/getting-started/introduction/">Bootstrap documentation</a></li>
          <li><a href="https://laravel.com/docs/8.x/">Laravel documentation 2014</a>
          <ol class="list-unstyled mb-0 p-3">
          <li><a href="  https://laravel.com/docs/8.x/queries">db queries</a></li>
          <li><a href="https://laravel.com/docs/8.x/routing">routing</a></li>
          <li><a href="https://laravel.com/docs/8.x/routing">urls</a></li>
          </ol>
          </li>

        
          <li><a href="https://laracasts.com/discuss/channels/laravel/laravel-blade-at-include-vs-at-extends?page=0">Laracast platform/blog</a></li>
          <li><a href="https://laravel.io/">Laravel io</a></li>
          <li><a href="https://stackoverflow.com/">StackOverFlow</a>
          <ol class="list-unstyled mb-0 p-3">
          <li><a href="https://stackoverflow.com/questions/46118148/laravel-get-a-random-user-with-where-clause?noredirect=1">random elements from table</a></li>
          <li><a href="https://stackoverflow.com/questions/37511893/laravel-custom-trait-not-found">errors</a></li>
          <li><a href="https://stackoverflow.com/questions/65546549/how-to-destroy-a-record-using-a-form-in-laravel-and-display-status">destroy</a></li>
          </ol>
          </li>
      
        
        </ol>
      </div>
    </aside>      

                   
@endsection


   


