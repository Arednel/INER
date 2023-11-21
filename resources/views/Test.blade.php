<!DOCTYPE html>

<head>
    <!--
    Gloss Template
    http://www.templatemo.com/preview/templatemo_433_gloss
    -->
    <title>Gloss Template</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800'
        rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_misc.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_style.css') }}>
    <link rel="stylesheet" href={{ asset('css/animate.css') }}>

    <!-- JavaScripts -->
    <script src={{ asset('js/jquery-1.11.1.min.js') }}></script> <!-- lightbox -->
    <script src={{ asset('js/templatemo_custom.js') }}></script> <!-- lightbox -->
    <script src={{ asset('js/jquery.lightbox.js') }}></script>
    <script src={{ asset('js/bootstrap-collapse.js') }}></script>

</head>

<body>
    <!-- menu start -->
    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="templatemo_topwrapper shadow">
                    <div class="col-sm-4">
                        <div class="templatemo_webtitle">Site<span>SLOGAN IS HERE</span></div>
                    </div>
                    <div class="col-sm-8">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle
                                            navigation</span> <span class="icon-bar"></span> <span
                                            class="icon-bar"></span> <span class="icon-bar"></span></button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div id="top-menu">
                                    <div class="collapse navbar-collapse main_menu" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li>
                                                <a class="show-1 templatemo_home" href="#">
                                                    <span class="fa fa-home"></span>Главная</a>
                                            </li>
                                            @if (Auth::check())
                                                <li>
                                                    <a class="show-1 templatemo_page2" href="#">
                                                        <span class="fa fa-picture-o"></span>Темы</a>
                                                </li>
                                                <li>
                                                    <a href="logout">
                                                        <span class="fa fa-users"> </span>Выйти
                                                    </a>
                                                </li>
                                            @else
                                                <li>
                                                    <a class="show-1 templatemo_page3" href="#">
                                                        <span class="fa fa-users"></span>Войти</a>
                                                </li>
                                            @endif

                                        </ul>
                                    </div>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- menu end -->
    <div id="menu-container">
        <div class="content homepage" id="menu-1">
            <div class="container">
                <!-- home start -->
                <div class="row">
                    <div class="templatemo_homewrapper shadow">
                        <div class="templatemo_hometop_bg">
                            <div class="col-md-6">
                                <div class="templemo_hometop_img"><img src="images/templatemo_building.png"
                                        alt="templatemo home image"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="templatemo_hometop_title">AENEAN SOLICIT</div>
                                <div class="templatemo_hometop_subtitle">DUIS SEDDIO SIT AMETIONAL</div>
                                <p>Gloss is free responsive mobile template for everyone. Please tell your friends about
                                    <span class="bluetext">template</span><span class="greentext">mo</span>.com website.
                                    This layout is based on Bootstrap v3.1.1 framework. Credits go to <a rel="nofollow"
                                        href="http://www.smashingmagazine.com/2012/11/20/art-professions-icons-png/">Art
                                        Professions</a> Icon and <a rel="nofollow"
                                        href="http://unsplash.com">Unsplash</a> for images used in this template.
                                </p>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed
                                    non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad
                                    litora torquent per conubia nostra.</p>
                                <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
                                    velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Duis sed odio sit amet
                                    nibh vulputate cursus a sit amet mauris.</p>
                                <a href="#">
                                    <div class="templatemo_hometop_more blue">READ MORE</div>
                                </a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row">
                    <div class="templatemo_home_mid shadow">
                        <div class="col-md-4 templatemo_box gradient">
                            <div class="boxsub1">
                                <div class="boxsub2"><img src="images/templatemo_icon_watch.png" alt="templatemo watch">
                                    <div class="templatemo_home_midheader">MORBI ACCUM</div>
                                    <div class="templatemo_home_midtext">Donec leo sem, commodo in, bibendum iaculis,
                                        euismod vitae, risus. Suspendisse a erat id urna dapibus varius. </div>
                                    <a href="#">
                                        <div class="templatemo_readmore gradient">READ MORE</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 templatemo_box gradient">
                            <div class="boxsub1">
                                <div class="boxsub2">
                                    <img src="images/templatemo_icon_bay.png" alt="templatemo bay">
                                    <div class="templatemo_home_midheader">LOREM IPSUM</div>
                                    <div class="templatemo_home_midtext">Pellentesque enim nibh, volutpat eu, lobortis
                                        eu, tristique quis, est. Aliquam lacinia purus at sem. </div>
                                    <a href="#">
                                        <div class="templatemo_readmore gradient">READ MORE</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 templatemo_box_last gradient">
                            <div class="boxsub1">
                                <div class="boxsub2">
                                    <img src="images/templatemo_icon_search.png" alt="templatemo search">
                                    <div class="templatemo_home_midheader">DUIS SEDIO</div>
                                    <div class="templatemo_home_midtext">Duis at lectus non neque ultrices porttitor.
                                        Cras ipsum sem, iaculis ut, sodales ut, accumsan lacinia, nunc. </div>
                                    <a href="#">
                                        <div class="templatemo_readmore gradient">READ MORE</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row">
                    <div class="templatemo_home_bot shadow">
                        <div class="col-md-12 gradient padd-top20">
                            <div class="col-md-2">
                                <img src="images/templatemo_home_img1.jpg" alt="templatemo home image">
                            </div>
                            <div class="col-md-4">
                                <div class="templatemo_home_botheader">ENEAN SOLCITUD</div>
                                <div class="templatemo_home_botsubheader">DUIS SED ODIO SIT AMET NIBH</div>
                                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                                sem nibh id elit. Duis sed odio sit amet.
                            </div>
                            <div class="col-md-2"><img src="images/templatemo_home_img2.jpg"
                                    alt="templatemo home image"></div>
                            <div class="col-md-4">
                                <div class="templatemo_home_botheader">MAURIS LUCTUS</div>
                                <div class="templatemo_home_botsubheader">AENEAN ELIT TURPIS</div>
                                Praesent nunc tellus, laoreet sit amet, viverra sed, dictum semper, odio. Nunc
                                malesuada. Ut lacinia euismod nunc. Mauris velit.
                            </div>
                            <div class="clear"></div>
                            <div class="col-md-2">
                                <img src="images/templatemo_home_img3.jpg" alt="templatemo home image">
                            </div>
                            <div class="col-md-4">
                                <div class="templatemo_home_botheader">AENEAN SAPINE</div>
                                <div class="templatemo_home_botsubheader">DUIS SED ODIO SIT AMET NIBH</div>
                                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                                sem nibh id elit. Duis sed odio sit amet.
                            </div>
                            <div class="col-md-2"><img src="images/templatemo_home_img4.jpg"
                                    alt="templatemo home image"></div>
                            <div class="col-md-4">
                                <div class="templatemo_home_botheader">VESTIBULUM ANTE IPSUM</div>
                                <div class="templatemo_home_botsubheader">AENEAN ELIT TURPIS</div>
                                Praesent nunc tellus, laoreet sit amet, viverra sed, dictum semper, odio. Nunc
                                malesuada. Ut lacinia euismod nunc. Mauris velit.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- home end -->
            </div>
        </div>

        <!-- themes start -->
        <div class="content gallery" id="menu-2">
            <div class="row gradient templatemo_contact_wrapper">
                <div class="col-md-12">
                    <div class="templatemo_contact_map">
                        <div id="templatemo_map"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="templatemo_contact_title">CONTACT US</div>
                    <div class="templatemo_contact_subtitle">CRAS INTERDUM ACCUMSAN DIAM</div>
                </div>
                <div class="col-md-6">
                    <div class="templatemo_form">
                        <form action="#" method="post" id="templatemo-contact">
                            <input type="text" name="name" id="nametext" class="name" placeholder="NAME">
                            <input type="text" name="email" id="emailtext" class="email" placeholder="EMAIL">
                            <textarea name="message" class="message" placeholder="MESSAGE ... " id="message"></textarea>
                            <button type="submit" class="blue">SEND</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="templatemo_form">
                        <span class="bluetext">This is free website template from</span><span class="redtext">
                            templatemo</span>. Ribendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id
                        elit. Duis sed odio sit amet. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh
                        vulputate cursus a sit amet mauris.
                        <ul>
                            <li><span class="fa fa-map-marker"></span>2100, Aenean sollicitudin, Los Angeles, CA
                                100200</li>
                            <li><span class="fa fa-phone"></span>010 020 0340, 090 080 0760</li>
                            <li><span class="fa fa-envelope"></span><a href="#">contact@company.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- themes end -->

        <!-- login / logout start -->
        @if (!Auth::check())
            @include('components.login')
        @endif
        <!-- login / logout end -->


    </div>

    @include('components.footer')
</body>

</html>
