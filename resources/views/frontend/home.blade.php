@extends('layouts.frontend_home_template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-column px-0">
               <img class="img-fluid " src="{{asset('images/frontend/home.pic.jpg')}}" alt="">
            </div>
        </div>
    </div>
<main>
   <section id="heading" class="container-fluid custom">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center">Sinds 2019 zitten we mee aan de knoppen in de mooiste Stad aan Zee. Groen maakt echt het verschil, en
                    samen met schepen Silke Beirens zijn we trots op de vele realisaties die nu al Oostende rijker en
                    mooier maken. Wil je weten waar we mee bezig zijn? Neem dan zeker een kijkje bij de laatste
                    nieuwsberichten.</h2>
            </div>
        </div>
    </section>

    <section id="mostrecentnews" class="container-fluid my-5">
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

    <section id="facebook-scroll" class="container-fluid custom">
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
                            <h2 class="text-center">Nog meer nieuwtjes?</h2>
                            <p class="text-center">Meer weten over het reilen en zeilen in het leven van een
                                Groen-schepen? Je kan zowel Groen Oostende als de schepenen volgen via diverse sociale
                                mediakanalen. Hieronder vind je alvast mijn laatste Facebookberichten, maar volg me
                                gerust ook op Instagram of Twitter.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section id="facebook-post" class="container-fluid custom">
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
                    </div>

                    <div class="d-flex align-items-center justify-content-around">
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
    </section>--}}

    {{--<section class="container-fluid custom" id="speerpunten">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <h2 class="text-center">De Waarden & Normen van Groen</h2>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card shadow p-3 mb-5 bg-body rounded border-0">
                                    <div class="card-title d-flex flex-column">
                                        <div class="card-title d-flex align-items-center justify-content-center appelgroen">
                                            <i class="fas fa-leaf fa-2x mx-2"></i>
                                            <h3 class="text-center mt-4">Speerpunt 1</h3>
                                        </div>
                                        <h2 class="text-center">Armoede pakken we aan</h2>
                                    </div>
                                    <div class="card-body mx-4">
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
                            <div class="carousel-item">
                                <div class="card shadow p-3 mb-5 bg-body rounded border-0">
                                    <div class="card-title d-flex flex-column">
                                        <div class="card-title d-flex align-items-center justify-content-center appelgroen">
                                            <i class="fas fa-leaf fa-2x mx-2"></i>
                                            <h3 class="text-center mt-4">Speerpunt 2</h3>
                                        </div>
                                        <h2 class="text-center">Oostende Onderwijsstad</h2>
                                    </div>
                                    <div class="card-body mx-4">
                                        <p>Oostende is een onderwijsstad. Met meer dan 40 scholen, elk met hun eigen
                                            visie, pedagogisch project en studie-aanbod.
                                            Dit kwalitatief en gevarieerd onderwijs is een troef voor onze stad. Daarom
                                            moeten we dit zo toegankelijk en betaalbaar mogelijk maken en houden.
                                            Oostende scoort slecht op vlak van kleuterparticipatie en ook het aantal
                                            jongeren dat uitstroomt zonder diploma is verontrustend hoog. Via
                                            brugfiguren willen we deze trend doen keren, maar ook onderwijscheques en
                                            een gezinsondersteunend budget kunnen helpen.
                                            Zo kan elk kind onbezorgd naar school in onze stad.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card shadow p-3 mb-5 bg-body rounded border-0">
                                     <div class="card-title d-flex flex-column">
                                         <div class="card-title d-flex align-items-center justify-content-center appelgroen">
                                             <i class="fas fa-leaf fa-2x mx-2"></i>
                                             <h3 class="text-center mt-4">Speerpunt 3</h3>
                                         </div>
                                        <h2 class="text-center">Preventieve gezondheidszorg</h2>
                                    </div>
                                    <div class="card-body mx-4">
                                        <p>Een gezonde geest in een gezonde lichaam is de beste garantie voor een totaal
                                            welbevinden. Voor de Oostendenaars willen we dan ook inzetten op
                                            toegankelijke, betaalbare gezondheidszorg. Oostende zet haar schouders onder
                                            de eerstelijnszone Oostende - Bredene en wil zo alle zorgverstrekkers mee op
                                            één lijn krijgen wat betreft het gezondheidsbeleid in onze Stad.
                                            Als eerste West-Vlaamse stad heeft Oostende ook niet minder dan twéé
                                            Wijkgezondheidscentra waar mensen bij een multidisciplinair team terecht
                                            kunnen met kleine en grotere vragen. In de komende jaren willen we voor elke
                                            Oostendenaar garanties inbouwen op gezondheid. Voor minder dan een gezonde
                                            stad gaan we niet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card shadow p-3 mb-5 bg-body rounded border-0">
                                    <div class="card-title d-flex flex-column">
                                        <div class="card-title d-flex align-items-center justify-content-center appelgroen">
                                            <i class="fas fa-leaf fa-2x mx-2"></i>
                                            <h3 class="text-center mt-4">Speerpunt 4</h3>
                                        </div>
                                        <h2 class="text-center">Een hart voor ouderen</h2>
                                    </div>
                                    <div class="card-body mx-4">
                                        <p>In Oostende worden heel wat mensen oud. Geboren en getogen 'ploaten' of
                                            aangespoeld, de zee is voor iedereen een mooie plaats voor die laatste
                                            levensfase. Als schepen bevoegd voor ouderenbeleid vind ik het belangrijk
                                            dat elke oudere in Oostende zo lang mogelijk en met de best mogelijke
                                            levenskwaliteit in onze stad vertoeft.
                                            Daarvoor is een beleid nodig dat niet alleen focust op vrije tijd, maar ook
                                            op wonen, het uitbouwen van een sociaal netwerk en gepaste zorg.
                                            We zetten in de toekomst in op socio-culturele initiatieven, op de
                                            woonzorgcentra, maar ook op een dagverzorgingscentrum voor personen met
                                            dementie. Zodat iedereen een plek heeft in onze stad.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card shadow p-3 mb-5 bg-body rounded border-0">
                                    <div class="card-title d-flex flex-column">
                                        <div class="card-title d-flex align-items-center justify-content-center appelgroen">
                                            <i class="fas fa-leaf fa-2x mx-2"></i>
                                            <h3 class="text-center mt-4">Speerpunt 5</h3>
                                        </div>
                                        <h2 class="text-center">Wonen als basisrecht</h2>
                                    </div>
                                    <div class="card-body mx-4">
                                        <p>In een Stad met veel tweedeverblijvers is betaalbaar wonen geen evidentie.
                                            Toch zetten we hier als lokaal bestuur met overtuiging op in. Energiearmoede
                                            en te hoge huurprijzen zijn een reëel probleem. In het sociaal beleid van de
                                            Stad wordt hier dan ook de klemtoon op gelegd.
                                            Ook met het Sociaal Verhuurkantoor willen we vooruit in Oostende. De meest
                                            kwetsbare mensen hebben recht op een kwalitatieve woning. Sociale
                                            huisvesting is in een stad als Oostende een onmisbare hefboom om armoede mee
                                            te bestrijden. De komende jaren willen het aanbod verder verruimen, en de
                                            kwaliteit verbeteren. Want elk kind verdient het om in een gezonde woning op
                                            te groeien, en elke inwoner van onze stad heeft recht op een betaalbare
                                            woning.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-dark rounded d-flex align-items-center justify-content-center mx-2" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="btn btn-dark rounded d-flex align-items-center justify-content-center mx-2" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="speer" class="mb-5"></div>
    </section>--}}

   {{-- <div id="anchor"></div>
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
    </section>--}}

</main>
@stop




