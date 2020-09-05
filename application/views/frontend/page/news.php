
<section class="inner-area">
    <div class="container">
       <div class="inner-box">
            <h4><?= $news_info->title; ?></h4>
            <p><?= $news_info->date; ?></p>
            <h6>
                <img class="in-img" alt="" src="<?= base_url($news_info->photo);?>">
                <?= $news_info->description; ?><br><br>
            </h6>
        </div>
    </div>
</section>