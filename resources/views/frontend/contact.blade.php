@extends('layouts.frontend_template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-column px-0">
                <img class="img-fluid " src="{{asset('images/frontend/natacha_background.jpg')}}" alt="">
            </div>
        </div>
    </div>

<main id="contact" class="container-fluid">


    {{--<section class="container-fluid my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <iframe width="100"
                            height="500"
                            src="https://www.youtube.com/embed/r9UssSvdC8Q?autoplay=1&mute=1&controls=0"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>--}}

    <section>
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    @if(Session::has('contactform_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <h4 class="alert-heading">Bedankt!</h4>
                            <p class="alert-success">Het contactforumlier staat klaar voor behandeling.</p>
                            <hr>
                            <p class="mb-0 alert-success">{{session('contactform')}}</p>

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>




    <seciton id="credits" class="row custom">
        <div class="col-lg-10 offset-lg-1">
            <div class="row">
                <div class="d-md-flex justify-md-content-around mb-3">
                    <div class="col-12 col-md-4 text-center my-2">
                        <i class="fas fa-map-marker-alt fa-5x groengroen my-2"></i>
                        <p class="mb-0">Vindictivelaan 1</p>
                        <p>8400 Oostende</p>
                    </div>
                    <div class="col-12 col-md-4 text-center my-2">
                        <i class="fas fa-mobile-alt fa-5x groengroen my-2"></i>
                        <p class="mb-0 text-dark">T 059 25 84 59</p>
                    </div>
                    <div class="col-12  col-md-4 text-center my-2">
                        <i class="far fa-envelope-open fa-5x groengroen my-2"></i>
                        <p class="mb-0">Natacha Waldmann</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div>
                    <h2 class="mt-lg-5 text-center">Wilt u graag contact met ons opnemen?</h2>
                    <p class="mb-lg-4 text-center">Vul hierbeneden ons contactformulier in. <br> Na het behandelen van uw bericht nemen
                        we contact met u op.</p>
                    @include('admin.includes.form_error')
                    <form class="row mb-0" name="contactformulier" action="{{action('App\Http\Controllers\ContactController@store')}}" method="post">
                        @csrf
                        <div  class="row">
                            <div class="col-12">
                                <input  name="name" type="text" class="form-control my-1 styleinput shadow border-0" placeholder="Enter your name" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="col-12">
                                <input id="input2" name="email" type="text" class="form-control my-1 shadow border-0" placeholder="Your Email" aria-label="email" aria-describedby="basic-addon1">
                            </div>
                            <div class="col-12">
                                <input id="input3" name="subject" type="text" class="form-control my-1 shadow border-0" placeholder="Subject" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12">
                                <textarea id="input4" name="message" class="form-control textfield shadow border-0" rows="10" cols="50" placeholder="Your message here" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-group form-check ml-3">
                            <input type="checkbox" class="form-check-input" name="GDPR">
                            <label class="form-check-label" for="exampleCheck1">Ik ga akkoord met GDPR</label>
                        </div>
                        <div class="g-recaptcha" id="g-recaptcha" data-sitekey="6LcO5nUcAAAAAHgSnEkoo8xedmqoOmzkEViXAaVP"></div>
                        <div class="row">
                            <div class="col-12 col-lg-4 offset-lg-4 d-flex justify-content-center mt-3 mb-5">
                                <button type="submit" class="button rounded">verstuur</button>
                            </div>
                        </div>
                    </form>
                    <script src="https://www.google.com/recaptcha/api.js"></script>
                </div>
            </div>
        </div>
    </seciton>

    </main>

@stop
