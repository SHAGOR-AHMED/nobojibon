<div class="footer-area">
    <div class="container">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="logo-box">
                <a href="index.php"><img class="img-responsive" src="images/element/logo-2.png"/></a>
                <div class="social-media">
                    <h5>Find Us On:</h5>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i> </a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="shortlink-box">
                <h4>Quick Links</h4>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                        <li><a href="about.php"><i class="fa fa-angle-right" aria-hidden="true"></i>About Us</a></li>
                        <li><a href="product.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Products</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul>
                        <li><a href="principal.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Our Principal</a></li>
                        <li><a href="support.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Support Team</a></li>
                        <li><a href="certificates.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Certificates</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="contact-box">
                <h4>Contact Us</h4>
                <ul>
                    <h5><i class="fa fa-phone" aria-hidden="true"></i>+880 2 9554010, 9550046, <br>+880 1713452863</h5>
                    <h5><i class="fa fa-envelope-o" aria-hidden="true"></i>info@mundanechem.com</h5>
                    <h5><i class="fa fa-map-marker" aria-hidden="true"></i>62-63, Motijheel C/A, Amin Court Bhaban, Level-7, Suite-705, Dhaka-1000,<br> Bangladesh.</h5>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <p>Allright Reserved By: 2020 @ MUNDANE CHEM.</p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <p class="pull-right">
                Design & Develop by : <a href="#">WAN IT Ltd.</a>
            </p>
        </div>
    </div>
</div>

<div class="scroll-top-wrapper ">
  <span class="scroll-top-inner">
    <i class="fa fa-2x fa-arrow-circle-up"></i>
  </span>
</div>

<!-----------------------------------------------------Begin: Javascript------------------------------------------------------------------------>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slider.js"></script>

<!------For Active Menu------>
<script>
$(document).ready(function() {
 var url = window.location.href;
 url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
 url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
 url = url.substr(url.lastIndexOf("/") + 1);
 if(url == ''){
 url = 'index.php';
 }
 $('.navigation li').each(function(){
  var href = $(this).find('a').attr('href');
  if(url == href){
   $(this).addClass('active');
  }
 });
});
</script>

<script>
    $(document).ready(function(){
        $(function(){
            $(document).on( 'scroll', function(){
                if ($(window).scrollTop() > 100) {
                    $('.scroll-top-wrapper').addClass('show');
                } else {
                    $('.scroll-top-wrapper').removeClass('show');
                }
            });
            $('.scroll-top-wrapper').on('click', scrollToTop);
        });
        function scrollToTop() {
            verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
            element = $('body');
            offset = element.offset();
            offsetTop = offset.top;
            $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
        }
    });
</script>

<script src="js/jquery.flexisel.js" type="text/javascript"></script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo3").flexisel({
            visibleItems:3,
            animationSpeed: 800,
            autoPlay: true,
            autoPlaySpeed: 4000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function(){
        //FANCYBOX
        //https://github.com/fancyapps/fancyBox
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>


</body>
</html>


