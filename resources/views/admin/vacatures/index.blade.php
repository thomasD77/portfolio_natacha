@extends('layouts.admin_template')
@section('content')

    <div class="d-flex justify-content-between my-4">
        <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-vacatures mr-2"></i>Job Offers</span></h1>
        <h3><span class="badge bg-dark display-1 shadow my-2"><i class=" fas fa-plus text-white"></i><a class="text-white text-decoration-none" href="{{route('vacatures.create')}}">Add New</a></span></h3>
    </div>

    @if(Session::has('vacature_message'))
        <p class="alert alert-info my-3">{{session('vacature_message')}}</p>
    @endif
    <p>Displaying {{$vacatures->count()}} of {{ $vacatures->total() }} vacature(s).</p>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Deleted</th>
        </tr>
        </thead>
        <tbody>
        @if($vacatures)
            @foreach($vacatures as $vacature)
                <tr>
                    <td>{{$vacature->id}}</td>
                    <td><a href="{{route('vacatures.edit', $vacature->id)}}">{{$vacature->title}}</a></td>
                    <td>{{$vacature->created_at->diffForHumans()}}</td>
                    <td>{{$vacature->updated_at->diffForHumans()}}</td>
                    <td>{{$vacature->deleted_at}}</td>
                    <td>
                            @if($vacature->deleted_at != null)
                            <a class="btn btn-warning" href="{{route('admin.vacatureRestore', $vacature->id)}}">Restore</a>
                            @else
                            {!! Form::open(['method'=>'DELETE',
                            'action'=>['App\Http\Controllers\AdminVacaturesController@destroy', $vacature->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                            @endif
                    </td>
                    <td><a class="btn btn-dark" href="{{route('vacatures.show', $vacature->id)}}"><i class="fas fa-eye"></i></a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$vacatures->links()}}
@stop




