@extends('layouts.admin_template')
@section('content')
    @include('admin.includes.form_error')
    <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-users mr-2"></i>Create Facebook Post</span></h1>
    {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminFacebookController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('code', 'Code:') !!}
        {!! Form::textarea('code',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::submit('Create Post',['class'=>'btn btn-dark']) !!}
    {!! Form::close() !!}
@stop
