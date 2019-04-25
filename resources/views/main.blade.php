@extends('layouts.app')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100  pic-main" src="{{ asset('assets/img/main.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100  pic-main" src="{{ asset('assets/img/main.jpg') }}" alt="Second slide">
        </div>
    </div>
    
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    <div class = "pic-main-text">Laravel-Driven Blog</div>
    <div class = "pic-main-text-2">Powered through PHP,</div>
    <div class = "pic-main-text-3">this application does some serious shit</div>

    <div class = "main-container">
        <div class = "row">
            <div class = "col"> 
                <div class = "main-content-1">
                        <h2>Reasons To Join Up</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam libero itaque soluta praesentium natus, reiciendis voluptatibus voluptate, maxime debitis distinctio necessitatibus illum impedit veniam. Quidem, quod. Vero esse id facilis.</p>
                </div>
            </div>
            <div class = "col-7">
                <img class="pic-content" src="{{ asset('assets/img/main.jpg') }}" alt="First slide">
            </div>
        </div>
    </div>
    

    	
@endsection



