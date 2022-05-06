@extends('layouts.app')
@section('content')
<div class="container">
    <a class="btn" href={{ route('home') }} >
        <i class="fa fa-arrow-left"></i>
    </a>
    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->created_at }}</li>
        <li>Profile: <img src="" alt="picture"> </li>
    </ul>
</div>
@endsection