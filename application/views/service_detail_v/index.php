<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?= get_picture("settings_v", $settings->service_detail_logo) ?>);">
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


<!--Project Details Start-->
<section class="project-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h3 class="project-details__title-1"><?= $service->title ?></h3>
                <p class="project-details__text-1"><?= $service->description ?></p>
                <div class="project-details__info">
                    <div class="project-details__shape-1"></div>
                    <ul class="list-unstyled project-details__info-list">
                        <?php if ($service->category_title) : ?>
                            <li>
                                <p><?= lang("serviceCategory") ?>:</p>
                                <h4><a rel="dofollow" title="<?= $service->category_title ?>" href="<?= base_url(lang("routes_services") . "/" . $service->category_seo_url) ?>"><?= $service->category_title ?></a></h4>
                            </li>
                        <?php endif ?>
                        <li>
                            <p><?= lang("shareService") ?> :</p>
                            <div class="project-details__social-list">
                                <a class="mx-1" rel="nofollow" title="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(str_replace("tr/index.php/", "", current_url())) ?>&t=<?= urlencode(str_replace("tr/index.php/", "", current_url())) ?>"><i class="fa-brands fa-facebook"></i></a>
                                <a class="mx-1" rel="nofollow" title="Twitter" target="_blank" href="https://twitter.com/intent/tweet?text=<?= urlencode(str_replace("tr/index.php/", "", current_url())) ?>&t=<?= urlencode(str_replace("tr/index.php/", "", current_url())) ?>"><i class="fa-brands fa-twitter"></i></a>
                                <a class="mx-1" rel="nofollow" title="Linkedin" target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(str_replace("tr/index.php/", "", current_url())) ?>&title=<?= urlencode($service->title) ?>"><i class="fa-brands fa-linkedin"></i></a>
                                <a class="mx-1" rel="nofollow" title="Pinterest" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?= urlencode(str_replace("tr/index.php/", "", current_url())) ?>&description=<?= urlencode($service->title) ?>"><i class="fa-brands fa-pinterest"></i></a>
                                <a class="mx-1" rel="nofollow" title="Reddit" target="_blank" href="https://www.reddit.com/submit?url=<?= urlencode(str_replace("tr/index.php/", "", current_url())) ?>&title=<?= urlencode($service->title) ?>"><i class="fa-brands fa-reddit"></i></a>
                                <a class="mx-1" rel="nofollow" title="Whatsapp" target="_blank" href="https://wa.me/?text=<?= urlencode(str_replace("tr/index.php/", "", current_url())) ?>"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="project-details__img">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-inner lightgallery serviceGallery">
                            <?php $i = 0 ?>
                            <?php if (!empty($service_own_images)) : ?>
                                <?php foreach ($service_own_images as $k => $v) : ?>
                                    <?php if ($v->service_id == $service->id) : ?>
                                        <div class="carousel-item <?= $i == 0 ? "active" : null ?>" data-index="<?= $i ?>">
                                            <a rel="dofollow" title="<?= $service->title ?>" data-exthumbimage="<?= get_picture("services_v", $v->url) ?>" href="<?= get_picture("services_v", $v->url) ?>" data-index="<?= $i ?>" class="pgImage lightimg">
                                                <img width="1000" height="1000" loading="lazy" data-src="<?= get_picture("services_v", $v->url) ?>" title="<?= $service->title ?>" alt="<?= $service->title ?>" class="rounded img-fluid lazyload w-100 d-block">
                                            </a>
                                        </div>
                                        <?php $i++ ?>
                                    <?php endif ?>
                                <?php endforeach ?>
                            <?php endif ?>
                            <button aria-label="<?= $settings->company_name ?>" style="box-shadow:unset!important" class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-secondary border rounded" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button aria-label="<?= $settings->company_name ?>" style="box-shadow:unset!important" class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-secondary border rounded" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="carousel-indicators serviceGalleryThumb position-relative mx-0 mx-xxl-0 mt-3">
                            <div class="d-flex">
                                <?php $i = 0 ?>
                                <?php if (!empty($service_own_images)) : ?>
                                    <?php foreach ($service_own_images as $k => $v) : ?>
                                        <?php if ($v->service_id == $service->id) : ?>
                                            <div data-bs-target="#carouselExample" style="max-width: 135px;" class="border <?= ($i == 0 ? "active" : null) ?>" data-bs-touch="true" data-bs-slide-to="<?= $i ?>" data-bs-image="<?= get_picture("services_v", $v->url) ?>">
                                                <img width="1000" height="1000" loading="lazy" data-src="<?= get_picture("services_v", $v->url) ?>" title="<?= $service->title ?>" alt="<?= $service->title ?>" class="rounded lazyload img-fluid w-100 d-block">
                                            </div>
                                            <?php $i++ ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                <?php endif; ?>
                            </div>

                            <button aria-label="<?= $settings->company_name ?>" style="box-shadow:unset!important" class="carousel-control-prev bg-transparent" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-secondary border rounded" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button aria-label="<?= $settings->company_name ?>" style="box-shadow:unset!important" class="carousel-control-next bg-transparent" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-secondary border rounded" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Project Details End-->

<script>
    window.addEventListener('DOMContentLoaded', () => {
        if (($('#lightgallery, .lightgallery').length > 0)) {
            $('#lightgallery, .lightgallery').lightGallery({
                selector: '.lightimg',
                loop: !0,
                thumbnail: !0,
                exThumbImage: 'data-exthumbimage',
                download: false,
            })
        }
        $(".carousel").on("slid.bs.carousel", (event) => {
            $(".owl-thumb-item:not('.d-none')[data-bs-slide-to=" + event.from + "]").removeClass("active");
            $(".owl-thumb-item:not('.d-none')[data-bs-slide-to=" + event.to + "]").addClass("active");
            let x = $(".owl-thumb-item.active:not('.d-none')[data-bs-slide-to=" + event.to + "]").width();
            $('.owl-thumbs').animate({
                scrollLeft: event.to * x
            }, 500);
        });
    });
</script>