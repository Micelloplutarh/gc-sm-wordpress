<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Header</title>
</head>
<body>
    <section class="header">
        <div class="header__site-logo">
            <img src="<?php bloginfo('template_url'); ?>/assets/icon/smart-fmcg.svg" alt="">
        </div>
        <div class="header__menu">
            <ul class="header__menu-item">
                <li><a href="/about-us">о компании</a></li>
                <li><a href="/how-we-work">как мы работаем</a></li>
                <li><a href="/contacts">контакты</a></li>
                <li><a href="/#">продукция</a></li>
            </ul>
        </div>
        <div class="header__right-block">
            <p>+7 (495) 971 39 99</p>
            <button class="header__button">каталог</button>
            <div class="language-switch">
                <h3>
                    <a>rus</a>
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/arrow-down.svg" alt="">
                  </h3>
                  <ul>
                    <li>
                      <a>eng</a>
                    </li>
                  </ul>
            </div>
        </div>
    </section>

</body>