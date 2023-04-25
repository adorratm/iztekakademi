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
                    <?php foreach ($blogs as $key => $value) : ?>
                        <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                            <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                <div class="inner-box p_relative d_block pb_70 mb_70 b_shadow_6 b_radius_5">
                                    <?php if (!empty($value->img_url)) : ?>
                                        <div class="image-box p_relative d_block">
                                            <figure class="image p_relative d_block">
                                                <a href="<?= base_url(lang("routes_blog") . "/" . lang("routes_blog_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>">
                                                    <img data-src="<?= get_picture("blogs_v", $value->img_url) ?>" title="<?= $value->title ?>" alt="<?= $value->title ?>" class="lazyload img-fluid w-100">
                                                </a>
                                            </figure>
                                        </div>
                                    <?php endif ?>
                                    <div class="lower-content p_relative d_block pt_35 pl_80 pr_80">
                                        <div class="category p_relative d_block mb_4"><a href="<?= base_url() ?>" rel="dofollow" title="<?= $settings->company_name ?>" class="d_iblock fs_16 font_family_poppins uppercase"><?= $settings->company_name ?></a></div>
                                        <h2 class="d_block fs_30 lh_40 fw_sbold mb_5"><a class="d_iblock color_black" href="<?= base_url(lang("routes_blog") . "/" . lang("routes_blog_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= $value->title ?></a></h2>
                                        <ul class="post-info clearfix p_relative d_block mb_15">
                                            <li class="p_relative d_iblock mr_30 fs_16"><a href="<?= base_url() ?>" rel="dofollow" title="<?= $settings->company_name ?>"><i class="fa fa-user"></i><?= $settings->company_name ?></a></li>
                                            <li class="p_relative d_iblock fs_16">
                                                <?php foreach ($categories as $k => $v) : ?>
                                                    <?php if ($v->id == $value->category_id) : ?>
                                                        <a rel="dofollow" href="<?= base_url(lang("routes_blog") . "/{$v->seo_url}") ?>" title="<?= $v->title ?>"><?= $v->title ?></a>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </li>
                                        </ul>
                                        <p class="d_block font_family_poppins mb_30"><?=mb_word_wrap($value->content,250,"...")?></p>
                                        <div class="btn-box">
                                            <a class="theme-btn theme-btn-six" href="<?= base_url(lang("routes_blog") . "/" . lang("routes_blog_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= lang("viewBlog") ?> <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                    <div class="pagination-wrapper">
                        <?= @$links ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>