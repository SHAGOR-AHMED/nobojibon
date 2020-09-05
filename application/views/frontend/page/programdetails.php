

<div class="banner-area">
    <img alt="" src="<?= base_url('assets/frontend/');?>images/banner/in-7.png">
    <h1>
        <?php
            if(!empty($selected_review->photo)){     
                echo $selected_review->type_name;
            }else{
                echo "Nothing Found";
            }
        ?>
    </h1>
</div>

<section class="inner-area">
    <div class="container">
       <div class="inner-box">
            <h6>
                <?php 
                    if(!empty($selected_review->photo)){ ?>
                        
                        <img class="in-img" alt="" src="<?= base_url($selected_review->photo);?>">
                        <?= $selected_review->description;?>

                    <?php }else{ ?>

                        <div class="alert alert-block alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            Nothing Found Here.!!!
                        </div>
                <?php } ?>
            </h6>
        </div>
    </div>
</section>