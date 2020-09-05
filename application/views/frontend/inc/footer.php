<section class="footer-area">
    <div class="container">
        <div class="footer-middle-area">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="content-footer">
                    <h4>Shortlink</h4>
                    <li><a href="<?= base_url('NoboJibon'); ?>">Home</a></li>
                    <li><a href="<?= base_url('About-Us'); ?>">About Us</a></li>
                    <li><a href="<?= base_url('Gallery'); ?>">Gallery</a></li>
                    <li><a href="<?= base_url('Our-Partner'); ?>">Partner</a></li>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="content-footer">
                    <h4>Information</h4>
                    <li><a href="<?= base_url('Our-Gallery'); ?>">Gallery</a></li>
                    <li><a href="<?= base_url('Publication'); ?>">Publication</a></li>
                    <li><a href="<?= base_url('Achievements'); ?>">Achievements</a></li>
                    <li><a href="<?= base_url('UsefulLink'); ?>">Useful Links</a></li>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="content-footer">
                    <h4>Contact Us</h4>
                    <li>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i><?= $fcontact->location;?></p>
                    </li>
                    <li>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> <?= $fcontact->email;?></p>
                    </li>
                    <li>
                        <p><i class="fa fa-phone" aria-hidden="true"></i><?= $fcontact->phone;?></p>
                    </li>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="content-footer">
                    <a class="donate" href="<?= base_url('Donate'); ?>">Donate <br>Us</a>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h5>Copyright © 2020 <a target="blank" href="<?= base_url('NoboJibon'); ?>"><b>NOBO JIBON</b></a>. All rights reserved I Design &amp; Developed By: <a target="blank" href="http://wanitltd.com/"><b>WAN IT Ltd.</b></a></h5>
            </div>
        </div>
    </div>
</section>


<!------------Begin: Javascript---------->
<script src="<?= base_url('assets/frontend/');?>js/jquery-2.1.1.js"></script>
<script src="<?= base_url('assets/frontend/');?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/frontend/');?>js/slider.js"></script>
<script src="<?= base_url('assets/frontend/');?>js/slider-2.js"></script>

<!--------For Active Menu-------->
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

<!-------news heading tricker------->
<script src="<?= base_url('assets/frontend/');?>js/jquery.scrollbox.js"></script>
<script>
    $(function () {
        $('#demo2').scrollbox({
            linear: true,
            step: 1,
            delay: 0,
            speed: 40
        });
    });
</script>

<!---------Gallery--------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>

</body>
</html>

