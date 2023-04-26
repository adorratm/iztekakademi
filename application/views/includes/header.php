<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__logo">
                    <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                        <picture>
                            <img width="250" height="43" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
                        </picture>
                    </a>
                </div>
                <div class="main-menu__call">
                    <div class="main-menu__call-icon">
                        <span class="fa fa-phone-volume"></span>
                    </div>
                    <div class="main-menu__call-content">
                        <p class="main-menu__call-sub-title"><?= lang("contactUs") ?></p>
                        <h5 class="main-menu__call-number"><a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= @str_replace(" ", "", @json_decode($settings->phone, TRUE)[0]) ?>"><?= @json_decode($settings->phone, TRUE)[0] ?></a></h5>
                    </div>
                </div>
                <div class="main-menu__wrapper-inner-content">
                    <div class="main-menu__top">
                        <div class="main-menu__top-inner">
                            <div class="main-menu__top-left">
                                <ul class="list-unstyled main-menu__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <p><a rel="dofollow" title="<?= lang("email") ?>" href="mailto:<?= $settings->email ?>"><?= $settings->email ?></a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker"></i>
                                        </div>
                                        <div class="text">
                                            <p><a rel="dofollow" title="<?= lang("address") ?>" href="<?= base_url(lang("routes_contact")) ?>"><?= @json_decode($settings->address, TRUE)[0] ?></a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__top-right">
                                <?php if (!empty($settings->facebook) || !empty($settings->instagram) || !empty($settings->twitter) || !empty($settings->youtube) || !empty($settings->linkedin) || !empty($settings->pinterest) || !empty($settings->medium)) : ?>
                                    <div class="main-menu__social">
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
                    </div>
                    <div class="main-menu__bottom">
                        <div class="main-menu__bottom-inner">
                            <div class="main-menu__main-menu-box">
                                <a href="<?= base_url() ?>" rel="dofollow" title="<?= $settings->company_name ?>" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <?= $menus ?>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__btn-box">
                                    <a rel="dofollow" href="<?= base_url(lang("routes_contact")) ?>" title="<?= lang("contact") ?>" class="thm-btn main-menu__btn"><?= lang("contact") ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times" style="filter:drop-shadow(1px 1px 1px black)"></i></span>

        <div class="logo-box bg-white text-center">
            <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                <picture>
                    <img width="270" height="43" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
                </picture>
            </a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a rel="dofollow" title="<?= lang("email") ?>" href="mailto:<?= $settings->email ?>"><?= $settings->email ?></a>
            </li>
            <li>
                <i class="fa fa-phone-volume"></i>
                <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= @str_replace(" ", "", @json_decode($settings->phone, TRUE)[0]) ?>"><?= @json_decode($settings->phone, TRUE)[0] ?></a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <?php if (!empty($settings->facebook) || !empty($settings->instagram) || !empty($settings->twitter) || !empty($settings->youtube) || !empty($settings->linkedin) || !empty($settings->pinterest) || !empty($settings->medium)) : ?>
                <div class="mobile-nav__social">
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
                </div><!-- /.mobile-nav__social -->
            <?php endif ?>
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->