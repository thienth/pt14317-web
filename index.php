<?php 
require_once './commons/db.php';
require_once './commons/constants.php';
require_once './commons/helpers.php';
$sql = "select * from products order by id desc limit 9";
$products = executeQuery($sql, true);
$sql = "select * from categories where show_menu = 1";
$menus = executeQuery($sql, true);
 ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from massive.markup.themebucket.net/shop-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:55:09 GMT -->
<head>
	<base href="<?php echo PUBLIC_URL ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Shop 3 Column</title>
    <?php include_once './_share/style.php'; ?>
    
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
                <h4 class="text-uppercase">Shop - 3 Column</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Product</a>
                    </li>
                    <li class="active">Shop - 3 Column</li>
                </ol>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content product-grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <!--product option-->
                            <div class="clearfix m-bot-30 inline-block">

                                <div class="pull-left">
                                    <form method="post" action="#">
                                        <select class="form-control">
                                            <option>Default sorting</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by average ratings</option>
                                            <option>Sort by newness</option>
                                            <option>Sort by price: low to high</option>
                                            <option>Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>

                                <div class="pull-left m-top-5 m-left-10">
                                    Showing 1–10 of 55 results
                                </div>

                                <div class="pull-right shop-view-mode">
                                    <a href="#"> <i class="fa fa-th-large"></i> 
                                    </a>
                                    <a href="#"> <i class="fa fa-th-list"></i> 
                                    </a>
                                </div>

                            </div>
                            <!--product option-->
                            <div class="row">
                            	<?php foreach ($products as $pro): ?>
                            		<div class="col-md-4">
	                                    <!--product list-->
	                                    <div class="product-list">
	                                        <div class="product-img">
	                                            <a href="#">
	                                                <img src="<?php echo $pro['feature_image'] ?>" alt="" />
	                                            </a>
	                                            <a href="#">
	                                                <img src="<?php echo $pro['feature_image'] ?>" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="product-title">
	                                            <h5><a href="#"><?php echo $pro['name'] ?></a></h5>
	                                        </div>
	                                        <div class="product-price">
	                                            <del><?php echo number_format($pro['price'], 0, '', ','); ?> vnđ</del> 
	                                            <?php echo number_format($pro['sale_price'], 0, '', ','); ?> vnđ
	                                        </div>
	                                        <div class="product-rating">
	                                        	<?php for($i = 1; $i <= 5; $i++){ 
                                        			$className = "fa fa-star";
                                        			if($i > $pro['rating']){
                                        				$className .= "-o";
                                        			}
                                        		?>
	                                            <i class="<?php echo $className ?>"></i>
	                                            <?php } ?>
	                                        </div>
	                                        <div class="product-btn">
	                                            <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
	                                        </div>
	                                    </div>
	                                    <!--product list-->
	                                </div>
                            	<?php endforeach ?>
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <!--product category-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">product category</h6>
                                </div>
                                <ul class="widget-category">
                                    <li><a href="#">Accessories</a>
                                    </li>
                                    <li><a href="#">Branding</a>
                                    </li>
                                    <li><a href="#">Watches</a>
                                    </li>
                                    <li><a href="#">Hats & Caps</a>
                                    </li>
                                    <li><a href="#">Shoes</a>
                                    </li>
                                    <li><a href="#">Men's Cloth</a>
                                    </li>
                                    <li><a href="#">Belts</a>
                                    </li>
                                    <li><a href="#">Kids Collection</a>
                                    </li>
                                </ul>
                            </div>
                            <!--product category-->

                            <!--price filter-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">price filter</h6>
                                </div>
                                <form method="post" action="#">

                                    <div class="row">
                                        <div class="col-xs-12 form-group">
                                            <input type="text" name="price-from" id="price-from" class=" form-control" placeholder="From, $" maxlength="100">
                                        </div>

                                        <div class="col-xs-12 form-group">
                                            <input type="text" name="price-to" id="price-to" class=" form-control" placeholder="To, $" maxlength="100">
                                        </div>
                                        <div class=" col-xs-12 form-group">
                                            <button class="btn btn-small btn-dark-border  btn-transparent">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--price filter-->


                            <!--latest product-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">latest Products</h6>
                                </div>
                                <ul class="widget-latest-post">
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/product/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="w-desk">
                                            <a href="#">Praesent pellentesque</a>
                                            <div class="price">$25.99</div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-cart">
                                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/product/2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="w-desk">
                                            <a href="#">Shirt With Mesh Sleeves</a>
                                            <div class="price">$35.99</div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="product-cart">
                                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/product/3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="w-desk">
                                            <a href="#">Checked Short Dress</a>
                                            <div class="price">$45.99</div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-cart">
                                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--latest product-->


                            <!--top rated product-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">Top Rated Products</h6>
                                </div>
                                <ul class="widget-latest-post">
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/product/4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="w-desk">
                                            <a href="#">Praesent pellentesque</a>
                                            <div class="price">$25.99</div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="product-cart">
                                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/product/5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="w-desk">
                                            <a href="#">Shirt With Mesh Sleeves</a>
                                            <div class="price">$35.99</div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="product-cart">
                                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--top rated product-->


                            <!--product tags-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">PRODUCT TAGS</h6>
                                </div>
                                <div class="widget-tags">
                                    <a href="#">Accessories</a>
                                    <a href="#">Branding</a>
                                    <a href="#">Belts</a>
                                    <a href="#">Cloth</a>
                                    <a href="#">Kids</a>
                                    <a href="#">Watch</a>
                                    <a href="#">Shoes</a>
                                </div>
                            </div>
                            <!--product tags-->

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
    
</body>


<!-- Mirrored from massive.markup.themebucket.net/shop-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:55:09 GMT -->
</html>
