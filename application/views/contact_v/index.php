<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $addressTitles = @json_decode($settings->address_title, TRUE); ?>
<?php $phones = @json_decode($settings->phone, TRUE); ?>
<?php $faxes = @json_decode($settings->fax, TRUE); ?>
<?php $addresses = @json_decode($settings->address, TRUE); ?>
<?php $whatsapps = @json_decode($settings->whatsapp, TRUE); ?>
<?php $maps = @json_decode($settings->map, TRUE); ?>



<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?= get_picture("settings_v", $settings->contact_logo) ?>);">
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

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 mb-4">
                <div class="contact-page__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline"><?= lang("contact") ?></span>
                        </div>
                        <h2 class="section-title__title"><?= lang("contactInformation") ?></span>
                        </h2>
                    </div>
                    <?php foreach ($addresses as $key => $value) : ?>
                        <ul class="contact-page__points list-unstyled">
                            <?php if (!empty($value)) : ?>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><?= lang("address") ?></p>
                                        <h3><?= @$value ?></h3>
                                        <p><a rel="dofollow" href="<?= base_url() ?>" title="<?= lang("viewOnMap") ?>" onclick="event.preventDefault();event.stopImmediatePropagation();$('.contact-map').html('<?= $maps[$key] ?>');$('html, body').animate({scrollTop: ($('.contact-map').offset().top - $('.sticky-header').height())}, 'slow');"><?= lang("viewOnMap") ?></a></p>
                                    </div>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($phones[$key])) : ?>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-phone-volume"></span>
                                    </div>
                                    <div class="text">
                                        <p><?= lang("phone") ?></p>
                                        <h3><a href="tel:<?= @str_replace(" ", "", @$phones[$key]) ?>" rel="dofollow" title="<?= lang("phone") ?>"><?= @$phones[$key] ?></a></h3>
                                    </div>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($faxes[$key])) : ?>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-fax"></span>
                                    </div>
                                    <div class="text">
                                        <p><?= lang("fax") ?></p>
                                        <h3><a href="tel:<?= @str_replace(" ", "", @$faxes[$key]) ?>" rel="dofollow" title="<?= lang("fax") ?>"><?= @$faxes[$key] ?></a></h3>
                                    </div>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($whatsapps[$key])) : ?>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-whatsapp"></span>
                                    </div>
                                    <div class="text">
                                        <p>Whatsapp</p>
                                        <h3><a href="https://api.whatsapp.com/send?phone=<?= @str_replace(" ", "", @$whatsapps[$key]) ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>." rel="nofollow" title="<?= lang("whatsapp") ?>"><?= @$whatsapps[$key] ?></a></h3>
                                    </div>
                                </li>
                            <?php endif ?>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-envelope-open"></span>
                                </div>
                                <div class="text">
                                    <p><?= lang("email") ?></p>
                                    <h3><a href="mailto:<?= $settings->email ?>" rel="dofollow" title="<?= lang("fax") ?>"><?= $settings->email ?></a></h3>
                                </div>
                            </li>
                            <?php if (!empty($settings->facebook) || !empty($settings->instagram) || !empty($settings->twitter) || !empty($settings->youtube) || !empty($settings->linkedin) || !empty($settings->pinterest) || !empty($settings->medium)) : ?>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-comments"></span>
                                    </div>
                                    <div class="text">
                                        <p><?= lang("social") ?></p>
                                        <ul class="nav nav-justified mt-3">
                                            <?php if (!empty($settings->facebook)) : ?>
                                                <li class="align-items-center my-auto py-auto align-self-center nav-item">
                                                    <a rel="dofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                                        <i class='fa fa-facebook color fa-2x'></i>
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (!empty($settings->twitter)) : ?>
                                                <li class="align-items-center my-auto py-auto align-self-center nav-item">
                                                    <a rel="dofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                                        <i class='fa fa-twitter color fa-2x'></i>
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (!empty($settings->instagram)) : ?>
                                                <li class="align-items-center my-auto py-auto align-self-center nav-item">
                                                    <a rel="dofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                                        <i class='fa fa-instagram color fa-2x'></i>
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (!empty($settings->linkedin)) : ?>
                                                <li class="align-items-center my-auto py-auto align-self-center nav-item">
                                                    <a rel="dofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                                        <i class='fa fa-linkedin color fa-2x'></i>
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (!empty($settings->youtube)) : ?>
                                                <li class="align-items-center my-auto py-auto align-self-center nav-item">
                                                    <a rel="dofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                                        <i class='fa fa-youtube color fa-2x'></i>
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (!empty($settings->medium)) : ?>
                                                <li class="align-items-center my-auto py-auto align-self-center nav-item">
                                                    <a rel="dofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                                        <i class='fa fa-medium color fa-2x'></i>
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                            <?php if (!empty($settings->pinterest)) : ?>
                                                <li class="align-items-center my-auto py-auto align-self-center nav-item">
                                                    <a rel="dofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                                        <i class='fa fa-pinterest color fa-2x'></i>
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                        </ul>
                                    </div>
                                </li>
                            <?php endif ?>
                        </ul>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="contact-page__left">
                    <div class="contact-page__form-box">
                        <form onsubmit="return false" enctype="multipart/form-data" class="contact-page__form contact-form-validated" method="POST" id="contact-form" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" name="full_name" id="full_name" placeholder="<?= lang("namesurname") ?>" required minlength="2" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="email" name="email" id="email" placeholder="<?= lang("emailaddress") ?>" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" name="phone" id="phone" placeholder="<?= lang("phonenumber") ?>" required minlength="11" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" name="subject" id="subject" placeholder="<?= lang("subject") ?>" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box text-message-box">
                                        <textarea name="comment" id="comment" cols="30" rows="8" placeholder="<?= lang("message") ?>" required></textarea>
                                    </div>
                                    <div class="contact-page__btn-box">
                                        <button class="thm-btn contact-page__btn btnSubmitForm" type="submit" aria-label="<?= $settings->company_name ?>" name="submit-form" data-url="<?= base_url(lang("routes_contact-form")) ?>"><?= lang("submit") ?></button>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->

<!--Google Map Start-->
<section class="google-map-two contact-map">
    <?= @htmlspecialchars_decode(@$maps[0]) ?>
</section>
<!--Google Map End-->