<?php 
session_start();
require_once './commons/db.php';
require_once './commons/constants.php';
require_once './commons/helpers.php';

$cart = isset($_SESSION[CART]) ? $_SESSION[CART] : [];
$totalPrice = 0;
 ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from massive.markup.themebucket.net/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:55:09 GMT -->
<head>
    <base href="<?php echo PUBLIC_URL ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Shop Cart</title>

    <?php include_once './_share/style.php'; ?>
    <!-- endinject -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/backward/html5shiv.js"></script>
    <script src="assets/vendor/backward/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        <?php include_once './_share/header.php'; ?>


        <!--page title start-->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-uppercase">Shop Cart</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Product</a>
                            </li>
                            <li class="active">Shop Cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Item No</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cart as $item): ?>
                                            
                                        <tr>
                                            <td>
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="<?php echo $item['feature_image'] ?>" alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><a href="#"><?php echo $item['name'] ?></a>
                                            </td>
                                            <td><?php echo $item['sku'] ?></td>
                                            <td>
                                                <div class="cart-action">
                                                    <input type="number" class="form-control cart-quantity" value="<?php echo $item['quantity'] ?>" />
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-refresh"></i>
                                                    </button>
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-trash-o"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td><?php echo number_format($item['sale_price'], 0, '', ','); ?> vnđ</td>
                                            <td><?php 
                                                $itemTotal = $item['sale_price']*$item['quantity'];
                                                $totalPrice += $itemTotal;

                                                echo number_format($itemTotal, 0, '', ','); ?> vnđ</td>
                                        </tr>
                                        <?php endforeach ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- accordion 2 start-->
                            <dl class="accordion">
                                <dt>
                                    <a href="#">Use Coupon Code</a>
                                </dt>
                                <dd>
                                    <form class="form-inline coupon-form">
                                        <div class="form-group">
                                            <label>Enter Your Voucher Code</label>
                                            <input type="text" class="form-control width-300 voucher-code-input">
                                        </div>
                                        <button type="button" class="btn-voucher btn btn-small btn-dark-solid">Apply Voucher Code</button>
                                    </form>
                                </dd>
                                <dt>
                                    <a href="#">Use Gift Voucher</a>
                                </dt>
                                <dd>
                                    <form class="form-inline coupon-form">
                                        <div class="form-group">
                                            <label>Enter Your Gift Voucher</label>
                                            <input type="text" class="form-control width-300">
                                        </div>
                                        <button type="submit" class="btn btn-small btn-dark-solid">Apply Gift Voucher</button>
                                    </form>
                                </dd>
                                <dt>
                                    <a href="#">Estimate Shipping & Taxes</a>
                                </dt>
                                <dd>
                                    <form class="coupon-form">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="form-group">
                                            <label>Country *</label>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Region / State *</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Post Code *</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <button type="submit" class="btn btn-small btn-dark-solid">Get Quotes</button>
                                    </form>
                                </dd>
                            </dl>
                            <!-- accordion 2 end-->

                            <ul class="portfolio-meta m-bot-30 pull-right"> 
                                <li>
                                Total </strong></span>  <strong class="cart-total"><?php echo number_format($totalPrice, 0, '', ','); ?> vnđ </strong>
                                </li>
                            </ul>

                            <div class="cart-btn-row inline-block">
                                <a href="#" class="btn btn-medium btn-dark-solid pull-right "><i class="fa fa-shopping-cart"></i>  Checkout</a>
                                <a href="#" class="btn btn-medium btn-dark-solid btn-transparent  pull-right">  Continue Shopping </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--body content end-->

        <!--footer start 1-->
        <footer id="footer" class="dark">
            <div class="primary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="m-bot-20 footer-logo">
                                <img class="retina" src="assets/img/logo-dark.png" alt="" />
                            </a>
                            <p>Massive is fully responsible, performance oriented and SEO optimized, retina ready WordPress theme.</p>

                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">recent posts</h5>
                            <ul class="f-list">
                                <li><a href="#">Standard Blog post</a>
                                </li>
                                <li><a href="#">Quotation post</a>
                                </li>
                                <li><a href="#">Audio Post</a>
                                </li>
                                <li><a href="#">Massive Video Demo</a>
                                </li>
                                <li><a href="#">Blog Image Post</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">quick link</h5>
                            <ul class="f-list">
                                <li><a href="#">About Massive</a>
                                </li>
                                <li><a href="#">Career</a>
                                </li>
                                <li><a href="#">Terms & Condition</a>
                                </li>
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">Recent Work</h5>
                            <ul class="r-work">
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/1.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/2.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/3.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/4.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/5.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/6.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/7.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/8.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/9.jpg" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="secondary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="m-top-10">Copyright 2012 - 2015 Massive Theme by <a href="http://themebucket.net/" class="f-link" target="_blank">ThemeBucket</a> | All Rights Reserved</span>
                        </div>
                        <div class="col-md-6">
                            <div class="social-link circle pull-right">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer 1 end-->

    </div>


    <?php include_once './_share/script.php'; ?>
    <input type="hidden" id="total-price" value="<?php echo $totalPrice ?>">
    <script>
        $("input[name='demo0']").TouchSpin({});

        var buttonApplyVoucher = document.querySelector(".btn-voucher");
        buttonApplyVoucher.onclick = function(){
            var voucherCode = document.querySelector('.voucher-code-input').value;

            var url = "<?php echo BASE_URL ?>checkVoucherCode.php?code=" + voucherCode;
            fetch(url, {method: 'GET'})
                .then((resp) => resp.json())
                .then(function(data){
                    if(data == null){
                        alert('Mã Voucher không tồn tại/hết hạn');
                    }else{
                        var totalPrice = document.querySelector('#total-price').value;
                        totalPrice = parseInt(totalPrice)-parseInt(data.discount_price);
                        totalPrice = totalPrice.toLocaleString('it-IT', {style : 'currency', currency : 'VND'});
                        document.querySelector('.cart-total').innerText = totalPrice;

                    }
                });

        }
    </script>
</body>


<!-- Mirrored from massive.markup.themebucket.net/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:55:09 GMT -->
</html>
