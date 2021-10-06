@extends('layouts.frontend_template')
@section('content')


<main class="container-fluid bg-white">
    <div id="app"></div>

    <section id="about">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row mt-4">
                    <img class="img-fluid mt-5 mx-auto" src="{{asset('images/frontend/about_pic.jpg')}}" alt="NatachaWaldmann">
                    <h1 id="wie" class="my-5">Wie is Natacha Waldmann...</h1>
                    <p>Sinds 2019 ben ik Schepen van Welzijn, Zorg en Onderwijs in Oostende, een portefeuille die me
                        nauw aan het hart ligt. Van opleiding ben ik namelijk orthopedagoge en oplossingsgericht
                        therapeut. Na mijn studies startte ik in 2003 als leerkracht expressie in het MMI van Kortemark
                        en gaf ik les als docent in de lerarenopleiding aan De Avondschool in Gent. Daar ben ik gebeten
                        door de onderwijsmicrobe. Ik maakte al snel de overstap naar het Centrum voor
                        Leerlingbegeleiding in Oostende, waar ik de vele problematieken die kinderen en jongeren in hun
                        ontwikkeling kunnen ervaren samen met scholen en ouders mee hielp ondersteunen. In 2012 werd ik
                        zorgdirecteur bij De Kade vzw, een organisatie in Brugge waar ik de inhoudelijke leiding had
                        over de afdeling kinderen en jongeren met gedrags- en emotionele stoornissen (GES). Dat ben ik
                        blijven doen tot ik schepen werd. Ik ben geboren in Oostende maar opgegroeid in Leffinge,
                        intussen woon ik samen met mijn man Youri en mijn drie kinderen Titus, Len en Pixie in
                        Mariakerke. </p>

                    <h2 id="waarom" class="my-3">Waarom in de Politiek gestapt?</h2>
                    <p>Ik kom niet uit een politiek nest, maar heb wel altijd de drang gevoeld om maatschappelijk mee
                        dingen in beweging te zetten. Onrechtvaardigheid bestrijden is mijn motor. Tijdens mijn
                        professionele carrière maar ook vroeger als leidster in de scouts heb ik te vaak gezien hoe
                        kinderen die opgroeien in een kwetsbare omgeving bij voorbaat al kansloos waren. Dat aankaarten
                        maar ook bestrijden is wat mij drijft. Politiek heeft het niet altijd onder de markt, maar is
                        wel dé weg naar verandering en een middel dat een positieve impact kan hebben op heel wat
                        levensdomeinen. Beslissingen die wij nemen hebben een wezenlijke invloed op de levenskwaliteit
                        van mensen. Omdat ik echt overtuigd ben van het feit dat iedereen recht heeft op geluk, is de
                        stap zetten naar de politiek voor mij een evidentie gebleken.
                        Groen is een partij die verder kijkt dan de volgende verkiezingen. We streven trendbreuken na,
                        duurzame verandering die het leven van mensen beter maakt. Stap voor stap bouwen we sinds 2019
                        ook in Oostende mee aan een beter beleid. Onze kinderen en kleinkinderen verdienen een meer
                        leefbare, menselijkere en gezondere stad. Dat is mijn drijfveer, en daar gaan we voor. Heb je
                        vragen of opmerkingen? Aarzel niet om contact op te nemen!</p>
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


                    <div class="col-md-3 d-flex flex-column justify-content-center bg-white">
                        <img class="img-fluid" src="{{asset('images/frontend/Democratie en overheid gradient.jpg')}}" alt="mens">

                        <div type="button bg-white"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <h3 class="text-center text-uppercase mosgroen pb-2 bg-white">Integratie en gelijke kansen</h3>
                        </div>
                    </div>


                        <div class="col-md-3 d-flex flex-column justify-content-center bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img class="img-fluid w-75 mx-auto" src="{{asset('images/frontend/Klimaat gradient.jpg')}}" alt="klimaat">
                            <h3 class="text-center text-uppercase mosgroen pb-2">Armoedebestrijding</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Armoedebestrijding is een topprioriteit in Oostende, op vandaag wordt nog
                                                steeds bijna één op drie kinderen in armoede geboren, dit is een
                                                schandvlek voor onze Stad. Om komaf te maken met het gebrek aan visie en
                                                beleid op dat thema is sinds 2019 een sterk armoedeplan in werking
                                                getreden met 35 concrete acties die een trendbreuk moeten realiseren.
                                                Meer weten? Het integrale plan vind je hier
                                            </p>
                                            <a target="_blank" href="https://www.oostende.be/armoedebeleidsplan">Armoedebeleidsplan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#milieu">
                            <img class="img-fluid  w-75 mx-auto" src="{{asset('images/frontend/Milieuvervuiling gradient.jpg')}}" alt="milieu" >
                            <h3 class="text-center text-uppercase mosgroen pb-2">Zorg</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="milieu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Oostende telt heel wat zorginstellingen, en engageert zich ertoe om het
                                                zorgaanbod op elkaar af te stemmen zodat iedereen de zorg kan krijgen
                                                waar hij nood aan heeft. Als stad richten we zelf een stuk zorg in,
                                                zowel voor ouderen (WZC Boarebreker, WZC Lacourt, dagcentrum Wante,
                                                palliatief dagcentrum De Kust en assistentiewoningen De Zeeparel en ’t
                                                Staketsel) als voor jongeren via de voorzieningen voor Jongerenwelzijn
                                                De Bolle en De Brem.
                                            </p>
                                            <a target="_blank" href="https://www.oostende.be/zorg">Zorg</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#verhuur">
                            <img class="img-fluid  w-75 mx-auto" src="{{asset('images/frontend/Migratie en asiel gradient.jpg')}}" alt="mens">
                            <h3 class="text-center text-uppercase mosgroen pb-2">Sociaal Verhuurkantoor</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="verhuur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Wonen is een belangrijke hefboom om uit de vicieuze cirkel van armoede te
                                                raken. Kwalitatieve en vooral betaalbare woningen aanbieden aan mensen
                                                die het financieel niet makkelijk hebben helpt om op andere
                                                levensdomeinen stappen te zetten. Met het SVK dragen we actief bij aan
                                                het aanbod voor die mensen die niet terecht kunnen op de private markt
                                                en proberen zo ook structureel de armoedeproblematiek aan te pakken.
                                            </p>
                                            <a target="_blank" href="https://www.svkbredeneoostende.be">svkbredeneoostende.be</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#mens">
                            <img class="img-fluid  w-75 mx-auto" src="{{asset('images/frontend/Onderwijs_gradient.jpg')}}" alt="kinderen">
                            <h3 class="text-center text-uppercase mosgroen pb-2">Onderwijs</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="mens" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Scholen zijn bij uitstek de plaats waar elk kind thuis is. Om de vinger
                                                aan de pols te kunnen houden wat betreft de noden in onze stad zijn ze
                                                cruciale partners. Tegelijk hebben ze soms zelf behoeftes die wat extra
                                                omkadering vergen. De brugfigurenwerking van de Stad Oostende, dat met
                                                het nieuwe stadsbestuur in 2019 uitgebreid werd naar het secundair
                                                onderwijs, is een grote steun en helpt mee om problemen snel te
                                                detecteren. Meer weten:
                                            </p>
                                            <a target="_blank" href="https://www.oostende.be/brugfiguren-onderwijs">Onderwijs</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#kinderen">
                            <img class="img-fluid  w-75 mx-auto" src="{{asset('images/frontend/Cultuur en media gradient.jpg')}}" alt="Cultuur">
                            <h3 class="text-center text-uppercase mosgroen pb-2">Lokaal gezinsbeleid</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="kinderen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Kinderen zijn de volwassenen van morgen, en dus is een sterk gezinsbeleid
                                                dé manier om te bouwen aan het Oostende van de toekomst. Het Netwerk
                                                Huis van het Kind voorziet in een aanbod voor gezinnen met kinderen van
                                                0 tot 18 jaar. Bij onze partners vind je informatie, advies en
                                                ondersteuning waar nodig. Stad Oostende versterkt dat netwerk met eigen
                                                expertise en diensten zoals de Wegwijzer, waar mensen geholpen worden om
                                                bijvoorbeeld onderwijscheques aan te vragen of correcte informatie over
                                                het hulpverleningsaanbod.
                                            </p>
                                            <a target="_blank" href="https://www.oostende.be/huisvanhetkind">Huis van het kind</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#cultuur">
                            <img class="img-fluid  w-75 mx-auto" src="{{asset('images/frontend/Economie gradient.jpg')}}" alt="Economie">
                            <h3 class="text-center text-uppercase mosgroen pb-2">Welzijn</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="cultuur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Met de bevoegdheid Welzijn ben je in feite Schepen van Geluk. Dat geluk
                                                nastreven bij Oostendenaars is de motor van het beleid. We investeren in
                                                psychisch welzijn, met structurele steun voor organisaties zoals TeJo
                                                maar ook een eerstelijnspsycholoog voor ouderen. Maar we nemen ook
                                                initiatief voor regelmatig overleg met initiatieven binnen onze stad het
                                                Welzijns- en Armoedeplatform en het pas opgezette netwerk Overkop.
                                                Rechtenverkenning en -toekenning is iets waar we actief werk van maken,
                                                om mensen maximaal te ontzorgen en hen de steun te bieden waar ze recht
                                                op hebben.
                                            </p>
                                            <a target="_blank" href="https://www.oostende.be/welzijn">Welzijn</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#socialedienst">
                            <img class="img-fluid  w-75 mx-auto" src="{{asset('images/frontend/Diverse samenleving gradient.jpg')}}" alt="Economie">
                            <h3 class="text-center text-uppercase mosgroen pb-2">Bijzonder Comité voor de Sociale Dienst</h3>
                            <!-- Modal -->
                            <div class="modal fade" id="socialedienst" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Het OCMW is er voor alle Oostendenaars met een hulpvraag, en kan mensen
                                                helpen die een bepaalde behoefte hebben of een aantoonbare noodzaak. Die
                                                hulp kan financieel zijn, maar kan ook bestaan uit begeleiding,
                                                bijvoorbeeld rond energiearmoede, budgetbeheer of (dreigende) dak- en
                                                thuisloosheid. Recent zijn we van start gegaan met een nieuw hulpkader
                                                dat ons in staat stelt om nog korter op de bal te spelen en mensen
                                                doeltreffender te helpen. Alle info hierover vind je hier:
                                            </p>
                                            <a target="_blank" href="https://www.oostende.be/hervorming-ocmw-steun-in-de-strijd-tegen-armoede">OCMW STEUN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="col-md-3 d-flex flex-column justify-content-center" type="button" data-bs-toggle="modal" data-bs-target="#gezinsbeleid">
                        <img class="img-fluid  w-75 mx-auto" src="{{asset('images/frontend/Kinderen en jongeren gradient.jpg')}}" alt="Economie">
                        <h3 class="text-center text-uppercase mosgroen pb-2">Lokaal gezinsbeleid</h3>
                        <!-- Modal -->
                        <div class="modal fade" id="gezinsbeleid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Kinderen zijn de volwassenen van morgen, en dus is een sterk gezinsbeleid dé
                                            manier om te bouwen aan het Oostende van de toekomst. Het Netwerk Huis van
                                            het Kind voorziet in een aanbod voor gezinnen met kinderen van 0 tot 18
                                            jaar. Bij onze partners vind je informatie, advies en ondersteuning waar
                                            nodig. Stad Oostende versterkt dat netwerk met eigen expertise en diensten
                                            zoals de Wegwijzer, waar mensen geholpen worden om bijvoorbeeld
                                            onderwijscheques aan te vragen of correcte informatie over het
                                            hulpverleningsaanbod.
                                        </p>
                                        <a target="_blank" href="https://www.oostende.be/huisvanhetkind ">Huis van het kind</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal bg-white" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bg-white">
            <div class="modal-content bg-white">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Armoedebestrijding is een topprioriteit in Oostende, op vandaag wordt nog
                        steeds bijna één op drie kinderen in armoede geboren, dit is een
                        schandvlek voor onze Stad. Om komaf te maken met het gebrek aan visie en
                        beleid op dat thema is sinds 2019 een sterk armoedeplan in werking
                        getreden met 35 concrete acties die een trendbreuk moeten realiseren.
                        Meer weten? Het integrale plan vind je hier
                    </p>
                    <a target="_blank" href="https://www.oostende.be/armoedebeleidsplan">Armoedebeleidsplan</a>
                </div>
            </div>
        </div>
    </div>

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

</main>



@stop
