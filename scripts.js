<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });

    
    </script>

    <script>
        $(document).ready(function () {
            $(".cust-card").mouseover(function () {
                $(".cust-cardfooter").show();
            });
        $(".cust-card").mouseleave(function () {
            $(".cust-cardfooter").hide();
        });

            $(".cust-card2").mouseover(function () {
            $(".cust-cardfooter2").show();
        });
            $(".cust-card2").mouseleave(function () {
            $(".cust-cardfooter2").hide();
        });

            $(".cust-card3").mouseover(function () {
            $(".cust-cardfooter3").show();
        });
            $(".cust-card3").mouseleave(function () {
            $(".cust-cardfooter3").hide();
        });

            $(".cust-card4").mouseover(function () {
            $(".cust-cardfooter4").show();
        });
            $(".cust-card4").mouseleave(function () {
            $(".cust-cardfooter4").hide();
        });


            $(".cust-card5").mouseover(function () {
            $(".cust-cardfooter5").show();
        });
            $(".cust-card5").mouseleave(function () {
            $(".cust-cardfooter5").hide();
        });

            $(".cust-card6").mouseover(function () {
            $(".cust-cardfooter6").show();
        });
            $(".cust-card6").mouseleave(function () {
            $(".cust-cardfooter6").hide();
        });

            $(".cust-card7").mouseover(function () {
            $(".cust-cardfooter7").show();
        });
            $(".cust-card7").mouseleave(function () {
            $(".cust-cardfooter7").hide();
        });

            $(".cust-card8").mouseover(function () {
            $(".cust-cardfooter8").show();
        });
            $(".cust-card8").mouseleave(function () {
            $(".cust-cardfooter8").hide();
        });
    });
    </script>

    <!--sticky navbar-- >
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