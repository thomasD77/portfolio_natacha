@extends('layouts.admin_template')
@section('content')

    <div class="d-flex justify-content-between my-4">
        <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-applicants mr-2"></i>Applicants</span></h1>
    </div>

    @if(Session::has('applicant_message'))
        <p class="alert alert-info my-3">{{session('applicant_message')}}</p>
    @endif
    <p>Displaying {{$applicants->count()}} of {{ $applicants->total() }} applicant(s).</p>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Deleted</th>
        </tr>
        </thead>
        <tbody>
        @if($applicants)
            @foreach($applicants as $applicant)
                <tr>
                    <td>{{$applicant->id}}</td>
                    <td>{{$applicant->first_name ? $applicant->first_name : 'No first name'}}</td>
                    <td>{{$applicant->last_name ? $applicant->last_name : 'No last name'}}</td>
                    <td>{{$applicant->phone ? $applicant->phone : 'No phone'}}</td>
                    <td>{{$applicant->email ? $applicant->email : 'No email'}}</td>
                    <td>{{$applicant->created_at->diffForHumans()}}</td>
                    <td>{{$applicant->updated_at->diffForHumans()}}</td>
                    <td>{{$applicant->deleted_at}}</td>
                   <td>
                            @if($applicant->deleted_at != null)
                            <a class="btn btn-warning" href="{{route('admin.applicantRestore', $applicant->id)}}">Restore</a>
                            @else
                            {!! Form::open(['method'=>'DELETE',
                            'action'=>['App\Http\Controllers\AdminApplicantsController@destroy', $applicant->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                            @endif
                    </td>
                    <td><a class="btn btn-dark" href="{{route('applicants.show', $applicant->id)}}"><i class="fas fa-eye"></i></a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$applicants->links()}}
@stop




