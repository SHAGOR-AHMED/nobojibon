
<section class="bb">
    <h1>Our Certificates</h1>
</section>

<section class="customer-area">
    <div class="container">
        <?php
            foreach($certificate as $value){
        ?>
        <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
            <div class="gal_details_box">
                <a class="thumbnail fancybox" rel="ligthbox" href="<?= base_url($value->photo);?>">
                    <img class="img-responsive" alt="" src="<?= base_url($value->photo);?>">
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
</section>