@extends('layouts.admin_template')
@section('content')
    @include('admin.includes.form_error')
    <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-users mr-2"></i>Create Job Offer</span></h1>
    {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminVacaturesController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('offer', 'Offer:') !!}
        {!! Form::text('offer',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('profile', 'Profile:') !!}
        {!! Form::textarea('profile',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('duties', 'Duties:') !!}
        {!! Form::textarea('duties',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('remarque', 'Remarque:') !!}
        {!! Form::textarea('remarque',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::submit('Create Offer',['class'=>'btn btn-dark']) !!}
    {!! Form::close() !!}

@stop
