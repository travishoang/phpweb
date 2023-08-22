<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<head>
    <title>Free Home Shoppe Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/startstop-slider.js"></script>
</head>

<body>
    <div class="wrap">
        <div class="header">
            <?php require("account-desc.php");  ?>
            <div class="header_top">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="" /></a>
                </div>
                <div class="cart">
                    <p>Welcome to our Online Store! <span>Cart:</span>
                    <div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
                        <ul class="dropdown">
                            <li>you have no items in your Shopping cart</li>
                        </ul>
                    </div>
                    </p>
                </div>
                <script type="text/javascript">
                function DropDown(el) {
                    this.dd = el;
                    this.initEvents();
                }
                DropDown.prototype = {
                    initEvents: function() {
                        var obj = this;

                        obj.dd.on('click', function(event) {
                            $(this).toggleClass('active');
                            event.stopPropagation();
                        });
                    }
                }

                $(function() {

                    var dd = new DropDown($('#dd'));

                    $(document).click(function() {
                        // all dropdowns
                        $('.wrapper-dropdown-2').removeClass('active');
                    });

                });
                </script>
                <div class="clear"></div>
            </div>
            <div class="header_bottom">
                <?php require("menu.php"); ?>

            </div>
            <div class="header_slide">
                <div class="header_bottom_left">
                    <div class="categories">
                        <ul>
                            <h3>Categories</h3>
                            <?php require("sidebar.php");  ?>
                        </ul>


                    </div>
                </div>
                <div class="header_bottom_right">
                    <div class="slider">
                        <div id="slider">
                            <div id="mover">
                                <div id="slide-1" class="slide">
                                    <div class="slider-img">
                                        <a href="preview.html"><img src="images/slide-1-image.png"
                                                alt="learn more" /></a>
                                    </div>
                                    <div class="slider-text">
                                        <h1>Clearance<br><span>SALE</span></h1>
                                        <h2>UPTo 20% OFF</h2>
                                        <div class="features_list">
                                            <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply
                                                dummy text</h4>
                                        </div>
                                        <a href="preview.html" class="button">Shop Now</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="slide">
                                    <div class="slider-text">
                                        <h1>Clearance<br><span>SALE</span></h1>
                                        <h2>UPTo 40% OFF</h2>
                                        <div class="features_list">
                                            <h4>Get to Know More About Our Memorable Services</h4>
                                        </div>
                                        <a href="preview.html" class="button">Shop Now</a>
                                    </div>
                                    <div class="slider-img">
                                        <a href="preview.html"><img src="images/slide-3-image.jpg"
                                                alt="learn more" /></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="slide">
                                    <div class="slider-img">
                                        <a href="preview.html"><img src="images/slide-2-image.jpg"
                                                alt="learn more" /></a>
                                    </div>
                                    <div class="slider-text">
                                        <h1>Clearance<br><span>SALE</span></h1>
                                        <h2>UPTo 10% OFF</h2>
                                        <div class="features_list">
                                            <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply
                                                dummy text</h4>
                                        </div>
                                        <a href="preview.html" class="button">Shop Now</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="main">
            <?php require("content.php")?>

        </div>
    </div>
    <div class="footer">
        <?php require('footer.php') ?>

    </div>
    </div>
    </div>
    <div class="copy_right">
        <p>&copy; 2013 home_shoppe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a>
        </p>
    </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
    </script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>

</html>