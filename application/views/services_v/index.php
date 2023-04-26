<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?= !empty($services_category) && !empty($services_category->img_url) ? get_picture("service_categories_v", $services_category->banner_url) : get_picture("settings_v", $settings->service_logo) ?>);">
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

<!--Services One Start-->
<section class="services-one">
    <div class="services-one__bg" style="background-image: url(<?= asset_url("public/images/backgrounds/services-one-bg.webp") ?>);">
    </div>
    <div class="container">
        <div class="services-one__top">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="services-one__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline"><?= $settings->company_name ?></span>
                            </div>
                            <h2 class="section-title__title"><?= $page_title ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-one__bottom">
            <div class="row">
                <?php $i = 100 ?>
                <?php foreach ($services as $k => $v) : ?>
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?= $i ?>ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="<?= base_url(lang("routes_services") . "/" . lang("routes_service") . "/" . $v->seo_url) ?>" rel="dofollow" title="<?= lang("viewServices") ?>"><?= $v->title ?></a>
                                </h3>
                            </div>
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img data-src="<?= get_picture("services_v", $v->img_url) ?>" class="img-fluid lazyload" alt="<?= $v->title ?>" title="<?= $v->title ?>" />
                                </div>
                            </div>
                            <div class="services-one__read-more">
                                <a href="<?= base_url(lang("routes_services") . "/" . lang("routes_service") . "/" . $v->seo_url) ?>" rel="dofollow" title="<?= lang("viewServices") ?>"><?= lang("viewService") ?><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <?php $i += 100 ?>
                <?php endforeach ?>
                <?php if (!empty($links)) : ?>
                    <div class="col-12 text-center">
                        <?= @$links ?>
                    </div>
                <?php endif ?>
            </div>
            <?php if (empty($services)) : ?>
                <div class="alert alert-warning rounded-0 shadow" role="alert">
                    <h4 class="alert-heading"><?= lang("warning") ?></h4>
                    <p><?= lang("weCantFindAnyServicesWithYourSearch") ?></p>
                    <hr>
                    <p class="mb-0"><?= lang("youCanSearchDifferentServices") ?></p>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>
<!--Services One End-->