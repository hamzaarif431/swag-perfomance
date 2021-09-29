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
                        <h3 class="banner-h">Login</h3>
                        <p class="banner-p">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod
                            Tempor<br> Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-login">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7">
                    <form action="" class="login-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <h5 class="form-h">Login</h5>
                                <p class="form-p">Dont have an account? <a href="sign-up.php" class="signup-a"> Sign
                                        up</a></p>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <a href="javascript:" class="btn google-btn"> <img src="images/google.png"
                                                class="img-fluid google-thumb" alt=""> Sign in with Google</a>
                                        <a href="javascript:" class="btn facebook-btn"> <img src="images/facebook.png"
                                                class="img-fluid face-thumb" alt=""> Log in with Facebook</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="line-seperate">
                                    <span class="lines">or</span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">Email Address</label>
                                <input type="text" class="form-control custom-control"
                                    placeholder="Enter Email Address Here">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">Password</label>
                                <input type="text" class="form-control custom-control"
                                    placeholder="enter password">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <ul class="check-ul">
                                    <li class="check-li">
                                        <label class="container-2">I agree to swagperformance.com <a href="javascript:"
                                                class="inner-page">Terms Of Service</a> and <a href="javascript:"
                                                class="inner-page">Privacy Policy</a>
                                            <input type="checkbox">
                                            <span class="checkmark-1"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <a href="javascript:" class="btn login-btn">login</a>
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