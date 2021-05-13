@extends('layouts.frontend_home_template')
@section('content')

<main>
  {{-- <section class="container-fluid my-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </h1>
                <p>Autem deserunt eius expedita minus
                    nesciunt repudiandae temporibus voluptas. Atque consequuntur cupiditate error in iusto labore optio,
                    quibusdam repellat soluta totam ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium alias aliquam beatae blanditiis, cum doloremque dolorum, earum excepturi fugiat hic id
                    inventore, odio officia quasi quidem sunt totam voluptate voluptates? </p>
            </div>
        </div>
    </section>--}}

    <section id="facebook-scroll" class="container-fluid my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="fb-page"
                             data-href="https://www.facebook.com/NatachaWaldmannOostende"
                             data-tabs="timeline"
                             data-width="1500" data-height=""
                             data-small-header="false"
                             data-adapt-container-width="true"
                             data-hide-cover="false"
                             data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/NatachaWaldmannOostende"
                                        class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/NatachaWaldmannOostende">Natacha Waldmann</a>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div>
                            <h2 class="text-center">Scroll Away In My Facebook Feed</h2>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex impedit iusto magni
                                necessitatibus nihil voluptatibus. A, alias culpa cum cupiditate eos excepturi nesciunt
                                optio quibusdam sunt tenetur voluptate voluptates voluptatibus!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex impedit iusto magni
                                necessitatibus nihil voluptatibus. A, alias culpa cum cupiditate eos excepturi nesciunt
                                optio quibusdam sunt tenetur voluptate voluptates voluptatibus!
                            </p>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex impedit iusto magni
                                necessitatibus nihil voluptatibus. A, alias culpa cum cupiditate eos excepturi nesciunt
                                optio quibusdam sunt tenetur voluptate voluptates voluptatibus!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex impedit iusto magni
                                necessitatibus nihil voluptatibus. A, alias culpa cum cupiditate eos excepturi nesciunt
                                optio quibusdam sunt tenetur voluptate voluptates voluptatibus!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="facebook-post" class="container-fluid my-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-8 offset-md-2 my-5">
                        <h2 class="text-center">My Facebook Feed</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex impedit iusto magni
                            necessitatibus nihil voluptatibus. A, alias culpa cum cupiditate eos excepturi nesciunt
                            optio quibusdam sunt tenetur voluptate voluptates voluptatibus!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex impedit iusto magni
                            necessitatibus nihil voluptatibus. A, alias culpa cum cupiditate eos excepturi nesciunt
                            optio quibusdam sunt tenetur voluptate voluptates voluptatibus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex impedit iusto magni
                            necessitatibus nihil voluptatibus. A, alias culpa cum cupiditate eos excepturi nesciunt
                            optio quibusdam sunt tenetur voluptate voluptates voluptatibus!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex impedit iusto magni
                            necessitatibus nihil voluptatibus. A, alias culpa cum cupiditate eos excepturi nesciunt
                            optio quibusdam sunt tenetur voluptate voluptates voluptatibus!
                        </p>
                        <p class="text-center">
                        </p>
                    </div>
                    <div class="d-flex align-items-center">
                        @foreach($facebook as $post)
                            <div class="col-md-4">
                                {!! $post->code !!}
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center my-4">
                        {{$facebook->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                <h2 class="text-center my-4">Meest recente nieuws </h2>
                @foreach($posts as $post)
                    <div class="col-md-4 card border-0 my-4" style="background-color:#f8fafc" >
                        <img class="mt-3 img-fluid"  src="{{$post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" alt="{{$post->name}}">
                        <div class="card-title border-none">
                            <h2 class="mt-2"><a class="text-decoration-none text-dark" href="">{{Str::limit($post->title, 35)}}</a></h2>
                        </div>
                        <div class="card-body px-0  pt-0 ">
                            <p class="mb-2">{{substr(strip_tags($post->body),0,200)}}{{strlen(strip_tags($post->body))
                        > 200 ? "..." : ""}}</p>
                            <div><i class="far fa-folder me-2"></i>{{$post->postcategory ? $post->postcategory->name : ""}}</div>
                            <div><i class="far fa-calendar-alt me-2"></i>{{$post->created_at->diffForHumans()}}</div>
                        </div>
                        <div class="card-footer border-0 px-0" style="background-color:#f8fafc">
                            <a  href="{{route('post', $post->slug)}}" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
    <div id="anchor"></div>
    <section class="container-fluid my-5">
        <div class="row px-0 py-5" id="bereikbaar">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-uppercase text-white">Stay Connected</h2>
                        <p class="text-white">Subscribe to our newsletter and stay up to date with <br>
                            latest offers and upcoming trends</p>
                    </div>
                    <div class="col-md-6">
                        <div id="form" class="input-group mb-3">
                            <form class="d-flex flex-column" action="{{action('App\Http\Controllers\AdminReadersController@store')}}" method="post">
                                @csrf
                                <div class="d-flex">
                                   <input id="inputmail" name="newsletter" type="email" class="form-control mr-0 rounded" placeholder="E-mail...">
                                    <button class="my-lg-0 py-1 btn-dark rounded" type="submit" id="btnnewsletter">Send</button>
                                </div>
                                @if(Session::has('readers_message'))
                                    <div class="alert alert-dark alert-dismissible fade show mt-4" role="alert">
                                        <p class="mb-0 alert-dark">{{session('readers_message')}}</p>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop




