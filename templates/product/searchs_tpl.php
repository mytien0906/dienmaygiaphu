<h3 class="tabbed-content title"><?= (@$title_cat != '') ? $title_cat : @$title_crumb ?> <?= $_GET['keyword'] ?></h3>
<?php if (isset($searchKey) && count($searchKey) > 0) {
    $_SESSION['keyword'] = $_GET['keyword'];
?>
    <div class="row list-product">

        <?php foreach ($searchKey as $key => $value) {

        ?>
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
    </div>
    <div class="load-more" id="btn_loadmore_result">
        Xem thêm
    </div>
    <div class="clear"></div>
    <div class="paging-product"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
    <?php
    ?>
    <!-- <div class="alert alert-warning" role="alert">
        <strong id="alert_kq"></strong>
    </div> -->
<?php } else { ?>
    <div class="alert alert-warning" role="alert">
        <strong><?= khongtimthayketqua ?></strong>
    </div>
<?php } ?>
<?php if ($noidung_page != '') { ?>
    <div class="noidung_page">
        <div class="meta-toc">
            <div class="box-readmore">
                <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
            </div>
        </div>
        <div id="toc-content"><?= htmlspecialchars_decode($noidung_page) ?></div>
    </div>
<?php } ?>
<script>
    $(document).ready(function() {
        var page = 1;
        var keyword = "<?= $_GET['keyword'] ?>"
        var nextPage = page + 1;
        $.ajax({
            type: "GET",
            url: "ajax/ajax_loadmore_search.php",
            data: {
                page: nextPage,
                keyword: keyword,
            },
            success: function(data) {
                if (data.length <= 0) {
                    // $('#alert_kq').html("Đã xem hết tin tức")

                    $('#btn_loadmore_result').hide();
                    // document.querySelector(".alert-warning").style.display="block";
                    return;
                }
            }
        });

        $('#btn_loadmore_result').click(function() {
            console.log(keyword);
            page = page + 1;
            $.ajax({
                type: "GET",
                url: "ajax/ajax_loadmore_search.php",
                data: {
                    page: page,
                    keyword: keyword,
                },

                success: function(data) {
                    var nextPage = page + 1;
                    $.ajax({
                        type: "GET",
                        url: "ajax/ajax_loadmore_search.php",
                        data: {
                            page: nextPage,
                            keyword: keyword,
                        },
                        success: function(data) {
                            if (data.length <= 0) {
                                // $('#alert_kq').html("Đã xem hết tin tức")

                                $('#btn_loadmore_result').hide();
                                // document.querySelector(".alert-warning").style.display="block";
                                return;
                            }
                        }
                    });
                    $('.list-product').append(data);
                }
            });
        });

    });
</script>