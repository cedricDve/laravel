@extends('layouts.app')

@section('content')
<div style="background-image: url('/images/bg.png');background-attachment: fixed;">
<div class="container pb-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@yield('table_name1')</div>

                <div class="card-body">
                    @yield('description1')
                   </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@yield('table_name2')</div>

                <div class="card-body">
                    @yield('description2')
                   </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@yield('table_name3')</div>

                <div class="card-body">
                    @yield('description3')
                   </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

                   
