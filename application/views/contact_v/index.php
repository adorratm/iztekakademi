<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $addressTitles = @json_decode($settings->address_title, TRUE); ?>
<?php $phones = @json_decode($settings->phone, TRUE); ?>
<?php $faxes = @json_decode($settings->fax, TRUE); ?>
<?php $addresses = @json_decode($settings->address, TRUE); ?>
<?php $whatsapps = @json_decode($settings->whatsapp, TRUE); ?>
<?php $maps = @json_decode($settings->map, TRUE); ?>
<!-- Page Title -->
<section class="page-title p_relative centred">
    <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(<?= get_picture("settings_v", $settings->contact_logo) ?>);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1 class="d_block fs_60 lh_70 fw_bold mb_10"><?= $page_title ?></h1>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- contactinfo-one -->
<section class="contactinfo-one p_relative pt_130 centred">
    <div class="bg-color p_absolute l_0 t_0 r_0 bg-color-1"></div>
    <div class="auto-container">
        <div class="sec-title p_relative d_block mb_50">
            <h2 class="d_block fs_40 fw_bold"><?= lang("contact") ?></h2>
        </div>
        <?php foreach ($addresses as $key => $value) : ?>
            <div class="row align-items-stretch align-self-stretch align-content-stretch clearfix">
                <?php if (!empty($value)) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 info-column mb-3 mb-lg-0">
                        <div class="info-block-one wow fadeInUp animated h-100" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 b_shadow_6 pt_40 pr_40 pb_35 pl_40 h-100">
                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="fa fa-map-marker"></i></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 fw_sbold mb_7"><?= lang("address") ?></h4>
                                <p class="font_family_poppins"><?= @$value ?></p>
                                <p class="font_family_poppins"><a rel="dofollow" href="<?= base_url() ?>" title="<?= lang("viewOnMap") ?>" onclick="event.preventDefault();event.stopImmediatePropagation();$('.contact-map').html('<?= $maps[$key] ?>');$('html, body').animate({scrollTop: ($('.contact-map').offset().top - $('.sticky-header').height())}, 'slow');"><?= lang("viewOnMap") ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <?php if (!empty($phones[$key])) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 info-column mb-3 mb-lg-0">
                        <div class="info-block-one wow fadeInUp animated h-100" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 b_shadow_6 pt_40 pr_40 pb_35 pl_40 h-100">
                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="fa fa-phone-volume"></i></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 fw_sbold mb_7"><?= lang("phone") ?></h4>
                                <p class="font_family_poppins"><a href="tel:<?= @str_replace(" ", "", @$phones[$key]) ?>" rel="dofollow" title="<?= lang("phone") ?>"><?= @$phones[$key] ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <?php if (!empty($faxes[$key])) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 info-column mb-3 mb-lg-0">
                        <div class="info-block-one wow fadeInUp animated h-100" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 b_shadow_6 pt_40 pr_40 pb_35 pl_40 h-100">
                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="fa fa-fax"></i></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 fw_sbold mb_7"><?= lang("fax") ?></h4>
                                <p class="font_family_poppins"><a href="tel:<?= @str_replace(" ", "", @$faxes[$key]) ?>" rel="dofollow" title="<?= lang("fax") ?>"><?= @$faxes[$key] ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <?php if (!empty($whatsapps[$key])) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 info-column mb-3 mb-lg-0">
                        <div class="info-block-one wow fadeInUp animated h-100" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10 b_shadow_6 pt_40 pr_40 pb_35 pl_40 h-100">
                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="fa fa-whatsapp"></i></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 fw_sbold mb_7"><?= lang("whatsapp") ?></h4>
                                <p class="font_family_poppins"><a href="https://api.whatsapp.com/send?phone=<?= @str_replace(" ", "", @$whatsapps[$key]) ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>." rel="nofollow" title="<?= lang("whatsapp") ?>"><?= @$whatsapps[$key] ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <div class="col-lg-3 col-md-6 col-sm-12 info-column mb-3 mb-lg-0">
                    <div class="info-block-one wow fadeInUp animated h-100" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block b_radius_10 b_shadow_6 pt_40 pr_40 pb_35 pl_40 h-100">
                            <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                <div class="icon p_relative d_iblock"><i class="fa fa-envelope-open"></i></div>
                            </div>
                            <h4 class="d_block fs_20 lh_30 fw_sbold mb_7"><?= lang("email") ?></h4>
                            <p class="font_family_poppins"><a href="mailto:<?= $settings->email ?>" rel="dofollow" title="<?= lang("fax") ?>"><?= $settings->email ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav nav-justified border-top mt-3 pt-3">
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
        <?php endforeach ?>
    </div>
</section>
<!-- contactinfo-one end -->


<!-- contact-three end -->
<section class="contact-three p_relative sec-pad">
    <div class="shape">
        <div class="shape-1 p_absolute l_90" style="background-image: url(<?= asset_url("public/images/shape/shape-208.webp") ?>);"></div>
        <div class="shape-2 p_absolute r_130 b_0" style="background-image: url(<?= asset_url("public/images/shape/shape-209.webp") ?>);"></div>
    </div>
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 map-column">
                <div class="map-inner p_relative contact-map d_block">
                    <?= @htmlspecialchars_decode(@$maps[0]) ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                <div class="content-box p_relative d_block pl_50">
                    <div class="text p_relative d_block mb_30">
                        <h3 class="d_block fs_30 lh_40 fw_bold mb_15"><?= lang("contactForm") ?></h3>
                        <p class="font_family_poppins"><?= lang("contactFormDesc") ?></p>
                    </div>
                    <div class="form-inner p_relative ml_5 mr_5">
                        <form onsubmit="return false" enctype="multipart/form-data" method="POST" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="full_name" id="full_name" placeholder="<?= lang("namesurname") ?>" required minlength="2" maxlength="70">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" id="email" placeholder="<?= lang("emailaddress") ?>" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" id="phone" placeholder="<?= lang("phonenumber") ?>" required minlength="11" maxlength="20">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" id="subject" placeholder="<?= lang("subject") ?>" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="comment" id="comment" cols="30" rows="8" placeholder="<?= lang("message") ?>" required></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn theme-btn-eight btnSubmitForm" type="submit" aria-label="<?= $settings->company_name ?>" name="submit-form" data-url="<?= base_url(lang("routes_contact-form")) ?>"><?= lang("submit") ?></button>
                                </div>
                            </div>
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-three end -->