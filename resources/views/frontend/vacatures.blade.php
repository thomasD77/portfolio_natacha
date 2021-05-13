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
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Solliciteer hier
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Solicitatie formulier:</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminApplicantsController@store','files'=>true]) !!}
                                    <div class="form-group">
                                        {!! Form::label('first_name', 'First Name:') !!}
                                        {!! Form::text('first_name',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('last_name', 'Last Name:') !!}
                                        {!! Form::text('last_name',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('email', 'E-mail:') !!}
                                        {!! Form::text('email',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('start_date', 'Start date:') !!}
                                        {!! Form::date('start_date',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('phone', 'Phone:') !!}
                                        {!! Form::text('phone',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('birthdate', 'Birthdate:') !!}
                                        {!! Form::date('birthdate',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('remarque', 'What else do we need to know about you:') !!}
                                        {!! Form::textarea('remarque',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('file', 'CV:') !!}
                                        {!! Form::file('file',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::submit('Submit',['class'=>'btn btn-dark']) !!}
                                        {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>


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
