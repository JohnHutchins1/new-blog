@extends('layouts.app')

@section('content')

    <div>
        <img class="header-pic" src="{{ asset('assets/img/main.jpg') }}" alt="First slide">
    </div>

    <div>
        <h1>Places<h1>
    </div>

    <div class = "card-container">
        <p>all of the n number of cards coming from our database/project are generated here</p>

    </div>
@endsection