@extends('layouts.appbuild')
@section('content')

<div class="container">

    <div class="row">      

        <div class="col">
            <!--All Users-->
            <div class="card">
                <div class="card-header">
                    {{ __('All Users') }}
                </div>
                <div class="card-body">                
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">{{ '#' }}</th>
                                <th scope="col">{{ 'name' }}</th>
                                <th scope="col">{{ 'Admin' }}</th>
                                <th scope="col">{{ '' }}</th>
                            </tr>
                        </thead>
                        <tbody>                           
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>
                                   {{ $user->name }}
                                </td>                                
                                <td>
                                    <form action="{{ route('admin.isAdmin',$user->id) }}" method="POST">
                                        @csrf                                    
                                        @if($user->admin == 1)
                                        <button type="submit" class="btn btn-warning">{{ __('Disable Admin') }}</button>
                                        @else
                                        <button type="submit" class="btn btn-primary">{{ __('Enable Admin') }}</button>
                                        @endif
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('admin.destroy', $user) }}" method="POST">
                                        @csrf
                                        
                                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                                    </form>
                                </td>                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>  

</div>
@endsection