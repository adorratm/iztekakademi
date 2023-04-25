<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Page Title -->
<section class="page-title p_relative centred">
    <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(<?= get_picture("settings_v", $settings->blog_logo) ?>);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1 class="d_block fs_60 lh_70 fw_bold mb_10"><?= $page_title ?></h1>
        </div>
    </div>
</section>
<!-- End Page Title -->

<section class="sidebar-page-container blog-standard-2 p_relative sec-pad">
    <div class="auto-container">
        <div class="row justify-content-center clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-standard-content p_relative d_block mr_20 centred">
                    <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box p_relative d_block pb_70 mb_70 b_shadow_6 b_radius_5">
                            <?php if (!empty($blog->img_url)) : ?>
                                <div class="image-box p_relative d_block">
                                    <figure class="image p_relative d_block">
                                        <a href="<?= base_url(lang("routes_blog") . "/" . lang("routes_blog_detail") . "/{$blog->seo_url}") ?>" title="<?= $blog->title ?>">
                                            <img data-src="<?= get_picture("blogs_v", $blog->img_url) ?>" title="<?= $blog->title ?>" alt="<?= $blog->title ?>" class="lazyload img-fluid w-100">
                                        </a>
                                    </figure>
                                </div>
                            <?php endif ?>
                            <div class="lower-content p_relative d_block pt_35 pl_80 pr_80">
                                <div class="category p_relative d_block mb_4"><a href="<?= base_url() ?>" rel="dofollow" title="<?= $settings->company_name ?>" class="d_iblock fs_16 font_family_poppins uppercase"><?= $settings->company_name ?></a></div>
                                <h2 class="d_block fs_30 lh_40 fw_sbold mb_5"><?= $blog->title ?></h2>
                                <ul class="post-info clearfix p_relative d_block mb_15">
                                    <li class="p_relative d_iblock mr_30 fs_16"><a href="<?= base_url() ?>" rel="dofollow" title="<?= $settings->company_name ?>"><i class="fa fa-user"></i><?= $settings->company_name ?></a></li>
                                    <li class="p_relative d_iblock fs_16">
                                        <?php foreach ($categories as $k => $v) : ?>
                                            <?php if ($v->id == $blog->category_id) : ?>
                                                <a rel="dofollow" href="<?= base_url(lang("routes_blog") . "/{$v->seo_url}") ?>" title="<?= $v->title ?>"><?= $v->title ?></a>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </li>
                                </ul>
                                <?= str_replace("<p>", "<p class='d_block font_family_poppins mb_30'>", $blog->content) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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