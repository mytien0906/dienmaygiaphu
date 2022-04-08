<?php
include "ajax_config.php";
define('LIBRARIES', '../libraries/');
define('THUMBS', 'thumbs');
$page_number = 3;
$output = "";

$tab = $_GET['tab'];
$idl = $_GET['idl'];
// var_dump($idl);
$con = "";
$con = " and  #_product.id_list = " .$idl;
// var_dump($con);
if (isset($tab) && $tab != '') {
    $con .= " and " . $tab . " > 0 ";
} else {
    $con .= " and hot > 0";
}
$sql = "select ten$lang, tenkhongdauvi, id, photo, gia, giamoi, giakm, type, motangan$lang from #_product where type='san-pham' and hienthi > 0 $con order by stt,id desc";
// var_dump($sql);
$news_list = $d->rawQuery("select ten$lang, tenkhongdauvi, id, photo, gia, giamoi, giakm, type, motangan$lang from #_product where type='san-pham' and hienthi > 0 
$con order by stt,id desc");

foreach ($news_list as $key => $value) {
    $output .= '
	<div class="cover-content pos-relative list-products">
		<a class="image" href="'.$value[$sluglang].'">
			<img onerror="this.src="thumbs/320x240x1/assets/images/noimage.png";" src="thumbs/320x240x2/' .UPLOAD_PRODUCT_L . $value["photo"] . '" alt="' . $value["tenvi"] . '">
		</a>
        <h6>'.$value['ten'.$lang].'</h6>
		<div class="price">
			<p>'.$func->convertPrice($value['gia']).'</p>
			<p class="price-discount">'.$func->convertPrice($value['giamoi']).'</p>
		</div>
        <div class="info_btn">
            <a href="#" class="btn-add btn-add-to-cart" data-option="muahang" data-id="233" title="Máy lọc nước Chungho  NEW 700 ICE" tabindex="-1">Đặt hàng</a>
            <a href="'.$value[$sluglang].'" class="btn-add" data-option="muahang" data-id="233" title="Máy lọc nước Chungho  NEW 700 ICE" tabindex="-1">Chi tiết</a>
        </div>
	</div>';
}
echo $output;
