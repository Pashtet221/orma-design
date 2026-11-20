<?php defined( 'ABSPATH' ) || exit; ?>
<div class="orma-layout orma-home orma-home-v2">
<section class="v2-hero" id="orma-top">
<header class="v2-header orma-header">
<a class="v2-logo" href="<?php echo esc_url( orma_url() ); ?>"><img src="<?php echo esc_url( get_theme_file_uri('/assets/media/about-imgGroup6.svg') ); ?>" alt="">ORMA®</a>
<nav class="orma-nav" aria-label="Основная навигация">
<button class="orma-menu-toggle" type="button" aria-expanded="false" aria-controls="orma-menu" aria-label="Открыть меню"><span></span><span></span><span></span></button>
<div class="orma-menu-items" id="orma-menu">
<?php foreach ( array('works'=>'Работы','services'=>'Услуги','about'=>'Обо мне','process'=>'Процесс','contacts'=>'Контакты') as $slug=>$label ) : ?>
<a href="<?php echo esc_url( orma_url($slug) ); ?>"><?php echo esc_html($label); ?></a>
<?php endforeach; ?>
</div></nav>
<a class="v2-button" href="<?php echo esc_url( orma_url('contacts') ); ?>">Обсудим проект ↗</a>
</header>
<div class="v2-intro"><p class="v2-eyebrow">UI/UX-ДИЗАЙН / САЙТЫ И ПРИЛОЖЕНИЯ</p>
<h1>Дизайн для людей.<br>Решения для бизнеса.</h1>
<p>Я Елена, UI/UX-дизайнер. Проектирую сайты и приложения,<br class="v2-desktop-break"> которыми удобно пользоваться и легко управлять.</p>
<div class="v2-actions"><a class="v2-button" href="<?php echo esc_url( orma_url('contacts') ); ?>">Обсудить проект ↗</a><a class="v2-button v2-button-outline" href="<?php echo esc_url( orma_url('works') ); ?>">Смотреть работы</a></div></div>
</section>
<main>
<section class="v2-projects v2-panel" aria-label="Избранные работы"><div class="v2-projects-heading"><p class="v2-eyebrow">01 / ИЗБРАННЫЕ РАБОТЫ</p><p>Примеры визуальных концепций для сайтов, магазинов и сервисов.</p></div>
    <div class="orma-portfolio">
    <button class="orma-layout-252 orma-positioned orma-width orma-height orma-portfolio-tab" data-node="11:406" aria-label="Orbit" type="button" aria-pressed="false"><img class="orma-portfolio-image" alt="" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( "/assets/media/home-imgHeroMinimalTypography.png" ) ); ?>">
      <p class="orma-layout-253 orma-positioned orma-width orma-height" data-node="11:408">01</p>
      <span class="orma-portfolio-side">Orbit</span><span class="orma-portfolio-title">Orbit</span><span class="orma-portfolio-description">Дизайн сайта · Концепт</span>
    </button>
    <button class="orma-layout-257 orma-positioned orma-width orma-height orma-portfolio-tab" data-node="11:410" aria-label="Atelier" type="button" aria-pressed="false"><img class="orma-portfolio-image" alt="" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( "/assets/media/services-imgHeroClassicEditorial.png" ) ); ?>">
      <p class="orma-layout-253 orma-positioned orma-width orma-height" data-node="11:412">02</p>
      <span class="orma-portfolio-side">Atelier</span><span class="orma-portfolio-title">Atelier</span><span class="orma-portfolio-description">Дизайн сайта · Концепт</span>
    </button>
    <button class="orma-layout-258 orma-positioned orma-width orma-height orma-portfolio-tab" data-node="11:414" aria-label="Furnitra" type="button" aria-pressed="true"><img class="orma-portfolio-image" alt="" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( "/assets/media/pricing-img.png" ) ); ?>">
      <p class="orma-layout-259 orma-positioned orma-width orma-height" data-node="11:416">03</p>
      <span class="orma-portfolio-title">Furnitra</span>
      <span class="orma-portfolio-description">Дизайн сайта · Концепт</span><span class="orma-portfolio-side">Furnitra</span>
    </button>
    <button class="orma-layout-262 orma-positioned orma-width orma-height orma-portfolio-tab" data-node="11:419" aria-label="Septik.site" type="button" aria-pressed="false"><img class="orma-portfolio-image" alt="" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( "/assets/media/home-imgHeroMinimalTypography1.png" ) ); ?>">
      <p class="orma-layout-253 orma-positioned orma-width orma-height" data-node="11:421">04</p>
      <span class="orma-portfolio-side">Septik.site</span><span class="orma-portfolio-title">Septik.site</span><span class="orma-portfolio-description">Дизайн сайта · Концепт</span>
    </button>
    <button class="orma-layout-264 orma-positioned orma-width orma-height orma-portfolio-tab" data-node="11:423" aria-label="Alder Home" type="button" aria-pressed="false"><img class="orma-portfolio-image" alt="" loading="lazy" src="<?php echo esc_url( get_theme_file_uri( "/assets/media/pricing-img1.png" ) ); ?>">
      <p class="orma-layout-253 orma-positioned orma-width orma-height" data-node="11:425">05</p>
      <span class="orma-portfolio-side">Alder Home</span><span class="orma-portfolio-title">Alder Home</span><span class="orma-portfolio-description">Дизайн сайта · Концепт</span>
    </button>
    </div>
</section>
<section class="v2-services"><h2>Услуги для вашей задачи</h2><p class="v2-muted">От первого сайта до обновления магазина или сервиса.</p><div class="v2-service-list">
<?php $services = array(
 array('service','Дизайн сайтов','Лендинги, корпоративные сайты и портфолио.'),
 array('shop-design','Дизайн интернет-магазинов','Каталог, карточки товаров и оформление заказа.'),
 array('redesign','Редизайн сайтов','Обновление дизайна и структуры сайта.'),
 array('app-design','Дизайн приложений и сервисов','Мобильные приложения, личные кабинеты и веб-сервисы.'),
); foreach ( $services as $index=>$service ) : ?>
<a class="v2-service" href="<?php echo esc_url( orma_url($service[0]) ); ?>"><span class="v2-service-number"><?php echo esc_html(sprintf('%02d',$index+1)); ?></span><h3><?php echo esc_html($service[1]); ?></h3><p><?php echo esc_html($service[2]); ?></p><span class="v2-service-arrow" aria-hidden="true">↗</span></a>
<?php endforeach; ?></div></section>
<section class="v2-about v2-panel"><div><p class="v2-eyebrow">04 / ОБО МНЕ</p><h2>Привет, я Елена.<br>Создаю дизайн,<br>который понятен.</h2><p>Я UX/UI-дизайнер. Проектирую сайты, интернет-магазины и цифровые сервисы с вниманием к человеку и деталям.</p><a class="v2-button v2-button-dark" href="<?php echo esc_url( orma_url('about') ); ?>">Подробнее обо мне ↗</a></div><img src="<?php echo esc_url( get_theme_file_uri('/assets/media/about-img.png') ); ?>" alt="Елена — UX/UI-дизайнер" loading="lazy"></section>
<section class="v2-process v2-panel" id="orma-process"><div><p class="v2-eyebrow">ПРОЦЕСС РАБОТЫ</p><h2>Как проходит<br>работа</h2><p>Четыре понятных этапа — от первой<br>беседы до готового макета в Figma.</p><a class="v2-process-link" href="<?php echo esc_url( orma_url('contacts') ); ?>"><span aria-hidden="true">↳</span> Обсудить проект</a></div><ol>
<?php foreach (array(
'Обсуждение'=>'Обсуждаем задачи проекта, ваши пожелания, сроки и стоимость работы.',
'Проектирование'=>'Продумываю структуру страниц, пользовательские сценарии и логику интерфейса.',
'Дизайн'=>'Создаю визуальный дизайн, согласовываю детали и вношу необходимые правки.',
'Передача макетов'=>'Подготавливаю аккуратные макеты в Figma для дальнейшей разработки.'
) as $title=>$description) : ?><li><h3><?php echo esc_html($title); ?></h3><p><?php echo esc_html($description); ?></p></li><?php endforeach; ?>
</ol></section>
<section class="v2-faq"><div><h2>Часто<br> задаваемые<br> вопросы</h2><p class="v2-muted">Ответы на вопросы о дизайне, сроках и сотрудничестве.</p><a class="v2-question-link" href="<?php echo esc_url( orma_url('contacts') ); ?>">Задать вопрос ↗</a></div><div class="v2-faq-list">
<details class="orma-faq" data-node="11:336" open><summary>Чем дизайн сайта отличается от дизайна магазина?<span class="orma-faq-icon" aria-hidden="true"><img class="orma-faq-up" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronUp.svg')); ?>"><img class="orma-faq-down" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronDown.svg')); ?>"></span></summary><p class="orma-faq-answer">Сайт помогает рассказать о компании, услугах или показать портфолио. Для магазина дополнительно продумываю каталог, выбор товара, корзину и оформление заказа.</p></details>
<details class="orma-faq" data-node="11:342"><summary>Можно ли обновить существующий сайт?<span class="orma-faq-icon" aria-hidden="true"><img class="orma-faq-up" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronUp.svg')); ?>"><img class="orma-faq-down" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronDown.svg')); ?>"></span></summary><p class="orma-faq-answer">Да. Можно сохранить привычную структуру сайта и обновить отдельные страницы или спроектировать сайт заново.</p></details>
<details class="orma-faq" data-node="11:347"><summary>Что я получу в результате?<span class="orma-faq-icon" aria-hidden="true"><img class="orma-faq-up" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronUp.svg')); ?>"><img class="orma-faq-down" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronDown.svg')); ?>"></span></summary><p class="orma-faq-answer">Вы получите макеты в Figma, адаптивные версии и материалы для передачи разработчику.</p></details>
<details class="orma-faq" data-node="11:352"><summary>Сколько стоит дизайн и сколько времени он занимает?<span class="orma-faq-icon" aria-hidden="true"><img class="orma-faq-up" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronUp.svg')); ?>"><img class="orma-faq-down" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronDown.svg')); ?>"></span></summary><p class="orma-faq-answer">Стоимость и сроки зависят от объёма проекта. После обсуждения задачи я предложу подходящий формат работы.</p></details>
<details class="orma-faq" data-node="11:357"><summary>Как начать работу?<span class="orma-faq-icon" aria-hidden="true"><img class="orma-faq-up" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronUp.svg')); ?>"><img class="orma-faq-down" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronDown.svg')); ?>"></span></summary><p class="orma-faq-answer">Напишите мне о задаче через форму на странице контактов или в мессенджере.</p></details></div></section>
<section class="v2-journal"><h2>Читайте также</h2><div class="v2-articles">
<?php
$recent_posts = get_posts(array('numberposts'=>3,'post_status'=>'publish'));
if ($recent_posts) : foreach ($recent_posts as $article) :
$categories = get_the_category($article->ID);
?>
<article><a class="v2-article-cover" href="<?php echo esc_url(get_permalink($article)); ?>" aria-label="<?php echo esc_attr(get_the_title($article)); ?>"><?php echo get_the_post_thumbnail($article, 'large', array('loading'=>'lazy')); ?></a><span class="v2-tag"><?php echo esc_html($categories ? $categories[0]->name : 'Дизайн'); ?></span><h3><a href="<?php echo esc_url(get_permalink($article)); ?>"><?php echo esc_html(get_the_title($article)); ?></a></h3><p><?php echo esc_html(wp_trim_words(get_the_excerpt($article),18)); ?></p><a class="v2-read" href="<?php echo esc_url(get_permalink($article)); ?>">Читать статью ↗</a></article>
<?php endforeach; else : foreach (array(
array('UX/UI','Почему прототипы упрощают работу','Начинаем со структуры, прежде чем переходить к визуальным деталям.'),
array('WordPress','Авторская тема или конструктор?','Как выбрать подход, который соответствует контенту и задачам проекта.'),
array('WordPress','Как упростить управление контентом','Практический взгляд на гибкие блоки и повседневное редактирование сайта.')
) as $article) : ?>
<article><a class="v2-article-cover" href="<?php echo esc_url(orma_url('article')); ?>" aria-label="<?php echo esc_attr($article[1]); ?>"></a><span class="v2-tag"><?php echo esc_html($article[0]); ?></span><h3><a href="<?php echo esc_url(orma_url('article')); ?>"><?php echo esc_html($article[1]); ?></a></h3><p><?php echo esc_html($article[2]); ?></p><a class="v2-read" href="<?php echo esc_url(orma_url('article')); ?>">Читать статью ↗</a></article>
<?php endforeach; endif; ?>
</div></section>
<section class="v2-cta"><div><p class="v2-eyebrow">ОБСУДИМ ВАШУ ЗАДАЧУ</p><h2>Давайте обсудим<br>ваш проект</h2></div><div><a class="v2-button" href="<?php echo esc_url(orma_url('contacts')); ?>">Обсудить проект ↗</a><p>Расскажите об идее —<br>найдём подходящее решение.</p></div></section>
</main>
  <footer class="orma-layout-77 orma-width orma-footer" data-node="11:369">
    <div class="orma-layout-78 orma-row orma-width orma-footer-grid" data-node="I11:369;64:326">
      <div class="orma-layout-79 orma-width" data-node="I11:369;64:327">
        <h2 class="orma-layout-80" data-node="I11:369;64:328">ORMA</h2>
        <p class="orma-layout-81 orma-width" data-node="I11:369;64:329">Я Елена — UI/UX-дизайнер. Создаю сайты, магазины и приложения с вниманием к людям и деталям.</p>
        <a class="orma-layout-82 orma-row orma-width orma-height orma-link" data-node="I11:369;64:330" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">          <p class="orma-layout-83" data-node="I11:369;64:330;18:73">Обсудим проект ↗</p></a>
      </div>
      <div class="orma-layout-84 orma-width" data-node="I11:369;64:332">
        <p class="orma-layout-85 orma-width" data-node="I11:369;64:333">Навигация</p>
        <a class="orma-layout-86 orma-width orma-link" data-node="I11:369;64:334" href="<?php echo esc_url( orma_url( "" ) ); ?>">Главная</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I11:369;64:335" href="<?php echo esc_url( orma_url( "works" ) ); ?>">Работы</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I11:369;64:336" href="<?php echo esc_url( orma_url( "about" ) ); ?>">Обо мне</a>
        <a class="orma-layout-86 orma-width" data-node="I11:369;64:337" href="<?php echo esc_url(orma_url("process")); ?>">Процесс</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I11:369;64:338" href="<?php echo esc_url( orma_url( "blog" ) ); ?>">Блог</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I11:369;64:339" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Контакты</a>
      </div>
      <div class="orma-layout-84 orma-width" data-node="I11:369;64:340">
        <a class="orma-layout-85 orma-width orma-link" data-node="I11:369;64:341" href="<?php echo esc_url( orma_url( "services" ) ); ?>">Услуги</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I11:369;64:342" href="<?php echo esc_url( orma_url( "service" ) ); ?>">Дизайн сайтов</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I11:369;64:343" href="<?php echo esc_url( orma_url( "shop-design" ) ); ?>">Дизайн интернет-магазинов</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I11:369;64:344" href="<?php echo esc_url( orma_url( "redesign" ) ); ?>">Редизайн сайтов</a>
        <a class="orma-layout-86 orma-width" data-node="I11:369;64:345" href="<?php echo esc_url(orma_url("app-design")); ?>">Приложения и сервисы</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I11:369;64:346" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Обсудить задачу</a>
      </div>
      <div class="orma-layout-87 orma-width" data-node="I11:369;64:347">
        <a class="orma-layout-88 orma-width orma-link" data-node="I11:369;64:348" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Связаться</a>
        <div class="orma-layout-89 orma-width" data-node="I11:369;64:349">
          <p class="orma-layout-75">Есть идея проекта?</p>
          <p class="orma-layout-76">Найдём понятную точку старта.</p>
        </div>
        <a class="orma-layout-90 orma-width orma-link" data-node="I11:369;64:350" href="<?php echo esc_url( orma_contact_url( "email" ) ); ?>">Почта ↗</a>
        <a class="orma-layout-90 orma-width orma-link" data-node="I11:369;64:351" href="<?php echo esc_url( orma_contact_url( "telegram" ) ); ?>">Telegram ↗</a>
        <a class="orma-layout-90 orma-width orma-link" data-node="I11:369;64:352" href="<?php echo esc_url( orma_contact_url( "linkedin" ) ); ?>">LinkedIn ↗</a>
      </div>
    </div>
    <div class="orma-layout-91 orma-width" data-node="I11:369;64:353"></div>
    <div class="orma-layout-92 orma-row orma-width" data-node="I11:369;64:354">
      <p class="orma-layout-93 orma-width" data-node="I11:369;64:355">© 2026 Елена. Все права защищены.</p>
      <a class="orma-layout-94 orma-width orma-link" data-node="I11:369;64:356" href="#orma-top">Наверх ↑</a>
    </div>
  </footer>
</div>
