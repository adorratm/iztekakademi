<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if (!empty($slides)) : ?>
    <!-- Main Sllider Start -->
    <section class="main-slider">
        <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"fa fa-arrow-left\"></span>","<span class=\"fa fa-arrow-right\"></span>"], "margin": 0, "dots": false, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>
            <?php $i = 0 ?>
            <?php foreach ($slides as $key => $value) : ?>
                <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                    <?php if ($value->allowButton) : ?>
                        <?php $sUrl = null; ?>
                        <?php if (!empty($value->button_url)) : ?>
                            <?php $sUrl = $value->button_url ?>
                        <?php endif ?>
                        <?php if (!empty($value->category_id) && $value->category_id > 0) : ?>
                            <?php $sCategory = $this->general_model->get("service_categories", null, ["isActive" => 1, "id" => $value->category_id]); ?>
                            <?php if (!empty($sCategory)) : ?>
                                <?php $sUrl = base_url(lang("routes_services") . "/" . $sCategory->seo_url) ?>
                            <?php endif ?>
                        <?php endif ?>
                        <?php if (!empty($value->service_id) && $value->service_id > 0) : ?>
                            <?php $sService = $this->general_model->get("services", null, ["isActive" => 1, "id" => $value->service_id]); ?>
                            <?php if (!empty($sService)) : ?>
                                <?php $sUrl = base_url(lang("routes_services") . "/" . lang("routes_service") . "/" . $sService->seo_url) ?>
                            <?php endif ?>
                        <?php endif ?>
                        <?php if (!empty($value->page_id) && $value->page_id > 0) : ?>
                            <?php $sPage = $this->general_model->get("service_categories", null, ["isActive" => 1, "id" => $value->page_id]); ?>
                            <?php if (!empty($sPage)) : ?>
                                <?php $sUrl = base_url(lang("routes_services") . "/" . $sPage->seo_url) ?>
                            <?php endif ?>
                        <?php endif ?>
                        <?php if (!empty($value->sector_id) && $value->sector_id > 0) : ?>
                            <?php $sSector = $this->general_model->get("sectors", null, ["isActive" => 1, "id" => $value->sector_id]); ?>
                            <?php if (!empty($sSector)) : ?>
                                <?php $sUrl = base_url(lang("routes_sectors") . "/" . lang("routes_sector_detail") . "/" . $sSector->url) ?>
                            <?php endif ?>
                        <?php endif ?>
                    <?php endif ?>
                    <div class="item main-slider__slide-1">
                        <div class="main-slider__bg" style="background-image: url(<?= get_picture("slides_v", $value->img_url) ?>);">
                        </div><!-- /.slider-one__bg -->
                        <div class="main-slider__shadow"></div>
                        <div class="container">
                            <div class="main-slider__content">
                                <h2 class="main-slider__title"><?= $value->title ?></h2>
                                <p class="main-slider__sub-title"><?= clean($value->description) ?></p>
                                <div class="main-slider__btn-box">
                                    <?php if (!empty($value->allowButton) && !empty($value->button_caption) && !empty($sUrl)) : ?>
                                        <a rel="dofollow" title="<?= $value->title ?>" href="<?= $sUrl ?>" class="main-slider__btn thm-btn"><?= $value->button_caption ?></a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </section>
    <!--Main Sllider Start -->
<?php endif ?>

<?php $this->load->view(@str_replace("/index", "", $this->viewFolder) . "/desktop"); ?>