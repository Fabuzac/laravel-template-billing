@extends('layouts.app')
@section('content')
<div class="row m-0">    
    @include('components.asidebar')
    <div class="col-9 mt-5">
        <h1 class="text-center display-5">User Management</h1>
        <div class="card">
            <div class="card-header">{{ __('Users Table') }}</div>
            <div class="card-body">                
                <table class="mt-4" width="100%" style="font-size: 15px;">
                    <thead style="background-color: rgb(0, 94, 182); color:#fff;">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Adress</th>
                            <th>Created At</th>
                            <th>Avalaible</th>
                            <th>Order</th>
                        </tr>
                    </thead>
                    <tbody>  
                        @foreach ($users as $user)                      
                        <tr>             
                            <td>{{ $user->id }}</td>
                            <td><a href={{ route('users.show', $user->id ) }}>{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>3 Rue tartampion</td>
                            <td>{{ $user->created_at }}</td>
                            <td><i style="color:rgb(16, 255, 68);" class="fa fa-check"></i></td>
                            <td>💲0</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>        
                        <tr>
                            <td colspan="3"></td>                            
                        </tr>        
                    </tfoot>
                </table>                
            </div>
        </div>
    </div>    
</div>
@endsection