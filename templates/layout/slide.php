<?php
$linkMan = "tim-kiem";
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<!-- <link rel="stylesheet" type="text/css" href="assets/wowslider/engine1/style.css" />
<script type="text/javascript" src="assets/wowslider/engine1/jquery.js"></script> -->
<?php if (count($slider)) { ?>
    <div class="wrap_slider">
        <div class=" d-flex justify-content-between display-blocks">
            <!-- <div class="catagory-list">
                <?php if ($splistmenu) { ?>
                    <ul>
                        <?php foreach ($splistmenu as $c => $cat) { ?>
                            <li><a title="<?= $cat['ten' . $lang] ?>" href="<?= $cat[$sluglang] ?>"><img src="assets/images/img-data/list.png"> <?= $cat['ten' . $lang] ?></a>
                                <?php
                                $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id desc", array('san-pham', $cat['id']));
                                if (count($spcatmenu) > 0) { ?>

                                    <ul id="cat2_<?= $cat['id'] ?>">
                                        <?php foreach ($spcatmenu as $c1 => $cat1) { ?>
                                            <li><a title="<?= $cat1['ten' . $lang] ?>" href="<?= $cat1[$sluglang] ?>">- <?= $cat1['ten' . $lang] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?> -->
            <!-- <form action="tim-kiem" method="get">
                <div class="frm_timkiem">
                    <input class="form-control form-control-navbar text-sm" type="search" id="keyword" name="keyword" placeholder="Tìm kiếm" aria-label="Tìm kiếm">
                    <div class="input-group-append bg-primary rounded-right">
                        <button class="btn btn-navbar text-white" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->
        </div>
        <!-- Start WOWSlider.com BODY section -->
        <!-- <div id="wowslider-container1" class="wowslider-container">
            <div class="ws_images">
                <ul>
                    <?php foreach ($slider as $v) { ?>
                        <li><img onerror="this.src='<?= THUMBS ?>/910x380x2/assets/images/noimage.png';" src="<?= THUMBS ?>/910x380x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>" id="wows1_0" /></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="ws_bullets">
                <div>
                    <?php foreach ($slider as $v) { ?>
                        <a href="#" title=""><span><?= $v['id'] ?></span></a>
                    <?php } ?>
                </div>
            </div>
        </div> -->
        <div class="slideshow">
            <div class="autoplay">
                <?php foreach ($slider as $v) { ?>
                    <div>
                        <a href="<?= $v['link'] ?>" target="_blank" title="<?= $v['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/200x100x2/assets/images/noimage.png';" src="<?= THUMBS ?>/910x380x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>" /></a>

                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
    </div>
<?php } ?>
<?php /*if($banner!='') { ?>
<div class="banner-in">
    <img onerror="this.src='<?=THUMBS?>/1920x506x2/assets/images/noimage.png';" src="<?=THUMBS?>/1920x506x1/<?=UPLOAD_SEOPAGE_L.$banner?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/>
</div>  
<?php }*/ ?>
<!-- <script type="text/javascript" src="assets/wowslider/engine1/wowslider.js"></script>
<script type="text/javascript" src="assets/wowslider/engine1/script.js"></script> -->