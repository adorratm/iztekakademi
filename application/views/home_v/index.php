<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if (!empty($slides)) : ?>
    <!-- banner-section -->
    <section class="slider-one centred p_relative">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
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
                    <div class="slide-item p_relative">
                        <div class="shape-layer">
                            <div class="shape-1 p_absolute l_0 z_1" style="background-image: url(<?= asset_url("public/images/shape/shape-2.webp") ?>);"></div>
                            <div class="shape-2 p_absolute l_0 t_0 z_1" style="background-image: url(<?= asset_url("public/images/shape/shape-3.webp") ?>);"></div>
                            <div class="shape-3 p_absolute r_0 b_0 z_1" style="background-image: url(<?= asset_url("public/images/shape/shape-4.webp") ?>);"></div>
                            <div class="shape-4 p_absolute r_0 b_0 z_1" style="background-image: url(<?= asset_url("public/images/shape/shape-5.webp") ?>);"></div>
                        </div>
                        <div class="image-layer">
                            <?php if (!empty($value->allowButton) && !empty($value->button_caption) && !empty($sUrl)) : ?>
                                <a rel="dofollow" title="<?= $value->title ?>" href="<?= $sUrl ?>">
                                    <img data-src="<?= get_picture("slides_v", $value->img_url) ?>" class="lazyload w-100 img-fluid" alt="<?= $value->title ?>">
                                </a>
                            <?php else : ?>
                                <img data-src="<?= get_picture("slides_v", $value->img_url) ?>" class="lazyload w-100 img-fluid" alt="<?= $value->title ?>">
                            <?php endif ?>
                        </div>
                        <div class="auto-container d-none">
                            <div class="content-box p_relative d_block z_5">
                                <h2 class="p_relative d_iblock fw_bold fs_80 lh_70 mb_25"><span class="slider-text-anim"><?= $value->title ?></span></h2>
                                <p class="d_block fs_18 mb_45"><?= clean($value->description) ?></p>
                                <?php if (!empty($value->allowButton) && !empty($value->button_caption) && !empty($sUrl)) : ?>
                                    <div class="btn-box clearfix">
                                        <a rel="dofollow" title="<?= $value->title ?>" href="<?= $sUrl ?>" class="theme-btn theme-btn-two"><span data-text="<?= $value->button_caption ?>"><?= $value->button_caption ?></span></a>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </section>
    <!-- banner-section end -->
<?php endif ?>

<?php $this->load->view(@str_replace("/index", "", $this->viewFolder) . "/desktop"); ?>