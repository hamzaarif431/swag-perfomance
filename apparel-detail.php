<?php
    include 'includes/header.php';
    $page = 'home';
?>
<main>
    <section class="section-apparel-detail">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <!-- Swiper -->
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="images/power-stroke/apparel1.png" class="swiper-main-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/power-stroke/apparel1.png" class="swiper-main-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/power-stroke/apparel1.png" class="swiper-main-img">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/power-stroke/apparel1.png" class="swiper-main-img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="images/power-stroke/apparels1.png" class="swiper-main-small">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/power-stroke/apparels1.png" class="swiper-main-small">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/power-stroke/apparels1.png" class="swiper-main-small">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/power-stroke/apparels1.png" class="swiper-main-small">
                            </div>


                        </div>
                        <!-- Add Arrows -->
                        <!-- <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div> -->
                    </div>
                    <!-- Swiper JS -->
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="product-detail-desc">
                        <h5 class="desc-head">bulletproof diesel</h5>
                        <p class="desc-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard </p>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7">
                            <div class="pricing-detail">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                        <h6 class="pice-label">Pricing</h6>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7">
                                        <h5 class="price">$273.00</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center mt-5">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                        <h6 class="pice-label">SKU</h6>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <h5 class="number-p">90201157</h5>
                                    </div>
                                </div>
                                <div class="row align-items-center mt-5">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                                        <h6 class="pice-label">Quantity</h6>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-left-minus btn btn-quant btn-number"
                                                    data-type="minus" data-field="">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity" name="quantity"
                                                class="form-control input-number" value="10" min="1" max="100">
                                            <span class="input-group-btn">
                                                <button type="button"
                                                    class="quantity-right-plus btn btn-quant btn-number"
                                                    data-type="plus" data-field="">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="add-cart">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                    <a href="javascript:" class="btn cart-btn">add to cart</a>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                    <a href="javascript:" class="btn wish-btn">add to whislist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-tabs">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <ul class="nav nav-pills categ-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item categ-item" role="presentation">
                            <button class="nav-link categ-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item categ-item" role="presentation">
                            <button class="nav-link categ-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">details</button>
                        </li>
                        <li class="nav-item categ-item" role="presentation">
                            <button class="nav-link categ-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">shipping</button>
                        </li>

                        <li class="nav-item categ-item" role="presentation">
                            <button class="nav-link categ-link" id="pills-eco-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-eco" type="button" role="tab" aria-controls="pills-eco"
                                aria-selected="false">reviews</button>
                        </li>
                    </ul>

                    <div class="tab-content categ-content" id="pills-tabContent">
                        <div class="tab-pane categ-pane animate__animated animate__jackInTheBox animate__fast show active"
                            id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                            <div class="desc-main">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="desc-p">Lorem Ipsum Is Simply Dummy Text Of The Printing And
                                            Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy
                                            Text Ever Since The 1500S, When An Unknown Printer Took A Galley Of Type And
                                            Scrambled It To Make A Type Specimen Book. It Has Survived Not Only Five
                                            Centuries, But Also The Leap Into Electronic Typesetting, Remaining
                                            Essentially Unchanged. It Was Popularised In The 1960S With The Release Of
                                            Letraset Sheets Containing Lorem Ipsum Passages, And More Recently With
                                            Desktop Publishing Software Like Aldus Pagemaker Including Versions Of Lorem
                                            Ipsum. Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting
                                            Industry. Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since
                                            The 1500S, When An Unknown Printer Took A Galley Of Type And Scrambled It To
                                            Make A Type Specimen Book. It Has Survived Not Only Five Centuries, But Also
                                            The Leap Into Electronic Typesetting, Remaining Essentially Unchanged. It
                                            Was Popularised In The 1960S With The Release Of Letraset Sheets Containing
                                            Lorem Ipsum Passages, And More Recently With Desktop Publishing Software
                                            Like Aldus Pagemaker Including Versions Of Lorem Ipsum.Lorem Ipsum Is Simply
                                            Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been
                                            The Industry's Standard Dummy Text Ever Since The 1500S, When An Unknown
                                            Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.
                                            It Has Survived Not Only Five Centuries, But Also The Leap Into Electronic
                                            Typesetting, Remaining Essentially Unchanged. It Was Popularised In The
                                            1960S With The Release Of Letraset Sheets Containing Lorem Ipsum Passages,
                                            And More Recently With Desktop Publishing Software Like Aldus Pagemaker
                                            Including Versions Of Lorem Ipsum.Lorem Ipsum Is Simply Dummy Text Of The
                                            Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry's
                                            Standard Dummy Text Ever Since The 1500S, When An Unknown Printer Took A
                                            Galley Of Type And Scrambled It To Make A Type Specimen Book. It Has
                                            Survived Not Only Five Centuries, But Also The Leap Into Electronic
                                            Typesetting, Remaining Essentially Unchanged. It Was Popularised In The
                                            1960S With The Release Of Letraset Sheets Containing Lorem Ipsum Passages,
                                            And More Recently With Desktop Publishing Software Like Aldus Pagemaker
                                            Including Versions Of Lorem Ipsum.</p>

                                        <p class="desc-p">Lorem Ipsum Is Simply Dummy Text Of The Printing And
                                            Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy
                                            Text Ever Since The 1500S, When An Unknown Printer Took A Galley Of Type And
                                            Scrambled It To Make A Type Specimen Book. It Has Survived Not Only Five
                                            Centuries, But Also The Leap Into Lorem Ipsum Is Simply Dummy Text Of The
                                            Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry's
                                            Standard Dummy Text Ever Since The 1500S, When An Unknown Printer Took A
                                            Galley Of Type And Scrambled It To Make A Type Specimen Book. It Has
                                            Survived Not Only Five Centuries, But Also The Leap Into</p>

                                        <p class="desc-p">Lorem Ipsum Is Simply Dummy Text Of The Printing And
                                            Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy
                                            Text Ever Since The 1500S, When An Unknown Printer Took A Galley Of Type And
                                            Scrambled It To Make A Type Specimen Book. It Has Survived Not Only Five
                                            Centuries, But Also The Leap Into Electronic Typesetting, Remaining
                                            Essentially Unchanged. It Was Popularised In The 1960S With The Release Of
                                            Letraset Sheets Containing Lorem Ipsum Passages, And More Recently With
                                            Desktop Publishing Software Like Aldus Pagemaker Including Versions Of Lorem
                                            Ipsum. Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting
                                            Industry. Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since
                                            The 1500S, When An Unknown Printer Took A Galley Of Type And Scrambled It To
                                            Make A Type Specimen Book. It Has Survived Not Only Five Centuries, But Also
                                            The Leap Into Electronic Typesetting, Remaining Essentially Unchanged. It
                                            Was Popularised In The 1960S With The Release Of Letraset Sheets Containing
                                            Lorem Ipsum Passages, And More Recently With Desktop Publishing Software
                                            Like Aldus Pagemaker Including Versions Of Lorem Ipsum.Lorem Ipsum Is Simply
                                            Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been
                                            The Industry's Standard Dummy Text Ever Since The 1500S, When An Unknown
                                            Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.
                                            It Has Survived Not Only Five Centuries, But Also The Leap Into Electronic
                                            Typesetting, Remaining Essentially Unchanged. It Was Popularised In The
                                            1960S With The Release Of Letraset Sheets Containing Lorem Ipsum Passages,
                                            And More Recently With Desktop Publishing Software Like Aldus Pagemaker
                                            Including Versions Of Lorem Ipsum.Lorem Ipsum Is Simply Dummy Text Of The
                                            Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry's
                                            Standard Dummy Text Ever Since The 1500S, When An Unknown Printer Took A
                                            Galley Of Type And Scrambled It To Make A Type Specimen Book. It Has
                                            Survived Not Only Five Centuries, But Also The Leap Into Electronic
                                            Typesetting, Remaining Essentially Unchanged. It Was Popularised In The
                                            1960S With The Release Of Letraset Sheets Containing Lorem Ipsum Passages,
                                            And More Recently With Desktop Publishing Software Like Aldus Pagemaker
                                            Including Versions Of Lorem Ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane categ-pane animate__animated animate__backInRight animate__fast"
                            id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="details-main">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="details-all">
                                            <p class="detail-p"> <span class="red-h">SKU:</span> PLSD-46RH-2X</p>
                                            <p class="detail-p"> <span class="red-h">Item #:</span> PLSD-46RH-2X</p>
                                            <p class="detail-p"> <span class="red-h">Brand:</span> Suncoast Diesel</p>
                                        </div>

                                        <div class="categories">
                                            <h6 class="categ-h">Categories</h6>
                                            <p class="categ-p">Transmissions - DODGE CUMMINS - 46RH</p>
                                            <p class="categ-p">DIESEL - Diesel Products</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane categ-pane animate__animated animate__lightSpeedInLeft animate__fast"
                            id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="shipping-main">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="shipping-all">
                                            <h6 class="shipping-h">Shipping Information</h6>
                                            <p class="shipping-p"> <span class="shipping-h">Requires Shipping:</span>
                                                Item Requires Shipping</p>
                                            <p class="shipping-p"> <span class="shipping-h">Weight:</span> 350.0 Lbs.
                                            </p>
                                            <p class="shipping-p"> <span class="shipping-h">Package Dimensions:</span>
                                                W36.0000” X H28.0000” X L36.0000”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane categ-pane animate__animated animate__jackInTheBox animate__fast"
                            id="pills-eco" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="reviews-main">
                                <h5 class="review-h">Customer Reviews</h5>
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 px-xxl-5 px-xl-5 px-lg-5">

                                        <div class="card review-card">
                                            <ul class="review-ul">
                                                <li class="review-li">
                                                    <h6 class="rev-cust">Adam Smith</h6>
                                                    <span class="rev-day">7 Days</span>
                                                </li>
                                                <li class="review-li">
                                                    <span class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </li>
                                            </ul>

                                            <p class="rev-para">"Lorem Ipsum Is Simply Dummy Text Of The Printing And
                                                Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy
                                                Text Ever Since The 1500S, When An Unknown Printer Took A Galley Of Type
                                                And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only
                                                Five Centuries, But "</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 px-xxl-5 px-xl-5 px-lg-5">

                                        <div class="card review-card">
                                            <ul class="review-ul">
                                                <li class="review-li">
                                                    <h6 class="rev-cust">Adam Smith</h6>
                                                    <span class="rev-day">7 Days</span>
                                                </li>
                                                <li class="review-li">
                                                    <span class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </li>
                                            </ul>

                                            <p class="rev-para">"Lorem Ipsum Is Simply Dummy Text Of The Printing And
                                                Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy
                                                Text Ever Since The 1500S, When An Unknown Printer Took A Galley Of Type
                                                And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only
                                                Five Centuries, But "</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 px-xxl-5 px-xl-5 px-lg-5">

                                        <div class="card review-card">
                                            <ul class="review-ul">
                                                <li class="review-li">
                                                    <h6 class="rev-cust">Adam Smith</h6>
                                                    <span class="rev-day">7 Days</span>
                                                </li>
                                                <li class="review-li">
                                                    <span class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </li>
                                            </ul>

                                            <p class="rev-para">"Lorem Ipsum Is Simply Dummy Text Of The Printing And
                                                Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy
                                                Text Ever Since The 1500S, When An Unknown Printer Took A Galley Of Type
                                                And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only
                                                Five Centuries, But "</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 px-xxl-5 px-xl-5 px-lg-5">

                                        <div class="card review-card">
                                            <ul class="review-ul">
                                                <li class="review-li">
                                                    <h6 class="rev-cust">Adam Smith</h6>
                                                    <span class="rev-day">7 Days</span>
                                                </li>
                                                <li class="review-li">
                                                    <span class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </li>
                                            </ul>

                                            <p class="rev-para">"Lorem Ipsum Is Simply Dummy Text Of The Printing And
                                                Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy
                                                Text Ever Since The 1500S, When An Unknown Printer Took A Galley Of Type
                                                And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only
                                                Five Centuries, But "</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 px-xxl-5 px-xl-5 px-lg-5">

                                        <div class="card review-card">
                                            <ul class="review-ul">
                                                <li class="review-li">
                                                    <h6 class="rev-cust">Adam Smith</h6>
                                                    <span class="rev-day">7 Days</span>
                                                </li>
                                                <li class="review-li">
                                                    <span class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </li>
                                            </ul>

                                            <p class="rev-para">"Lorem Ipsum Is Simply Dummy Text Of The Printing And
                                                Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy
                                                Text Ever Since The 1500S, When An Unknown Printer Took A Galley Of Type
                                                And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only
                                                Five Centuries, But "</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 px-xxl-5 px-xl-5 px-lg-5">

                                        <div class="card review-card">
                                            <ul class="review-ul">
                                                <li class="review-li">
                                                    <h6 class="rev-cust">Adam Smith</h6>
                                                    <span class="rev-day">7 Days</span>
                                                </li>
                                                <li class="review-li">
                                                    <span class="stars">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </li>
                                            </ul>

                                            <p class="rev-para">"Lorem Ipsum Is Simply Dummy Text Of The Printing And
                                                Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy
                                                Text Ever Since The 1500S, When An Unknown Printer Took A Galley Of Type
                                                And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only
                                                Five Centuries, But "</p>
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
</main>

<?php
    include 'includes/footer.php';
    $page = 'home';
?>