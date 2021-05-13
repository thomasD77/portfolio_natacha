@extends('layouts.frontend_template')
@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div class="">
                <div>
                    <h2 class="text-uppercase text-center my-4">Wie zijn wij?</h2>
                    <p class="text-center">Wij zijn Natacha Waldmann en Silke Beirens, Groene Schepenen bij de Stad Oostende. Natacha is
                        schepen van Welzijn, Zorg en Onderwijs, Silke van Mens en Milieu. Samen met onze medewerkers
                        Lucas, Nicolas en Benoit vormen wij het Groene kabinet op het stadhuis.</p>
                </div>
                <div class="mx-auto d-flex justify-content-center">
                    <a class="btn btn-dark" href="">Solliciteer Hier</a>
                </div>

            </div>
            <div class="col-md-8 mx-auto my-5">
                @foreach($vacatures as $vacature)
                    <div class="card shadow my-3" >
                        <div class="card-body">
                            <h1 class="card-text my-3">{{$vacature->title}}</h1>
                            <h4 class="card-title">Wat Bieden We?:</h4>
                            <p class="card-text">{{$vacature->offer}}</p>
                            <h4 class="card-title">Jouw Profiel:</h4>
                            <p class="card-text">{{$vacature->profile}}</p>
                            <h4 class="card-title">Takenpakket:</h4>
                            <p class="card-text">{{$vacature->duties}}</p>
                            <h4 class="card-title">Opmerkingen:</h4>
                            <p class="card-text">{{$vacature->remarque}}</p>
                            <hr>
                            <p class="card-text">Created:{{$vacature->created_at->diffForHumans()}}</p>
                            <p class="card-text">Updated:{{$vacature->updated_at->diffForHumans()}}</p>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{$vacatures->links()}}
                </div>
            </div>


        </div>
    </div>


@stop
