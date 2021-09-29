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
                        <h3 class="banner-h">cart</h3>
                        <p class="banner-p">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod
                            Tempor<br> Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-cart">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <table class="table cart-table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Products</th>
                                <th scope="col"></th>
                                <th scope="col">quantity</th>
                                <th scope="col">price</th>
                                <th scope="col">total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="images/cart.png" class="img-fluid cart-img" alt="">
                                </td>

                                <td>
                                    <div class="cart-desc">
                                        <h6 class="pro-name">Product name</h6>
                                        <h6 class="pro-categ">Product category</h6>
                                    </div>
                                </td>

                                <td>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-quant btn-number"
                                                data-type="minus" data-field="">
                                                <i class="fal fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="10" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus btn btn-quant btn-number"
                                                data-type="plus" data-field="">
                                                <i class="fal fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="price">$45.90</h6>
                                </td>
                                <td>
                                    <h6 class="price">$91.80</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="total">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <input type="text" class="form-control coupon-control" placeholder="enter coupon code here">
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                                        <button class="btn coupon-btn">apply coupon</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="total-price">
                                    <h6 class="total-h">total</h6>
                                    <p class="tp">$1,478.70</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="checkout-btn-main">
                            <a href="javascript:" class="btn continue-btn">Continue Shopping</a>
                            <a href="checkout.php" class="btn checkout-btn">Process Checkout</a>
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