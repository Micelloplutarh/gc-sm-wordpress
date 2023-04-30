<?php
/*
Template Name: contacts
Template Post Type: post, page, product
*/
?>
    <?php get_header(); ?>
    <section class="main-contacts">
        <h1>Контакты</h1>
        <p>Работаем Ежедневно с 08:00 до 18:00 (Мск) <br>(сб., вс. — выходной)</p>
    </section>
    <section class="maps">
        <div class="contact-tabs-wrapper">
        <div class="page-contacts">
            <div class="page-contacts-wrapper">
                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35915.53265853857!2d37.83137330430066!3d55.76335232228168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414acbabd918f9d3%3A0x20e47883c02e9d18!2z0KDQtdGD0YLQvtCyLCDQnNC-0YHQutC-0LLRgdC60LDRjyDQvtCx0Lsu!5e0!3m2!1sru!2sru!4v1679585485561!5m2!1sru!2sru" width="70%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    <div class="page-contacts__info">
                        <h2>Контакты</h2>
                        <span class="page-contacts__info__list-item aifs"><img class="icon icon-phone" src="<?php bloginfo('template_url'); ?>/assets/icon/phone.svg" alt=""> <span class="phone-wrap-space"> 8 (800) 201-39-99<br> 8 (977) 971-39-99<br> 8 (495) 971-39-99</span></span>
                        <span class="page-contacts__info__list-item item-bottom"><img class="icon mail-icon" src="<?php bloginfo('template_url'); ?>/assets/icon/mail copy 2.svg" alt=""> info@gc-sm.com</span>
                        <span class="page-contacts__info__list-item__geo aifs"><img class="icon ic-b" src="<?php bloginfo('template_url'); ?>/assets/icon/pin.svg" alt=""> г. Москва, БЦ «Victory park plaza»</span>
                        <span class="page-contacts__info__list-item__geo aifs"><img class="icon ic-b" src="<?php bloginfo('template_url'); ?>/assets/icon/time.svg" alt=""> Ежедневно с 08:00 до 18:00 (Мск)<br> (сб., вс. — выходной)</span>
                    </div>
                </div>
            </div>
            <div class="page-contacts-wrapper__tabs">
                <div class="page-contacts-wrapper__tabs-kyrgyzstan tabs tabs-bordered-1-2"> 
                    <div class="page-contacts-wrapper__tabs__bordered tabs-flex"><img src="<?php bloginfo('template_url'); ?>/assets/icon/colored-geo.svg" alt=""><p>Киргизия</p></div>
                    <div class="brdr"></div>
                    <div class="page-contacts-wrapper__tabs__no-bordered tabs-flex"><img src="<?php bloginfo('template_url'); ?>/assets/icon/city-hb.svg" alt=""><p>Бишкек</p></div>
                </div>
                <div class="page-contacts-wrapper__tabs-kyrgyzstan tabs tabs-bordered"> 
                    <div class="page-contacts-wrapper__tabs__bordered tabs-flex"><img src="<?php bloginfo('template_url'); ?>/assets/icon/colored-geo.svg" alt=""><p>ОАЭ</p></div>
                    <div class="brdr"></div>
                    <div class="page-contacts-wrapper__tabs__no-bordered tabs-flex"><img src="<?php bloginfo('template_url'); ?>/assets/icon/city-hb.svg" alt=""><p>Дубай</p></div>
                </div>
                <div class="page-contacts-wrapper__tabs-kyrgyzstan tabs tabs-bordered-1-2"> 
                    <div class="page-contacts-wrapper__tabs__bordered tabs-flex"><img src="<?php bloginfo('template_url'); ?>/assets/icon/colored-geo.svg" alt=""><p>Россия</p></div>
                    <div class="brdr"></div>
                    <div class="page-contacts-wrapper__tabs__no-bordered tabs-flex"><img src="<?php bloginfo('template_url'); ?>/assets/icon/city-hb.svg" alt=""><p>Москва</p></div>
                </div>
                <div class="page-contacts-wrapper__tabs-kyrgyzstan tabs tabs-bordered-1-2"> 
                    <div class="page-contacts-wrapper__tabs__bordered tabs-flex"><img src="<?php bloginfo('template_url'); ?>/assets/icon/colored-geo.svg" alt=""><p>Турция</p></div>
                    <div class="brdr"></div>
                    <div class="page-contacts-wrapper__tabs__no-bordered tabs-flex"><img src="<?php bloginfo('template_url'); ?>/assets/icon/city-hb.svg" alt=""><p>Стамбул</p></div>
                </div>
                <div class="page-contacts-wrapper__tabs-kyrgyzstan tabs tabs-bordered"> 
                    <div class="page-contacts-wrapper__tabs__bordered tabs-flex"><img src="<?php bloginfo('template_url'); ?>/assets/icon/colored-geo.svg" alt=""><p>Казахстан</p></div>
                    <div class="brdr"></div>
                    <div class="page-contacts-wrapper__tabs__no-bordered tabs-flex"><img src="<?php bloginfo('template_url'); ?>/assets/icon/city-hb.svg" alt=""><p>Алматы</p></div>
                </div>
            </div> 
        </div>
    </section>
        <?php get_footer(); ?>