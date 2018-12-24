<?php
include('header.php');
?>
<body>
    <section class="cust-topnav2">
        <div class="container-fluid">
            <div class="row cust-ulrow">
                <ul class="cust-ul">
                    <li>
                        <button class="btn btn-secondary cust-dropbtn" type="button" data-toggle="modal" data-target="#choosecountrymodal">
                            <i class="fa fa-globe" aria-hidden="true"></i> United Arab Emirates
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                    </li>
                    <li>
                        <button class="btn btn-secondary cust-dropbtn" type="button" data-toggle="modal" data-target="#chooselanguagemodal">
                            <i class="fa fa-language" aria-hidden="true"></i> English
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Digital Code 4U</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Dummy Heading</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                            <li>
                                <a href="#">Home 2</a>
                            </li>
                            <li>
                                <a href="#">Home 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
             <!-- Page Content  -->
             <div id="content">
                <nav class="navbar cust-navbar navbar-expand-lg navbar-light bg-light" data-toggle="sticky-onscroll">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-info cust-btn">
                            <i class="fas fa-align-left cusr-leftbtn"></i>
                        </button>
                        <span class="cust-logo">
                            <a href="index.html">
                                <img src="images/Logo.png" />
                            </a>
                        </span>
                        <button class="btn btn-dark d-inline-block res-toggleb d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <form class="mx-2 my-auto d-inline w-100">
                                <div class="input-group cust-inpgrp">
                                    <input type="text" class="form-control cust-srch border border-right-0" placeholder="What you are looking for ?">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary cust-srchbtn border border-left-0" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                            <ul class="nav navbar-nav cust-navbarnav ml-auto">
                                <li>
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn res-shopnow">Shop Now
                                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </button>
                                        <div id="myDropdown" class="dropdown-content">
                                            <a href="shop.php">All Categories</a>
                                            <button class="accordion">iTunes</button>
                                            <div class="panel">
                                                <p><a href="product.php">USA</a></p>
                                            </div>

                                            <button class="accordion">Google Play</button>
                                            <div class="panel">
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>

                                            <button class="accordion">Skype</button>
                                            <div class="panel">
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>

                                            <a href="#">Betflix</a>
                                            <a href="#">Mobile Recharge</a>

                                            <button class="accordion">facebook</button>
                                            <div class="panel">
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>

                                            <a href="#">steam</a>

                                            <div class="">
                                                <p>
                                                    <a data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        More Categories
                                                    </a>
                                                </p>
                                                <div class="collapse" id="collapseExample2">
                                                    <div class="card card-body">
                                                        <button class="accordion">Google Play</button>
                                                        <div class="panel">
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                        </div>

                                                        <button class="accordion">Skype</button>
                                                        <div class="panel">
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary cust-dropbtn2 res-shopnow dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Hello, Log In
                                        </button>
                                        <div class="dropdown-menu cust-dropmenu2" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <button type="button" class="btn btn-primary cust-primbtn" data-toggle="modal" data-target="#loginmodal">
                                                    Log In
                                                </button>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <span style="color: gray;" data-toggle="modal" data-target="#registermodal" data-dismiss="modal">Dont have account?</span> Sign Up</a>
                                            <a class="dropdown-item" href="myorders.php">My Orders</a>
                                            <a class="dropdown-item" href="">Whishlist</a>
                                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#changepassmodal">Change Password</a>
                                            <a class="dropdown-item" href="myprofile.php">Account Settings</a>
                                            <a class="dropdown-item" href="">Logout</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- <div class="dropdown">
                                                <button class="btn btn-secondary cust-dropbtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Cart
                                                </button>
                                                 <div class="dropdown-menu cust-dropmenu2" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Urdu</a>
                                                </div> 
                                            </div> -->
                                    <button class="btn btn-secondary cust-dropbtn res-shopnow" type="button">
                                        <a href="mycart.html">
                                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Cart</a>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- first section -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 no-pad">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb brdcrmb">
                                    <li class="breadcrumb-item active">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="shop.php">Shop</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="">iTunes</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">USA</li>
                                </ol>
                            </nav>
                            <hr>

                            <!-- Products's -->
                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="card prod-card">
                                        <span>
                                            <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                        </span>
                                        <span>
                                            <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                        </span>
                                        <img class="card-img-top cust-imgtop2" src="images/card2.jpg" alt="Card image cap">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="prod-detls">
                                        <h5 class="card-title">iTunes 25$ - USA
                                            <span><img src="images/us.png" /></span>
                                        </h5>
                                        <h4>250.00 AED</h4>
                                        <h6><small class="pro-clr"><del>350.00 AED</del></small> &nbsp;&nbsp;&nbsp;You save 100.00 AED</h6>
                                        <h6 class="pro-clr">All Prices includes VAT <a href="" style="color: #007bff;">Details</a></h6>
                                    </div>
                                    <div class="brand">
                                        <h6>Brand : <span class="pro-clr1">Apple</span></h6>
                                        <h6>Description :</h6>
                                        <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text ever since the 1500s.
                                        </p>
                                        <ul class="cust-points">
                                            <li>Lorem Ipsum is simply dummy text</li>
                                            <li>the printing and typesetting industry</li>
                                            <li>Lorem Ipsum has been the industry's standard</li>
                                            <li>standard text ever since the 1500s</li>
                                            <li>Lorem Ipsum is simply dummy text</li>
                                        </ul>
                                        <div class="">
                                                <p>
                                                    <a data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                       <span style="color: #007bff;">Read more</span>
                                                    </a>
                                                </p>
                                                <div class="collapse" id="collapseExample3">
                                                    <ul class="cust-points">
                                                        <li>Lorem Ipsum is simply dummy text</li>
                                                        <li>the printing and typesetting industry</li>
                                                        <li>Lorem Ipsum has been the industry's standard</li>
                                                        <li>standard text ever since the 1500s</li>
                                                        <li>Lorem Ipsum is simply dummy text</li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="">
                                        <button type="button" class="btn btn-warning cst-addcart">ADD TO CART</button>
                                    </div>
                                    <div class="">
                                    <button type="button" class="btn btn-warning cst-addcart2">BUY NOW</button>
                                    </div>
                                </div>
                            </div>

                            <div class="reltd-prdcts">
                                <h1>Related <span style="font-weight: 700;">Products</span></h1>
                                <div id="demo" class="carousel slide" data-ride="carousel">
                                  
                                    <!-- The slideshow -->
                                    <div class="container carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="col-sm-6 col-md-6 col-lg-3 cust-md">
                                                <div class="card cust-card">
                                                    <span>
                                                        <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                    </span>
                                                    <span>
                                                        <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                    </span>
                                                    <img class="card-img-top cust-imgtop" src="images/card2.jpg" alt="Card image cap">
                                                    <div class="card-body cust-cardbody">
                                                        <h5 class="card-title g2">iTunes 25$ - USA</h5>
                                                        <br>
                                                        <h5>150.00 AED</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 cust-md">
                                                <div class="card cust-card">
                                                        <span>
                                                            <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                        </span>
                                                        <span>
                                                            <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                        </span>
                                                        <img class="card-img-top cust-imgtop" src="images/card3.jpg" alt="Card image cap">
                                                        <div class="card-body cust-cardbody">
                                                            <h5 class="card-title g2">iTunes 25$ - USA
                                                                <span>
                                                                <i class="fa fa-flag" aria-hidden="true"></i>
                                                                </span>
                                                            </h5>
                                                            <br>
                                                            <h5>
                                                                <small>
                                                                    <del>160.00AED</del>
                                                                </small> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 cust-md">
                                                <div class="card cust-card">
                                                        <span>
                                                            <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                        </span>
                                                        <span>
                                                            <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                        </span>
                                                        <img class="card-img-top cust-imgtop" src="images/card3.jpg" alt="Card image cap">
                                                        <div class="card-body cust-cardbody">
                                                            <h5 class="card-title g2">iTunes 25$ - USA
                                                                <span>
                                                                <i class="fa fa-flag" aria-hidden="true"></i>
                                                                </span>
                                                            </h5>
                                                            <br>
                                                            <h5>
                                                                <small>
                                                                    <del>160.00AED</del>
                                                                </small> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 cust-md">
                                                <div class="card cust-card">
                                                    <span>
                                                        <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                    </span>
                                                    <span>
                                                        <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                    </span>
                                                    <img class="card-img-top cust-imgtop" src="images/card2.jpg" alt="Card image cap">
                                                    <div class="card-body cust-cardbody">
                                                        <h5 class="card-title g2">iTunes 25$ - USA</h5>
                                                        <br>
                                                        <h5> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col-sm-6 col-md-6 col-lg-3 cust-md">
                                                <div class="card cust-card">
                                                    <span>
                                                        <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                    </span>
                                                    <span>
                                                        <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                    </span>
                                                    <img class="card-img-top cust-imgtop" src="images/card2.jpg" alt="Card image cap">
                                                    <div class="card-body cust-cardbody">
                                                        <h5 class="card-title g2">iTunes 25$ - USA</h5>
                                                        <br>
                                                        <h5>150.00 AED</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 cust-md">
                                                <div class="card cust-card">
                                                        <span>
                                                            <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                        </span>
                                                        <span>
                                                            <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                        </span>
                                                        <img class="card-img-top cust-imgtop" src="images/card3.jpg" alt="Card image cap">
                                                        <div class="card-body cust-cardbody">
                                                            <h5 class="card-title g2">iTunes 25$ - USA
                                                                <span>
                                                                <i class="fa fa-flag" aria-hidden="true"></i>
                                                                </span>
                                                            </h5>
                                                            <br>
                                                            <h5>
                                                                <small>
                                                                    <del>160.00AED</del>
                                                                </small> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 cust-md">
                                                <div class="card cust-card">
                                                        <span>
                                                            <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                        </span>
                                                        <span>
                                                            <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                        </span>
                                                        <img class="card-img-top cust-imgtop" src="images/card3.jpg" alt="Card image cap">
                                                        <div class="card-body cust-cardbody">
                                                            <h5 class="card-title g2">iTunes 25$ - USA
                                                                <span>
                                                                <i class="fa fa-flag" aria-hidden="true"></i>
                                                                </span>
                                                            </h5>
                                                            <br>
                                                            <h5>
                                                                <small>
                                                                    <del>160.00AED</del>
                                                                </small> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-sm-6 col-md-6 col-lg-3 cust-md">
                                                <div class="card cust-card">
                                                    <span>
                                                        <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                    </span>
                                                    <span>
                                                        <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                    </span>
                                                    <img class="card-img-top cust-imgtop" src="images/card2.jpg" alt="Card image cap">
                                                    <div class="card-body cust-cardbody">
                                                        <h5 class="card-title g2">iTunes 25$ - USA</h5>
                                                        <br>
                                                        <h5> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev carousel-pre-cntrl" href="#demo" data-slide="prev">
                                        <i class="fa fa-chevron-left chev-left" aria-hidden="true"></i>
                                    </a>
                                    <a class="carousel-control-next carousel-nxt-cntrl" href="#demo" data-slide="next">
                                        <i class="fa fa-chevron-right chev-left" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- ./ Products's -->
                        </div>
                    </div>
                </div>
                <!-- ./ first section -->
                <?php
                include('footer.php');
                ?>
            </div>
        </div>
    </section>
    <script>
        //accordian 
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <style>
        .cust-imgtop{
            height: 250px !important;
        }
    </style>
</body>