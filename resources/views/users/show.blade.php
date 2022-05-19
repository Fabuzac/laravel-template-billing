@extends('layouts.app')
@section('content')
<div class="row m-0">    
    @include('components.asidebar')
    <div class="col-9 mt-5">
        <div class="container">
            <a class="btn" href={{ route('home') }} >
                <i class="fa fa-arrow-left"></i>
            </a>
            <div class="card mb-3">
                <h3 class="card-header">{{ $user->name }}</h3>
                <div class="card-body">
                    <h5 class="card-title">Mail: {{ $user->email }}</h5>  
                    <p>Profile: <img src="" alt="picture"></p>        
                </div>
                <div class="card-body">
                    <p class="card-text">
                    Note: Some quick example text to build on the card 
                    title and make up the bulk of the card's content.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Created Date: {{ $user->created_at }}
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    <p>Last connection: 2 days ago</p>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection