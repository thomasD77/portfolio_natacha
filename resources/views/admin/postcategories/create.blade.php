@extends('layouts.admin_template')
@section('content')
    <h1 class="my-4"><span class="badge mosgroen display-1 shadow"><i class="fas fa-blog mr-2"></i>Create Post</span></h1>
    <div class="row">
        <div class="col-12">
            @include('admin.includes.form_error')
            {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminPostCategoriesController@store',
            'files'=>false]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Create Category', ['class'=>'btn btn-success']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
