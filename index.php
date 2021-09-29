<?php
    include 'includes/header.php';
    $page = 'home';
?>
<main>
    <!-- sec home slider -->
    <section class="sec-home-slider">
        <div class="container-fluid p-0">

            <div class="home-slider owl-carousel owl-theme" id="home-slider">
                <div class="item">
                    <div class="home-slider-main">
                        <div class="img-main">
                            <img src="images/slider-home.png" class="img-fluid img-thumb" alt="">
                            <div class="home-desc">
                                <h3 class="home-sl-h">Get the<br>best autoparts</h3>
                                <p class="home-sl-p">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do
                                    Eiusmod Tempor <br> Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim
                                    Veniam</p>

                                <div class="slider-btn">
                                    <a href="javascript:" class="btn shop-btn">shop autoparts now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="home-slider-main">
                        <div class="img-main">
                            <img src="images/slider-home.png" class="img-fluid img-thumb" alt="">
                            <div class="home-desc">
                                <h3 class="home-sl-h">Get the<br>best autoparts</h3>
                                <p class="home-sl-p">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do
                                    Eiusmod Tempor <br> Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim
                                    Veniam</p>

                                <div class="slider-btn">
                                    <a href="javascript:" class="btn shop-btn">shop autoparts now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="home-slider-main">
                        <div class="img-main">
                            <img src="images/slider-home.png" class="img-fluid img-thumb" alt="">
                            <div class="home-desc">
                                <h3 class="home-sl-h">Get the<br>best autoparts</h3>
                                <p class="home-sl-p">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do
                                    Eiusmod Tempor <br> Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim
                                    Veniam</p>

                                <div class="slider-btn">
                                    <a href="javascript:" class="btn shop-btn">shop autoparts now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="search-form">
                <div class="row g-0 justify-content-center align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="search-head">
                            <h5 class="sh">SEARCH <span class="inner">YOUR VEHICLE</span></h5>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                        <form action="" class="banner-form">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>- year -</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>- makes -</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>- model -</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="form-btn">
                                        <button type="button" class="btn search-form-btn">search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec home slider close-->

    <!-- sec popular categ -->

    <section class="sec-pop-categ" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-delay="5s"
                data-aos-offset="100" data-aos-duration="900">

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="pop-categ-h">
                        <h3 class="pop-h">POPULAR<br>CATEGORIES</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="categ-btn-main">
                        <a href="javascript:" class="btn categ-btn">All Categories</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <ul class="nav nav-pills categ-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item categ-item" role="presentation">
                            <button class="nav-link categ-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">powerstroke</button>
                        </li>
                        <li class="nav-item categ-item" role="presentation">
                            <button class="nav-link categ-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">cummins</button>
                        </li>
                        <li class="nav-item categ-item" role="presentation">
                            <button class="nav-link categ-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">duramax</button>
                        </li>

                        <li class="nav-item categ-item" role="presentation">
                            <button class="nav-link categ-link" id="pills-eco-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-eco" type="button" role="tab" aria-controls="pills-eco"
                                aria-selected="false">eco diesel</button>
                        </li>
                        <li class="nav-item categ-item" role="presentation">
                            <button class="nav-link categ-link" id="pills-power-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-power" type="button" role="tab" aria-controls="pills-power"
                                aria-selected="false">Powerstroke</button>
                        </li>
                    </ul>

                    <div class="tab-content categ-content" id="pills-tabContent">
                        <div class="tab-pane categ-pane animate__animated animate__jackInTheBox animate__fast show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row g-5 justify-content-between">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-1.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Power<br>stroke</h5>
                                                <span class="categ-type">2017 & Newer Ford</span>
                                                <span class="categ-type">F250 F350 F450 F550</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-4.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Power<br>stroke</h5>
                                                <span class="categ-type">2017 & Newer Ford</span>
                                                <span class="categ-type">F250 F350 F450 F550</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-3.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Power<br>stroke</h5>
                                                <span class="categ-type">2017 & Newer Ford</span>
                                                <span class="categ-type">F250 F350 F450 F550</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-2.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Power<br>stroke</h5>
                                                <span class="categ-type">2017 & Newer Ford</span>
                                                <span class="categ-type">F250 F350 F450 F550</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane categ-pane animate__animated animate__backInRight animate__fast" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="row g-5 justify-content-between">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-1.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Cummins</h5>
                                                <span class="categ-type">2019 & Newer Ram</span>
                                                <span class="categ-type">2500 3500 4500 5500</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-4.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Cummins</h5>
                                                <span class="categ-type">2019 & Newer Ram</span>
                                                <span class="categ-type">2500 3500 4500 5500</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-3.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Cummins</h5>
                                                <span class="categ-type">2019 & Newer Ram</span>
                                                <span class="categ-type">2500 3500 4500 5500</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-2.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Cummins</h5>
                                                <span class="categ-type">2019 & Newer Ram</span>
                                                <span class="categ-type">2500 3500 4500 5500</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane categ-pane animate__animated animate__lightSpeedInLeft animate__fast" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row g-5 justify-content-between">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-1.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Duramax</h5>
                                                <span class="categ-type">2017 & Newer Chevrolet<br/> or GMC</span>
                                                <span class="categ-type">2500HD 3500hd 4500HD 5500HD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-4.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Duramax</h5>
                                                <span class="categ-type">2017 & Newer Chevrolet<br/> or GMC</span>
                                                <span class="categ-type">2500HD 3500hd 4500HD 5500HD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-3.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Duramax</h5>
                                                <span class="categ-type">2017 & Newer Chevrolet<br/> or GMC</span>
                                                <span class="categ-type">2500HD 3500hd 4500HD 5500HD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-2.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Duramax</h5>
                                                <span class="categ-type">2017 & Newer Chevrolet<br/> or GMC</span>
                                                <span class="categ-type">2500HD 3500hd 4500HD 5500HD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane categ-pane animate__animated animate__jackInTheBox animate__fast" id="pills-eco" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row g-5 justify-content-between">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-1.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Non<br>Duramax</h5>
                                                <span class="categ-type">1982-2000 GM</span>
                                                <span class="categ-type">6.2L & 6.5L</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-4.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Non<br>Duramax</h5>
                                                <span class="categ-type">1982-2000 GM</span>
                                                <span class="categ-type">6.2L & 6.5L</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-3.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Non<br>Duramax</h5>
                                                <span class="categ-type">1982-2000 GM</span>
                                                <span class="categ-type">6.2L & 6.5L</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-2.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Non<br>Duramax</h5>
                                                <span class="categ-type">1982-2000 GM</span>
                                                <span class="categ-type">6.2L & 6.5L</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane categ-pane animate__animated animate__lightSpeedInLeft animate__fast" id="pills-power" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row g-5 justify-content-between">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-1.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Power<br>stroke</h5>
                                                <span class="categ-type">2017 & Newer Ford</span>
                                                <span class="categ-type">F250 F350 F450 F550</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-4.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Power<br>stroke</h5>
                                                <span class="categ-type">2017 & Newer Ford</span>
                                                <span class="categ-type">F250 F350 F450 F550</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-3.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Power<br>stroke</h5>
                                                <span class="categ-type">2017 & Newer Ford</span>
                                                <span class="categ-type">F250 F350 F450 F550</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card categ-card">
                                        <div class="card-row">
                                            <div class="img">
                                                <img src="images/categ-2.png" class="img-fluid categ-thumb" alt="">
                                            </div>

                                            <div class="categ-desc">
                                                <h5 class="categ-ch">Power<br>stroke</h5>
                                                <span class="categ-type">2017 & Newer Ford</span>
                                                <span class="categ-type">F250 F350 F450 F550</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-special" class="sec-pop-categ" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-delay="5s"
                data-aos-offset="100" data-aos-duration="900">
        <div class="container">
            <h4 class="special-head">our specials</h4>
            <div class="special-slider owl-carousel owl-theme" id="special-slider">
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stocking dristuboters sec start -->
    <section class="stockingdistruboterssec" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="5s"
                data-aos-offset="100" data-aos-duration="900">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="stockingdistruboterstext text-center">
                        <h3>Stocking <span>Distributors</span></h3>
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut
                            Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniamlorem Ipsum Dolor </p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">
                            <div class="stockingdistruboterslist">
                                <a href="javascript:"><img src="images/stocking_1.png" class="img-fluid" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">
                            <div class="stockingdistruboterslist">
                                <a href="javascript:"><img src="images/stocking_2.png" class="img-fluid" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">
                            <div class="stockingdistruboterslist">
                                <a href="javascript:"><img src="images/stocking_3.png" class="img-fluid" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">
                            <div class="stockingdistruboterslist">
                                <a href="javascript:"><img src="images/stocking_1.png" class="img-fluid" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">
                            <div class="stockingdistruboterslist">
                                <a href="javascript:"><img src="images/stocking_2.png" class="img-fluid" alt="img"></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">
                            <div class="stockingdistruboterslist">
                                <a href="javascript:"><img src="images/stocking_3.png" class="img-fluid" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stocking dristuboters sec end -->


    <!-- snap ring retainer sec start -->
    <section class="snapringretainersec" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-delay="5s"
                data-aos-offset="100" data-aos-duration="900">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="snaptext">
                        <h4>Snap <span>Ring Retainer</span></h4>
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut
                            Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco
                            Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In
                            Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat
                            Cupidatat Non Proident, Sunt In Culpa Qui Officia Deserunt Mollit Anim Id Est Laborum. Lorem
                            Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut
                            Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco
                            Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In
                            Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat
                            Cupidatat Non Proident, Sunt In Culpa Qui Officia Deserunt Mollit Anim Id Est Laborum.</p>
                        <a href="javascript:">Learn More</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
            </div>
        </div>
    </section>
    <!-- snap ring retainer sec end -->


    <!-- do what you cant sec start -->
    <section class="dowhatsec" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-delay="5s"
                data-aos-offset="100" data-aos-duration="900">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="dowhattext text-center">
                        <h3>Do What You Cant</h3>
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut
                            Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam,</p>

                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1 col-xxl-1"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
                            <div class="whatimg">

                                <img src="images/truckimg.png" class="img-fluid" alt="img">
                                <a href="https://www.youtube.com/watch?v=Rk3T__b2mDg" data-fancybox="images"><i
                                        class="fas fa-play"></i></a>


                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1 col-xxl-1"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- do what you cant sec end -->


    <!-- laern with the best sec start -->
    <section class="learnwithbestsec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="learntext">
                        <h4>Learn With <span>The Best</span></h4>
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut
                            Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco
                            Laboris Nisi Ut Aliquip Ex Ea Commodo.</p>
                        <a href="javascript:">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- laern with the best sec end -->

    <section class="sec-customer" data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-delay="5s"
                data-aos-offset="100" data-aos-duration="900">
        <div class="container">
            <h4 class="special-head">Our Customers Love</h4>
            <p class="special-p">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut <br/> Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam,</p>
            <div class="special-slider owl-carousel owl-theme" id="customer-slider">
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="special-main">
                        <div class="special-img">
                            <img src="images/ssl1.png" class="img-fluid special-thumb" alt="">
                        </div>

                        <div class="special-desc">
                            <h4 class="special-name">68RFE Snap</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- dealer benefits sec start -->
    <section class="dealerbenefitssec" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="5s"
                data-aos-offset="100" data-aos-duration="900">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="daelerbenefitstext">
                        <h3>Dealer <span>Benefits</span></h3>
                        <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut
                            Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco
                            Laboris Nisi Ut Aliquip Ex Ea Commodo. Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing
                            Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim
                            Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo.</p>
                        <ul>
                            <li>Lorem Ipsum Dolor Sit Amet, </li>
                            <li>Lorem Ipsum Dolor Sit Amet, </li>
                            <li>Lorem Ipsum Dolor Sit Amet, </li>
                            <li>Lorem Ipsum Dolor Sit Amet, </li>
                            <li>Lorem Ipsum Dolor Sit Amet, </li>
                        </ul>
                        <ul>
                            <li>Lorem Ipsum Dolor Sit Amet, </li>
                            <li>Lorem Ipsum Dolor Sit Amet, </li>
                            <li>Lorem Ipsum Dolor Sit Amet, </li>
                            <li>Lorem Ipsum Dolor Sit Amet, </li>

                        </ul>
                        <div class="clearfix"></div>
                        <a href="javascript:">Learn More</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="dealerlist">
                                <img src="images/stocking_1.png" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="dealerlist">
                                <img src="images/stocking_2.png" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="dealerlist">
                                <img src="images/stocking_3.png" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="dealerlist">
                                <img src="images/stocking_1.png" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="dealerlist">
                                <img src="images/stocking_2.png" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="dealerlist">
                                <img src="images/stocking_3.png" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="dealerlist">
                                <img src="images/stocking_1.png" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="dealerlist">
                                <img src="images/stocking_2.png" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="dealerlist">
                                <img src="images/stocking_3.png" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dealer benefits sec start -->
   <section class="instagram">
       <div class="row">
           <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
               <h2>Instagram</h2>
               <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt<br> Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam,</p>
               <div class="center-slick">
  <div><img src="images/insta-slide1.png" class="img-fluid" alt="img"></div>
  <div><img src="images/insta-slide2.png" class="img-fluid" alt="img"></div>
  <div><img src="images/insta-slide3.png" class="img-fluid" alt="img"></div>
   <div><img src="images/insta-slide4.png" class="img-fluid" alt="img"></div>
  <div><img src="images/insta-slide5.png" class="img-fluid" alt="img"></div>
  <div><img src="images/insta-slide1.png" class="img-fluid" alt="img"></div>
</div>
           </div>
       </div>
   </section>

</main>

<?php
    include 'includes/footer.php';
    $page = 'home';
?>