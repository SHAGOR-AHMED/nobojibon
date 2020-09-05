
<section class="inner-area">
    <div class="container">
       <div class="inner-box">
            <h4><?= $programDetails->photo_title; ?></h4>
            <p><?= $programDetails->created_date; ?></p>
            <h6>
                <img class="in-img" alt="" src="<?= base_url($programDetails->photo);?>">
                <?= $programDetails->description; ?><br><br>
            </h6>
        </div>
    </div>
</section>