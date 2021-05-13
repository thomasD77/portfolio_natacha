@extends('layouts.admin_template')
@section('content')

    <div class="d-flex justify-content-between my-4">
        <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-users mr-2"></i>Facebook</span></h1>
        <h3><span class="badge bg-dark display-1 shadow my-2"><i class=" fas fa-plus text-white"></i><a class="text-white text-decoration-none" href="{{route('facebook.create')}}">Add New</a></span></h3>
    </div>

    @if(Session::has('user_message'))
        <p class="alert alert-info my-3">{{session('user_message')}}</p>
    @endif
    <p>Displaying {{$facebook->count()}} of {{ $facebook->total() }} user(s).</p>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col" >Code</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Deleted</th>
        </tr>
        </thead>
        <tbody>
        @if($facebook)
            @foreach($facebook as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><a href="{{route('facebook.edit', $user->id)}}">{{$user->title}}</a></td>
                    <td>CODE</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td>{{$user->deleted_at}}</td>
                    <td>
                            @if($user->deleted_at != null)
                            <a class="btn btn-warning" href="{{route('admin.userRestore', $user->id)}}">Restore</a>
                            @else
                            {!! Form::open(['method'=>'DELETE',
                            'action'=>['App\Http\Controllers\AdminUsersController@destroy', $user->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                            @endif
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$facebook->links()}}
@stop




