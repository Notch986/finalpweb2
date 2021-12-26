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
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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