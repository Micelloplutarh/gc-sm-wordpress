<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
</head>
<body>
    <section class="header">
        <div class="header__site-logo">
            <a href="/home"><img src="<?php bloginfo('template_url'); ?>/assets/icon/smart-fmcg.svg" alt=""></a>
        </div>
        <div class="header-menu-wrapper">
            <div class="menu-burger__header">
                <span></span>
            </div> 
            <div class="header__nav">
                <ul class="menu header__menu">
                    <li><a href="/about-us">о компании</a></li>
                    <li><a href="/how-we-work">как мы работаем</a></li>
                    <li><a href="/contacts">контакты</a></li>
                    <li><a href="/#">продукция</a></li>
                </ul>
            </div>
            
        </div>
        <div class="header__menu invisible">
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
    <section class="product-popup">
             <div class="product-popup__block-wrapper">
                <div class="product-popup__tittle-header">
                    <h2>Товары</h2>
                    <p>Широкий ассортимент из <br>более чем <b> 100 000 наименований.</b></p>
                </div>
                <div class="product-popup__block-left">
                    <h2>Продовольственные<br> товары</h2>
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/arrow-right-black.svg" alt="">
                    <img class="img-header-popup" src="<?php bloginfo('template_url'); ?>/assets/img/about-img-food-left-block.png" alt="">
                </div>
                <div class="product-popup__block-right">
                    <h2>Непродовольственные <br>товары</h2>
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/arrow-right-black.svg" alt="">
                    <img class="img-header-popup" src="<?php bloginfo('template_url'); ?>/assets/img/about-img-non-food-right.png" alt="">
                </div>
            </div>
    </section>
</body>