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
                        <h3 class="banner-h">contact us</h3>
                        <p class="banner-p">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod
                            Tempor<br> Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-contact">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <form action="" class="contact-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <h5 class="form-h">Leave a message</h5>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <label for="" class="custom-label">Your Name</label>
                                <input type="text" class="form-control custom-control"
                                    placeholder="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <label for="" class="custom-label">Your Email</label>
                                <input type="text" class="form-control custom-control"
                                    placeholder="">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">Subject</label>
                                <input type="text" class="form-control custom-control"
                                    placeholder="">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">Your Comment</label>
                                <textarea type="text" rows="8" class="form-control txt-area-control"
                                    placeholder=""></textarea>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                            <a href="javascript:" class="btn login-btn">send message</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                    <ul class="contact-ul">
                        <li class="contact-li">address: <a href="javascript:" class="contact-a">124 Volunteer Drive,<br>Hendersonville, TN 37075</a> </li>
                    </ul>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                <ul class="contact-ul">
                        <li class="contact-li">Phone number: <a href="javascript:" class="contact-a">615-452-6003</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include 'includes/footer.php';
    $page = 'home';
?>