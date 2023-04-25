<!--=================  About Section Start Here ================= -->
<?php if (!empty($pages[array_keys($pages)[0]])) : ?>
    <?php $aboutPage = $pages[array_keys($pages)[0]] ?>
    <?php if ($aboutPage->id == 1) : ?>
        <section class="about-three about-page-1 p_relative pt_140">
            <div class="pattern-layer p_absolute float-bob-y" style="background-image: url(<?= asset_url("public/images/shape/shape-56.webp") ?>);"></div>
            <div class="auto-container">
                <div class="row justify-content-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="content_block_23">
                            <div class="content-box p_relative d_block">
                                <?php if (!empty($aboutPage->img_url)) : ?>
                                    <figure class="image-box p_relative d_block b_radius_10"><img loading="lazy" class="img-fluid lazyload" data-src="<?= get_picture("pages_v", $aboutPage->img_url) ?>" title="<?= $aboutPage->title ?>" alt="<?= $aboutPage->title ?>"></figure>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="content_block_23">
                            <div class="content-box p_relative d_block">
                                <div class="shape">
                                    <div class="shape-1 p_absolute b_radius_50"></div>
                                </div>
                                <div class="sec-title-three p_relative d_block <?= !empty($aboutPage->content) ? "mb_150" : null ?>">
                                    <h6 class="d_block fs_17 lh_26 fw_sbold font_family_inter uppercase mb_12"><?= $settings->company_name ?></h6><br />
                                    <h2 class="d_block fs_40 fw_bold font_family_inter mb_20"><?= $aboutPage->title ?></h2><br />
                                    <?= mb_word_wrap(str_replace("<p>", "<p class='font_family_poppins mb-3'>", $aboutPage->content), 800, "...") ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>
<?php endif ?>
<!--================= About Section End Here ================= -->


<?php if (!empty($service_categories)) : ?>
    <!-- project-nine -->
    <section class="project-nine project-page-3 p_relative pt_100">
        <div class="auto-container">
            <h2 class="d_block fs_40 fw_bold font_family_inter mb_20 text-center"><?= lang("service_categories") ?></h2><br />
            <?php if (!empty($service_categories)) : ?>
                <div class="items-container row align-items-stretch align-self-stretch align-content-stretch clearfix">
                    <?php foreach ($service_categories as $k => $v) : ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column mb-3">
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
                </div>
            <?php endif ?>
        </div>
    </section>
    <!-- project-nine end -->
<?php endif ?>



<?php if (!empty($instagramPosts)) : ?>
    <?php $userName = str_replace("/", "", (str_replace("https://www.instagram.com/", "", str_replace("https://instagram.com/", "", $this->viewData->settings->instagram)))); ?>

    <!-- project-nine -->
    <section class="project-nine project-page-3 p_relative pt_100 pb_100">
        <div class="auto-container">
            <h2 class="d_block fs_40 lh_50 fw_bold font_family_inter text-center"><?= lang("followUsOnInstagram") ?> <a rel="nofollow" href="<?= $settings->instagram ?>" target="_blank" title="Instagram" class="text-danger">@<?= $userName ?></a></h2><br />
            <?php if (!empty($instagramPosts)) : ?>
                <div class="items-container row align-items-stretch align-self-stretch align-content-stretch clearfix">
                    <?php foreach ($instagramPosts as $mediaKey => $mediaValue) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column mb-3">
                            <div class="project-block-one h-100">
                                <div class="inner-box p_relative d_block b_radius_5">
                                    <figure class="image-box">
                                        <a class="text-center justify-content-center d-flex" rel="nofollow" title="<?= $settings->company_name ?>" href="<?= $mediaValue->link ?>" target="_blank">
                                            <img style="object-fit:contain;height:300px;" width="300" height="300" data-src="<?= get_picture("instastory", $mediaValue->img_url) ?>" class="img-fluid lazyload" alt="<?= $settings->company_name ?>">
                                        </a>
                                    </figure>
                                    <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                                        <div class="shape p_absolute l_0 b_0" style="background-image: url(<?= asset_url("public/images/shape/shape-47.webp") ?>);"></div>
                                        <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="<?= $mediaValue->link ?>" target="_blank" rel="nofollow" title="<?= lang("viewPost") ?>"><?= lang("viewPost") ?></a></h4>
                                        <div class="link p_absolute b_20 r_30"><a class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14" href="<?= $mediaValue->link ?>" target="_blank" rel="dofollow" title="<?= lang("viewPost") ?>"><i class="fa fa-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
        </div>
    </section>
    <!-- project-nine end -->
<?php endif ?>