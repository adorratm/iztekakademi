<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- footer-one -->
<footer class="footer-one">
    <div class="pattern-layer">
        <div class="pattern-1 hero-shape-three"></div>
        <div class="pattern-2" style="background-image: url(<?= asset_url("public/images/shape/shape-28.webp") ?>);"></div>
        <div class="pattern-3 hero-shape-three"></div>
        <div class="pattern-4" style="background-image: url(<?= asset_url("public/images/shape/shape-30.webp") ?>);"></div>
    </div>
    <div class="footer-top">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <figure class="footer-logo pull-left">
                    <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                        <picture>
                            <img width="150" height="150" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class=" rounded-circle bg-white lazyload img-fluid">
                        </picture>
                    </a>
                </figure>
                <ul class="social-links pull-right clearfix">
                    <?php if (!empty($settings->facebook)) : ?>
                        <li>
                            <a rel="nofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                <i aria-hidden="true" class="fa fa-facebook"></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->twitter)) : ?>
                        <li>
                            <a rel="nofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                <i aria-hidden="true" class="fa fa-twitter"></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->instagram)) : ?>
                        <li>
                            <a rel="nofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                <i aria-hidden="true" class="fa fa-instagram"></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->linkedin)) : ?>
                        <li>
                            <a rel="nofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                <i aria-hidden="true" class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->youtube)) : ?>
                        <li>
                            <a rel="nofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                <i aria-hidden="true" class="fa fa-youtube"></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->medium)) : ?>
                        <li>
                            <a rel="nofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                <i aria-hidden="true" class="fa fa-medium"></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->pinterest)) : ?>
                        <li>
                            <a rel="nofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                <i aria-hidden="true" class="fa fa-pinterest"></i>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-widget-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="widget-title">
                            <h4><?= lang("about") ?></h4>
                        </div>
                        <div class="text">
                            <p><?= stripslashes($settings->meta_description) ?></p>
                        </div>
                    </div>
                </div>
                <?php if (!empty($footer_menus)) : ?>
                    <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="widget-title">
                                <h4><?= lang("corporate") ?></h4>
                            </div>
                            <div class="widget-content">
                                <?= $footer_menus ?>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <?php if (!empty($footer_services)) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="widget-title">
                                <h4><?= lang("services") ?></h4>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <?php foreach ($footer_services as $key => $value) : ?>
                                        <li><a rel="dofollow" title="<?= $value->title ?>" href="<?= base_url(lang("services") . "/" . $value->seo_url) ?>"><?= $value->title ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="widget-title">
                            <h4><?= lang("contactUs") ?></h4>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li>
                                    <?php if (!empty(@json_decode($settings->address, TRUE)[0])) : ?>
                                        <a rel="dofollow" title="<?= lang("address") ?>" href="<?= base_url(lang("routes_contact")) ?>"><i class="fa-solid fa-map-marker-alt"></i> <?= @json_decode($settings->address, TRUE)[0] ?></a>
                                    <?php endif ?>
                                </li>
                                <li>
                                    <?php if (!empty(@json_decode($settings->phone, TRUE)[0])) : ?>
                                        <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= @json_decode($settings->phone, TRUE)[0] ?>"><i class="fa fa-phone-volume"></i> <?= @json_decode($settings->phone, TRUE)[0] ?></a>
                                    <?php endif ?>
                                </li>
                                <li>
                                    <?php if (!empty($settings->email)) : ?>
                                        <a rel="dofollow" title="Email" href="mailto:<?= $settings->email ?>"><i class="fa fa-envelope-open"></i> <?= $settings->email ?></a>
                                    <?php endif ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="bottom-inner clearfix">
                <div class="copyright pull-left">
                    <p>© 2023 <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>"><?= $settings->company_name ?></a> <?= lang("allRightsReserved") ?></p>
                </div>
                <ul class="footer-nav clearfix pull-right">
                    <li><a href="https://mutfakyapim.com"><img width="140" data-src="https://mutfakyapim.com/images/mutfak/logo.png" alt="Mutfak Yapım Dijital Reklam Ajansı" class="lazyload img-fluid" ></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- footer-one end -->


<!--Scroll to top-->
<div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar">
                <div class="bar-inner"></div>
            </div>
            <div class="scroll-bar-text g_color"><i class="fa-solid fa-angles-left"></i></div>
        </div>
    </div>
</div>
<!-- Scroll to top end -->



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
<script defer src="<?= asset_url("public/vendors/js/plugins.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/owl.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/wow.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/appear.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/scrollbar.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/parallax.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/circle-progress.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/jquery.countTo.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/jquery.nice-select.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/parallax-scroll.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/isotope.js") ?>"></script>

<script async defer src="<?= asset_url("public/js/iziModal.min.js") ?>"></script>
<script defer src="<?= asset_url("public/vendors/js/script.js") ?>"></script>
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