@extends('layouts.app')
@section('content')
<div class="row m-0">
    <div class="col-2 bg-aside-menu">
        <ul style="font-size: 20px;" class="text-decoration-none mt-4">
            <li><a href="#">👤 User profile</a></li>
            <li><a href="#">👜 Orders</a></li>
            <li><a href="#">📊 Monitoring</a></li>
            <li><a href="#">♻️ Recycling</a></li>
            <li><a href="#">Materials</a></li>
        </ul>
    </div>
    <div class="col-9 mt-5">
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
                            <td><a href={{ route('profile', $user->id ) }}>{{ $user->name }}</a></td>
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