
<section class="bb">
    <h1>Contact Us</h1>
</section>

<section class="contact-area-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="text-field">
                    <h3><i class="fa fa-hand-o-right"></i> Office Adress:</h3>
                    <div style="height:15px; width:100%; float:left"></div>
                    <div class="map_box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.555828800309!2d90.41813491550324!3d23.72755069556464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85a9b075799%3A0x2d780bf4764f16c3!2sAmin%20Court%2C%20Motijheel%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1599649681371!5m2!1sen!2sbd" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <p>
                        <?= $contactus->head_office; ?>
                    </p>
                </div>
                <!-- End : conatact_box -->
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="text-field">
                    <h3><i class="fa fa-comments-o" aria-hidden="true"></i> Get a free quote!</h3>
                    <?php 
                        if(!empty($message)){
                    ?>
                        <div class="alert alert-block alert-success">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>

                            <i class="ace-icon fa fa-check green"></i>
                            <?php echo $message; ?>
                        </div>

                    <?php } ?>
                    <div style="height:15px; width:100%; float:left"></div>
                    <form method="post" action="<?= base_url('Mundane/sendContactMail');?>" class="form-horizontal" style="margin-top:20px;">
                        <input type="text" class="form-control" placeholder="Enter name" name="name">
                        <input type="text" class="form-control" placeholder="Enter phone" name="phone">
                        <input type="text" class="form-control" placeholder="Enter Subject" name="subject">
                        <input type="email" class="form-control" placeholder="Enter e-mail" name="email">
                        <textarea rows="3" cols="3" class="form-control" name="comments" placeholder="Type Message" spellcheck="false"></textarea><br>
                        <input type="submit" name="submit" class="btn btn-primary" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>