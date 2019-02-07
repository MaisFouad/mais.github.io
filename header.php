<?php
include "admin/include/config.php";
?>
<!doctype html>

<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="layout/css/bootstrap.min.css">

    <link rel="stylesheet" href="layout/css/main.css">
    <link rel="stylesheet" href="layout/css/mystyle.css">
    <link rel="stylesheet" href="layout/css/mdb.css">
    <link rel="stylesheet" href="layout/css/style.css">
    <link rel="stylesheet" href="layout/css/util.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="layout/css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!--    <link rel="stylesheet" href="css/util.css">-->
    <title>Document</title>
</head>
<body class="animsition">
<!--    <header>-->
<!--        <!-- Header desktop -->
<!--        <div class="container-menu-desktop">-->
<!--            <!-- Topbar -->
<!--            <div class="top-bar">-->
<!--                <div class="content-topbar flex-sb-m h-full container">-->
<!--                    <div class="left-top-bar">-->
<!--						Free shipping for standard order over $100-->
<!--					</div>-->
<!---->
<!--                    <div class="right-top-bar flex-w h-full">-->
<!--                        <a href="#" class="flex-c-m trans-04 p-lr-25">-->
<!--                            Help &amp; FAQs-->
<!--                        </a>-->
<!---->
<!--                        <a href="#" class="flex-c-m trans-04 p-lr-25">-->
<!--                            My Account-->
<!--                        </a>-->
<!---->
<!--                        <a href="#" class="flex-c-m trans-04 p-lr-25">-->
<!--                            EN-->
<!--                        </a>-->
<!---->
<!--                        <a href="#" class="flex-c-m trans-04 p-lr-25">-->
<!--                            USD-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--             </header>-->

<div class="wrap-menu-desktop" style="top: 5px;">
    <nav class="limiter-menu-desktop p-l-45">

        <!-- Logo desktop -->
        <a href="#" class="logo">
            <img src="image/icons/logo-02.png" alt="IMG-LOGO">
        </a>

        <!-- Menu desktop -->
        <div class="menu-desktop">
            <ul class="main-menu">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Homepage 1</a></li>
                        <li><a href="home-02.html">Homepage 2</a></li>
                        <li><a href="home-03.html">Homepage 3</a></li>
                    </ul>
                </li>

                <li>
                    <a href="product.html">Shop</a>
                </li>

                <li class="label1" data-label1="hot">
                    <a href="shoping-cart.html">Features</a>
                </li>

                <li>
                    <a href="blog.html">Blog</a>
                </li>

                <li>
                    <a href="about.html">About</a>
                </li>

                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full">
            <div class="flex-c-m h-full p-l-18 p-r-25 bor5">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
            </div>

            <div class="flex-c-m h-full p-lr-19">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>
            </div>
        </div>
    </nav>
</div>

<!--    <div class="container">-->
    <section class="section-slide">
        <?php
        $q="SELECT * FROM `Advertisement`  ";
        $result=mysqli_query($conn,$q);
        ?>
        <div class="wrap-slick1 rs1-slick1">
            <div class="slick1">
                <?php
                while ($row=mysqli_fetch_array($result)) {
                    ?>
                    <div class="item-slick1" style="background-image: url('image/<?php echo $row['name_adv']; ?>');width: 100%;height: 50%">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30">
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 cl2 respon2">
                                    <?php echo $row['detail']?>
								</span>
                                </div>

<!--                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">-->
<!--                                    <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">-->
<!--                                        jjj-->
<!--                                    </h2>-->
<!--                                </div>-->

                                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                         <?php echo "<a href='down.php?id=$row[0]' class='btn  btn-success' >Like</a>";?>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }?>


        </div>
    </section>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Navbar brand -->
        <span class="navbar-brand">Categories:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="navbar-collapse collapse" id="basicExampleNav" style="">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link waves-effect waves-light" href="#">All
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="#">Fruit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="#">Vegetables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="#">Sweet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="#">Meat</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-lin0k waves-effect waves-light" href="#">Meat</a>-->
<!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="#">Drinks</a>

                </li>
            </ul>



            <!-- Links -->

            <form class="form-inline">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>
        <!-- Collapsible content -->

    </nav>

</div>