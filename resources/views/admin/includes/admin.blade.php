@include('admin.includes.head')
@include('admin.includes.sidebar')
@include('admin.includes.content-top')


            @can('isAdmin')
                <!-- Content Row -->
                <div class="row">

                    <!-- Users Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a class="text-decoration-none" href="{{route('users.index')}}">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h3 class=" font-weight-bold text-primary text-uppercase mb-1">
                                            Users</h3>

                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users->total() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!-- Vacatures Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('vacatures.index')}}">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h3 class=" font-weight-bold text-success text-uppercase mb-1">
                                                Job Offers</h3>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $vacatures->total() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-newspaper fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Prospects Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('prospects.index')}}">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h3 class=" font-weight-bold text-info text-uppercase mb-1">
                                            Subscribers</h3>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $prospects->total() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-fingerprint fa-2x text-info"></i>
                                    </div>
                                </div>
                            </div>
                                </a>
                        </div>
                    </div>
                    <!-- Posts Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('posts.index')}}">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h3 class=" font-weight-bold text-warning text-uppercase mb-1">
                                            Posts</h3>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $posts->total() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-blog fa-2x text-warning"></i>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row w-100 d-flex justify-content-center my-5">
                    <div class="card w-100 mb-3 my-4 shadow border-0" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <img class="rounded-circle" height="100" width="100" src="{{$user->photo ? asset('images/users') . $user->photo->file : 'http://placehold.it/62x62'}}" alt="{{$user->name}}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title font-weight-bold text-decoration-underline">My User Credentials:</h5> <a href="{{route('users.edit', $user->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square text-dark" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg></a>
                                    </div>

                                    <p class="card-text mb-0">{{ $user->name }}</p>
                                    <p class="card-text mt-1">{{ $user->email }}</p>
                                    <p class="card-text">@foreach($user->roles as $role)
                                            <span class="badge badge-pill badge-success p-2 text-uppercase">{{$role->name}}</span>
                                        @endforeach</p>
                                    <p class="card-text"><small class="text-muted">{{ $user->created_at }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row w-100 d-flex justify-content-center my-5">
                    <div class="card w-100 mb-3 my-4 shadow border-0" style="max-width: 540px;">
                            <div class="col-12">
                                <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h2>BestuursAkkoord </h2>
                                            <button type="button" class="btn btn-dark px-1" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fas fa-plus-square mx-2"></i>
                                            </button>
                                        </div>
                                    <div class="card-title">
                                        <p class="my-0">Here we can upload a new file</p>
                                        <p class="my-0">Attention! Only PDF-Files are allowed.</p>
                                    </div>
                                    <p class="card-text">
                                        @if($agreements)
                                        @foreach($agreements as $agreement)
                                            <div class="d-flex align-items-center">
                                                <p class="mx-2">Title:</p><span class="badge badge badge-success p-2 text-uppercase my-2">{{$agreement->title}}</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="mx-2" >File:</p><span class="badge badge badge-success p-2 text-uppercase">{{$agreement->file}}</span>
                                            </div>
                                        @endforeach
                                        @endif
                                    </p>
                                    <!-- Button trigger modal -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Choose your file and Submit</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminAgreementsController@store','files'=>true]) !!}
                                                    <div class="form-group">
                                                        {!! Form::label('title', 'Title:') !!}
                                                        {!! Form::text('title',null,['class'=>'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('file', 'File:') !!}
                                                        {!! Form::file('file',null,['class'=>'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::submit('Submit',['class'=>'btn btn-dark']) !!}
                                                        {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                    </div>
                </div>


            @endcan

            @can('isPublisher')
                <!-- Content Row -->
                <div class="row">

                    <!-- Applicants Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a class="text-decoration-none" href="{{route('applicants.index')}}">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h3 class=" font-weight-bold text-primary text-uppercase mb-1">
                                                Applicants</h3>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $applicants->total() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-circle fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Vacatures Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('vacatures.index')}}">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h3 class=" font-weight-bold text-success text-uppercase mb-1">
                                                Job Offers</h3>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $vacatures->total() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-newspaper fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Prospects Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('prospects.index')}}">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h3 class=" font-weight-bold text-info text-uppercase mb-1">
                                                Subscribers</h3>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $prospects->total() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fingerprint fa-2x text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Posts Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <a class="text-decoration-none" href="{{route('posts.index')}}">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h3 class=" font-weight-bold text-warning text-uppercase mb-1">
                                                Posts</h3>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $posts->total() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-blog fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="row w-100 d-flex justify-content-center my-5">
                    <div class="card w-100 mb-3 my-4 shadow border-0" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <img class="rounded-circle" height="100" width="100" src="{{$user->photo ? asset('images/users') . $user->photo->file : 'http://placehold.it/62x62'}}" alt="{{$user->name}}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title font-weight-bold text-decoration-underline">My User Credentials:</h5> <a href="{{route('users.edit', $user->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square text-dark" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg></a>
                                    </div>

                                    <p class="card-text mb-0">{{ $user->name }}</p>
                                    <p class="card-text mt-1">{{ $user->email }}</p>
                                    <p class="card-text">@foreach($user->roles as $role)
                                            <span class="badge badge-pill badge-success p-2 text-uppercase">{{$role->name}}</span>
                                        @endforeach</p>
                                    <p class="card-text"><small class="text-muted">{{ $user->created_at }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row w-100 d-flex justify-content-center my-5">
                    <div class="card w-100 mb-3 my-4 shadow border-0" style="max-width: 540px;">
                        <div class="col-12">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h2>BestuursAkkoord </h2>
                                    <button type="button" class="btn btn-dark px-1" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-plus-square mx-2"></i>
                                    </button>
                                </div>
                                <div class="card-title">
                                    <p class="my-0">Here we can upload a new file</p>
                                    <p class="my-0">Attention! Only PDF-Files are allowed.</p>
                                </div>
                                <p class="card-text">
                                    @if($agreements)
                                        @foreach($agreements as $agreement)
                                            <div class="d-flex align-items-center">
                                <p class="mx-2">Title:</p><span class="badge badge badge-success p-2 text-uppercase my-2">{{$agreement->title}}</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="mx-2" >File:</p><span class="badge badge badge-success p-2 text-uppercase">{{$agreement->file}}</span>
                            </div>
                            @endforeach
                            @endif
                            </p>
                            <!-- Button trigger modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Choose your file and Submit</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminAgreementsController@store','files'=>true]) !!}
                                            <div class="form-group">
                                                {!! Form::label('title', 'Title:') !!}
                                                {!! Form::text('title',null,['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('file', 'File:') !!}
                                                {!! Form::file('file',null,['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::submit('Submit',['class'=>'btn btn-dark']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            @endcan








@include('admin.includes.footer')
