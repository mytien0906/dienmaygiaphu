<style>
    .slideshow a img {
        height: 350px !important;
    }

    .slick-slide {
        height: auto;
    }

    @media screen and (max-width:500px) {
        .slideshow a img {
            height: auto !important;
        }
    }
</style>
<div class="tabbed-content">
    <h3>
        <?= (@$title_cat != '') ? $title_cat : @$title_crumb ?><div class="tabbed-content">
    </h3>
</div>
<?php if (count($news) > 0) {
?>
    <div class="grid-2-col">
        <?php foreach ($news as $k => $v) { ?>
            <div class="news">
                <a class="text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/320x240x1/assets/images/noimage.png';" src="<?= THUMBS ?>/320x240x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>">
                </a>
                <div class="info-news">
                    <h3 class="name-news"><a class="text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['ten' . $lang] ?>"><?= $v['ten' . $lang] ?></a></h3>
                    <p class="time-news"><i class="fas fa-calendar-alt"></i>: <?= date("d/m/Y h:i A", $v['ngaytao']) ?></p>
                    <div class="desc-news text-split"><?= htmlspecialchars_decode($v['noidung' . $lang]) ?></div>
                </div>
                <a href="<?=$v[$sluglang]?>" class="btn-link">Xem thêm <i class="fas fa-chevron-double-right"></i></a>
            </div>
        <?php } ?>

        <div class="clear"></div>
    </div>
        <div cladss="paging-product" style="margin:20px"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
    <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    <?php } ?>
    <!-- <div class="alert alert-warning" role="alert">
        <strong id="alert_kq"></strong>
    </div> -->

    </div>
    <?php if ($noidung_pagpe != '') { ?>
        <div class="noidung_page">
            <div class="meta-toc">
                <div class="box-readmore">
                    <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
                </div>
            </div>
            <div id="toc-content"><?= htmlspecialchars_decode($noidung_page) ?></div>
        </div>
    <?php } ?>