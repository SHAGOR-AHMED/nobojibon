<section class="slider-area">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <?php
            $i=0;
            foreach($allBanner as $value){
            if($i==0){
                $class = 'active';
            }else{
                $class = '';   
            }
           $i++;
        ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?= $class; ?>"></li>
        <?php } ?>
        </ol>
        <div class="carousel-inner">
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
                <img src="<?= base_url($value->photo);?>">
            </div>
            <?php } ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-backward" area-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-forward" area-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="about-short">
    <div class="container slideanim">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="row">
                    <h4>Welcome to <br>MUNDANE CHEM</h4>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
            <p>
                We introduce ourselves as a reputable Sales Agent as well as a Trading Company in Asia
                headquartered in Dhaka, Bangladesh, dealing with PVC Stabilizer, PVC Resin, Calcium Carbonate, UPVC Fittings Compound, Stearic Acid, Paraffin Wax, PP, LDPE, GPPS, HIPS, LLDPE(Rotomoulding) and other plastic related products. We invite
                you to know more about us and see why we are different in the indenting business..... 
                <a href="<?= base_url('About-Us'); ?>">Read More</a>
            </p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <h4 style="text-align:center">Member Of:</h4>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <img src="<?= base_url('assets/frontend/')?>images/element/member.png" alt="4">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <img style="margin-top:40px" src="<?= base_url('assets/frontend/')?>images/element/dhaka.png" alt="4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ex-area">
    <div class="container slideanim">
        <div class="header-blog">
            <h2>Our Products</h2>
            <img src="<?= base_url('assets/frontend/')?>images/element/cuty.png" alt="1">
        </div>
        <div class="row">
            <div class="jcarousel-wrapper">
                <div class="jcarousel" data-jcarousel="true">
                    <ul style="left: 0px; top: 0px;">
                        <?php
                            foreach($allcategory as $value){
                        ?>
                        <li style="width: 384px;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <a href="<?= base_url('Product-Details/'.$value->type_id);?>" class="ex-box">
                                    <img alt="" src="<?= base_url($value->photo); ?>">
                                    <div class="ex-textarea">
                                        <h2><?= $value->type_name; ?></h2>
                                    </div>
                                </a>  
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <a href="#" class="jcarousel-control-prev" data-jcarouselcontrol="true"><i class="fa fa-angle-double-left" area-hidden="true"></i></a>
                <a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true"><i class="fa fa-angle-double-right" area-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>


<section class="concern-area">
    <div class="container slideanim">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="row">
                    <h1>Our <br><span>Principals</span></h1>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="client-area">
                    <ul id="flexiselDemo3" style=" overflow:hidden; height:104px">
                        <?php
                            foreach($pancipals as $value){
                        ?>
                        <li>
                            <a class="client-box"  href="http://www.venusjewelers.com/" target="_blank">
                                <div class="client-box-middle">
                                    <img alt="" src="<?= base_url($value->photo);?>">
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="middle-banner-area">
    <div class="container">
        <h4>“We are supplying any kind of products to reach by your need. The Firstly most widely import services in the world.”</h4>
        <a target="blank" href="#" class="btn btn-brochure">Contact Us</a>
    </div>
</section> -->

<section class="customer-area">
    <div class="container">
        <div class="header-blog">
            <!--<h6>Our Expert Support Team</h6>-->
            <h2 style="color:#222">Support Team</h2>
            <img src="<?= base_url('assets/frontend/')?>images/element/cuty-1.png" alt="1">
        </div>
        <?php
            foreach($team as $value){
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