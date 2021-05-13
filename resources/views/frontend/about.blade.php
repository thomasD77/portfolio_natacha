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
            <div class="col-md-8 offset-md-2 my-5">
                <div class="row">
                    <section id="bestuursakkoord" class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="row">
                                    <h2 class="text-center">Lees hier het Bestuursakkoord</h2>
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <iframe frameborder="0" src="{{asset('images/Bestuursakkoord.pdf')}}"
                                                name="iframe_a" height="600px" width="100%" title="Iframe Example"></iframe>
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
