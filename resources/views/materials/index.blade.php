@extends('layouts.app')
@section('content')
<div class="container">
    <a class="btn" href={{ route('home') }} >
        <i class="fa fa-arrow-left"></i>
    </a>    
    <div class="col-9 mt-5">
        <div class="card">
            <div class="card-header">{{ __('ALL MATERIALS') }}</div>
            <div class="card-body">                
                <table class="mt-4" width="100%" style="font-size: 15px;">
                    <thead style="background-color: rgb(0, 94, 182); color:#fff;">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>                                                        
                            <th>Category</th>
                            <th>Avalaible</th>
                            <th>Order</th>
                        </tr>
                    </thead>
                    <tbody>  
                        @foreach ($woods as $wood)                      
                        <tr>             
                            <td>{{ $wood->id }}</td>
                            <td><a href={{ route('profile', $wood->id ) }}>{{ $wood->name }}</a></td>                         
                            
                            <td>Wood</td>
                            <td><i style="color:rgb(16, 255, 68);" class="fa fa-check"></i></td>
                            <td>💲0</td>
                        </tr>
                        @endforeach
                        @foreach ($steels as $steel)                      
                        <tr>             
                            <td>{{ $steel->id }}</td>
                            <td><a href={{ route('profile', $steel->id ) }}>{{ $steel->name }}</a></td>                            
                            
                            <td>Steel</td>
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