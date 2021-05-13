@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-users mr-2"></i>Edit Facebook Post</span></h1>
    @include('admin.includes.form_error')
    <div class="row">
        <div class="col-8 ">
            {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminFacebookController@update',$facebook->id],
            'files'=>true])
             !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title',$facebook->title,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('code', 'Code:') !!}
                {!! Form::textarea('code',$facebook->code,['class'=>'form-control']) !!}
            </div>
            <div class="form-group mr-1">
                {!! Form::submit('Update Facebook Post',['class'=>'btn btn-dark']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
