<style>
    .slideshow a img {
        height: 350px !important;
    }

    .slick-slide {
        height: auto;
    }
</style>
<link rel="stylesheet" href="assets/magiczoomplus/magiczoomplus.css">
<div class="fixwidth">
    <div class="wrap_right_detail">
        <div class="grid-pro-detail w-clear">
            <div class="left-pro-detail w-clear">
                <?php if ($hinhanhsp && count($hinhanhsp) > 0) { ?>
                    <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: on; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $hinhanhsp[0]['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/540x540x2/assets/images/noimage.png';" src="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $hinhanhsp[0]['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>"></a>
                    <div class="gallery-thumb-pro">
                        <p class="control-carousel prev-carousel prev-thumb-pro transition"><i class="fas fa-chevron-left"></i></p>
                        <div class="owl-carousel owl-theme owl-thumb-pro">
                            <?php foreach ($hinhanhsp as $v) { ?>
                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>">
                                    <img onerror="this.src='<?= THUMBS ?>/540x540x2/assets/images/noimage.png';" src="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>">
                                </a>
                            <?php } ?>
                        </div>
                        <p class="control-carousel next-carousel next-thumb-pro transition"><i class="fas fa-chevron-right"></i></p>
                    </div>
                <?php } else { ?>
                    <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: on; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/540x540x2/assets/images/noimage.png';" src="<?= THUMBS ?>/760x540x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>"></a>

                <?php } ?>
                <!--  -->
            </div>

            <div class="right-pro-detail w-clear">
                <div class="wrap">
                    <p class="title-pro-detail"><?= $row_detail['ten' . $lang] ?></p>
                    <!-- <div class="social-plugin social-plugin-pro-detail w-clear">
                        <div class="addthis_inline_share_toolbox_qj48"></div>
                        <div class="zalo-share-button" data-href="<?= $func->getCurrentPageURL() ?>" data-oaid="<?= ($optsetting['oaidzalo'] != '') ? $optsetting['oaidzalo'] : '579745863508352884' ?>" data-layout="1" data-color="blue" data-customize=false></div>
                    </div> -->
                </div>
                <ul class="attr-pro-detail cover-content">
                    <li class="w-clear">
                        <label class="attr-label-pro-detail">Mã sản phẩm :</label>
                        <div class="attr-content-pro-detail"><?= (isset($row_detail['masp']) && $row_detail['masp'] != '') ? $row_detail['masp'] : 0 ?></div>
                    </li>

                    <li class="w-clear">
                        <label class="attr-label-pro-detail">Giá bán:</label>
                        <div class="attr-content-pro-detail">
                            <span class="price-new-pro-detail"><?= $func->convertPrice($row_detail['giamoi']) ?></span>
                        </div>
                    </li>
                    <li class="w-clear">
                        <label class="attr-label-pro-detail">Giá gốc:</label>
                        <div class="attr-content-pro-detail">
                            <span class="price-old-pro-detail"><?= $func->convertPrice($row_detail['gia']) ?></span>
                            <span class="price-sale-pro-detail">(Sale: <?= $row_detail['giakm'] ?> %)</span>
                        </div>
                    </li>

                    <li class="w-clear">
                        <label class="attr-label-pro-detail"><?= luotxem ?>:</label>
                        <div class="attr-content-pro-detail"><?= $row_detail['luotxem'] ?></div>
                    </li>
                    <li class="w-clear">
                        <?php if (isset($row_detail['mota' . $lang]) && $row_detail['mota' . $lang] != '') { ?>
                            <div class="attr-label-pro-detail"><?= htmlspecialchars_decode($row_detail['mota' . $lang])  ?></div>

                        <?php }  ?>
                    </li>
                    <li class="w-clear">
                        <label class="attr-label-pro-detail">Số lượng:</label>
                        <div class="attr-content-pro-detail">
                            <div class="quantity-pro-detail">
                                <button type="button" class="quantity-minus-pro-detail" data-action="minus">-</button>
                                <input type="text" id="quantity" pattern="[1-9]{10}" value="1">
                                <button type="button" class="quantity-plus-pro-detail" data-action="plus">+</button>
                            </div>
                        </div>
                    </li>
                    <li class="w-clear border-top-0 btn-add-cart-wrap">
                        <a data-toggle="modal" class="muangay1 addcart" data-action="addnow" data-id="<?= $row_detail['id'] ?>" data-name="<?= $row_detail['tenvi'] ?>" data-gia="<?= $func->format_money($row_detail['gia']) ?>" href="#popup-detail">
                            <!-- <i class="fal fa-cart-plus"></i>  -->
                            Thêm vào giỏ
                        </a>
                        <a class="muangay2 addcart" data-action="buynow" data-id="<?= $row_detail['id'] ?>" data-name="<?= $row_detail['tenvi'] ?>" data-gia="<?= $func->format_money($row_detail['gia']) ?>">
                            <!-- <i class="fal fa-shopping-cart"></i> -->
                            Mua ngay
                        </a>
                    </li>
                </ul>

            </div>
            <div class="clear"></div>
        </div>
        <div class="tabs-pro-detail">
            <ul class="ul-tabs-pro-detail w-clear">
                <li class="active transition" data-tabs="info-pro-detail">Thông tin chi tiết</li>
                <!-- <li class="transition" data-tabs="commentfb-pro-detail"><?= binhluan ?></li> -->
            </ul>
            <div class="content-tabs-pro-detail info-pro-detail active"><?= (isset($row_detail['noidung' . $lang]) && $row_detail['noidung' . $lang] != '') ? htmlspecialchars_decode($row_detail['noidung' . $lang]) : '' ?></div>
            <!-- <div class="content-tabs-pro-detail commentfb-pro-detail">
                <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
            </div> -->
        </div>
    </div>
</div>
<div class="new-product">
    <div class="container">
        <div class="tabbed-content">
            <h3>Sản phẩm cùng loại</h3>
        </div>
        <div class="autoplay-new-products auto-height">
            <?php $product = $d->rawQuery("SELECT `id`,`id_list`,`id_cat`,`photo`,`tenkhongdauvi`,`tenkhongdauen`,`noidungen`,`noidungvi`,`motaen`,`motavi`,`tenvi`,
             `masp`,`gia`,`giakm`,`giamoi`,`type` FROM `table_product` WHERE table_product.id_list = ? and hienthi > 0 ORDER BY id DESC", array($row_detail['id_list']));
            foreach ($product as $k => $v) {
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
                        <a class="btn-add btn-add-to-cart" data-option="muahang" data-id="233" title="Máy lọc nước Chungho  NEW 700 ICE" tabindex="-1" href="gio-hang">Đặt hàng</a>
                        <a class="btn-add" href="<?php echo $v[$sluglang] ?>" title="Máy lọc nước Chungho  NEW 700 ICE" tabindex="-1">Chi tiết</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>