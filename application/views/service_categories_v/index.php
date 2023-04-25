<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Page Title -->
<section class="page-title p_relative centred">
    <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(<?= get_picture("settings_v", $settings->category_logo) ?>);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1 class="d_block fs_60 lh_70 fw_bold mb_10"><?= $page_title ?></h1>
        </div>
    </div>
</section>
<!-- End Page Title -->



<!-- project-nine -->
<section class="project-nine project-page-3 p_relative pt_100 pb_100">
    <div class="auto-container">
        <?php if (!empty($service_categories)) : ?>
            <div class="items-container row align-items-stretch align-self-stretch align-content-stretch clearfix">
                <?php foreach ($service_categories as $k => $v) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column mb-3">
                        <div class="project-block-one h-100">
                            <div class="inner-box p_relative d_block b_radius_5">
                                <figure class="image-box"><img data-src="<?= get_picture("service_categories_v", $v->img_url) ?>" class="img-fluid lazyload" alt="<?= $v->title ?>" title="<?= $v->title ?>" /></figure>
                                <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                    <div class="shape p_absolute l_0 b_0" style="background-image: url(<?= asset_url("public/images/shape/shape-47.webp") ?>);"></div>
                                    <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="<?= base_url(lang("routes_services") . "/" . $v->seo_url) ?>" rel="dofollow" title="<?= lang("viewServices") ?>"><?= $v->title ?></a></h4>
                                    <div class="link p_absolute b_20 r_30"><a class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14" href="<?= base_url(lang("routes_services") . "/" . $v->seo_url) ?>" rel="dofollow" title="<?= lang("viewServices") ?>"><i class="fa fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <?php if (!empty($links)) : ?>
                    <div class="pagination-wrapper">
                        <?= @$links ?>
                    </div>
                <?php endif ?>
            </div>
        <?php endif ?>
        <?php if (empty($service_categories)) : ?>
            <div class="alert alert-warning rounded-0 shadow" role="alert">
                <h4 class="alert-heading"><?= lang("warning") ?></h4>
                <p><?= lang("weCantFindAnyServiceCategoriesWithYourSearch") ?></p>
                <hr>
                <p class="mb-0"><?= lang("youCanSearchDifferentServiceCategories") ?></p>
            </div>
        <?php endif ?>
    </div>
</section>
<!-- project-nine end -->