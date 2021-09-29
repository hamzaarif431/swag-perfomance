<?php
    include 'includes/header.php';
    $page = 'home';
?>
<main>
    <section class="sec-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="banner-desc">
                        <h3 class="banner-h">checkout</h3>
                        <p class="banner-p">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod
                            Tempor<br> Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-checkout">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <form action="" class="checkout-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">

                                <div class="form-head">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <h5 class="form-h">BUYER INFO</h5>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <p class="form-p">Returning User? <a href="javascript:" class="signup-a">
                                                    Log In here</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">FULL NAME</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">ADDRESS</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">land mark</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">city</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="row gx-xxl-5 gx-xl-5 gx-lg-5">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="" class="custom-label">state</label>
                                        <select class="form-select check-select" aria-label="Default select example">
                                            <option selected="">select state</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="" class="custom-label">zip code</label>
                                        <input type="text" class="form-control custom-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <form action="" class="checkout-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">

                                <div class="form-head">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <h5 class="form-h">PAYMENT METHOD</h5>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                <a href="javascript:" class="btn payment-btn"> <img src="images/card.png" class="img-fluid payment-card" alt=""> Credit Card</a>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                <a href="javascript:" class="btn payment-btn"> <img src="images/transfer.png" class="img-fluid payment-trans" alt=""> bank transfer</a>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                <a href="javascript:" class="btn payment-btn"> <img src="images/paypal.png" class="img-fluid payment-paypal" alt=""> paypal</a>
                                </div>
                            </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">NAME ON CARD</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">CARD NUMBER</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="row gx-xxl-2 gx-xl-2 gx-lg-2 justify-content-between">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="" class="custom-label">month</label>
                                        <select class="form-select check-select" aria-label="Default select example">
                                            <option selected="">select month</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                                        <label for="" class="custom-label">year</label>
                                        <select class="form-select check-select" aria-label="Default select example">
                                            <option selected="">select year</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <a href="javascript:" class="btn login-btn">place order</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include 'includes/footer.php';
    $page = 'home';
?>