<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">CompuAQP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <?php if($username): ?>
                    <?= $this->Html->link("Logout",['controller'=>'Users','action'=>'logout']) ?>
                    <?php endif; ?>
                </li>

            </ul>

        </div>
    </nav>



    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <footer>
    </footer>
</body>

</html>