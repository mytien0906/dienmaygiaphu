<?php
include "ajax_config.php";
define('LIBRARIES', '../libraries/');
define('THUMBS', 'thumbs');
$type = $_GET['type'];
$page_number = 3;
$output = "";
$page = $_GET['page'];
settype($page, "int");
$from = ($page - 1) * $page_number;
$tukhoa = $_GET['keyword'];
$tukhoa = $func->changeTitle($tukhoa);
if ($tukhoa) {
    // $sql = "select photo,ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, id,gia from #_product where (ten$lang LIKE ? or tenkhongdauvi LIKE ? or tenkhongdauen LIKE ?) and hienthi > 0 order by stt,id desc limit ?,?";
    $searchKey = $d->rawQuery(
        "select photo,ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, id,gia from #_product where (ten$lang LIKE ? or tenkhongdauvi LIKE ? or tenkhongdauen LIKE ?) and hienthi > 0 order by stt,id desc limit ?,?",
        array("%$tukhoa%", "%$tukhoa%", "%$tukhoa%", $from, $page_number)
    );
}
foreach ($searchKey as $key => $value) { ?>
    <div class="col-2 cover-content">
        <a href="<?= $value[$sluglang] ?>" class="image">
            <span>
                <img onerror="this.src='<?= THUMBS ?>/380x270x2/assets/images/noimage.png';" windown.location.href="<?php $value[$sluglang] ?>" src="/upload/product/<?= $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>" /></span>
        </a>
        <a href="<?php echo $value['tenkhongdauvi'] ?>">
            <h6><?= $value["tenvi"] ?></h6>
        </a>
        <?php if ($value['motanganvi']) { ?>
            <div class="product-des-wrap">
                <p><?php echo htmlspecialchars_decode($value['motanganvi']) ?>
                </p>
            </div>
        <?php } ?>
        <div class="price">
            <div>
                <p><?= $func->convertPrice($value['gia']) ?></p>
                <p class="price-discount"><?= $func->convertPrice($value['giamoi']) ?></p>
            </div>
            <div class="discount"><?= $func->convertPrice($value['giakm']) ?>%</div>
        </div>
        <a class="buy" href="lien-he">Liên hệ</a>
    </div>
<?php } ?>