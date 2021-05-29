@extends('layouts.frontend_template')
@section('content')


<main class="container-fluid">
    <div id="app"></div>

    <section id="about">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row mt-4">
                    <img class="img-fluid mt-5 w-50 mx-auto" src="{{asset('images/frontend/natacha_about.jpg')}}" alt="NatachaWaldmann">
                    <h1 id="wie" class="my-5">Wie is Natacha Waldamnn...</h1>
                    <p>Ik ben Natacha, getrouwd met Youri en mama van Titus, Len en Pixie. Sinds januari 2019 ben ik
                        Schepen van Zorg, Welzijn en Onderwijs in Oostende.
                        Van opleiding ben ik orthopedagoog en oplossingsgericht therapeut. Ik heb de afgelopen jaren
                        vooral expertise opgebouwd in het werken met kwetsbare kinderen en jongeren en hun context .
                        Vanuit die focus wil ik nu ook als schepen het verschil maken. Armoedebestrijding moet centraal
                        staan de komende jaren. Maar ook onze zorg, ons onderwijs en sociale huisvesting kunnen
                        versterkt worden.
                        Iedereen zich thuis laten voelen in onze fantastische stad, voor minder ga ik niet. Samen kunnen
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
        </div>
</section>

    <section id="bevoegdheden">
        <div class="row">
            <div class="col-md-8 offset-md-2 mb-5">
                <div class="row">
                    <h2 id="bevoegdheden" class="my-3">De Speerpunten</h2>
                    <h5 class="mb-4">Klik op de speerpunten om er meer over te ontdekken... </h5>
                        <div class="col-md-4 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img class="img-fluid w-75 mx-auto speerpunt" src="{{asset('images/frontend/Klimaat gradient.jpg')}}" alt="klimaat">
                            <h3 class="text-center text-uppercase mosgroen pb-2">Klimaat</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Armoede pakken we aan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Oostende is van iedereen. Ik geloof in een stad waar elke Oostendenaar zich
                                                thuis voelt. Maar er is nog werk. Op vandaag heeft Oostende de hoogste
                                                armoedecijfers van alle centrumsteden en laat daarmee steden als Antwerpen
                                                en Gent ver achter zich. Er is een trendbreuk nodig.
                                                Groen staat voor een armoedebeleid over verschillende levensdomeinen heen.
                                                Met een ambitieus participatietraject en een beleid rond vijf cruciale
                                                hefbomen (onderwijs, wonen, jobs, gezondheidszorg en een menswaardig
                                                inkomen) maken we hier werk van. Ons armoedebestrijdingsplan is noodzakelijk
                                                en dus ambitieus. Elke inwoner van de stad wordt hier beter van, want we
                                                zijn allemaal Oostendenaar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#milieu">
                            <img class="img-fluid  w-75 mx-auto speerpunt" src="{{asset('images/frontend/Milieuvervuiling gradient.jpg')}}" alt="milieu" >
                            <h3 class="text-center text-uppercase mosgroen pb-2">Milieu</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="milieu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Oostende Onderwijsstad</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Oostende is van iedereen. Ik geloof in een stad waar elke Oostendenaar zich
                                                thuis voelt. Maar er is nog werk. Op vandaag heeft Oostende de hoogste
                                                armoedecijfers van alle centrumsteden en laat daarmee steden als Antwerpen
                                                en Gent ver achter zich. Er is een trendbreuk nodig.
                                                Groen staat voor een armoedebeleid over verschillende levensdomeinen heen.
                                                Met een ambitieus participatietraject en een beleid rond vijf cruciale
                                                hefbomen (onderwijs, wonen, jobs, gezondheidszorg en een menswaardig
                                                inkomen) maken we hier werk van. Ons armoedebestrijdingsplan is noodzakelijk
                                                en dus ambitieus. Elke inwoner van de stad wordt hier beter van, want we
                                                zijn allemaal Oostendenaar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#milieu">
                            <img class="img-fluid  w-75 mx-auto speerpunt" src="{{asset('images/frontend/Migratie en asiel gradient.jpg')}}" alt="mens">
                            <h3 class="text-center text-uppercase mosgroen pb-2">Mens</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="milieu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Oostende Onderwijsstad</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Oostende is van iedereen. Ik geloof in een stad waar elke Oostendenaar zich
                                                thuis voelt. Maar er is nog werk. Op vandaag heeft Oostende de hoogste
                                                armoedecijfers van alle centrumsteden en laat daarmee steden als Antwerpen
                                                en Gent ver achter zich. Er is een trendbreuk nodig.
                                                Groen staat voor een armoedebeleid over verschillende levensdomeinen heen.
                                                Met een ambitieus participatietraject en een beleid rond vijf cruciale
                                                hefbomen (onderwijs, wonen, jobs, gezondheidszorg en een menswaardig
                                                inkomen) maken we hier werk van. Ons armoedebestrijdingsplan is noodzakelijk
                                                en dus ambitieus. Elke inwoner van de stad wordt hier beter van, want we
                                                zijn allemaal Oostendenaar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#mens">
                            <img class="img-fluid  w-75 mx-auto speerpunt" src="{{asset('images/frontend/Kinderen en jongeren gradient.jpg')}}" alt="kinderen">
                            <h3 class="text-center text-uppercase mosgroen pb-2">Kinderen</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="mens" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Oostende Onderwijsstad</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Oostende is van iedereen. Ik geloof in een stad waar elke Oostendenaar zich
                                                thuis voelt. Maar er is nog werk. Op vandaag heeft Oostende de hoogste
                                                armoedecijfers van alle centrumsteden en laat daarmee steden als Antwerpen
                                                en Gent ver achter zich. Er is een trendbreuk nodig.
                                                Groen staat voor een armoedebeleid over verschillende levensdomeinen heen.
                                                Met een ambitieus participatietraject en een beleid rond vijf cruciale
                                                hefbomen (onderwijs, wonen, jobs, gezondheidszorg en een menswaardig
                                                inkomen) maken we hier werk van. Ons armoedebestrijdingsplan is noodzakelijk
                                                en dus ambitieus. Elke inwoner van de stad wordt hier beter van, want we
                                                zijn allemaal Oostendenaar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#kinderen">
                            <img class="img-fluid  w-75 mx-auto speerpunt" src="{{asset('images/frontend/Cultuur en media gradient.jpg')}}" alt="Cultuur">
                            <h3 class="text-center text-uppercase mosgroen pb-2">Cultuur</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="kinderen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Oostende Onderwijsstad</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Oostende is van iedereen. Ik geloof in een stad waar elke Oostendenaar zich
                                                thuis voelt. Maar er is nog werk. Op vandaag heeft Oostende de hoogste
                                                armoedecijfers van alle centrumsteden en laat daarmee steden als Antwerpen
                                                en Gent ver achter zich. Er is een trendbreuk nodig.
                                                Groen staat voor een armoedebeleid over verschillende levensdomeinen heen.
                                                Met een ambitieus participatietraject en een beleid rond vijf cruciale
                                                hefbomen (onderwijs, wonen, jobs, gezondheidszorg en een menswaardig
                                                inkomen) maken we hier werk van. Ons armoedebestrijdingsplan is noodzakelijk
                                                en dus ambitieus. Elke inwoner van de stad wordt hier beter van, want we
                                                zijn allemaal Oostendenaar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#cultuur">
                            <img class="img-fluid  w-75 mx-auto speerpunt" src="{{asset('images/frontend/Economie gradient.jpg')}}" alt="Economie">
                            <h3 class="text-center text-uppercase mosgroen pb-2">Economie</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="cultuur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Oostende Onderwijsstad</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Oostende is van iedereen. Ik geloof in een stad waar elke Oostendenaar zich
                                                thuis voelt. Maar er is nog werk. Op vandaag heeft Oostende de hoogste
                                                armoedecijfers van alle centrumsteden en laat daarmee steden als Antwerpen
                                                en Gent ver achter zich. Er is een trendbreuk nodig.
                                                Groen staat voor een armoedebeleid over verschillende levensdomeinen heen.
                                                Met een ambitieus participatietraject en een beleid rond vijf cruciale
                                                hefbomen (onderwijs, wonen, jobs, gezondheidszorg en een menswaardig
                                                inkomen) maken we hier werk van. Ons armoedebestrijdingsplan is noodzakelijk
                                                en dus ambitieus. Elke inwoner van de stad wordt hier beter van, want we
                                                zijn allemaal Oostendenaar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bestuursakkoord">
        <div class="row">
            <div class="col-md-8 offset-md-2 custom">
                <div class="row">
                    <section id="bestuursakkoord" class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="row">
                                    <h2 class="text-center">Lees hier het volledige Bestuursakkoord</h2>
                                    <div class="bg-white py-2 collapse-inner rounded d-flex justify-content-center ">
                                        @foreach($agreements as $agreement)
                                            <a class="btn btn-dark text-white" target="_blank" href="{{$agreement->file ? asset('images/agreements') .$agreement->file : 'http://placehold.it/62x62'}}">Open Here</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>







@stop
