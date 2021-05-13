@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-vacatures mr-2"></i>Edit Offer</span></h1>
    @include('admin.includes.form_error')
    <div class="row">
        <div class="col-8 ">
            {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminVacaturesController@update',$vacature->id],
            'files'=>true])
             !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title',$vacature->title,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('offer', 'Offer:') !!}
                {!! Form::text('offer',$vacature->offer,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('profile', 'Profile:') !!}
                {!! Form::textarea('profile',$vacature->profile,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('duties', 'Duties:') !!}
                {!! Form::textarea('duties',$vacature->duties,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('remarque', 'Remarque:') !!}
                {!! Form::textarea('remarque',$vacature->remarque,['class'=>'form-control']) !!}
            </div>
            <div class="form-group mr-1">
                {!! Form::submit('Update Offer',['class'=>'btn btn-dark']) !!}
            </div>
    </div>
@stop
