<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Page Title -->
<section class="page-title p_relative centred">
    <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(<?= get_picture("settings_v", $settings->about_logo) ?>);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1 class="d_block fs_60 lh_70 fw_bold mb_10"><?= lang("pageNotFound") ?></h1>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- error-section -->
<section class="error-section p_relative d_block centred pt_140 pb_150">
    <div class="auto-container">
        <div class="inner-box">
            <figure class="error-image p_relative d_block mb_70"><img loading="lazy" class="lazyload img-fluid" data-src="<?= asset_url("public/images/404.webp") ?>" alt="<?= lang("pageNotFound") ?>"></figure>
            <h2 class="d_block fs_50 lh_60 fw_bold mb_12"><i class="fa-regular fa-face-sad-cry"></i> <?= lang("pageNotFound") ?></h2>
            <h3 class="d_block fs_24 fw_medium mb_55"><?= lang("404Desc") ?></h3>
            <div class="text-box">
                <a rel="dofollow" href="<?= base_url() ?>" title="<?= lang("404Home") ?>" class="theme-btn theme-btn-one"><i class="far fa-long-arrow-left"></i> <?= lang("404Home") ?></a>
            </div>
        </div>
    </div>
</section>
<!-- error-section end -->