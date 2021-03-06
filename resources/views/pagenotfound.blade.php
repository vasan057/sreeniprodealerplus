<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dealerplus - Page Not Found</title>
        <link rel='shortcut icon' href='img/dealerplus_fav.ico' type='image/x-icon'/ >
              <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css">
        <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" type="text/css">
        <link href="{{URL::asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('css/owl.theme.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container-fluid body">
            <div class="row">
                <header class="col-xs-12">
                    <div class="row">
                        <div class="guestheader_div col-xs-12">
                            <div class="container">
                                <div class="col-sm-3 col-xs-9">
                                    <a href="<?= URL::to('http://www.dealerplus.in/index.html') ?>"><img src=" {{URL::asset('img/logo.png')}}" alt="Logo" title="Logo" class="img-responsive guestlogo" width="250"/></a>

                                </div>
                                <div class="col-xs-3 hidden-lg hidden-md hidden-sm guestnavres">
                                    <div class="navbar-header">
                                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-9">
                                    <nav class="navbar row guestnav">
                                        <div class="collapse navbar-collapse js-navbar-collapse">
                                            <ul class="nav navbar-nav">
                                                <li><a href="<?= URL::to('/index') ?>">Home</a></li>
                                                <li><a href="<?= URL::to('/about') ?>">About</a></li>
                                                <li><a href="<?= URL::to('/feature') ?>">Features</a></li>
                                                <li><a href="<?= URL::to('/pricing') ?>">Pricing</a></li>
                                                <li><a href="<?= URL::to('/contact') ?>">Request For Demo <i class="fa fa-hand-pointer-o" aria-hidden="true"></i></a></li>
                                                <li><a href="<?= URL::to('/login') ?>">Sign In <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                                            </ul>

                                        </div><!-- /.nav-collapse -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <section class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row guestbannerlayer">
                                <div class="col-xs-12 col-xs-12 aboutbanner_content">
                                    <img class="image" src="notfound.png" width="100%;" heiht="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @include('index_footer')
            </div>
        </div>

        <script src="{{URL::asset('js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    </body>
</html>