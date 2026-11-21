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
<div class="v2-intro">
<h1>Дизайн для людей.<br>Решения для бизнеса.</h1>
<p>Я Елена, UI/UX-дизайнер. Проектирую сайты и приложения,<br class="v2-desktop-break"> которыми удобно пользоваться и легко управлять.</p>
<div class="v2-actions"><a class="v2-button" href="<?php echo esc_url( orma_url('contacts') ); ?>">Обсудить проект ↗</a><a class="v2-button v2-button-outline" href="<?php echo esc_url( orma_url('works') ); ?>">Смотреть работы</a></div></div>
</section>
<main>
<section class="v2-projects v2-panel" aria-label="Избранные работы"><div class="v2-projects-heading"><h2>Проекты, в которых<br>дизайн решает задачу</h2><p>Примеры визуальных концепций для сайтов, магазинов и сервисов.</p></div>
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
<section class="v2-services"><div class="v2-services-heading"><h2>От идеи до<br>готового интерфейса.</h2><p class="v2-muted">Проектирую сайты и интерфейсы, в которых эстетика сочетается с логикой и удобством.</p></div><div class="v2-service-list">
<?php $services = array(
 array('service','Дизайн сайтов','Лендинги, корпоративные сайты, портфолио и многостраничные проекты.'),
 array('shop-design','Дизайн интернет-магазинов','Каталог, карточки товаров, корзина и оформление заказа.'),
 array('redesign','Редизайн сайтов','Аудит текущего дизайна, новая структура, визуал и адаптивные версии.'),
 array('app-design','Дизайн приложений и сервисов','Личные кабинеты, дашборды, формы, сценарии и UI-компоненты.'),
); foreach ( $services as $index=>$service ) : ?>
<a class="v2-service" href="<?php echo esc_url( orma_url($service[0]) ); ?>"><span class="v2-service-number"><?php echo esc_html(sprintf('%02d',$index+1)); ?></span><h3><?php echo esc_html($service[1]); ?></h3><p><?php echo esc_html($service[2]); ?></p><span class="v2-service-arrow" aria-hidden="true">↗</span></a>
<?php endforeach; ?></div></section>
<section class="v2-about v2-panel"><div><p class="v2-eyebrow">ОБО МНЕ</p><h2>Дизайн, в котором<br>важна каждая деталь.</h2><p>Я Елена, UX/UI-дизайнер. Создаю сайты и цифровые интерфейсы, сочетая эстетику с удобством.</p><a class="v2-button v2-button-dark" href="<?php echo esc_url( orma_url('about') ); ?>">Подробнее обо мне</a></div><img src="<?php echo esc_url( get_theme_file_uri('/assets/media/about-img.png') ); ?>" alt="Елена — UX/UI-дизайнер" loading="lazy"></section>
<section class="v2-process v2-panel" id="orma-process"><div><p class="v2-eyebrow">ПРОЦЕСС РАБОТЫ</p><h2>Как проходит<br>работа</h2><p>От первого знакомства до готового<br>дизайна — четыре прозрачных этапа работы.</p><a class="v2-process-link v2-button v2-button-dark" href="<?php echo esc_url( orma_url('contacts') ); ?>">Обсудить проект</a></div><ol>
<?php $steps = array(
array('Обсуждение','Уточняем цели и задачи проекта, сроки, бюджет и ваши пожелания.','M4 5h16v12H9l-5 4V5Z M8 9h8 M8 13h5'),
array('Структура и прототип','Продумываю структуру страниц, логику интерфейса и путь пользователя.','M4 4h16v16H4Z M4 9h16 M10 9v11 M7 6.5h.1'),
array('Визуальный дизайн','Подбираю цвета, шрифты и стиль. Согласовываем дизайн и детали.','m5 15 10-10 4 4L9 19l-5 1 1-5Z M13 7l4 4 M4 22h16'),
array('Передача макетов','Подготавливаю файл Figma: компоненты, состояния и материалы для разработки.','M12 3v12 m-4-4 4 4 4-4 M5 16v5h14v-5')
); foreach ($steps as $step) : ?><li><span class="v2-step-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"><path d="<?php echo esc_attr($step[2]); ?>"/></svg></span><h3><?php echo esc_html($step[0]); ?></h3><p><?php echo esc_html($step[1]); ?></p></li><?php endforeach; ?>
</ol></section>
<section class="v2-faq"><div><h2>Часто<br> задаваемые<br> вопросы</h2><p class="v2-muted">Ответы на вопросы о дизайне, сроках и сотрудничестве.</p></div><div class="v2-faq-list">
<details class="orma-faq" data-node="11:336" open><summary>Чем дизайн сайта отличается от дизайна магазина?<span class="orma-faq-icon" aria-hidden="true"><img class="orma-faq-up" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronUp.svg')); ?>"><img class="orma-faq-down" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronDown.svg')); ?>"></span></summary><p class="orma-faq-answer">Сайт помогает рассказать о компании, услугах или показать портфолио. Для магазина дополнительно продумываю каталог, выбор товара, корзину и оформление заказа.</p></details>
<details class="orma-faq" data-node="11:342"><summary>Можно ли обновить существующий сайт?<span class="orma-faq-icon" aria-hidden="true"><img class="orma-faq-up" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronUp.svg')); ?>"><img class="orma-faq-down" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronDown.svg')); ?>"></span></summary><p class="orma-faq-answer">Да. Можно сохранить привычную структуру сайта и обновить отдельные страницы или спроектировать сайт заново.</p></details>
<details class="orma-faq" data-node="11:347"><summary>Что я получу в результате?<span class="orma-faq-icon" aria-hidden="true"><img class="orma-faq-up" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronUp.svg')); ?>"><img class="orma-faq-down" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronDown.svg')); ?>"></span></summary><p class="orma-faq-answer">Вы получите макеты в Figma, адаптивные версии и материалы для передачи разработчику.</p></details>
<details class="orma-faq" data-node="11:352"><summary>Сколько стоит дизайн и сколько времени он занимает?<span class="orma-faq-icon" aria-hidden="true"><img class="orma-faq-up" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronUp.svg')); ?>"><img class="orma-faq-down" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronDown.svg')); ?>"></span></summary><p class="orma-faq-answer">Стоимость и сроки зависят от объёма проекта. После обсуждения задачи я предложу подходящий формат работы.</p></details>
<details class="orma-faq"><summary>Как проходит согласование и внесение правок?<span class="orma-faq-icon" aria-hidden="true"></span></summary><p class="orma-faq-answer">Показываю решения по этапам, собираю ваши комментарии и вношу согласованные изменения перед переходом к следующему этапу.</p></details>
<details class="orma-faq" data-node="11:357"><summary>Как начать работу?<span class="orma-faq-icon" aria-hidden="true"><img class="orma-faq-up" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronUp.svg')); ?>"><img class="orma-faq-down" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgChevronDown.svg')); ?>"></span></summary><p class="orma-faq-answer">Напишите мне о задаче через форму на странице контактов или в мессенджере.</p></details></div></section>
<section class="v2-journal"><h2>Читайте также</h2><div class="v2-articles">
<?php
$recent_posts = get_posts(array('numberposts'=>3,'post_status'=>'publish'));
if ($recent_posts) : foreach ($recent_posts as $article) :
$categories = get_the_category($article->ID);
?>
<article><a class="v2-article-cover" href="<?php echo esc_url(get_permalink($article)); ?>" aria-label="<?php echo esc_attr(get_the_title($article)); ?>"><?php if ( has_post_thumbnail($article) ) { echo get_the_post_thumbnail($article, 'large', array('loading'=>'lazy')); } else { ?><img class="v2-demo-cover" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgHeroMinimalTypography1.png')); ?>" alt="" loading="lazy"><?php } ?></a><span class="v2-tag"><?php echo esc_html($categories ? $categories[0]->name : 'Дизайн'); ?></span><h3><a href="<?php echo esc_url(get_permalink($article)); ?>"><?php echo esc_html(get_the_title($article)); ?></a></h3><p><?php echo esc_html(wp_trim_words(get_the_excerpt($article),18)); ?></p><a class="v2-read" href="<?php echo esc_url(get_permalink($article)); ?>">Читать статью ↗</a></article>
<?php endforeach; endif;
$demo_articles = array(
array('UX/UI','Почему прототипы упрощают работу','Начинаем со структуры, прежде чем переходить к визуальным деталям.'),
array('WordPress','Авторская тема или конструктор?','Как выбрать подход, который соответствует контенту и задачам проекта.'),
array('WordPress','Как упростить управление контентом','Практический взгляд на гибкие блоки и повседневное редактирование сайта.')
);
// Keep the three-card layout even when WordPress has only one or two posts.
foreach (array_slice($demo_articles, count($recent_posts)) as $article) : ?>
<article><a class="v2-article-cover" href="<?php echo esc_url(orma_url('article')); ?>" aria-label="<?php echo esc_attr($article[1]); ?>"><img class="v2-demo-cover" src="<?php echo esc_url(get_theme_file_uri('/assets/media/home-imgHeroMinimalTypography1.png')); ?>" alt="" loading="lazy"></a><span class="v2-tag"><?php echo esc_html($article[0]); ?></span><h3><a href="<?php echo esc_url(orma_url('article')); ?>"><?php echo esc_html($article[1]); ?></a></h3><p><?php echo esc_html($article[2]); ?></p><a class="v2-read" href="<?php echo esc_url(orma_url('article')); ?>">Читать статью ↗</a></article>
<?php endforeach; ?>
</div></section>
<section class="v2-cta"><div><h2>Давайте обсудим<br>ваш проект</h2></div><div><a class="v2-button" href="<?php echo esc_url(orma_url('contacts')); ?>">Обсудить проект ↗</a><p>Расскажите об идее —<br>найдём подходящее решение.</p></div></section>
</main>
<footer class="orma-footer v2-footer">
<div class="v2-footer-grid">
<div class="v2-footer-brand"><a class="v2-logo" href="<?php echo esc_url(orma_url()); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/assets/media/about-imgGroup6.svg')); ?>" alt="">ORMA</a><p>UX/UI-дизайн сайтов и цифровых продуктов.<br>Просто, удобно и с вниманием к деталям.</p></div>
<nav aria-label="Услуги в подвале"><h2>Услуги</h2><?php foreach (array('service'=>'Дизайн сайтов','shop-design'=>'Интернет-магазины','redesign'=>'Редизайн','app-design'=>'Приложения и сервисы') as $slug=>$label) : ?><a href="<?php echo esc_url(orma_url($slug)); ?>"><?php echo esc_html($label); ?></a><?php endforeach; ?></nav>
<nav aria-label="Навигация в подвале"><h2>Навигация</h2><?php foreach (array(''=>'Главная','works'=>'Работы','about'=>'Обо мне','process'=>'Процесс','blog'=>'Блог','contacts'=>'Контакты') as $slug=>$label) : ?><a href="<?php echo esc_url(orma_url($slug)); ?>"><?php echo esc_html($label); ?></a><?php endforeach; ?></nav>
<nav aria-label="Контакты"><h2>Контакты</h2><?php foreach (array('email'=>array('Почта','contacts-img.svg'),'telegram'=>array('Telegram','contacts-imgTelegram.svg'),'max'=>array('MAX','contacts-imgMax.svg'),'whatsapp'=>array('WhatsApp','contacts-imgWhatsApp.svg'),'linkedin'=>array('LinkedIn','contacts-imgLinkedIn.svg')) as $channel=>$contact) : ?><a href="<?php echo esc_url(orma_contact_url($channel)); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/assets/media/'.$contact[1])); ?>" alt=""><?php echo esc_html($contact[0]); ?></a><?php endforeach; ?></nav>
</div><div class="v2-footer-bottom"><p>© <?php echo esc_html(wp_date('Y')); ?> ORMA. Все права защищены.</p><a href="#orma-top">Наверх ↑</a></div>
</footer>
</div>
