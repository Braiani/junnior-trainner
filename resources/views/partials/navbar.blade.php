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
                            <a href="{{ setting('social.instagram') ?? '#' }}" target="_blank"><i class="fa fa-instagram"></i> Instagram</a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone={{setting('social.whatsapp')}}&text={{urlencode(setting('landing.contact_whatsapp'))}}"
                               target="_blank">
                                <i class="fa fa-whatsapp"></i> WhatsApp
                            </a>
                        </li>
                        <li>
                            <a href="{{ setting('social.facebook') ?? '#' }}" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="{{ setting('social.twitter') ?? '#' }}" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                        <li>
                            <a href="{{ setting('social.youtube') ?? '#' }}" target="_blank"><i class="fa fa-youtube"></i> Youtube</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
