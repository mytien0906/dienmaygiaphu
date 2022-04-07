<?php session_start(); ?>
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
    <div class="container">
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
    </div>
</div>
<!-- Danh mục cấp 1 - Hiển thị sản phẩm -->
<?php
if (count($splistmenu) > 0) {
    foreach ($splistmenu as $key => $value) {
        $_SESSION['idl' . $key] = $value['id'];
?>
        <div class="new-product">
            <div class="container">
                <div class="tabbed-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h3><?= $value['ten' . $lang] ?></h3>
                        </div>
                        <div class="col-md-6">
                            <ul class="nav nav-tabs nav-tabs-criteria" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" idl="<?= $value['id'] ?>" tab="hot" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="true">Hot nhất</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" idl="<?= $value['id'] ?>" tab="khuyenmai" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="false">Đang khuyến mãi</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" idl="<?= $value['id'] ?>" tab="xemnhieu" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="false">Sản phẩm xem nhiều</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" idl="<?= $value['id'] ?>" tab="banchay" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="false">Sản phẩm bán chạy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="row list-product">

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="big-img" style="
                        background-image: url('<?= THUMBS ?>/380x270x2/<?= UPLOAD_PRODUCT_L . $value['photo'] ?>');
                        background-size: cover;
                        height:660px;
                        background-position:center;
                        "></div>
                    </div>
                </div>
            </div>
        </div>
<?php }
} ?>
<!-- Banner quang cao -->
<div class="banner-quang-cao">
    <div class="container">
        <div class="row">
            <?php foreach ($banner_qc as $key => $value) { ?>
                <div class="col-md-6">
                    <div class="link-tieu-chi">
                        <img onerror="this.src='<?= THUMBS ?>/380x270x2/assets/images/noimage.png';" src="/upload/photo/<?= $value['photo'] ?>" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Tin tuc noi bat -->
<div class="category-block">
    <div class="container">
        <div class="tabbed-content">
            <h3>Tin tức nổi bật</h3>
        </div>

        <div class="row autoplay-product-list">
            <?php foreach ($popularnew as $key => $value) {
            ?>
                <div class="cover-content">
                    <a class="image" href="<?= $value[$sluglang] ?>">
                        <?php if (isset($value['photo'])) {
                        ?>
                            <!-- <div style="
                            background-image: url('<?= THUMBS ?>/380x270x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>');
                            background-size: cover;
                            height: 230px;
                            background-repeat: no-repeat;
                            background-position:center;
                            "> -->
                            <img window.location.href="<?= $value[$sluglang] ?>" src="<?= THUMBS ?>/380x270x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="">
                            <!-- </div> -->
                        <?php } ?>
                    </a>
                    <div class="news-info">
                        <p class="time-news">
                            <span><?= date("d", $value["ngaytao"]) ?></span>
                            <span>Tháng <?= date("m", $value["ngaytao"]) ?></span>
                        </p>
                        <div class="news-des">
                            <a href="<?= $value[$sluglang] ?>">
                                <h5 class="news-title"><?= $value['ten' . $lang] ?></h5>
                            </a>
                            <p><?= $value['mota' . $lang] ?></p>
                        </div>
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
<script>
    $(document).ready(function() {
        var page = parseInt("<?= $page ?>");


        showNews();

        function showNews() {
            var tab = $(this).attr('tab');
            var idl = "<?= $_SESSION['idl'] ?>";
            console.log(tab);
            console.log(idl);
            $.ajax({
                url: "ajax/ajax_index_tpl.php",
                method: "GET",
                data: {
                    tab: tab,
                    idl: idl,
                },
                success: function(data) {
                    var nextPage = page + 1;
                    $.ajax({
                        type: "GET",
                        url: "ajax/ajax_index_tpl.php",
                        data: {
                            tab: tab,
                            idl: idl,
                            page: nextPage,
                        },
                        success: function(data) {
                            if (data.length <= 0) {
                                // $('#alert_kq').html("Đã xem hết tin tức")
                                // document.querySelector(".alert-warning").style.display="block";
                                return;
                            }
                        }
                    });
                    $('.list-product').html(data);
                }

            });
        }

        $('.nav-link').click(function() {
            page = parseInt("<?= $page ?>");

            var tab = $(this).attr('tab');
            var idl = $(this).attr('idl');

            $.ajax({
                url: "ajax/ajax_index_tpl.php",
                method: "GET",
                data: {
                    tab: tab,
                    idl: idl,
                },
                success: function(data) {
                    $('.list-product').html(data);
                }

            });
        });
    })
</script>