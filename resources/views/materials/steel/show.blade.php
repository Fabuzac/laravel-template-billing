@extends('layouts.app')
@section('content')
<div class="container">
    <a class="btn" href={{ route('home') }} >
        <i class="fa fa-arrow-left"></i>
    </a>
    <h1 class="text-center display-6">Detail Steel ⬜</h1>
    <ul class="display-6 pt-5">
        <li>Steel Type Name: <span class="bold text-capitalize">
            {{ $steel->name }}</span>
        </li>
        <li>Stock Quantity: <span class="bold">
            {{ $steel->quantity }}</span> Units
        </li>
        <li>Supplier: <span class="bold text-capitalize">
            {{ $steel->supplier }}</span>
        </li>
    </ul>
</div>
@endsection