<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/style_footer.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,700;1,600&display=swap" rel="stylesheet">
        <title>Footer</title>
    </head> -->
<body>
    <section class="footer">
        <div class="footer__left">
            <a href="/index.html"><img src="<?php bloginfo('template_url'); ?>/assets/icon/smart-fmcg.svg" alt=""></a>
            <h2 class="text-uppercase">ГРУППА КОМПАНИЙ<br>«SMART FMCG»</h2>
            <p class="footer__left__pp">Privacy Policy</p>
            <p>© 2020 SMART FMCG company. Все права<br>защищены.</p>
        </div>
        <div class="footer__middle">
            <div class="footer__middle-menu">
                <div class="footer__middle-menu-wrapper text-uppercase">
                    <div class="footer__middle-menu-item ">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/arrow-color.svg" alt="">
                        <p>О компании</p>
                        <a href="/about-us.html"></a>
                    </div>
                    <div class="footer__middle-menu-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/arrow-color.svg" alt="">
                        <a href="/contacts.html"></a>
                        <p>контакты</p>
                    </div>
                    <div class="footer__middle-menu-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/arrow-color.svg" alt="">
                        <a href="/how-we-work.html">как мы работаем</a>
                    </div>
                    <div class="footer__middle-menu-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/arrow-color.svg" alt="">
                        <p>продукция</p>
                    </div>
                </div>
                <div class="footer__middle-menu-city-wrapper">
                    <div class="footer__middle-menu-city">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/geo-color.svg" alt="">
                        <p>Турция, Стамбул</p>
                    </div>
                    <div class="footer__middle-menu-city">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/geo-color.svg" alt="">
                        <p>ОАЭ, Дубай</p>
                    </div>
                    <div class="footer__middle-menu-city">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/geo-color.svg" alt="">
                        <p>Киргизия, Бишкек</p>
                    </div>
                    <div class="footer__middle-menu-city">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/geo-color.svg" alt="">
                        <p>Казахстан, Алматы</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__right">
            <div class="footer__right-text-block">
                <h3>+7 (495) 971 39 99</h3>
                <p>info@smart-fmcg.com</p>
            </div>
        <div class="footer__right-link">
            <div class="footer__right__tg-link">
                <img src="<?php bloginfo('template_url'); ?>/assets/icon/telegram.svg" alt="">
                <p>Telegram</p>
            </div>
            <div class="footer__right__wa-link">
                <img src="<?php bloginfo('template_url'); ?>/assets/icon/whatsapp 2.svg" alt="">
                <p>WhatsApp</p>
            </div>
        </div>
            <div class="footer__right__social-link">
                <p>f</p>
                <p>in</p>
            </div>
        </div>
    </section>

    <?php wp_footer(); ?>

</body>