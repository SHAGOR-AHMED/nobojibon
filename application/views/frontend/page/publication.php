
<div class="banner-area">
    <img alt="" src="images/banner/in-2.png">
    <h1>Publication</h1>
</div>

<section class="inner-area">
    <div class="container">
    	<?php
            foreach($publication as $value){
        ?> 
        <div class="inner-box">
            <embed src="<?= base_url($value->photo);?>" type="application/pdf" width="100%" height="800px"/>
        </div>
        <?php } ?>
    </div>
</section>