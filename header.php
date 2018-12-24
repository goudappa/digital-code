<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Digital Code4U</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="responise.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

    <!-- Font Awesome JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
        crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
</head>
<body>
    

        <!-- Login Modal -->
    <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cust-mheader">
                    <h4 class="modal-title cust-mtitle">LOGIN</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times-circle circlem" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <form>
                                    <div class="input-group cust-inpgroup1 mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="number" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Mobile Number">
                                    </div>

                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Password">
                                    </div>
                                    <small class="cust-frgt" data-toggle="modal" data-target="#forgotpassmodal" data-dismiss="modal">Forgot Password ?</small>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <div class="cust-logbtn">
                                    <button type="button" class="btn btn-primary cst-loginbtn">LOGIN</button>
                                    <p>New User ?
                                        <span style="color: #ffd900;cursor: pointer;" data-toggle="modal" data-target="#registermodal" data-dismiss="modal">REGISTER</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ login modal -->

    <!-- Register Modal -->
    <div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cust-mheader">
                    <h4 class="modal-title cust-mtitle">REGISTER</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times-circle circlem" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <form>
                                    <div class="input-group cust-inpgroup1 mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter User Name">
                                    </div>

                                    <div class="input-group cust-inpgroup1 mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-at" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="email" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Email ID">
                                    </div>

                                    <div class="input-group cust-inpgroup1 mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Mobile Number">
                                    </div>

                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Password">
                                    </div>

                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Confirm Password">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <div class="cust-logbtn">
                                    <button type="button" class="btn btn-primary cst-loginbtn">SUBMIT</button>
                                    <p>Already Register ?
                                        <span style="color: #ffd900;cursor: pointer;" data-toggle="modal" data-target="#loginmodal" data-dismiss="modal">LOGIN</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Register modal -->

    <!-- Forgot Password Modal -->
    <div class="modal fade" id="forgotpassmodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cust-mheader">
                    <h4 class="modal-title cust-mtitle2">FORGOT PASSWORD</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times-circle circlem" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <form>
                                    <div class="input-group cust-inpgroup1 mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="number" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Mobile Number">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <div class="cust-logbtn cust-sbmt">
                                    <button type="button" class="btn btn-primary cst-loginbtn" data-toggle="modal" data-target="#enterotpmodal" data-dismiss="modal">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Forgot Password -->

    <!-- Enter OTP Modal -->
    <div class="modal fade" id="enterotpmodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cust-mheader">
                    <h4 class="modal-title cust-mtitle3">ENTER OTP</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times-circle circlem" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <ul class="otp-box">
                                        <li>
                                            <input class="square" type="text">
                                        </li>
                                        <li>
                                            <input class="square" type="text">
                                        </li>
                                        <li>
                                            <input class="square" type="text">
                                        </li>
                                        <li>
                                            <input class="square" type="text">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="resend">
                                        <a href="#">Re-send OTP</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <div class="cust-logbtn cust-sbmt">
                                    <button type="button" class="btn btn-primary cst-loginbtn">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Enter OTP modal -->

    <!--Change Password Modal -->
    <div class="modal fade" id="changepassmodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cust-mheader">
                    <h4 class="modal-title cust-mtitle2">CHANGE PASSWORD</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times-circle circlem" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <form>
                                    <div class="input-group cust-inpgroup1 mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Old Password">
                                    </div>
                                    <div class="input-group cust-inpgroup1 mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="New Password">
                                    </div>
                                    <div class="input-group cust-inpgroup1 mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Confirm Password">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <div class="cust-logbtn cust-sbmt">
                                    <button type="button" class="btn btn-primary cst-loginbtn" data-toggle="modal" data-target="#enterotpmodal" data-dismiss="modal">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Change Password Modal -->

    <!--Choose Country Modal -->
    <div class="modal fade" id="choosecountrymodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog res-dailog" role="document">
            <div class="modal-content cust-modalcontent">
                <div class="modal-header cust-mheader">
                    <h4 class="modal-title cust-mtitle2">CHOOSE COUNTRY</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times-circle circlem" aria-hidden="true"></i>
                    </button>
                </div>
                <div id="triangle-up"></div>
                <div class="modal-body">
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <form>
                                    <div class="input-group cust-inpgroup1 mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-flag" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <select id="inputState" class="form-control">
                                            <option selected>Select Country</option>
                                            <option>India</option>
                                            <option>UAE</option>
                                            <option>USA</option>
                                            <option>UK</option>
                                        </select>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <div class="cust-logbtn cust-sbmt">
                                    <button type="button" class="btn btn-primary cst-loginbtn">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Choose Country Modal -->

    <!--Choose Language Modal -->
    <div class="modal fade" id="chooselanguagemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog res-dailog" role="document">
            <div class="modal-content cust-modalcontent2">
                <div class="modal-header cust-mheader">
                    <h4 class="modal-title cust-mtitle2">CHOOSE LANGAUAGE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times-circle circlem" aria-hidden="true"></i>
                    </button>
                </div>
                <div id="triangle-up"></div>
                <div class="modal-body">
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <form>
                                    <div class="input-group cust-inpgroup1 mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text cust-inptext-group">
                                                <i class="fa fa-globe" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <select id="inputState" class="form-control">
                                            <option selected>Select Language</option>
                                            <option>English</option>
                                            <option>Urdu</option>
                                        </select>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 col-md-12">
                                <div class="cust-logbtn cust-sbmt">
                                    <button type="button" class="btn btn-primary cst-loginbtn">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Choose Language Modal -->

     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>


    <!-- sticky navbar -->
    <script>
        $(document).ready(function () {
            // Custom 
            var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
                var stickyHeight = sticky.outerHeight();
                var stickyTop = stickyWrapper.offset().top;
                if (scrollElement.scrollTop() >= stickyTop) {
                    stickyWrapper.height(stickyHeight);
                    sticky.addClass("is-sticky");
                }
                else {
                    sticky.removeClass("is-sticky");
                    stickyWrapper.height('auto');
                }
            };

            // Find all data-toggle="sticky-onscroll" elements
            $('[data-toggle="sticky-onscroll"]').each(function () {
                var sticky = $(this);
                var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
                sticky.before(stickyWrapper);
                sticky.addClass('sticky');

                // Scroll & resize events
                $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
                    stickyToggle(sticky, stickyWrapper, $(this));
                });

                // On page load
                stickyToggle(sticky, stickyWrapper, $(window));
            });
        });
    </script>
    <!-- sticky navbar -->

    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        //  openDropdown.classList.remove('show');
                    }
                }
            }
        }

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
</html>