@extends('layouts.admin_template')
@section('content')
    @include('admin.includes.form_error')
    <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-users mr-2"></i>Create User</span></h1>
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
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::submit('Create user',['class'=>'btn btn-dark']) !!}
    {!! Form::close() !!}

@stop
