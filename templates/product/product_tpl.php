<style>
    .slideshow a img {
        height: 350px !important;
    }
    .slick-slide{height: auto;}
</style>
<div class="tabbed-content">
    <h3>
        <?= (@$title_cat != '') ? $title_cat : @$title_crumb ?>
    </h3>
</div>
<div class="content-main w-clear">
    <?php if (isset($product) && count($product) > 0) { ?>
        <div class="row grid-5-col">
            <?php foreach ($product as $k => $v) { ?>
                <div class="cover-content pos-relative">
                    <a class="image" href="<?= $v['tenkhongdauvi'] ?>"><span><img onerror="this.src='<?= THUMBS ?>/380x270x2/assets/images/noimage.png';" src="<?= THUMBS ?>/380x270x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" /></span></a>
                    <a href="<?php echo $v['tenkhongdauvi'] ?>">
                        <h6><?= $v["tenvi"] ?></h6>
                    </a>
                    <div class="price">
                        <div>
                            <p><?= $func->convertPrice($v['gia']) ?></p>
                            <p class="price-discount"><?= $func->convertPrice($v['giamoi']) ?></p>
                        </div>
                    </div>
                    <div class="info_btn">
                        <a class="btn-add btn-add-to-cart" data-option="muahang" data-id="233" title="Máy lọc nước Chungho  NEW 700 ICE" tabindex="-1">Đặt hàng</a>
                        <a class="btn-add" href="<?php echo $v[$sluglang] ?>" title="Máy lọc nước Chungho  NEW 700 ICE" tabindex="-1">Chi tiết</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
</div>
<!-- <?php if ($noidung_page != '') { ?>
<div class="noidung_page_product">
    <div class="meta-toc">
        <div class="box-readmore">
            <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
        </div>
    </div>
    <div id="toc-content"><?= htmlspecialchars_decode($noidung_page) ?></div>
</div>
<?php } ?> -->