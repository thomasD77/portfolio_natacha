@extends('layouts.admin_template')
@section('content')
    <h1><span class="badge mosgroen display-1 shadow"><i class="fas fa-users mr-2"></i>Job Offer</span></h1>
    <div class="row my-3">
        <div class="col-md-6">
            <div class="card shadow my-3" >
                <div class="card-body">
                    <h4 class="card-title">Title:</h4>
                    <p class="card-text">{{$vacature->title}}</p>
                    <h4 class="card-title">Offer:</h4>
                    <p class="card-text">{{$vacature->offer}}</p>
                    <h4 class="card-title">Profile:</h4>
                    <p class="card-text">{{$vacature->profile}}</p>
                    <h4 class="card-title">Duties:</h4>
                    <p class="card-text">{{$vacature->duties}}</p>
                    <h4 class="card-title">Remarque:</h4>
                    <p class="card-text">{{$vacature->remarque}}</p>
                    <hr>
                    <p class="card-text">Created:{{$vacature->created_at->diffForHumans()}}</p>
                    <p class="card-text">Updated:{{$vacature->updated_at->diffForHumans()}}</p>
                </div>
            </div>
        </div>
    </div>
@stop




