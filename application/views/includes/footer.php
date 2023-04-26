<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__shape-1 float-bob-x">
        <img loading="lazy" class="img-fluid lazyload" data-src="<?= asset_url("public/images/shapes/site-footer-shape-1.webp") ?>" alt="<?= $settings->company_name ?>">
    </div>
    <div class="site-footer__bg" style="background-image: url(<?= asset_url("public/images/backgrounds/site-footer-bg.webp") ?>);">
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo bg-white rounded">
                            <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                                <picture>
                                    <img width="300" height="43" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
                                </picture>
                            </a>
                        </div>
                        <p class="footer-widget__about-text"><?= stripslashes($settings->meta_description) ?></p>
                        <?php if (!empty($settings->facebook) || !empty($settings->instagram) || !empty($settings->twitter) || !empty($settings->youtube) || !empty($settings->linkedin) || !empty($settings->pinterest) || !empty($settings->medium)) : ?>
                            <div class="site-footer__social">
                                <?php if (!empty($settings->facebook)) : ?>
                                    <a rel="nofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                        <i aria-hidden="true" class="fa fa-facebook"></i>
                                    </a>
                                <?php endif ?>
                                <?php if (!empty($settings->twitter)) : ?>
                                    <a rel="nofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                        <i aria-hidden="true" class="fa fa-twitter"></i>
                                    </a>
                                <?php endif ?>
                                <?php if (!empty($settings->instagram)) : ?>
                                    <a rel="nofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                        <i aria-hidden="true" class="fa fa-instagram"></i>
                                    </a>
                                <?php endif ?>
                                <?php if (!empty($settings->linkedin)) : ?>
                                    <a rel="nofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                        <i aria-hidden="true" class="fa fa-linkedin"></i>
                                    </a>
                                <?php endif ?>
                                <?php if (!empty($settings->youtube)) : ?>
                                    <a rel="nofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                        <i aria-hidden="true" class="fa fa-youtube"></i>
                                    </a>
                                <?php endif ?>
                                <?php if (!empty($settings->medium)) : ?>
                                    <a rel="nofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                        <i aria-hidden="true" class="fa fa-medium"></i>
                                    </a>
                                <?php endif ?>
                                <?php if (!empty($settings->pinterest)) : ?>
                                    <a rel="nofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                        <i aria-hidden="true" class="fa fa-pinterest"></i>
                                    </a>
                                <?php endif ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <?php if (!empty($footer_menus)) : ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__link">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title"><?= lang("corporate") ?></h3>
                            </div>
                            <?= $footer_menus ?>
                        </div>
                    </div>
                <?php endif ?>
                <?php if (!empty($footer_services)) : ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__link">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title"><?= lang("services") ?></h3>
                            </div>
                            <ul class="footer-widget__link-list list-unstyled">
                                <?php foreach ($footer_services as $key => $value) : ?>
                                    <li><a rel="dofollow" title="<?= $value->title ?>" href="<?= base_url(lang("services") . "/" . $value->seo_url) ?>"><?= $value->title ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                <?php endif ?>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="footer-widget__column footer-widget__newsletter">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title"><?= lang("contactUs") ?></h3>
                        </div>
                        <ul class="footer-widget__Contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-envelope"></span>
                                </div>
                                <div class="text">
                                    <a rel="dofollow" title="<?= lang("email") ?>" href="mailto:<?= $settings->email ?>"><?= $settings->email ?></a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-phone-volume"></span>
                                </div>
                                <div class="text">
                                    <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= @str_replace(" ", "", @json_decode($settings->phone, TRUE)[0]) ?>"><?= @json_decode($settings->phone, TRUE)[0] ?></a>
                                </div>
                            </li>
                            <li>
                                <a href="https://mutfakyapim.com"><img width="140" data-src="https://mutfakyapim.com/images/mutfak/logo.png" alt="Mutfak Yapım Dijital Reklam Ajansı" class="lazyload img-fluid" style="filter:drop-shadow(1px 1px 1px black)"></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row align-items-center align-self-center align-content-center">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text mb-0">© 2023 <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>"><?= $settings->company_name ?></a> <?= lang("allRightsReserved") ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->


<a href="<?= base_url() ?>" title="<?= $settings->company_name ?>" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa-solid fa-angles-right"></i></a>

</div>

<!-- Jquery -->

<script src="<?= asset_url("public/js/jquery.min.js") ?>"></script>
<script>
    jQuery.event.special.touchstart = {
        setup: function(_, ns, handle) {
            this.addEventListener("touchstart", handle, {
                passive: !ns.includes("noPreventDefault")
            });
        }
    };
    jQuery.event.special.touchmove = {
        setup: function(_, ns, handle) {
            this.addEventListener("touchmove", handle, {
                passive: !ns.includes("noPreventDefault")
            });
        }
    };
    jQuery.event.special.wheel = {
        setup: function(_, ns, handle) {
            this.addEventListener("wheel", handle, {
                passive: true
            });
        }
    };
    jQuery.event.special.mousewheel = {
        setup: function(_, ns, handle) {
            this.addEventListener("mousewheel", handle, {
                passive: true
            });
        }
    };
</script>
<!-- #Jquery -->
<!--FOOTER END-->
<?php if (!empty($settings->facebook) || !empty($settings->instagram) || !empty($settings->twitter) || !empty($settings->youtube) || !empty($settings->linkedin) || !empty($settings->pinterest) || !empty($settings->medium)) : ?>
    <div class="btn-group dropstart fixed-linkedin bg-primary">
        <a class="dropdown-toggle" href="<?= base_url() ?>" data-bs-title="<?= lang("social") ?>" data-bs-toggle="dropdown" data-bs-placement="left" data-bs-title="<?= lang("social") ?>" aria-expanded="false">
            <i class="fa fa-comments text-white" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="<?= lang("social") ?>"></i>
        </a>
        <ul class="dropdown-menu">
            <?php if (!empty($settings->facebook)) : ?>
                <li>
                    <a class="dropdown-item" rel="nofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                        <i class='fa fa-facebook color'></i> Facebook
                    </a>
                </li>
            <?php endif ?>
            <?php if (!empty($settings->twitter)) : ?>
                <li>
                    <a class="dropdown-item" rel="nofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                        <i class='fa fa-twitter color'></i> Twitter
                    </a>
                </li>
            <?php endif ?>
            <?php if (!empty($settings->instagram)) : ?>
                <li>
                    <a class="dropdown-item" rel="nofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                        <i class='fa fa-instagram color'></i> Instagram
                    </a>
                </li>
            <?php endif ?>
            <?php if (!empty($settings->linkedin)) : ?>
                <li>
                    <a class="dropdown-item" rel="nofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                        <i class='fa fa-linkedin color'></i> Linkedin
                    </a>
                </li>
            <?php endif ?>
            <?php if (!empty($settings->youtube)) : ?>
                <li>
                    <a class="dropdown-item" rel="nofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                        <i class='fa fa-youtube color'></i> Youtube
                    </a>
                </li>
            <?php endif ?>
            <?php if (!empty($settings->medium)) : ?>
                <li>
                    <a class="dropdown-item" rel="nofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                        <i class='fa fa-medium color'></i> Medium
                    </a>
                </li>
            <?php endif ?>
            <?php if (!empty($settings->pinterest)) : ?>
                <li>
                    <a class="dropdown-item" rel="nofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                        <i class='fa fa-pinterest color'></i> Pinterest
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </div>
<?php endif ?>
<?php if (!empty(@json_decode($settings->phone, TRUE)[0])) : ?>
    <a rel="dofollow" class="fixed-phone text-white bg-danger" href="tel:<?= @json_decode($settings->phone, TRUE)[0] ?>" data-bs-title="<?= lang("phone") ?>" data-bs-toggle="tooltip" data-bs-placement="left"><i class="fa fa-phone"></i></a>
<?php endif ?>
<?php if (!empty(@json_decode($settings->whatsapp, TRUE)[0])) : ?>
    <a rel="nofollow" target="_blank" class="fixed-whatsapp text-white bg-success" href="https://api.whatsapp.com/send?phone=<?= str_replace(" ", "", @json_decode($settings->whatsapp, TRUE)[0]) ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>." data-bs-title="WhatsApp" data-bs-toggle="tooltip" data-bs-placement="left"><i class="fa fa-whatsapp"></i></a>
<?php endif ?>

<!--layout end-->
<!-- SCRIPTS -->
<!-- Lazysizes -->
<script async defer src="<?= asset_url("public/js/lazysizes.min.js") ?>"></script>
<!-- #Lazysizes -->

<!-- iziToast -->
<script defer src="<?= asset_url("public/js/iziToast.min.js") ?>"></script>
<!-- #iziToast -->

<script defer src="<?= asset_url("public/js/lightgallery-all.min.js") ?>"></script>

<!-- Site Scripts -->
<script defer src="<?= asset_url("public/js/jquery-migrate.min.js") ?>"></script>
<script defer src="<?= asset_url("public/js/bootstrap.bundle.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/jarallax.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/jquery.appear.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/jquery.circle-progress.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/jquery.validate.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/nouislider.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/odometer.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/swiper.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/tiny-slider.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/wNumb.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/wow.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/isotope.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/countdown.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/owl.carousel.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/jquery.bxslider.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/bootstrap-select.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/vegas.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/jquery-ui.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/timePicker.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/jquery.circleType.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/jquery.lettering.min.js") ?>"></script>

<script async defer src="<?= asset_url("public/js/iziModal.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/sinace.js") ?>"></script>
<script defer src="<?= asset_url("public/js/app.js") ?>"></script>
<!-- #Site Scripts -->

<!-- SCRIPTS -->
<script>
    window.addEventListener('DOMContentLoaded', () => {
        $(document).on("click", ".map-address", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let dest = $(this).data("destination");
            if (navigator.geolocation) {
                if ((navigator.platform.indexOf("iPhone") != -1) ||
                    (navigator.platform.indexOf("iPad") != -1) ||
                    (navigator.platform.indexOf("iPod") != -1))
                    window.open("comgooglemapsurl://maps.google.com/maps/dir/?api=1&destination=" + dest + "&travelmode=driving");
                else {
                    window.open("https://www.google.com/maps/dir/?api=1&destination=" + dest + "&travelmode=driving");
                }
            } else {
                iziToast.show({
                    type: "error",
                    title: "<?= lang("error") ?>",
                    message: "<?= lang("allowGeoLocation") ?>",
                    position: "topCenter"
                });
            }
        });
    });
</script>
<?php $this->load->view("includes/alert") ?>
</body>

</html>