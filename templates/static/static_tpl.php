<style>
    .slideshow a img {
        height: 350px !important;
    }
</style>
<?php
?>
<div class="tabbed-content">
    <h3>
        <?= (@$title_cat != '') ? $title_cat : @$title_crumb ?><div class="tabbed-content">
    </h3>
</div>
<div class="content-main w-clear">
    <?= (isset($static['noidung' . $lang]) && $static['noidung' . $lang] != '') ? htmlspecialchars_decode($static['noidung' . $lang]) : '' ?>
    <?php
    if (array($type)[0] == 'tuyendung') { ?>
        <div class="tabbed-content title">
            Vị trí tuyển dụng
        </div>
        <div class="recruit-content">
            <div class="row-wrap">


                <?php
                foreach ($rclist as $key => $value) {
                    // var_dump($value['tenkhongdauvi']).die();

                ?>
                    <div class="row">
                        <div class="col-md-9" style="display: flex;">
                            <div class="stt">0<?= $key + 1 ?></div>
                            <div class="des"><?= $value['tenvi'] ?></div>
                        </div>
                        <div class="col-md-3">
                            <div class="btn-send">
                                <a href="<?= $value[$sluglang] ?>" class="btn-send-link">
                                    <span>Ứng tuyển</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>

            </div>
        </div>
    <?php }
    if (array($type)[0] == 'gioi-thieu') {

        // var_dump($gtlistmenu).die();
    ?>

    <?php }
    ?>

</div>
<!-- <div class="share">
    <b><?= chiase ?>:</b>
    <div class="social-plugin w-clear">
        <div class="addthis_inline_share_toolbox_qj48"></div>
        <div class="zalo-share-button" data-href="<?= $func->getCurrentPageURL() ?>" data-oaid="<?= ($optsetting['oaidzalo'] != '') ? $optsetting['oaidzalo'] : '579745863508352884' ?>" data-layout="1" data-color="blue" data-customize=false></div>
    </div>
</div> -->