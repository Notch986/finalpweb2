<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <!-- <link rel="shortcut icon" href="images/favicon.png" type="">-->

    <title> Homep </title>

    <!-- bootstrap core css -->

    <?= $this->Html->css('bootstrap') ?>


    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->

    <!--owl slider stylesheet -->
    <?= $this->Html->css('carousel.min') ?>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <?= $this->Html->css('font-awesome.min') ?>
    <!--<link href="css/font-awesome.min.css" rel="stylesheet" /> -->

    <!-- Custom styles for this template -->
    <?= $this->Html->css('style') ?>
    <!-- <link href="css/style.css" rel="stylesheet" /> -->

    <!-- responsive style -->
    <?= $this->Html->css('responsive') ?>
    <!-- <link href="css/responsive.css" rel="stylesheet" /> -->

</head>

<body>

    <div class="hero_area">

        <div class="hero_bg_box">
            <?= $this->Html->image('hero-bg.png'); ?>
            <!-- <img src="images/hero-bg.png" alt="">-->
        </div>

        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            CompuAQP
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html"> Acerca de </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service.html">Proveedores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contáctate</a>
                            </li>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Home Security
                                        </h1>
                                        <p>
                                            Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam
                                            fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat
                                            molestias, veniam, vel architecto veritatis delectus repellat modi impedit
                                            sequi.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <?= $this->Html->image('slider-img1.png'); ?>
                                        <!-- <img src="images/slider-img.png" alt=""> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Computadoras
                                        </h1>
                                        <p>
                                            222222 Explicabo esse amet tempora quibusdam laudantium, laborum eaque
                                            magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit
                                            fugiat molestias, veniam, vel architecto veritatis delectus repellat modi
                                            impedit sequi.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <?= $this->Html->image('slider-img2.png'); ?>
                                        <!--  <img src="images/slider-img.png" alt="">-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            CELULARES
                                        </h1>
                                        <p>
                                            33333 Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam
                                            fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat
                                            molestias, veniam, vel architecto veritatis delectus repellat modi impedit
                                            sequi.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <?= $this->Html->image('slider-img3.png'); ?>
                                        <!--  <img src="images/slider-img.png" alt="">-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-6 ml-auto">
                        <div class="carousel_btn-box">
                            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>


    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="jumbotron">
            <h1 class="display-4">Acerca de Nosotros</h1>
            <p class="lead">Conoce nuestras políticas de trabajo</p>
            <hr class="my-4">
            <p>Normal distribution of letters, as opposed to using 'Content here, content here', making it look like
                readable English. Many desktop publishing packages and web page editors has a more-or-less normal
                distribution of letters, as opposed to using 'Content here, content here', making it look like readable
                English. Many desktop publishing packages and web page editors</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Saber Más</a>
        </div>
    </section>

    <!-- end about section -->

    <!-- service section -->

    <section class="service_section layout_padding-bottom">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        <?= $this->Html->image('home.png'); ?>
                        <!-- <img src="images/home.png" alt="">--> <span> Our Services</span>
                    </h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <?= $this->Html->image('s1.png'); ?>
                                <!-- <img src="images/s1.png" alt=""> -->
                            </div>
                            <div class="detail-box">
                                <h5>
                                    CCTV Surveillance
                                </h5>
                                <p>
                                    Voluptates consequatur, fugiat quisquam sit sed perferendis laborum eaque, totam
                                    inventore sint nam doloribus libero quo. Molestiae numquam perspiciatis id.
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <?= $this->Html->image('s2.png'); ?>
                                <!-- <img src="images/s2.png" alt=""> -->
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Fire Alarm System
                                </h5>
                                <p>
                                    Voluptates consequatur, fugiat quisquam sit sed perferendis laborum eaque, totam
                                    inventore sint nam doloribus libero quo. Molestiae numquam perspiciatis id.
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <?= $this->Html->image('s3.png'); ?>
                                <!-- <img src="images/s3.png" alt=""> -->
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Door Controls
                                </h5>
                                <p>
                                    Voluptates consequatur, fugiat quisquam sit sed perferendis laborum eaque, totam
                                    inventore sint nam doloribus libero quo. Molestiae numquam perspiciatis id.
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end service section -->


    <!-- contact section -->
    <section class="contact_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    <?= $this->Html->image('home.png'); ?> <span> Contact Us </span>
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container contact-form">
                        <form action="">
                            <div>
                                <input type="text" placeholder="Your Name" />
                            </div>
                            <div>
                                <input type="text" placeholder="Phone Number" />
                            </div>
                            <div>
                                <input type="email" placeholder="Email" />
                            </div>
                            <div>
                                <input type="text" class="message-box" placeholder="Message" />
                            </div>
                            <div class="btn_box">
                                <button>
                                    Submit Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- client section -->

    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    <?= $this->Html->image('home.png'); ?> <span> What says our Clients</span>
                </h2>
            </div>
            <div class="carousel-wrap ">
                <div class="owl-carousel client_owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="img-box">

                                <?= $this->Html->image('c1.jpg', ['class' => 'box-img']); ?>
                                <!-- <img src="images/c1.jpg" alt="" class="box-img"> -->
                            </div>
                            <div class="detail_container">
                                <div class="detail-box">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    </p>
                                    <h6 class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </h6>
                                </div>
                                <h5>
                                    Alan Champ
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <?= $this->Html->image('c2.jpg', ['class' => 'box-img']); ?>

                            </div>
                            <div class="detail_container">
                                <div class="detail-box">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    </p>
                                    <h6 class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </h6>
                                </div>
                                <h5>
                                    Maya Jonas
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="info_contact_container ">
                <h5>
                    Get in touch
                </h5>
                <div class="info_contact">
                    <div class="contact_link_box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Location
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call +01 1234567890
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                demo@gmail.com
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="info_form">
                <h5 class="form_heading">
                    Subscribe To Our Newsletter
                </h5>
                <form action="#">
                    <input type="text" placeholder="Enter Your email">
                    <button>
                        subscribe
                    </button>
                </form>
            </div>
            <div class="info_social_container">
                <h5>
                    Follow Us
                </h5>
                <div class="info_social">
                    <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-vimeo" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <section class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">ELD PW2's crew </a>
            </p>
        </div>
    </section>
    <!-- footer section -->
    <!-- jQery -->


    <?= $this->Html->script('jquery-3.4.1.min'); ?>
    <!-- <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> -->
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <?= $this->Html->script('bootstrap'); ?>
    <!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->
    <!-- owl slider -->
    <?= $this->Html->script('owl.carousel.min'); ?>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>-->
    <!-- custom js -->
    <?= $this->Html->script('custom'); ?>
    <!-- <script type="text/javascript" src="js/custom.js"></script> -->

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>