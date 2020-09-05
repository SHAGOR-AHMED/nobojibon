

<div class="banner-area">
    <img alt="" src="<?= base_url('assets/frontend/'); ?>images/banner/in-6.png">
    <h1>Useful Links</h1>
</div>

<section class="inner-area">
    <div class="container">
        <div class="inner-box">
            <div class="link-box">
                <div class="col-md-6 col-sm-6 col-xs-12">
                     <?php
                        foreach($allUsefulLink as $value){
                    ?> 
                        <a target="blank" href="<?= $value->url;?>"><i class="fa fa-share"></i> <?= $value->link_title;?></a>
                    <?php } ?>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                </div>
            </div>
        </div>
    </div>
</section>