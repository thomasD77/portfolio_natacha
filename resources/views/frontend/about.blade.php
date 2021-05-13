@extends('layouts.frontend_template')
@section('content')


<main class="container-fluid">
    <div id="app"></div>

<section id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row mt-4">
                    {{--<img class="img-fluid mt-5" src="{{asset('images/frontend/silke_strand.jpg')}}" alt="SilkeBeirens">--}}
                    <h1 id="wie" class="my-5">Wie is Natacha Waldamnn...</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.</p>

                    <h2 id="waarom" class="my-3">Waarom in de Politiek gestapt?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad alias aliquam corporis,
                        cupiditate dicta dolores dolorum eligendi, error illum inventore ipsa itaque iusto odit
                        provident ratione recusandae sequi sint.</p>
                </div>
            </div>
            <div class="col-md-8 offset-md-2 mb-5">
                <div class="row">
                    <h2 id="bevoegdheden" class="my-3">Wat zijn Silke haar bevoegdheden?</h2>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Klimaat gradient.jpg')}}" alt="klimaat">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Klimaat</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Milieuvervuiling gradient.jpg')}}" alt="milieu">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Milieu</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Migratie en asiel gradient.jpg')}}" alt="mens">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Mens</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Kinderen en jongeren gradient.jpg')}}" alt="kinderen">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Kinderen</h3>
                    </div>

                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Cultuur en media gradient.jpg')}}" alt="Cultuur">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Cultuur</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Economie gradient.jpg')}}" alt="Economie">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Economie</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Dierenwelzijn gradient.jpg')}}" alt="Dierenwelzijn">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Dierenwelzijn</h3>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="{{asset('images/frontend/Belastingen gradient.jpg')}}" alt="belastingen">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Belastingen</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@stop
