<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Page Title -->
<section class="page-title p_relative centred">
    <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(<?= get_picture("settings_v", $settings->gallery_logo) ?>);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1 class="d_block fs_60 lh_70 fw_bold mb_10"><?= $page_title ?></h1>
        </div>
    </div>
</section>
<!-- End Page Title -->


<section class="team-one team-page-1 p_relative pt_130 pb_130">
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
                                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold pl_30"><a onclick="event.preventDefault();$('.lightimg<?= $j ?>').click()" rel="dofollow" href="<?= get_picture("galleries_v/{$gallery->gallery_type}/{$gallery->folder_name}", $value->url) ?>" title="<?= $value->title ?>"><?= $value->title ?></a></h4>
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