
<div class="container-fluid">
    <div class="gegevens row pt-5 pl-4">
        <div class="col-12 col-lg-8 offset-lg-2">
            <div class="row">
                <div class="col-12 col-xl-3 mb-5">
                    <h3 class="text-uppercase mb-4">Natacha Waldmann</h3>
                    <p>Schepen van Zorg, Welzijn & Onderwijs</p>
                    <p>T 059 25 84 59</p>
                    <p>Graag contact opnemen? Stuur ons een bericht.</p>
                    <a class="button rounded text-decoration-none text-white" href="{{route('contact', ["#credits"])}}">e-mail</a>
                    {{--<!-- Button trigger modal -->
                    <button type="button" class="button rounded"  data-bs-toggle="modal" data-bs-target="#exampleModal">Email Us</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header ">
                                    <h5 class="modal-title d-flex align-items-center text-dark" id="exampleModalLabel"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-2 bi bi-envelope-open-fill" viewBox="0 0 16 16">
                                            <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"/>
                                        </svg>To: natacha.waldmann@oostende.be</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row mb-0" name="contactformulier" action="{{action('App\Http\Controllers\EmailsController@store')}}" method="post">
                                        @csrf
                                        <div  class="row">
                                            <div class="col-12">
                                                <input id="input1" name="name" type="text" class="form-control my-1 styleinput" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="col-12">
                                                <input id="input2" name="email" type="text" class="form-control my-1" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="col-12">
                                                <input id="input3" name="subject" type="text" class="form-control my-1" placeholder="Subject" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-12">
                                                <textarea id="input4" name="body" class="form-control textfield" rows="10" cols="50" placeholder="Your message here..." aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="button rounded">Send to Us</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
                <div class="col-12 col-xl-3">
                    <h3 class="mb-4">Over</h3>
                    <a class="text-decoration-none text-dark" href="{{route('about', ["#wie"])}}"><p>Wie is Natacha?</p></a>
                    <a class="text-decoration-none text-dark" href="{{route('about', ["#waarom"])}}"><p>Waarom in de politiek?</p></a>
                    <a class="text-decoration-none text-dark" href="{{route('about', ["#bestuursakkoord"])}}"><p>Bestuursakkoord</p></a>
                    <a class="text-decoration-none text-dark" href="{{route('home', ["#speerpunten"])}}"><p>Speerpunten</p></a>
                </div>
                <div class="col-12 col-xl-3">
                    <h3 class="mb-4">Contact</h3>
                    <a class="text-decoration-none text-dark" href="{{route('contact', ["#credits"])}}"><p>Contact formulier</p></a>
{{--                    <a class="text-decoration-none text-dark" href="{{route('vacatures', ["#vacatures"])}}"><p>Vacatures</p></a>--}}
                    <a class="text-decoration-none text-dark" href="{{route('privacy')}}"><p>Privacy Policy</p></a>
                </div>
                <div class="col-12 col-xl-3">
                    <h3 class="mb-4">Nieuws</h3>
                    @foreach($footer_posts as $post)
                        <div class="row">
                            <div class="col-3 col-md-1 col-lg-3"><img class="img-fluid" src="{{asset('images/frontend/logo_footer_groen2.jpg')}}" alt=""></div>
                            <a class="text-decoration-none text-dark col-9 col-md-11 col-lg-9" href="{{route('post', $post->slug)}}">
                                <p class="newsstyle text-uppercase">{{$post->title}}</p></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<button class="d-none d-md-block" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up mx-2 "></i></button>
<footer>
    <hr class=" m-0">
    <p class="text-center py-2 m-0">Copyright &copy; {{ now()->year }} | Natacha Waldmann</p>
</footer>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v10.0&appId=274641024001693&autoLogAppEvents=1" nonce="0yTAqUl8"></script>
<script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
<script src="{{asset('js/front-app.js')}}"></script>
</body>
</html>
