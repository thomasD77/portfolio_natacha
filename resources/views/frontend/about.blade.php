@extends('layouts.frontend_template')
@section('content')


<main class="container-fluid">
    <div id="app"></div>

<section id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row mt-4">
                    <img class="img-fluid mt-5 w-50 mx-auto" src="{{asset('images/frontend/natacha_about.jpg')}}" alt="NatachaWaldmann">
                    <h1 id="wie" class="my-5">Wie is Natacha Waldamnn...</h1>
                    <p>Ik ben Natacha, getrouwd met Youri en mama van Titus, Len en Pixie. Sinds januari 2019 ben ik
                        Schepen van Zorg, Welzijn en Onderwijs in Oostende.</p>
                    <p> Van opleiding ben ik orthopedagoog en oplossingsgericht therapeut. Ik heb de afgelopen jaren
                        vooral expertise opgebouwd in het werken met kwetsbare kinderen en jongeren en hun context .</p>
                    <p>Vanuit die focus wil ik nu ook als schepen het verschil maken. Armoedebestrijding moet centraal
                        staan de komende jaren. Maar ook onze zorg, ons onderwijs en sociale huisvesting kunnen
                        versterkt worden.</p>
                    <p>Iedereen zich thuis laten voelen in onze fantastische stad, voor minder ga ik niet. Samen kunnen
                        we Oostende beter maken, ook jij kan daarbij helpen. Benieuwd? Volg mij ook op sociale media en
                        blijf op de hoogte!</p>

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
            <div class="col-md-8 offset-md-2 my-5">
                <div class="row">
                    <section id="bestuursakkoord" class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="row">
                                    <h2 class="text-center">Lees hier het Bestuursakkoord</h2>
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        @foreach($agreements as $agreement)
                                        <iframe frameborder="0" src="{{$agreement->file ? asset('images/agreements') .$agreement->file : 'http://placehold.it/62x62'}}"
                                                name="iframe_a" height="600px" width="100%" title="Iframe Example"></iframe>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


@stop
