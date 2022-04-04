<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<!-- San pham noi bat -->
<div class="banner-fls">
    <div class="container">
        <div class="img-wrap">
            <img src="assets/images/flashseo.png" alt="">
        </div>
        <div class="autoplay-hot-products auto-height">
            <?php foreach ($popularproduct as $k => $v) {
            ?>
                <div class="cover-content pos-relative">
                    <a class="image" href="<?= $v['tenkhongdauvi'] ?>">
                        <span><img onerror="this.src='<?= THUMBS ?>/380x270x2/assets/images/noimage.png';" src="<?= THUMBS ?>/380x270x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" /></span></a>
                    <div class="icon-hot">Hot</div>
                    <a href="<?php echo $v['tenkhongdauvi'] ?>">
                        <h6><?= $v["tenvi"] ?></h6>
                    </a>
                    <div class="price">
                        <div>
                            <p><?= $func->convertPrice($v['gia']) ?></p>
                            <p class="price-discount"><?= $func->convertPrice($v['giamoi']) ?></p>
                        </div>
                    </div>
                    <a class="add" href="lien-he"><span>Liên hệ</span></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- San pham moi nhat -->
<div class="new-product">
    <div class="fixwidth">
        <div class="tabbed-content">
            <h3>Sản phẩm mới nhất</h3>
        </div>
        <div class="autoplay-new-products auto-height">
            <?php foreach ($newproduct as $k => $v) {
            ?>
                <div class="cover-content pos-relative">
                    <a class="image" href="<?= $v['tenkhongdauvi'] ?>">
                        <span><img onerror="this.src='<?= THUMBS ?>/380x270x2/assets/images/noimage.png';" src="<?= THUMBS ?>/380x270x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" /></span></a>
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
                        <a class="btn-add" href="<?php echo $v[$slg] ?>" title="Máy lọc nước Chungho  NEW 700 ICE" tabindex="-1">Chi tiết</a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- <div class="row list-product">
            <?php
            foreach ($newproduct as $key => $value) {
            ?>
                <div class="col-2 cover-content">

                    <a href="<?= $value[$sluglang] ?>" class="image">
                        <img onerror="this.src='<?= THUMBS ?>/380x270x2/assets/images/noimage.png';" windown.location.href="<?php $value[$sluglang] ?>" src="/upload/product/<?= $value['photo'] ?>" alt="">
                    </a>
                    <div class="info-wrap">
                        <div class="full-height">
                            <a href="<?php echo $value['tenkhongdauvi'] ?>">
                                <h6><?= $value["tenvi"] ?></h6>
                            </a>
                            <?php if ($value['motanganvi']) { ?>
                                <div class="product-des-wrap">
                                    <p><?php echo htmlspecialchars_decode($value['motanganvi']) ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="price">
                            <div>
                                <p><?= $func->convertPrice($value['gia']) ?></p>
                                <p class="price-discount"><?= $func->convertPrice($value['giamoi']) ?></p>
                            </div>
                            <div class="discount"><?= $value['giakm'] ?>%</div>
                        </div>
                        <a class="buy" href="lien-he">Liên hệ</a>
                    </div>
                </div>
            <?php }  ?>


        </div> -->
    </div>
</div>
<!-- San pham noi bat -->
<div class="new-product">
    <div class="fixwidth">
        <div class="tabbed-content">
            <h3>Sản phẩm phổ biến</h3>
        </div>
        <div class="row list-product">
            <?php
            foreach ($popularproduct as $key => $value) {
            ?>
                <div class="col-2 cover-content">
                    <div class="product-img">
                        <a href="<?php $value[$sluglang] ?>" class="image">
                            <img onerror="this.src='<?= THUMBS ?>/380x270x2/assets/images/noimage.png';" windown.location.href="<?php $value[$sluglang] ?>" src="/upload/product/<?= $value['photo'] ?>" alt="">
                        </a>
                        <img windown.location.href="<?php $value[$sluglang] ?>" class="img-tag" src="/upload/product/ghe-xanh-loai-1_10de2b42-6e90-4228-a574-025c9fe5961d-removebg-preview.png" alt="">
                    </div>
                    <div class="info-wrap">
                        <div class="full-height">
                            <a href="<?= $value[$sluglang] ?>">
                                <h6><?= $value["tenvi"] ?></h6>
                            </a>
                            <?php if ($value['motanganvi']) { ?>
                                <div class="product-des-wrap">
                                    <p><?php echo htmlspecialchars_decode($value['motanganvi']) ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="price">
                            <div>
                                <p><?= $func->convertPrice($value['gia']) ?></p>
                                <p class="price-discount"><?= $func->convertPrice($value['giamoi']) ?></p>
                            </div>
                            <div class="discount"><?= $value['giakm'] ?>%</div>
                        </div>
                        <a class="buy" href="lien-he">Liên hệ</a>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>
</div>
<!-- Danh muc -->
<div class="category-block">
    <div class="tabbed-content">
        <h3>Album hình ảnh</h3>
    </div>
    <div class="fixwidth">

        <div class="row autoplay-product-list">
            <?php foreach ($album as $key => $value) {
            ?>
                <div class="cover-content">
                    <a class="image" href="#">
                        <?php if (isset($value['photo'])) { ?>
                            <div style="
                            background-image: url('<?= THUMBS ?>/200x100x1/<?= UPLOAD_PHOTO_L . $value['photo'] ?>');
                            background-size: cover;
                            height: 230px;
                            background-repeat: no-repeat;
                            background-position: top center;
                            ">
                            </div>
                        <?php } ?>
                    </a>

                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Banner tieu chi -->
<div class="banner-tieu-chi">
    <div class="fixwidth">
        <div class="row">
            <?php foreach ($criteria_list as $key => $value) { ?>

                <div class="col-md-3">
                    <div class="link-tieu-chi">
                        <img onerror="this.src='<?= THUMBS ?>/380x270x2/assets/images/noimage.png';" src="/upload/photo/<?= $value['photo'] ?>" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<!-- <div class="box-thongke-container" id="background-thong-ke">
    <div class="fixwidth" id="background-tieuchi">
        <div class="title-tk clearfix">XÂY DỰNG NHÀ XANH VIỆT NAM</div>
        <div id="counter" class="loadkhung_thongke_index">
            <?php foreach ($thongke as $k => $v) { ?>
            <div class="item-thongke">
                <div class="counter-value" data-count="<?= $v['solieu'] ?>">0</div>
                <div class="counter-name"><?= $v['ten' . $lang] ?></div>
                <div class="counter-name"><img
                            onerror="this.src='<?= THUMBS ?>/710x300x2/assets/images/noimage.png';"
                            src="<?= THUMBS ?>/710x300x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>"
                            title="<?= $v['ten' . $lang] ?>" /></div>                
            </div>
            <?php } ?>
        </div>
    </div>
</div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha512-k2WPPrSgRFI6cTaHHhJdc8kAXaRM4JBFEDo1pPGGlYiOyv4vnA0Pp0G5XMYYxgAPmtmv/IIaQA6n5fLAyJaFMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>