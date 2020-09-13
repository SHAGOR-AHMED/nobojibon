<section class="bb">
    <h1>About Us</h1>
</section>

<section class="inner-page-area">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="inner-page-txt">
                <?php
                    foreach ($aboutUs as $value) {
                        echo $value->description;
                    }
                ?>
            </div>
        </div>
    </div>
</section>