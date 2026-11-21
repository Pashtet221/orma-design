<?php defined( 'ABSPATH' ) || exit; ?>
<div class="orma-layout orma-home-v2 orma-services-v2">
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
<section class="v2-services"><div class="v2-services-heading"><h2>От идеи до<br>готового интерфейса.</h2><p class="v2-muted">Проектирую сайты и интерфейсы, в которых эстетика сочетается с логикой и удобством.</p></div>
<div class="sv-service-list">
<?php $services = array(
array('service','Дизайн сайтов','Лендинги, корпоративные сайты, портфолио и многостраничные проекты.',array('Структура','Макеты Figma','Адаптив')),
array('shop-design','Дизайн интернет-магазинов','Каталог, карточки товаров, корзина и оформление заказа.',array('Каталог','Карточки товара','Оформление')),
array('redesign','Редизайн сайтов','Аудит текущего дизайна, новая структура, визуал и адаптивные версии.',array('Анализ','Новая структура','Новый дизайн')),
array('app-design','Дизайн приложений и сервисов','Личные кабинеты, дашборды, формы, сценарии и UI-компоненты.',array('UX-сценарии','UI-дизайн','Компоненты')),
); foreach ($services as $index=>$service) : ?>
<article class="sv-service"><span class="sv-number"><?php echo esc_html(sprintf('%02d',$index+1)); ?></span><div><h3><a href="<?php echo esc_url(orma_url($service[0])); ?>"><?php echo esc_html($service[1]); ?></a></h3><p><?php echo esc_html($service[2]); ?></p></div><div class="sv-service-meta"><ul class="sv-tags" aria-label="Результаты услуги"><?php foreach ($service[3] as $tag) : ?><li><?php echo esc_html($tag); ?></li><?php endforeach; ?></ul><a class="sv-discuss" href="<?php echo esc_url(orma_url('contacts')); ?>">Обсудить задачу ↗</a></div></article>
<?php endforeach; ?></div></section>
<section class="sv-projects v2-panel"><div class="sv-section-heading"><h2>Дизайн в проектах</h2><a href="<?php echo esc_url(orma_url('works')); ?>">Все работы ↗</a></div><div class="sv-project-grid">
<?php $projects = array(
array('Orbit',array('Дизайн сайта','UX/UI','Концепт'),'Автомобильный сайт: от выбора автомобиля до заявки.'),
array('Atelier',array('Интернет-магазин','UX/UI','Концепт'),'Интернет-магазин: каталог, карточка товара и оформление покупки.')
); foreach ($projects as $index=>$project) : ?>
<article><a class="sv-project-cover" href="<?php echo esc_url(orma_project_url($index)); ?>" aria-label="<?php echo esc_attr($project[0]); ?>"></a><h3><a href="<?php echo esc_url(orma_project_url($index)); ?>"><?php echo esc_html($project[0]); ?><span aria-hidden="true">↗</span></a></h3><ul class="sv-tags"><?php foreach ($project[1] as $tag) : ?><li><?php echo esc_html($tag); ?></li><?php endforeach; ?></ul><p><?php echo esc_html($project[2]); ?></p></article>
<?php endforeach; ?></div></section>
<section class="sv-delivery v2-panel"><div class="sv-delivery-grid"><div><h2>Что вы<br>получаете</h2><p>Готовый дизайн сайта или интерфейса, продуманный до деталей и подготовленный к разработке.</p><p>Все материалы передаются в удобном формате для дальнейшей работы.</p></div><dl>
<?php foreach (array(
'Адаптивный дизайн'=>'Макеты для компьютеров и смартфонов с учётом разных размеров экранов.',
'Организованный файл Figma'=>'Все страницы, компоненты и состояния элементов в одном проекте.',
'Готовность к разработке'=>'Макеты с размерами, отступами и необходимыми пояснениями.'
) as $title=>$description) : ?><div><dt><?php echo esc_html($title); ?></dt><dd><?php echo esc_html($description); ?></dd></div><?php endforeach; ?>
</dl></div>
<div class="sv-workflow" id="orma-service-process"><h2>Как проходит работа</h2><ol>
<?php foreach (array(
'Обсуждение'=>'Знакомимся с проектом, определяем цели, объём работ, стоимость и сроки.',
'Проектирование'=>'Продумываю структуру, навигацию и логику взаимодействия.',
'Дизайн'=>'Создаю визуальную концепцию, согласовываем детали.',
'Передача'=>'Вношу финальные правки и передаю готовый проект.'
) as $title=>$description) : ?><li><h3><?php echo esc_html($title); ?></h3><p><?php echo esc_html($description); ?></p></li><?php endforeach; ?>
</ol></div></section>
<section class="v2-faq"><div><h2>Часто<br> задаваемые<br> вопросы</h2><p class="v2-muted">Ответы на вопросы о дизайне, сроках и сотрудничестве.</p></div><div class="v2-faq-list">
<details class="orma-faq" open><summary>Что нужно для старта?<span class="orma-faq-icon" aria-hidden="true"></span></summary><p class="orma-faq-answer">Краткое описание задачи, информация о продукте и готовые материалы. Если есть текущий сайт или референсы — тоже пригодятся.</p></details>
<details class="orma-faq"><summary>Можно заказать только дизайн?<span class="orma-faq-icon" aria-hidden="true"></span></summary><p class="orma-faq-answer">Да, можно заказать отдельно дизайн в Figma.</p></details>
<details class="orma-faq"><summary>Входит ли мобильная версия?<span class="orma-faq-icon" aria-hidden="true"></span></summary><p class="orma-faq-answer">Да, готовлю адаптивные макеты для согласованных экранов.</p></details>
<details class="orma-faq"><summary>Сколько правок входит в работу?<span class="orma-faq-icon" aria-hidden="true"></span></summary><p class="orma-faq-answer">Количество раундов правок согласуем перед началом проекта.</p></details>
<details class="orma-faq"><summary>Как определяются стоимость и сроки?<span class="orma-faq-icon" aria-hidden="true"></span></summary><p class="orma-faq-answer">Оценка зависит от количества экранов, сложности и объёма материалов.</p></details>
<details class="orma-faq"><summary>Как передаются макеты?<span class="orma-faq-icon" aria-hidden="true"></span></summary><p class="orma-faq-answer">Передаю ссылку на макеты в Figma и подготавливаю материалы для разработчика.</p></details>
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
