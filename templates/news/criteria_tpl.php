<?php
?>
<div class="tabbed-content">
    <h3>
        <?= (@$title_cat != '') ? $title_cat : @$title_crumb ?><div class="tabbed-content">
    </h3>
</div>
<div class="content-main w-clear">
   <h3>HiHihihi</h3>
</div>
<div class="share">
    <b><?= chiase ?>:</b>
    <div class="social-plugin w-clear">
        <div class="addthis_inline_share_toolbox_qj48"></div>
        <div class="zalo-share-button" data-href="<?= $func->getCurrentPageURL() ?>" data-oaid="<?= ($optsetting['oaidzalo'] != '') ? $optsetting['oaidzalo'] : '579745863508352884' ?>" data-layout="1" data-color="blue" data-customize=false></div>
    </div>
</div>