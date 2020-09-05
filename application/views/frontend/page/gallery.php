<div class="banner-area">
    <img alt="" src="<?= base_url('assets/frontend/');?>images/banner/in-3.png">
    <h1>Gallery</h1>
</div>

<section class="gllry-bdy">
    <div class="container">
        <div class="header-blog">
            <h2><i class="fa fa-angle-double-right"></i> Images Album Categories</h2>
        </div>
        <?php
            foreach($galleryAlbum as $value){
        ?> 
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive" src="<?= base_url($value->photo);?>" alt="">
                    <div class="overlay">
                        <a class="info" href="<?= base_url('Album-Image/'.$value->galbum_id);?>">Click here</a>
                    </div>
                </div>
                <div class="hvr-wrt">
                    <h4><?= $value->album_name; ?></h4>
                </div>
            </div>
        <?php } ?>
    </div>
</section>