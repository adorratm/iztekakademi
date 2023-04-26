<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?= !empty($item->banner_url) ? get_picture("pages_v", $item->banner_url)  : get_picture("settings_v", $settings->about_logo) ?>);">
    </div>
    <div class="page-header__shape-2 float-bob-x">
        <img loading="lazy" class="lazyload img-fluid" data-src="<?= asset_url("public/images/shapes/page-header-shape-2.webp") ?>" alt="<?= $settings->company_name ?>">
    </div>
    <div class="page-header__shape-1 float-bob-y">
        <img loading="lazy" class="lazyload img-fluid" data-src="<?= asset_url("public/images/shapes/page-header-shape-1.webp") ?>" alt="<?= $settings->company_name ?>">
    </div>
    <div class="page-header__shape-3 float-bob-x">
        <img loading="lazy" class="lazyload img-fluid" data-src="<?= asset_url("public/images/shapes/page-header-shape-3.webp") ?>" alt="<?= $settings->company_name ?>">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2><?= $page_title ?></h2>
        </div>
    </div>
</section>
<!--Page Header End-->


<!-- ourmission-section -->
<section class="<?= $item->type == "KVKK" ? "faq-page" : "about-one" ?>">
    <?php $pages = $this->general_model->get_all("pages", null, "rank ASC", ["isActive" => 1, "type" => $item->type]); ?>
    <?php if ($item->type === "ABOUT") : ?>

        <?php $i = 0 ?>
        <!-- BEGIN: About Section -->
        <?php foreach ($pages as $key => $value) : ?>
            <div class="pattern-layer p_absolute float-bob-y" style="background-image: url(<?= asset_url("public/images/shape/shape-56.webp") ?>);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 order-lg-<?= $i % 2 == 0 ? "0" : "1" ?> col-md-12 col-sm-12 left-column">
                        <div class="content_block_22">
                            <div class="content-box p_relative d_block mr_100">
                                <div class="shape float-bob-y p_absolute w_95 h_95" style="background-image: url(<?= asset_url("public/images/shape/shape-173.webp") ?>);"></div>
                                <?php if (!empty($value->img_url)) : ?>
                                    <figure class="image-box p_relative d_block b_radius_10"><img loading="lazy" class="img-fluid lazyload" data-src="<?= get_picture("pages_v", $value->img_url) ?>" title="<?= $value->title ?>" alt="<?= $value->title ?>"></figure>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-<?= $i % 2 == 0 ? "1" : "0" ?> col-md-12 col-sm-12 left-column">
                        <div class="content_block_23">
                            <div class="content-box p_relative d_block">
                                <div class="shape">
                                    <div class="shape-1 p_absolute b_radius_50"></div>
                                    <div class="shape-2 float-bob-y p_absolute" style="background-image: url(<?= asset_url("public/images/shape/shape-174.webp") ?>);"></div>
                                </div>
                                <div class="sec-title-three p_relative d_block mb_150">
                                    <h6 class="d_block fs_17 lh_26 fw_sbold font_family_inter uppercase mb_12"><?= $settings->company_name ?></h6><br />
                                    <h2 class="d_block fs_40 fw_bold font_family_inter mb_20"><?= $value->title ?></h2><br />
                                    <?= str_replace("<p>", "<p class='font_family_poppins mb-3'>", $value->content) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($value->pdf_url)) : ?>
                        <div class="col-12 left-column">
                            <figure class="image-box p_relative d_block b_radius_10"><iframe loading="lazy" class="img-fluid lazyload" data-src="<?= get_picture("pages_v", $value->pdf_url) ?>" title="<?= $value->title ?>" alt="<?= $value->title ?>"></iframe></figure>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <?php $i++ ?>
        <?php endforeach ?>
    <?php endif ?>
    <?php if ($item->type === "CONTENT") : ?>
        <?php $i = 0 ?>
        <?php foreach ($pages as $key => $value) : ?>
            <div class="pattern-layer p_absolute float-bob-y" style="background-image: url(<?= asset_url("public/images/shape/shape-56.webp") ?>);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 order-lg-<?= $i % 2 == 0 ? "1" : "0" ?> col-md-12 col-sm-12 left-column">
                        <div class="content_block_22">
                            <div class="content-box p_relative d_block mr_100">
                                <div class="shape float-bob-y p_absolute w_95 h_95" style="background-image: url(<?= asset_url("public/images/shape/shape-173.webp") ?>);"></div>
                                <?php if (!empty($value->img_url)) : ?>
                                    <figure class="image-box p_relative d_block b_radius_10"><img loading="lazy" class="img-fluid lazyload" data-src="<?= get_picture("pages_v", $value->img_url) ?>" title="<?= $value->title ?>" alt="<?= $value->title ?>"></figure>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-<?= $i % 2 == 0 ? "0" : "1" ?> col-md-12 col-sm-12 left-column">
                        <div class="content_block_23">
                            <div class="content-box p_relative d_block">
                                <div class="shape">
                                    <div class="shape-1 p_absolute b_radius_50"></div>
                                    <div class="shape-2 float-bob-y p_absolute" style="background-image: url(<?= asset_url("public/images/shape/shape-174.webp") ?>);"></div>
                                </div>
                                <div class="sec-title-three p_relative d_block mb_150">
                                    <h6 class="d_block fs_17 lh_26 fw_sbold font_family_inter uppercase mb_12"><?= $settings->company_name ?></h6><br />
                                    <h2 class="d_block fs_40 fw_bold font_family_inter mb_20"><?= $value->title ?></h2><br />
                                    <?= str_replace("<p>", "<p class='font_family_poppins mb-3'>", $value->content) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($value->pdf_url)) : ?>
                        <div class="col-12 left-column">
                            <figure class="image-box p_relative d_block b_radius_10"><iframe loading="lazy" class="img-fluid lazyload" data-src="<?= get_picture("pages_v", $value->pdf_url) ?>" title="<?= $value->title ?>" alt="<?= $value->title ?>"></iframe></figure>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <?php $i++ ?>
        <?php endforeach ?>
    <?php endif ?>
    <?php if ($item->type === "KVKK") : ?>
        <!-- faq-page-section -->
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="faq-content">
                        <div class="content-one p_relative d_block mb_30">
                            <div class="content_block_five">
                                <div class="content-box p_relative d_block">
                                    <ul class="accordion-box">
                                        <?php $i = 0 ?>
                                        <?php foreach ($pages as $key => $value) : ?>
                                            <li class="accordion block <?= $this->uri->segment(3) == $value->url ? "active-block" : null ?> p_relative d_block mb_30">
                                                <div class="acc-btn <?= $this->uri->segment(3) == $value->url ? "active" : null ?> p_relative d_block tran_5 pt_16 pr_80 pb_16 pl_30">
                                                    <div class="icon-outer p_absolute fs_10 tran_5 z_1"><i class="fa fa-chevron-down fa-2x"></i></div>
                                                    <h4 class="p_relative d_block fs_20 lh_30 fw_medium"><?= $value->title ?></h4>
                                                </div>
                                                <div class="acc-content <?= $this->uri->segment(3) == $value->url ? "current" : null ?> p_relative pt_25 pr_50 pl_30">
                                                    <div class="text p_relative d_block">
                                                        <?= str_replace("<p>", "<p class='font_family_poppins mb-3'>", $value->content) ?>
                                                    </div>
                                                    <?php if (!empty($value->pdf_url)) : ?>
                                                        <div class="text p_relative d_block">
                                                            <figure class="image-box p_relative d_block b_radius_10"><iframe loading="lazy" class="img-fluid lazyload" data-src="<?= get_picture("pages_v", $value->pdf_url) ?>" title="<?= $value->title ?>" alt="<?= $value->title ?>"></iframe></figure>
                                                        </div>
                                                    <?php endif ?>
                                                </div>
                                            </li>
                                            <?php $i++ ?>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq-page-section end -->
    <?php endif ?>
    <?php if ($item->type === "SIMPLE") : ?>
        <!--About One Start-->
        <div class="container">
            <div class="row">
                <?php if (!empty($item->img_url)) : ?>
                    <div class="col-xl-8 offset-xl-2">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img loading="lazy" class="img-fluid lazyload" data-src="<?= get_picture("pages_v", $item->img_url) ?>" title="<?= $item->title ?>" alt="<?= $item->title ?>">
                                    <div class="about-one__shape-1 float-bob-x">
                                        <img loading="lazy" class="img-fluid lazyload" data-src="<?= asset_url("public/images/shapes/about-one-shape-1.webp") ?>" alt="<?= $item->title ?>">
                                    </div>
                                    <div class="about-one__shape-2 img-bounce">
                                        <img loading="lazy" class="img-fluid lazyload" data-src="<?= asset_url("public/images/shapes/about-one-shape-2.webp") ?>" alt="<?= $item->title ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <div class="col-xl-12 mt-5">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline"><?= $settings->company_name ?></span>
                            </div>
                            <h2 class="section-title__title"><?= $item->title ?></h2>
                        </div>
                        <p class="about-one__text"><?= $item->content ?></p>
                        <?php if (!empty($value->pdf_url)) : ?>
                            <div class="about-one__text">
                                <iframe loading="lazy" class="img-fluid lazyload" data-src="<?= get_picture("pages_v", $value->pdf_url) ?>" title="<?= $value->title ?>" alt="<?= $value->title ?>"></iframe>
                            </div>
                        <?php endif ?>
                        <?php if (!empty($item->gallery_id)) : ?>
                            <?php $gallery = $this->general_model->get("galleries", null, ["isActive" => 1, "id" => $item->gallery_id]) ?>
                            <?php if (!empty($gallery)) : ?>
                                <?php $gallery_items = !empty($gallery->gallery_type) ? $this->general_model->get_all("{$gallery->gallery_type}", null, "rank ASC", ["gallery_id" => $gallery->id, "isActive" => 1, "lang" => $this->viewData->lang]) : []; ?>
                                <section class="team-one team-page-1 p_relative  <?= !empty($item->content) ? "pt_130" : null ?>">
                                    <div class="auto-container">
                                        <div class="row clearfix <?= ($gallery->gallery_type != "files" ? "lightgallery" : null) ?>">
                                            <?php if (!empty($gallery_items)) : ?>
                                                <?php $j = 0 ?>
                                                <?php foreach ($gallery_items as $key => $value) : ?>
                                                    <?php if ($gallery->gallery_type == "files") : ?>
                                                        <?php $extension = pathinfo(FCPATH . "galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}/" . $value->url)["extension"] ?>
                                                        <div class="<?= strto("lower", $extension) === "pdf" ? "col-lg-6 col-md-12" : "col-lg-3 col-md-6" ?> col-sm-12 team-block">
                                                            <?php if (strto("lower", $extension) === "pdf") : ?>
                                                                <iframe loading="lazy" data-src="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" frameborder="0" class="w-100 lazyload vh-100"></iframe>
                                                            <?php else : ?>
                                                                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                                                    <div class="inner-box p_relative d_block b_radius_5 b_shadow_6 mb_30">
                                                                        <div class="image-box p_relative d_block">
                                                                            <div class="overlay-pattern-1 p_absolute r_0" style="background-image: url(<?= asset_url("public/images/shape/shape-43.webp") ?>);"></div>
                                                                            <div class="overlay-pattern-2 p_absolute l_0" style="background-image: url(<?= asset_url("public/images/shape/shape-44.webp") ?>);"></div>
                                                                            <figure class="image p_relative d_block"><img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $gallery->img_url) ?>" title="<?= $value->title ?>" alt="<?= $value->title ?>" class="lazyload rounded img-fluid"></figure>
                                                                            <ul class="social-links">
                                                                                <li><a rel="dofollow" href="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" alt="<?= $value->title ?>" <?= (!empty($extension) && $extension != "pdf" ? "download='" . (!empty($value->title) ? $value->title . "." . $extension : null) . "'" : "target='_blank'") ?>><i class="fa fa-download"></i> </a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="lower-content p_relative d_block pt_20 pr_30 pb_25 pl_30">
                                                                            <h4 class="p_relative d_block fs_20 lh_30 fw_sbold pl_30"><a rel="dofollow" href="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" alt="<?= $value->title ?>" <?= (!empty($extension) && $extension != "pdf" ? "download='" . (!empty($value->title) ? $value->title . "." . $extension : null) . "'" : "target='_blank'") ?>><?= !empty($value->title) && !empty($extension) ? $value->title . "." . $extension : $value->url ?></a></h4>
                                                                            <span class="designation fs_16 p_relative d_block font_family_poppins"><a rel="dofollow" href="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" alt="<?= $value->title ?>" <?= (!empty($extension) && $extension != "pdf" ? "download='" . (!empty($value->title) ? $value->title . "." . $extension : null) . "'" : "target='_blank'") ?>><i class="fa fa-download"></i> </a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endif ?>
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="<?= ($gallery->gallery_type == "videos" || $gallery->gallery_type == "video_urls" ? "col-lg-12 col-xl-12" : "col-lg-3 col-md-6") ?> col-sm-12 team-block">
                                                            <?php if ($gallery->gallery_type == "videos") : ?>
                                                                <video id="my-video<?= $key ?>" controls preload="auto" width="100%">
                                                                    <source src="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" />
                                                                </video>
                                                            <?php elseif ($gallery->gallery_type == "video_urls") : ?>
                                                                <?= htmlspecialchars_decode($value->url) ?>
                                                            <?php else : ?>
                                                                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                                                    <div class="inner-box p_relative d_block b_radius_5 b_shadow_6 mb_30">
                                                                        <div class="image-box p_relative d_block">
                                                                            <div class="overlay-pattern-1 p_absolute r_0" style="background-image: url(<?= asset_url("public/images/shape/shape-43.webp") ?>);"></div>
                                                                            <div class="overlay-pattern-2 p_absolute l_0" style="background-image: url(<?= asset_url("public/images/shape/shape-44.webp") ?>);"></div>
                                                                            <figure class="image p_relative d_block"><img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" title="<?= $value->title ?>" alt="<?= $value->title ?>" class="lazyload rounded img-fluid"></figure>
                                                                            <ul class="social-links">
                                                                                <li><a class="lightimg lightimg<?= $j ?>" rel="dofollow" data-exthumbimage="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" href="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" title="<?= $value->title ?>"><i class="fa fa-link"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <?php if (!empty($value->title) || !empty($value->description)) : ?>
                                                                            <div class="lower-content p_relative d_block pt_20 pr_30 pb_25 pl_30">
                                                                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold pl_30"><a rel="dofollow" onclick="event.preventDefault();$('.lightimg<?= $j ?>').click()" href="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" title="<?= $value->title ?>"><?= $value->title ?></a></h4>
                                                                                <span class="designation fs_16 p_relative d_block font_family_poppins"><?= $value->description ?></span>
                                                                            </div>
                                                                        <?php endif ?>
                                                                    </div>
                                                                </div>
                                                            <?php endif ?>
                                                        </div>
                                                    <?php endif ?>
                                                    <?php $j++ ?>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </section>
                            <?php endif ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <!--About One End-->
    <?php endif ?>

</section>
<!-- ourmission-section end -->



<script>
    window.addEventListener('DOMContentLoaded', function() {
        if (($('#lightgallery, .lightgallery').length > 0)) {
            $('#lightgallery, .lightgallery').lightGallery({
                selector: '.lightimg',
                loop: !0,
                thumbnail: !0,
                exThumbImage: 'data-exthumbimage'
            })
        }
    });
</script>