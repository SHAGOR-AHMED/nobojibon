

<div class="banner-area">
    <img alt="" src="<?= base_url('assets/frontend/'); ?>images/banner/in-7.png">
    <h1>Donate Us</h1>
</div>

<section class="inner-area">
    <div class="container">
       <div class="inner-box">
	        <div class="col-md-12 col-sm-12 col-xs-12">
	            <div class="contact-text donate">
	                <h2 style="padding-bottom:10px; color:#fff; font-weight:600">Fill up the form to donate us:</h2>
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
                    <div class="form-group">
                        <form method="post" action="<?= base_url('Welcome/sendDonateMail');?>" class="form-horizontal" style="margin-top:20px;">
                            <input class="form-control" id="name" name="name" placeholder="Enter Name">
                            <input class="form-control" id="address" name="address" placeholder="Enter Address">
                            <input class="form-control" id="city" name="city" placeholder="Enter Your City">
                            <input class="form-control" id="state" name="state" placeholder="City State">
                            <input class="form-control" id="zip" name="zip" placeholder="Zip Code">
                            <input class="form-control" id="from_email" name="from_email" placeholder="Email Address">
                            <input class="form-control" id="subject" name="subject" placeholder="Email Subject">
                            <input class="form-control" id="phone" name="phone" placeholder="Phone Number">
                            <textarea rows="3" cols="3" class="form-control" name="comment" placeholder="Enter Comments"></textarea>
                            <button type="submit" class="btn btn-submit">Submit</button>
                        </form>
                    </div>
	             </div>  
	         </div>
        </div>
    </div>
</section>