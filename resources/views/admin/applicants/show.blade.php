@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-users mr-2"></i>Applicant</span></h1>

    <div class="row my-3">
        <div class="col-md-6">
            <div class="card" >
                <div class="card-body">
                    <h4 class="card-title">First Name:</h4>
                    <p class="card-text">{{$applicant->first_name}}</p>
                    <h4 class="card-title">Last Name:</h4>
                    <p class="card-text">{{$applicant->last_name}}</p>
                    <h4 class="card-title">Email:</h4>
                    <p class="card-text">{{$applicant->email}}</p>
                    <h4 class="card-title">Phone:</h4>
                    <p class="card-text">{{$applicant->phone}}</p>
                    <h4 class="card-title">Start date:</h4>
                    <p class="card-text">{{$applicant->start_date}}</p>
                    <h4 class="card-title">Birthdate:</h4>
                    <p class="card-text">{{$applicant->birthdate}}</p>
                    <h4 class="card-title">Remarque:</h4>
                    <p class="card-text">{{$applicant->remarque}}</p>
                    <h4 class="card-title">CV:</h4>
                    <a class="my-2" target="_blank" href="{{$applicant->file ? asset('images/cv') . "/" . $applicant->file : 'http://placehold.it/62x62'}}">
                            <i class="fas fa-box-open fa-2x text-dark mb-4"></i><span class="text-decoration-none text-dark mx-3">Open Me</span>
                    </a>
                    <p class="card-text my-0">Created:{{$applicant->created_at->diffForHumans()}}</p>
                    <p class="card-text">Updated:{{$applicant->updated_at->diffForHumans()}}</p>
                </div>
            </div>
        </div>
    </div>
@stop




