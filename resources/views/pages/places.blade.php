@extends('layouts.app')

@section('content')

    <div class = "container mw-100 m-0 p-0">
        <img class="img-fluid" src="{{ asset('assets/img/main.jpg') }}" alt="First slide">
    </div>

    <div class = "row mt-5">
        <div class = "col"></div>
        <div class = "col-9 jumbotron text-center">
            <h1>Places<h1>
            <p>all of the n number of cards coming from our database/project are generated here</p>
        </div>
        <div class = "col"></div> 
    </div>
    
    <!-- Dynamically makes our cards from all of the paths in the databases -->
    <div class = "container">
        <div class = "card-columns">
            @if(count($images) > 1)
                @foreach($images as $image)
                    <div class = "card border-0 hover-effect">
                        <img class="card-img-top rounded" src="{{ asset('assets/'. $image->path) }}">
                        <p class = "top-left text-white card-p">{{$image->location}}</p>


                        <div class = "bottom-right hover-effect">
                            <button type="button" class="btn btn-light border-0" onclick="">
                                <span>&#43; Add</span>
                            </button>   
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
   


@endsection