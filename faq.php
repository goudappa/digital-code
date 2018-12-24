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
                        <button class="btn btn-dark d-inline-block d-lg-none res-toggleb ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
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
                                        <a href="#">Home</a>
                                    </li>
                                    
                                    <li class="breadcrumb-item" aria-current="page">Faq's</li>
                                </ol>
                            </nav>
                            <hr>

                            <!-- FAQ's -->
                            <div class="terms">
                                <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                <p>
                                <br>
                                <div class="row justify-content-md-center faqimg">
                                    <img src="images/faq.png" />
                                </div>
                            </div>
                            <!-- ./ FAQ's -->
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