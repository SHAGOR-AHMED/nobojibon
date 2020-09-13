<section class="bb">
    <h1>Our Principals</h1>
</section>

<section class="concern-area">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 col-sm-9 col-xs-12">
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