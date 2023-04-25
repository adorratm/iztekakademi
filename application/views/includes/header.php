<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- main header -->
<header class="main-header">
    <!-- header-top-one -->
    <div class="header-top-one p_relative d-none d-xl-block">
        <div class="auto-container">
            <div class="top-inner clearfix p_relative">
                <div class="shape p_absolute t_0" style="background-image: url(<?= asset_url("public/images/shape/shape-1.webp") ?>);"></div>
                <div class="top-left pull-left">
                    <ul class="social-links clearfix">
                        <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><?= lang("social") ?>:</li>
                        <?php if (!empty($settings->facebook)) : ?>
                            <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55">
                                <a class="p_relative d_iblock fs_16" rel="nofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                    <i aria-hidden="true" class="fa fa-facebook"></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->twitter)) : ?>
                            <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55">
                                <a class="p_relative d_iblock fs_16" rel="nofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                    <i aria-hidden="true" class="fa fa-twitter"></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->instagram)) : ?>
                            <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55">
                                <a class="p_relative d_iblock fs_16" rel="nofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                    <i aria-hidden="true" class="fa fa-instagram"></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->linkedin)) : ?>
                            <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55">
                                <a class="p_relative d_iblock fs_16" rel="nofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                    <i aria-hidden="true" class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->youtube)) : ?>
                            <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55">
                                <a class="p_relative d_iblock fs_16" rel="nofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                    <i aria-hidden="true" class="fa fa-youtube"></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->medium)) : ?>
                            <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55">
                                <a class="p_relative d_iblock fs_16" rel="nofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                    <i aria-hidden="true" class="fa fa-medium"></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->pinterest)) : ?>
                            <a class="p_relative d_iblock fs_16" rel="nofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                <i aria-hidden="true" class="fa fa-pinterest"></i>
                            </a>
                        <?php endif ?>
                    </ul>
                </div>
                <div class="top-right pull-right">
                    <ul class="info clearfix">
                        <li class="p_relative d_iblock float_left mr_60 lh_55 fs_16">
                            <?php if (!empty(@json_decode($settings->address, TRUE)[0])) : ?>
                                <p><a rel="dofollow" title="<?= lang("address") ?>" href="<?= base_url(lang("routes_contact")) ?>"><i class="fa-solid fa-map-marker-alt"></i> <?= @json_decode($settings->address, TRUE)[0] ?></a></p>
                            <?php endif ?>
                        </li>
                        <li class="p_relative d_iblock float_left mr_60 lh_55 fs_16">
                            <p>
                                <?php if (!empty(@json_decode($settings->phone, TRUE)[0])) : ?>
                                    <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= @json_decode($settings->phone, TRUE)[0] ?>"><i class="fa fa-phone-volume"></i> <?= @json_decode($settings->phone, TRUE)[0] ?></a>
                                <?php endif ?>
                            </p>
                        </li>
                        <li class="p_relative d_iblock float_left lh_55 fs_16">
                            <p>
                                <?php if (!empty($settings->email)) : ?>
                                    <a rel="dofollow" title="Email" href="mailto:<?= $settings->email ?>"><i class="fa-solid fa-envelope-open"></i> <?= $settings->email ?></a>
                                <?php endif ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="container px-3 px-xl-3">
            <div class="outer-box">
                <div class="logo-box me-auto">
                    <figure class="logo">
                        <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                            <picture>
                                <img width="110" height="110" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
                            </picture>
                        </a>
                    </figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="fa fa-bars"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <?= $menus ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="container px-3 px-xl-3">
            <div class="outer-box">
                <div class="logo-box me-auto">
                    <figure class="logo">
                        <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                            <picture>
                                <img width="110" height="110" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
                            </picture>
                        </a>
                    </figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo">
            <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                <picture>
                    <img width="150" height="150" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
                </picture>
            </a>
        </div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4><?= lang("contact") ?></h4>
            <ul>
                <li>
                    <?php if (!empty(@json_decode($settings->address, TRUE)[0])) : ?>
                        <p><a rel="dofollow" title="<?= lang("address") ?>" href="<?= base_url(lang("routes_contact")) ?>"><i class="fa-solid fa-map-marker-alt"></i> <?= @json_decode($settings->address, TRUE)[0] ?></a></p>
                    <?php endif ?>
                </li>
                <li>
                    <?php if (!empty(@json_decode($settings->phone, TRUE)[0])) : ?>
                        <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= @json_decode($settings->phone, TRUE)[0] ?>"><i class="fa fa-phone-volume"></i> <?= @json_decode($settings->phone, TRUE)[0] ?></a>
                    <?php endif ?>
                </li>
                <li>
                    <?php if (!empty($settings->email)) : ?>
                        <a rel="dofollow" title="Email" href="mailto:<?= $settings->email ?>"><i class="fa-solid fa-envelope-open"></i> <?= $settings->email ?></a>
                    <?php endif ?>
                </li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <?php if (!empty($settings->facebook)) : ?>
                    <li>
                        <a rel="nofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                            <span aria-hidden="true" class="fa fa-facebook"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if (!empty($settings->twitter)) : ?>
                    <li>
                        <a rel="nofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                            <span aria-hidden="true" class="fa fa-twitter"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if (!empty($settings->instagram)) : ?>
                    <li>
                        <a rel="nofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                            <span aria-hidden="true" class="fa fa-instagram"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if (!empty($settings->linkedin)) : ?>
                    <li>
                        <a rel="nofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                            <span aria-hidden="true" class="fa fa-linkedin"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if (!empty($settings->youtube)) : ?>
                    <li>
                        <a rel="nofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                            <span aria-hidden="true" class="fa fa-youtube"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if (!empty($settings->medium)) : ?>
                    <li>
                        <a rel="nofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                            <span aria-hidden="true" class="fa fa-medium"></span>
                        </a>
                    </li>
                <?php endif ?>
                <?php if (!empty($settings->pinterest)) : ?>
                    <li>
                        <a rel="nofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                            <span aria-hidden="true" class="fa fa-pinterest"></span>
                        </a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->