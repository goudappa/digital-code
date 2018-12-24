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
                                    
                                    <li class="breadcrumb-item" aria-current="page">Shop Now</li>
                                </ol>
                            </nav>
                            <hr>

                            <!-- Show Now -->
                           <div class="row">
                               <div class="col-sm-5 col-md-4 col-lg-3 mt-3">
                                   <div class="show-only">
                                       <h5>Show Only</h5>
                                       <form>
                                            <div class="form-group form-check cust-frmcheck">
                                                <input type="checkbox" class="form-check-input inp-check">
                                                <label class="form-check-label shop-lbl">Most Sold</label>
                                            </div>
                                            <div class="form-group form-check cust-frmcheck">
                                                <input type="checkbox" class="form-check-input inp-check">
                                                <label class="form-check-label shop-lbl">Save Deals</label>
                                            </div>
                                       </form>
                                   </div>
                                   <br>
                                   <div class="show-only">
                                       <h5>Category</h5>
                                       <h6>All Cards</h6>
                                       <button class="accordion shop-accord">iTunes</button>
                                        <div class="panel">
                                             <p><a href="product.php">USA</a></p>
                                        </div>
                                        <button class="accordion shop-accord">Google Play</button>
                                        <div class="panel">
                                             <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                        <button class="accordion shop-accord">Play Station</button>
                                        <div class="panel">
                                             <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                        <h6>Xbox</h6>
                                        <button class="accordion shop-accord">Nintendo</button>
                                        <div class="panel">
                                             <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                        <button class="accordion shop-accord">Steam</button>
                                        <div class="panel">
                                             <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                        <h6>Amazon</h6>
                                        <button class="accordion shop-accord">Facebook</button>
                                        <div class="panel">
                                             <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                        <button class="accordion shop-accord">Netflix</button>
                                        <div class="panel">
                                             <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                        <h3>Skype</h3>
                                        <h3>Slack</h3>
                                        <h3>Uber</h3>
                                        
                                   </div>
                                   <br>
                                   <div class="show-only">
                                       <h5>Price</h5>
                                         <div class="row">
                                            <div class="col-sm-6 rt-pad">
                                                <form>
                                                    <div class="col-auto my-1">
                                                        <label class="mr-sm-2" for="inlineFormCustomSelect">From</label>
                                                        <select class="custom-select cst-slt mr-sm-2" id="inlineFormCustomSelect">
                                                            <option selected>0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                                    </div>    
                                                </form>
                                            </div>
                                            <div class="col-sm-6 lt-pad">
                                                <form>
                                                    <div class="col-auto my-1">
                                                        <label class="mr-sm-2" for="inlineFormCustomSelect">To</label>
                                                        <select class="custom-select cst-slt mr-sm-2" id="inlineFormCustomSelect">
                                                            <option selected>2000</option>
                                                            <option value="1">2001</option>
                                                            <option value="2">2002</option>
                                                            <option value="3">2003</option>
                                                        </select>
                                                    </div>    
                                                </form>
                                            </div>
                                        </div>
                                        <div class="">
                                            <input type="range" class="custom-range">
                                        </div>
                                        <div class="row justify-content-end">
                                            <button type="button" class="btn btn-warning apply-btn">Apply</button>
                                        </div>
                                   </div>
                               </div>
                               
                               <div class="col-sm-7 col-md-8 col-lg-9 mt-4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="all-cards">
                                                <h5>All Cards (2,400 Items Found)</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="sort-by">
                                                <form>
                                                    <div class="form-group col-md-7 sort-group">
                                                        <label class="cust-srtby"><h5>Sort By :</h5></label>
                                                        <select id="" class="form-control sort-cntrl">
                                                            <option selected><h5>Best Match</h5></option>
                                                            <option><h5>Range 1</h5></option>
                                                            <option><h5>Range 2</h5></option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <div class="card cust-card">
                                                <span>
                                                    <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                </span>
                                                <img class="card-img-top cust-imgtop" src="images/card1.png" alt="Card image cap">
                                                <div class="card-body cust-cardbody">
                                                    <h5 class="card-title">iTunes 25$ - USA
                                                        <span>
                                                            <img src="images/us.png" />
                                                        </span>
                                                    </h5>
                                                    <h5>
                                                        <small>
                                                            <del>160.00AED</del>
                                                        </small> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <div class="card cust-card">
                                                <span>
                                                    <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                </span>
                                                <img class="card-img-top cust-imgtop" src="images/card5.png" alt="Card image cap">
                                                <div class="card-body cust-cardbody">
                                                    <h5 class="card-title cst-crdtitle">Google Play - 50$</h5><br>
                                                    <h5>40.00 AED</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <div class="card cust-card">
                                                <span>
                                                    <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                </span>
                                                <img class="card-img-top cust-imgtop" src="images/card2.jpg" alt="Card image cap">
                                                <div class="card-body cust-cardbody">
                                                    <h5 class="card-title">iTunes 25$ - USA
                                                        <span>
                                                            <img src="images/us.png" />
                                                        </span>
                                                    </h5>
                                                    <h5>
                                                        <small>
                                                            <del>160.00AED</del>
                                                        </small> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <div class="card cust-card">
                                                <span>
                                                    <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                </span>
                                                <img class="card-img-top cust-imgtop" src="images/card3.jpg" alt="Card image cap">
                                                <div class="card-body cust-cardbody">
                                                    <h5 class="card-title">iTunes 25$ - USA
                                                        <span>
                                                            <img src="images/us.png" />
                                                        </span>
                                                    </h5>
                                                    <h5>
                                                        <small>
                                                            <del>160.00AED</del>
                                                        </small> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <div class="card cust-card">
                                                <span>
                                                    <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                </span>
                                                <img class="card-img-top cust-imgtop" src="images/card-2.png" alt="Card image cap">
                                                <div class="card-body cust-cardbody">
                                                    <h5 class="card-title cst-crdtitle">Google Play - 50$</h5><br>
                                                    <h5>40.00 AED</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <div class="card cust-card">
                                                <span>
                                                    <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                </span>
                                                <img class="card-img-top cust-imgtop" src="images/card4.png" alt="Card image cap">
                                                <div class="card-body cust-cardbody">
                                                    <h5 class="card-title">iTunes 25$ - USA
                                                        <span>
                                                            <img src="images/us.png" />
                                                        </span>
                                                    </h5>
                                                    <h5>
                                                        <small>
                                                            <del>160.00AED</del>
                                                        </small> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <div class="card cust-card">
                                                <span>
                                                    <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                </span>
                                                <img class="card-img-top cust-imgtop" src="images/card1.png" alt="Card image cap">
                                                <div class="card-body cust-cardbody">
                                                    <h5 class="card-title">iTunes 25$ - USA
                                                        <span>
                                                            <img src="images/us.png" />
                                                        </span>
                                                    </h5>
                                                    <h5>
                                                        <small>
                                                            <del>160.00AED</del>
                                                        </small> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <div class="card cust-card">
                                                <span>
                                                    <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                </span>
                                                <img class="card-img-top cust-imgtop" src="images/card5.png" alt="Card image cap">
                                                <div class="card-body cust-cardbody">
                                                    <h5 class="card-title cst-crdtitle">Google Play - 50$</h5><br>
                                                    <h5>40.00 AED</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <div class="card cust-card">
                                                <span>
                                                    <i class="fa fa-heart cust-heart" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                    <i class="fa fa-share-alt cust-share" aria-hidden="true"></i>
                                                </span>
                                                <img class="card-img-top cust-imgtop" src="images/card2.jpg" alt="Card image cap">
                                                <div class="card-body cust-cardbody">
                                                    <h5 class="card-title">iTunes 25$ - USA
                                                        <span>
                                                            <img src="images/us.png" />
                                                        </span>
                                                    </h5>
                                                    <h5>
                                                        <small>
                                                            <del>160.00AED</del>
                                                        </small> &nbsp;&nbsp;&nbsp;150.00 AED</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                           </div>
                            <!-- ./ Show Now-->
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
</body>