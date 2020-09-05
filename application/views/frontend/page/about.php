<div class="banner-area">
    <img alt="" src="images/banner/in-1.png">
    <h1>About Us</h1>
</div>

<section class="inner-area">
    <div class="container">
       <div class="inner-box">
            <h6>
                <?php foreach($aboutUs as $value){ 

                    echo $value->description;

                } ?>
            </h6>
        </div>
    </div>
</section>