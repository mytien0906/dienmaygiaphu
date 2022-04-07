<div class="header-cachtop">
    <div class="header">
        <div class="header background-head">
            <div class="top-header">
                <div class="container">
                    <div class="row" style="align-items: center">
                        <div class="col-md-3">
                            <form action="tim-kiem" method="get" class="form-inline my-2 my-lg-0 frm_timkiem">
                                <input name="keyword" autocomplete="off" type="text" class="input" id="keyword" placeholder="Nhập từ khóa tìm kiếm" onkeypress="doEnter(event,'keyword');">
                                <button type="submit" value="" class="nut_tim" onclick="onSearch('keyword');"><i class="fal fa-search"></i></button>

                            </form>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <p>
                                        <img src="assets/images/icon/icon_phone.png" alt="">
                                        <span class="ml-10 fz-12">0903442958</span>
                                    </p>
                                </div>
                                <div class="col-md-9">
                                    <p>
                                        <img src="assets/images/icon/icon_email.png" alt="">
                                        <span class="ml-10 fz-12">giaphu6666@gmail.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="top-header-link">
                                <li><a href="tin-tuc">Tin tức</a></li>
                                <li><a href="huong-dan-mua-hang">Hướng dẫn mua hàng</a></li>
                                <li><a href="chinh-sach">Chính sách</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="middle-header py-20">
                <!-- <div class="header_left align-self-center">
                    <a class="header_logo" href=""><img onerror="this.src='thumbs/0x85x2/assets/images/noimage.png';" src="thumbs/0x85x2/upload/photo/hshglogo-removebg-preview-2193.png" /></a>
                </div> -->
                <div class="fixwidth row">
                    <div class="header_left align-self-center col-md-3">
                        <a class="header_logo" href=""><img onerror="this.src='<?= THUMBS ?>/0x100x2/assets/images/noimage.png';" src="<?= THUMBS ?>/0x100x2/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>

                    </div>
                    <div class="boxmenu_middle align-self-center col-md-2">
                    </div>
                    <div class="boxmenu_right d-flex align-items-end justify-content-between col-md-7">
                        <?php if (isset($muasam)) {
                            foreach ($muasam as $key => $value) {
                        ?>
                                <a href="<?= $value['type'] ?>" class="text-center text-color text-capitalize fz-12">
                                    <img class="mb-8" onerror="this.src='<?= THUMBS ?>/0x100x2/assets/images/noimage.png';" src="<?= THUMBS ?>/40x40x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>" />
                                    <p>Mua sắm</p>
                                </a>
                        <?php }
                        } ?>
                        <?php if (isset($giaohang)) {
                            foreach ($giaohang as $key => $value) {

                        ?>
                                <a href="<?= $value['type'] ?>" class="text-center text-color text-capitalize fz-12">
                                    <img class="mb-8" onerror="this.src='<?= THUMBS ?>/0x100x2/assets/images/noimage.png';" src="<?= THUMBS ?>/40x40x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>" />
                                    <p>Giao hàng nhanh chóng</p>
                                </a>
                        <?php }
                        } ?>
                        <?php if (isset($thanhtoan)) {
                            foreach ($thanhtoan as $key => $value) {
                        ?>
                                <a href="<?= $value['type'] ?>" class="text-center text-color text-capitalize fz-12">
                                    <img class="mb-8" onerror="this.src='<?= THUMBS ?>/0x100x2/assets/images/noimage.png';" src="<?= THUMBS ?>/40x40x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>" />
                                    <p>Thanh toán nhanh</p>
                                </a>
                        <?php }
                        } ?>

                        <a href="lien-he" class="text-center text-color text-capitalize fz-12">
                            <img src="assets/images/icon/ts4.png" alt="" class="mb-8">
                            <p>Liên hệ</p>
                        </a>
                        <a href="gio-hang" class="text-center text-color text-capitalize fz-12">
                            <img src="assets/images/icon/ts5.png" alt="" class="mb-8">
                            <p>Giỏ hàng</p>
                        </a>

                    </div>
                </div>

            </div>
        </div>
        <div class="bottom-header" id="myHeader">
            <div class="fixwidth py-15">
                <div class="menu_mobi_add"></div>
                <div class="menu_mobi align-self-center">
                    <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
                    <p class="menu_baophu"></p>
                    <a href="" class="home_mobi">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="w-100 boxmenu_right d-flex align-self-center justify-content-between flex-wrap">
                    <div class="menu">
                        <ul class="menu_cap_cha nav">
                            <li class=" <?= $source == 'index' ? 'active' : '' ?>"><a href="" title="TRANG CHỦ">Trang chủ</a></li>
                            <li class=" <?= $com == 'gioi-thieu' ? 'active' : '' ?>"><a href="gioi-thieu" title="Giới thiệu">Giới thiệu
                                </a>
                            </li>

                            <li class=" <?= $com == 'san-pham' ? 'active' : '' ?>"><a href="san-pham" title="Sản phẩm">Sản phẩm
                                    <?php if ($splistmenu) { ?>
                                        <i class="desktop-li fal fa-angle-down"></i>
                                    <?php } ?>
                                </a>
                                <?php if ($splistmenu) { ?>
                                    <ul class="sub-menu-list">
                                        <?php foreach ($splistmenu as $key => $value) { ?>
                                            <li class="sub-menu-item">
                                                <?php
                                                $spcatemenu = $d->rawQuery("select ten$lang, tenkhongdau$lang, id,photo,type from #_product_cat where type = ? and #_product_cat.id_list = ? and  hienthi > 0 order by stt,id desc", array('san-pham', $value['id']));

                                                ?>
                                                <a href="<?= $value[$sluglang] ?>?idl=<?= $value['id'] ?>"><?= $value['ten' . $lang] ?></a>
                                                <?php if (isset($spcatemenu)) {
                                                ?>
                                                    <ul class="sub-menu-cat">
                                                        <?php foreach ($spcatemenu as $k => $v) { ?>
                                                            <li>
                                                                <a href="<?= $value[$sluglang] ?>?idl=<?= $value['id'] ?>&idc=<?= $v['id'] ?>"><?= $v['ten' . $lang] ?></a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>

                                                <?php } ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>

                            <li class=" <?= $com == 'khuyen-mai' ? 'active' : '' ?>"><a href="khuyen-mai" title="Khuyến mãi">Khuyến mãi
                                </a>
                            </li>

                            <li class=" <?= $com == 'tuyen-dung' ? 'active' : '' ?>"><a href="tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
                            <li class=" <?= $com == 'dai-ly' ? 'active' : '' ?>"><a href="dai-ly" title="Đại lý">Đại lý</a></li>
                            <li class=" <?= $com == 'lien-he' ? 'active' : '' ?>"><a href="lien-he" title="LIÊN HỆ">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>