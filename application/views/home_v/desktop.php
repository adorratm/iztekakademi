<!--=================  About Section Start Here ================= -->
<?php if (!empty($pages[array_keys($pages)[0]])) : ?>
    <?php $aboutPage = $pages[array_keys($pages)[0]] ?>
    <?php if ($aboutPage->id == 1) : ?>
        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <?php if (!empty($aboutPage->img_url)) : ?>
                        <div class="col-xl-6">
                            <div class="about-one__left">
                                <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                    <div class="about-one__img">
                                        <img loading="lazy" class="img-fluid lazyload" data-src="<?= get_picture("pages_v", $aboutPage->img_url) ?>" title="<?= $aboutPage->title ?>" alt="<?= $aboutPage->title ?>">
                                        <div class="about-one__shape-1 float-bob-x">
                                            <img loading="lazy" class="img-fluid lazyload" data-src="<?= asset_url("public/images/shapes/about-one-shape-1.webp") ?>" alt="<?= $aboutPage->title ?>">
                                        </div>
                                        <div class="about-one__shape-2 img-bounce">
                                            <img loading="lazy" class="img-fluid lazyload" data-src="<?= asset_url("public/images/shapes/about-one-shape-2.webp") ?>" alt="<?= $aboutPage->title ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline"><?= $settings->company_name ?></span>
                                </div>
                                <h2 class="section-title__title"><?= $aboutPage->title ?></h2>
                            </div>
                            <p class="about-one__text"><?= mb_word_wrap(str_replace("<p>", "<p class='font_family_poppins mb-3'>", $aboutPage->content), 400, "...") ?></p>
                            <div class="about-one__btn-box mt-5">
                                <div class="about-one__shape-3 float-bob-x">
                                    <img loading="lazy" class="img-fluid lazyload" data-src="<?= asset_url("public/images/shapes/about-one-shape-3.webp") ?>" alt="<?= $aboutPage->title ?>">
                                </div>
                                <a href="<?= base_url(lang("routes_page") . "/" . $aboutPage->url) ?>" rel="dofollow" title="<?= $aboutPage->title ?>" class="about-one__btn thm-btn"><?= $aboutPage->title ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->
    <?php endif ?>
<?php endif ?>
<!--================= About Section End Here ================= -->


<?php if (!empty($services)) : ?>
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
                                <h2 class="section-title__title"><?= lang("services") ?></h2>
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
                </div>
            </div>
        </div>
    </section>
    <!--Services One End-->
<?php endif ?>