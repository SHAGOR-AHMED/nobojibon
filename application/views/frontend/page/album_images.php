
<div class="banner-area">
    <img alt="" src="<?= base_url('assets/frontend/');?>images/banner/in-3.png">
    <h1>Album Photos</h1>
</div>

<section class="inner-area">
    <div class="container">
        <div class="inner-box">
            <?php
                if(!empty($all_albumImages)){
                    foreach($all_albumImages as $value){ ?>

                        <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
                            <div class="gal_details_box">
                                <a class="thumbnail fancybox" rel="ligthbox" href="<?= base_url($value->photo);?>">
                                    <img class="img-responsive" alt="" src="<?= base_url($value->photo);?>">
                                </a>
                            </div>
                        </div>

                    <?php } ?>

            <?php }else{?>

                <div class="alert alert-block alert-danger">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    Nothing Found.!!!
                </div>

            <?php } ?>
        </div>
    </div>
</section>