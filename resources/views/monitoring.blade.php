@extends('layouts.app')
@section('content')
<div class="row m-0 pb-5">    
    @include('components.asidebar')
    <div class="col-9 mt-5">
        <a class="btn" href={{ route('home') }} >
            <i class="fa fa-arrow-left"></i>
        </a> 
        <h1 class="text-center display-5 pb-5">Monitoring</h1>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>    
</div>
@endsection