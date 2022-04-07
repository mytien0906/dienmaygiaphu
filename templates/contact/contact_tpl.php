<div class="content-main w-clear">
    <div class="top-contact">
        <div class="article-contact">
            <div class="tabbed-content">
                <h3>
                    <?= (@$title_cat != '') ? $title_cat : @$title_crumb ?><div class="tabbed-content">
                </h3>
            </div>
            <?= (isset($lienhe['noidung' . $lang]) && $lienhe['noidung' . $lang] != '') ? htmlspecialchars_decode($lienhe['noidung' . $lang]) : '' ?>
        </div>
    </div>
    <div class="grid-2-col gap-20">
        <form class="form-contact validation-contact" novalidate method="post" action="" enctype="multipart/form-data">
            <div class="input-contact">
                <div class="icon-wrap">
                    <i class="fas fa-user"></i>
                </div>
                <input type="text" class="form-control" id="ten" name="ten" placeholder="<?= hoten ?>" required />
                <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
            </div>
            <div class="input-contact">
                <div class="icon-wrap">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <input type="number" class="form-control" id="dienthoai" name="dienthoai" placeholder="<?= sodienthoai ?>" required />
                <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
            </div>
            <div class="input-contact">
                <div class="icon-wrap">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <input type="text" class="form-control" id="diachi" name="diachi" placeholder="<?= diachi ?>" required />
                <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
            </div>
            <div class="input-contact">
                <div class="icon-wrap">
                    <i class="fas fa-envelope"></i>
                </div>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
            </div>
            <div class="input-contact">
                <div class="icon-wrap">
                <i class="fas fa-location-arrow"></i>
                </div>
                <input type="text" class="form-control" id="tieude" name="tieude" placeholder="<?= chude ?>" required />
                <div class="invalid-feedback"><?= vuilongnhapchude ?></div>
            </div>
            <div class="input-contact">
                <textarea class="form-control" id="noidung" name="noidung" placeholder="<?= noidung ?>" required /></textarea>
                <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
            </div>
            <!-- <div class="input-contact">
                <input type="file" class="custom-file-input" name="file">
                <label class="custom-file-label" for="file" title="<?= chon ?>"><?= dinhkemtaptin ?></label>
            </div> -->
            <input type="submit" class="btn btn-primary" name="submit-contact" value="<?= gui ?>" disabled />
            <input type="reset" class="btn btn-secondary" value="<?= nhaplai ?>" />
            <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
        </form>



        <div class="bottom-contact"><?= htmlspecialchars_decode($optsetting['toado_iframe']) ?></div>
    </div>
</div>