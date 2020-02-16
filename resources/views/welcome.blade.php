<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8" />
{{--    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("/img/apple-icon.png") }}">--}}
{{--    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset("/img/favicon.png") }}">--}}

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ setting('site.title') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="{{ asset("/css/bootstrap.css") }}" rel="stylesheet" />
    <link href="{{ asset("/css/gaia.css") }}" rel="stylesheet"/>
    <link href="{{ asset("/css/app.css") }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/css/fonts/pe-icon-7-stroke.css') }}" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
    <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
    <div class="container">
        <div class="navbar-header">
            <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a href="{{ route('homepage') }}" class="navbar-brand">
                {{ setting('site.title') }}
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right navbar-uppercase">
                <li class="dropdown">
                    <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-share-alt"></i> Redes Sociais
                    </a>
                    <ul class="dropdown-menu dropdown-danger">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>


<div class="section section-header">
    <div class="parallax filter filter-color-green">
        <video autoplay muted loop id="introVideo">
            <source src="{{ asset('/videos/intro.mp4') }}" type="video/mp4">
        </video>
        {{--<div class="image"
             style="background-image: url('')">
        </div>--}}
        <div class="container">
            <div class="content">
                <div class="title-area">
                    <h1 class="title-modern">{{ setting('site.title') }}</h1>
                    <h3>{{ setting('site.description') }}</h3>
                        <div class="separator line-separator">♦</div>
                </div>

                <div class="button-get-started">
                    <a href="{{ route('homepage') }}" target="_blank" class="btn btn-white btn-fill btn-lg ">
                        Saiba mais
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row">
            <div class="title-area">
                <h2>Nossos serviços</h2>
                <div class="separator separator-danger">✻</div>
                <p class="description">We promise you a new look and more importantly, a new attitude. We build that by getting to know you, your needs and creating the best looking clothes.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="info-icon">
                    <div class="icon text-danger">
                        <i class="pe-7s-graph1"></i>
                    </div>
                    <h3>Sales</h3>
                    <p class="description">We make our design perfect for you. Our adjustment turn our clothes into your clothes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-icon">
                    <div class="icon text-danger">
                        <i class="pe-7s-note2"></i>
                    </div>
                    <h3>Content</h3>
                    <p class="description">We create a persona regarding the multiple wardrobe accessories that we provide..</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-icon">
                    <div class="icon text-danger">
                        <i class="pe-7s-music"></i>
                    </div>
                    <h3>Music</h3>
                    <p class="description">We like to present the world with our work, so we make sure we spread the word regarding our clothes.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section section-our-team-freebie">
    <div class="parallax filter filter-color-black">
        <div class="image" style="background-image:url({{ Voyager::image(setting('landing.background_staff', '/img/header-2.jpeg')) }})">
        </div>
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="title-area">
                        <h2>Nossa equipe</h2>
                        <div class="separator separator-danger">✻</div>
                        <p class="description">Conheça a equipe Junnior Trainner! Profissionais qualificados e capazes de levar seu treinamento para outro nível.</p>
                    </div>
                </div>

                <div class="team">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                @foreach($staff as $member)
                                    <div class="col-md-4">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="{{ $member->name }}" class="img-circle" src="{{ Voyager::image($member->photo ?? 'users/default.png') }}"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title">{{ $member->name }}</h3>
                                                    <p class="small-text"><u>{{ $member->occupation }}</u></p>
                                                    <div class="description">
                                                        {!! $member->bio !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section section-our-clients-freebie">
    <div class="container">
        <div class="title-area">
            <h5 class="subtitle text-gray">Veja abaixo os</h5>
            <h2>Comentarios de nossos alunos</h2>
            <div class="separator separator-danger">∎</div>
        </div>

        <ul class="nav nav-text" role="tablist">
            <li class="active">
                <a href="#testimonial1" role="tab" data-toggle="tab">
                    <div class="image-clients">
                        <img alt="..." class="img-circle" src="{{ asset('/img/faces/face_5.jpg') }}"/>
                    </div>
                </a>
            </li>
            <li>
                <a href="#testimonial2" role="tab" data-toggle="tab">
                    <div class="image-clients">
                        <img alt="..." class="img-circle" src="{{ asset('/img/faces/face_6.jpg') }}"/>
                    </div>
                </a>
            </li>
            <li>
                <a href="#testimonial3" role="tab" data-toggle="tab">
                    <div class="image-clients">
                        <img alt="..." class="img-circle" src="{{ asset('/img/faces/face_2.jpg') }}"/>
                    </div>
                </a>
            </li>
        </ul>


        <div class="tab-content">
            <div class="tab-pane active" id="testimonial1">
                <p class="description">
                    And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color... Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all!
                </p>
            </div>
            <div class="tab-pane" id="testimonial2">
                <p class="description">Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all! And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color...
                </p>
            </div>
            <div class="tab-pane" id="testimonial3">
                <p class="description"> I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. The 'Gaia' team did a great work while we were collaborating. They provided a vision that was in deep connection with our needs and helped us achieve our goals.
                </p>
            </div>

        </div>

    </div>
</div>


<div class="section section-small section-get-started">
    <div class="parallax filter">
        <div class="image"
             style="background-image: url('img/office-1.jpeg')">
        </div>
        <div class="container">
            <div class="title-area">
                <h2 class="text-white">Você também quer mudar de vida?</h2>
                <div class="separator line-separator">♦</div>
                <p class="description"> We are keen on creating a second skin for anyone with a sense of style! We design our clothes having our customers in mind and we never disappoint!</p>
            </div>

            <div class="button-get-started">
                <a href="#gaia" class="btn btn-danger btn-fill btn-lg">Entrar em contato!</a>
            </div>
        </div>
    </div>
</div>


<footer class="footer footer-big footer-color-black" data-color="black">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <div class="info">
                    <h5 class="title">Company</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Home</a></li>
                            <li>
                                <a href="#">Find offers</a>
                            </li>
                            <li>
                                <a href="#">Discover Projects</a>
                            </li>
                            <li>
                                <a href="#">Our Portfolio</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1 col-sm-3">
                <div class="info">
                    <h5 class="title"> Help and Support</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">How it works</a>
                            </li>
                            <li>
                                <a href="#">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="#">Company Policy</a>
                            </li>
                            <li>
                                <a href="#">Money Back</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="info">
                    <h5 class="title">Latest News</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in the market is here, just give it a try and let us...
                                    <hr class="hr-small">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards Website</b>! Thank you everybody for...
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-1 col-sm-3">
                <div class="info">
                    <h5 class="title">Follow us on</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#" class="btn btn-social btn-facebook btn-simple">
                                    <i class="fa fa-facebook-square"></i> Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                    <i class="fa fa-dribbble"></i> Dribbble
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-social btn-twitter btn-simple">
                                    <i class="fa fa-twitter"></i> Twitter
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-social btn-reddit btn-simple">
                                    <i class="fa fa-google-plus-square"></i> Google+
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <hr>
        <div class="copyright">
            © <script> document.write(new Date().getFullYear()) </script> Creative Tim, made with love
        </div>
    </div>
</footer>

</body>

<!--   core js files    -->
<script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/bootstrap.js') }}" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="{{ asset('/js/modernizr.js') }}"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="{{ asset('/js/gaia.js') }}"></script>

</html>
