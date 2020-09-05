<div class="banner-area">
    <img alt="" src="<?= base_url('assets/frontend/');?>images/banner/in-4.png">
    <h1>Our Partners</h1>
</div>

<section class="inner-area">
    <div class="container">
       <div class="inner-box">
            <div class="partner-box">
                <div class="header-blog">
                    <h2><i class="fa fa-angle-double-right"></i> Our Partners</h2>
                </div>
                <?php
                    foreach($allPartner as $value){
                ?> 
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href=""><img alt="" src="<?= base_url($value->photo);?>"></a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>