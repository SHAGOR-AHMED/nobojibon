<section class="bb">
    <h1>Our Products</h1>
</section>

<section class="inner-page-txt">
    <div class="container">
        <div class="per-section" id="1">
            <?php if(!empty($selected_product)){ ?>
                <div class="details-box">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <h1><?= $selected_product->title; ?></h1>
                        <p><?= $selected_product->description; ?></p>
                        
                        <a class="d-pdf" target="blank" href="<?= base_url($selected_product->pdf_file);?>">
                            <img src="<?= base_url('assets/frontend/'); ?>images/element/pdf.png">
                        </a>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="inner-image">
                            <img src="<?= base_url($selected_product->photo);?>" style="width: 100%;">
                        </div>
                    </div>
                </div>
            <?php }else{ ?>
                <div class="alert alert-block alert-danger">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <i class="ace-icon fa fa-check green"></i>
                    Upps!!! No Data Found
                </div>
            <?php } ?>
        </div>
    </div>
</section>