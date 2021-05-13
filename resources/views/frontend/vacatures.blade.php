@extends('layouts.frontend_template')
@section('content')
    <main>
    <div class="col-md-8 offset-md-2">
        <div class="row">
                <div>
                    <h2 class="text-uppercase text-center my-4">Onze Vacatures voor jouw</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus dolor
                        doloribus earum eum ex harum porro quaerat, rerum veniam. Alias beatae dolor eos ipsam
                        perferendis quisquam saepe tenetur voluptate? Tempore?</p>
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
            <div class="col-md-10 mx-auto my-5">
                @foreach($vacatures as $vacature)
                    <div class="card shadow my-3" >
                        <div class="card-body">
                            <h2 class="card-text text-center my-3 bg-limoengroen fw-bold p-2 rounded">{{$vacature->title}}</h2>
                            <h4 class="card-title mosgroen fw-bold">Wat Bieden We?:</h4>
                            <p class="card-text">{{$vacature->offer}}</p>
                            <h4 class="card-title mosgroen fw-bold">Jouw Profiel:</h4>
                            <p class="card-text ">{{$vacature->profile}}</p>
                            <h4 class="card-title mosgroen fw-bold">Takenpakket:</h4>
                            <p class="card-text">{{$vacature->duties}}</p>
                            <h4 class="card-title mosgroen fw-bold">Opmerkingen:</h4>
                            <p class="card-text">{{$vacature->remarque}}</p>
                            <hr>
                            <p class="card-text mosgroen fw-bold">Created:{{$vacature->created_at->diffForHumans()}}</p>
                            <p class="card-text mosgroen fw-bold">Updated:{{$vacature->updated_at->diffForHumans()}}</p>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{$vacatures->links()}}
                </div>
            </div>
        </div>
    </div>
    </main>
@stop
