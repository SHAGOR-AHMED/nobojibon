<!--Begin:Slider-->
<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
    <div class="carousel-inner" role="listbox">
            <?php
                $i=0;
                foreach($allBanner as $value){
                $i++;
                if($i==1){
                    $class = 'item active';
                }else{
                    $class = 'item';   
                }
            ?> 
            <div class="<?= $class; ?>">
                <img src="<?= base_url($value->photo);?>" alt="<?= $value->photo_title; ?>"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text slide_style_left">
                            <h2 data-animation="animated zoomInRight"><?= $value->photo_title; ?></h2>
                            <p data-animation="animated zoomInRight"><?= $value->description; ?></p>
                            <div class="btn-area">
                                <a href="<?= base_url('About-Us'); ?>" class="btn btn-default" data-animation="animated fadeInLeft">About Us</a>
                                <a href="<?= base_url('Contact-Us'); ?>" class="btn btn-primary" data-animation="animated fadeInRight">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        </div>
    <!-- Left Control -->
    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
	</a>
    <!-- Right Control -->
    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> <!-- End  bootstrap-touch-slider Slider -->

<!--End:Slider-->

<!----------Start About Us---------->
<section class="about-area">
    <div class="container">
        <?php
            foreach($about as $value){
        ?> 
        <div class="about-area-mid">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="about-cntn">
					<h6>A few words of About Us</h6>
					<h3><?= $value->photo_title; ?></h3>
					<p><?= $value->description; ?></p>
					<a href="<?= base_url('About-Us'); ?>" class="btn btn-about">Read More</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="image-box">
					<div class="box-upper">
						<img alt="" src="<?= base_url($value->photo);?>">
					</div>
				</div>
			</div>
		</div>
        <?php } ?>
    </div>
</section>

<section id="welcome_wrapper"><!--Begin: welcome_wrapper -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12">
                <div class="welcome">
                    <h2>Photo Album</h2>

                    <?php
                        foreach($galleryAlbum as $value){
                    ?>
                    <div class="wel_box" style="float:right; clear: left;padding: 10px;">
                        <img alt="" src="<?= base_url($value->photo);?>">
                        <div class="middle">
                            <a href="<?= base_url('Album-Image/'.$value->galbum_id);?>" class="text-gl"><?= $value->album_name; ?></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                <div class="latest_news">
                    <div class="news_title">
                        <h3><i class="fa fa-delicious"></i> News & Events</h3>
                        <div id="demo2" class="scroll-text">
                            <ul>
                                <?php
                                    foreach($NewsEvent as $value){
                                ?>
                                <li>
                                    <a href="<?= base_url('Details/'.$value->news_id);?>">
                                        <div class="news_section">
                                            <h2><i class="fa fa-calendar" aria-hidden="true"></i>  &nbsp;<?= $value->date; ?></h2>
                                            <p><?= $value->title; ?></p>
                                        </div>
                                    </a>
                                </li>
                               <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-category">
    <div class="container">
        <div class="row">
           	<div class="col-md-4 col-sm-4 col-xs-12">
                <div class="achieve">
                    <h2>Our Achievements</h2>
                    <img alt="" src="<?= base_url($acheivement->photo);?>">
                    <span class="middle">
                        <a href="<?= base_url('Welcome/Achievements'); ?>" class="text-gl"><?= $acheivement->photo_title?></a>
                    </span>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="programs">
                    <h2>Our Programs</h2>
                    <div id="myCarousel1" class="carousel slide caption-animate" data-ride="carousel" data-interval="1800">
                        <div class="carousel-inner" role="listbox">
                            <?php
                                $i=0;
                                foreach($program as $value){
                                    $i++;
                                    if($i==1){
                                        $class = 'item active';
                                    }else{
                                        $class = 'item';   
                                    }
                                ?> 
                                <a href="<?= base_url('Program-detail/'.$value->photo_id);?>" class="<?= $class; ?>">
                                    <img alt="" src="<?= base_url($value->photo);?>">
                                    <div class="slide-caption">
                                        <h6><?= $value->photo_title?></h6> 
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                        <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                            <i class="fa fa-backward" area-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                            <i class="fa fa-forward" area-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="category-row">
    <div class="container">
        <div class="header-stripe">
            <h2>Our Donors</h2>
            <img alt="" src="<?= base_url('assets/frontend/');?>images/interface/cute.png">
        </div>
        <div class="jcarousel-wrapper">
            <div class="jcarousel" data-jcarousel="true">
                <ul style="left: 0px; top: 0px;">
                    <?php
                        foreach($donar as $value){
                    ?>
                    <li>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0 10px !important">
                            <a href="#" class="best-box">
                                <img src="<?= base_url($value->photo);?>" alt="">
                            </a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <a href="#" class="jcarousel-control-prev" data-jcarouselcontrol="true"><i class="fa fa-arrow-left" area-hidden="true"></i></a>
            <a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true"><i class="fa fa-arrow-right" area-hidden="true"></i></a>
        </div>
    </div>
</section>