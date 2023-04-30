<?php
/*
Template Name: about-us
Template Post Type: post, page, product
*/
?>
    <?php get_header(); ?>
    <section class="about-page-gradient">
        <div class="about-page-gradient__wrapper">
            <h1>О компании</h1>
            <p>Компания «SMART FMCG» основана в 2012 году.<br> Мы занимаемся оптовыми продажами товаров повседневного потребления от<br> всемирно известных Российских и зарубежных производителей.</p>
            <div class="about-page-gradient__btn">
            <button id="btn-catalog"><img src="<?php bloginfo('template_url'); ?>/assets/icon/download 2.svg" alt=""><span>КАТАЛОГ</span></button>
            <!-- <button id="btn-video" class="about-page-gradient__wrapper__btn-video"><img src="<?php bloginfo('template_url'); ?>/assets/icon/Group 1402.svg" alt=""><span>ВИДЕО</span></button> -->
        </div>
    </div>
    </section>
    <section class="SMART-FMCG">
        <div class="SMART-FMCG__wrapper">
            <div class="SMART-FMCG__wrapper__left">
                <div class="SMART-FMCG__wrapper__left__img-top"><img src="<?php bloginfo('template_url'); ?>/assets/img/trucks-center.webp" alt=""></div>
                <div class="SMART-FMCG__wrapper__left__img-middle"><img src="<?php bloginfo('template_url'); ?>/assets/img/woman-trucks.webp" alt=""></div>
                <div class="SMART-FMCG__wrapper__left__block-bottom">
                </div>
            </div>
           
            <div class="SMART-FMCG__wrapper__right">
                <h2>SMART FMCG</h2>
                <p>международный поставщик товаров повседневного потребления (FMCG) и лидер в секторе товаров народного потребления. Компания осуществляет экономическое взаимодействие B2B, сотрудничает с юридическими лицами и частными предпринимателями, работает с резидентами и нерезидентами РФ согласно Кодексу Таможенного Союза в странах СНГ.</p>
                a href="/how-we-work"><button class="classic-button">Как мы работаем</button></a>
            <div class="SMART-FMCG__wrapper__right__block-image">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/products-image-from-about.webp" alt="">
            </div>
            </div>
    </div>
    </section>
    <section class="about-benefits">
            <div class="about-benefits__top-text">
            <a name="benefits"></a>
                <h2>Ваши выгоды</h2>
                <p>Многочисленные партнеры доверяют нам благодаря качественному сервису и обширному ассортименту продукции.</p>
            </div>
            <div class="about-benefits__bottom-blocks">
                <div class="cards">
                    <h3>Лучшие цены</h3>
                    <p><br> Большие объемы и долгосрочные партнерские<br> отношения с производителями гарантируют<br> лучшие цены на рынке.</p>
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/cards-5.svg" alt="">
                </div>
                <div class="cards">
                    <h3>Широкий ассортимент</h3>
                    <p><br> 100,000 продовольственных и<br> непродовольственных товаров российских и<br> иностранных производителей.</p>
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/cards-6.svg" alt="">
                </div>
                <div class="cards">
                    <h3>Сопровождение сделки</h3>
                    <p><br> Каждому клиенту выделяем персонального менеджера,<br> который поможет при формировании<br> заказа.</p>
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/cards-7.svg" alt="">
                </div>
                <div class="cards">
                    <h3>Подтверждающие документы</h3>
                    <p><br> Производители предоставляют сертификаты,<br> подтверждающие качество товаров.</p>
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/cards-8.svg" alt="">
                </div>
                <div class="cards">
                    <h3>Собственные складские площади</h2>
                    <p><br>Храним продукцию в наших складских <br>помещениях в соответствии с СанПиН.</p>
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/cards-9.svg" alt="">
                </div>
                <div class="cards">
                    <h3>Собственный автопарк</h3>
                    <p><br> Компания «SMART FMCG» не занимается<br> перевозками, но помогает с транспортировкой<br> заказа до транспортной компании или склада.</p>
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/cards-10.svg" alt="">
                </div>
            </div>
    </section>
    <section class="about-form">
        <div class="about-form__wrapper">
            <div class="about-form__wrapper__left">
                    <h2>Начать<br> сотрудничать</h2>
                    <p>Заполните форму ,<br> позвоните по номеру <br> +7 (495)142 36 51 или напишите<br> электронное письмо по<br> адресу info@gc-sm.com.<br> Менеджер свяжется с <br> Вами в течение часа.</p>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/about-form-img.svg" alt="">
            </div>
            <div class="form-border"></div>
            <div class="about-form__wrapper__right">
                <form>
                    <div class="form-group form-name">
                       <input class="form-group__input" type="text" name="Имя" placeholder="Имя">
                       <div class="form-group__input-icon form-group__input-icon--left">
                        <img class="icon-form" src="<?php bloginfo('template_url'); ?>/assets/icon/user.svg" alt="">
                      </div>
                    </div>
                    <div class="form-ph-email">
                        <div class="form-group">
                            <input class="form-group__input" type="tel" name="Телефон" placeholder="Телефон">
                            <div class="form-group__input-icon form-group__input-icon--left">
                                <img class="icon-form" src="<?php bloginfo('template_url'); ?>/assets/icon/phone-form.svg" alt="">
                              </div>
                        </div>
                        </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> <span>Я даю своё согласие на обработку персональных данных.</span> 
                        </label>
                    </div>
                    <button class="btn-form" type="submit">Узнать стоимость</button>
                 </form>
            </div>
        </div>
    </section>
    <section class="about-main-line">
        <div class="about-main-line__tittle">
            <h2>Основные направления</h2>
            <p>Ассортимент продукции международной компании «SMART FMCG» включает товары<br> повседневного потребления в следующих категориях:</p>
        </div>
            <div class="about-main-line__block-wrapper">
                <div class="about-main-line__block-left">
                    <h2>Продовольственные<br> товары</h2>
                    <p>Бакалея, детское питание, чай, кофе,<br> кондитерские изделия, снековая<br> продукция, соки и воды.</p>
                    <a href="/how-we-work"><button class="classic-button">как мы работаем</button></a>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/about-img-food-left-block.webp" alt="">
                </div>
                <div class="about-main-line__block-right">
                    <h2>Непродовольственные товары</h2>
                    <p>Бытовая химия, косметика, средства<br> личной гигиены.</p>
                    <a href="/how-we-work"><button class="classic-button">Как мы работаем</button></a>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/about-img-non-food-right.webp" alt="">
                </div>
            </div>
    </section>
    <section class="about-catalog">
        <div class="about-catalog__wrapper">
            <div class="about-catalog__wrapper__left-block">
                <h2>Каталог<br> <br>«SMART FMCG»</h2>
                <button class="classic-button">скачать</button>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/truck-for-home-page.svg" alt="">
            </div>
            <div class="about-catalog__wrapper__right-block">
                <div class="about-catalog__wrapper-icon-block">
                    <img class="our-adv-icon" src="<?php bloginfo('template_url'); ?>/assets/icon/arrow-t.svg" alt="">
                    <p>Каталог «SMART FMCG» включает в себя сто тысяч наименований продукции.</p>
                </div>
                <div class="about-catalog__wrapper-icon-block">
                    <img class="our-adv-icon" src="<?php bloginfo('template_url'); ?>/assets/icon/arrow-t.svg" alt="">
                    <p>Мы сотрудничаем с известными мировыми производителями косметики, продуктов питания и бытовой химии по всему миру. </p>
                </div>
                <div class="about-catalog__wrapper-icon-block">
                    <img class="our-adv-icon" src="<?php bloginfo('template_url'); ?>/assets/icon/arrow-t.svg" alt="">
                    <p>Для получения прайс-листа и уточнения условий сотрудничества свяжитесь с вашим персональным менеджером по телефону<br> +7 (495) 971 39 99.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="about-slider">
        <div class="about-slider__wrapper">
            <div class="slider">
                <div class="about-slider__button-block">
                   <button class="slider__arrow slider__arrow_left"><img class="slider-arrow" src="<?php bloginfo('template_url'); ?>/assets/icon/icon-left-arrow.svg" alt=""></button>
              <div class="slider__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/WhatsApp-Image-2022-12-07-at-11.31.52.webp">
                <div class="slider__item__elements">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/slider-icon.svg" alt="">
                    <p>Делегация ГК «SMART FMCG» на выставке PROMFROM2023</p>
                </div>
            </div>
            <div class="slider__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/WhatsApp-Image-2022-12-07-at-11.31.52.webp">
                <div class="slider__item__elements">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/slider-icon.svg" alt="">
                    <p>Делегация ГК «SMART FMCG» на выставке PROMFROM2023</p>
                </div>
            </div>
            <div class="slider__item"><img src="<?php bloginfo('template_url'); ?>/assets/img/WhatsApp-Image-2022-12-07-at-11.31.52.webp">
                <div class="slider__item__elements">
                    <img src="<?php bloginfo('template_url'); ?>/assets/icon/slider-icon.svg" alt="">
                    <p>Делегация ГК «SMART FMCG» на выставке PROMFROM2023</p>
                </div>
            </div>
                <button class="slider__arrow slider__arrow_right"><img class="slider-arrow" src="<?php bloginfo('template_url'); ?>/assets/icon/icon-right-arrow.svg" alt=""></button>
            </div>
            </div>
            
          </div>

    </section> -->
        <?php get_footer(); ?>