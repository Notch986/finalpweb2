<!doctype html>
<html lang="es">

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

    <title> CompuAQP </title>

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


    <?= $this->Html->meta('img/favicon.ico','img/favicon.ico', ['type' => 'icon']
) ?>
</head>

<body>

    <?= $this->element('nav'); ?>

    <?= $this->fetch('content'); ?>

    <?= $this->element('footer'); ?>


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