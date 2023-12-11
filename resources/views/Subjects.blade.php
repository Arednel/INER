<!DOCTYPE html>

<head>
    <title>Main page</title>

    <meta charset="utf-8">

    <meta name="viewport" content="initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_misc.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_style.css') }}>
    <link rel="stylesheet" href={{ asset('css/animate.css') }}>

    <script src={{ asset('js/jquery-1.11.1.min.js') }}></script>
    <script src={{ asset('js/jquery.lightbox.js') }}></script>
    <script src={{ asset('js/bootstrap-collapse.js') }}></script>

</head>

<body>
    @include('components.menu')

    <div class="gallery" id="menu-2">
        <style>
            /* Hide overlay image */
            .overlay {
                display: none;
                visibility: hidden;
            }
        </style>
        <div class="container">
            <div class="row gradient templatemo_gallery_wrapper">
                <div class="col-sm-4">
                    <div class="templatemo_gallery">
                        <div class="gallery-item">
                            <img src="images/gallery/1.jpg" alt="gallery 1">
                            <div class="overlay">
                                <a href="images/gallery/1.jpg" data-rel="lightbox" class="fa fa-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="templatemo_gallery">
                        <div class="gallery-item">
                            <img src="images/gallery/2.jpg" alt="gallery 2">
                            <div class="overlay">
                                <a href="images/gallery/2.jpg" data-rel="lightbox" class="fa fa-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="templatemo_gallery">
                        <div class="gallery-item">
                            <img src="images/gallery/3.jpg" alt="gallery 3">
                            <div class="overlay">
                                <a href="images/gallery/3.jpg" data-rel="lightbox" class="fa fa-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="templatemo_gallery">
                        <div class="gallery-item">
                            <img src="images/gallery/4.jpg" alt="gallery 4">
                            <div class="overlay">
                                <a href="images/gallery/4.jpg" data-rel="lightbox" class="fa fa-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="templatemo_gallery">
                        <div class="gallery-item">
                            <img src="images/gallery/5.jpg" alt="gallery 5">
                            <div class="overlay">
                                <a href="images/gallery/5.jpg" data-rel="lightbox" class="fa fa-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="templatemo_gallery">
                        <div class="gallery-item">
                            <img src="images/gallery/6.jpg" alt="gallery 6">
                            <div class="overlay">
                                <a href="images/gallery/6.jpg" data-rel="lightbox" class="fa fa-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="templatemo_gallery">
                        <div class="gallery-item">
                            <img src="images/gallery/7.jpg" alt="gallery 7">
                            <div class="overlay">
                                <a href="images/gallery/7.jpg" data-rel="lightbox" class="fa fa-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="templatemo_gallery">
                        <div class="gallery-item">
                            <img src="images/gallery/8.jpg" alt="gallery 8">
                            <div class="overlay">
                                <a href="images/gallery/8.jpg" data-rel="lightbox" class="fa fa-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="templatemo_gallery">
                        <div class="gallery-item">
                            <img src="images/gallery/9.jpg" alt="gallery 9">
                            <div class="overlay">
                                <a href="images/gallery/9.jpg" data-rel="lightbox" class="fa fa-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="templatemo_viewmore blue">VIEW MORE</div>
                </a>
            </div>
        </div>
    </div>


    @include('components.footer')

</body>

</html>
