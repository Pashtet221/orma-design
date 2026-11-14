<?php defined('ABSPATH') || exit; ?>
<div class="orma-layout-460 orma-layout orma-service" data-node="103:314">
  <header class="orma-layout-461 orma-row orma-positioned orma-width orma-header" data-node="103:315" id="orma-top">
    <div class="orma-layout-3" data-node="103:316">
      <div class="orma-layout-4 orma-width orma-height" data-node="103:317"><img class="orma-layout-5 orma-positioned orma-art" alt="" src="<?php echo esc_url( get_theme_file_uri( "/assets/media/service-imgGroup6.svg" ) ); ?>"></div>
      <a class="orma-layout-6 orma-link" data-node="103:321" href="<?php echo esc_url( orma_url( "" ) ); ?>">ORMA®</a>
    </div>
    <nav class="orma-layout-7 orma-row orma-width orma-nav" data-node="103:322" aria-label="Основная навигация">
<button class="orma-menu-toggle" type="button" aria-expanded="false" aria-controls="orma-menu" aria-label="Открыть меню"><span></span><span></span><span></span></button><div class="orma-menu-items" id="orma-menu">      <a class="orma-layout-8 orma-link" data-node="103:323" href="<?php echo esc_url( orma_url( "works" ) ); ?>">Работы</a>
      <a class="orma-layout-8 orma-link" data-node="103:324" href="<?php echo esc_url( orma_url( "services" ) ); ?>">Услуги</a>
      <a class="orma-layout-8 orma-link" data-node="103:325" href="<?php echo esc_url( orma_url( "about" ) ); ?>">Обо мне</a>
      <a class="orma-layout-8" data-node="103:326" href="<?php echo esc_url(orma_url("process")); ?>">Процесс</a>
      <a class="orma-layout-8 orma-link" data-node="103:327" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Контакты</a></div>
    </nav>
    <a class="orma-layout-9 orma-row orma-width orma-height orma-link" data-node="103:328" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">      <p class="orma-layout-10" data-node="I103:328;76:4962">Обсудим проект ↗</p></a>
  </header>
  <section class="orma-layout-462 orma-positioned orma-width orma-height orma-section" data-node="103:329">
    <div class="orma-layout-223 orma-positioned orma-art" aria-hidden="true">
      <div class="orma-layout-387 orma-positioned"></div>
<img class="orma-layout-388 orma-positioned orma-art" alt="" src="<?php echo esc_url( get_theme_file_uri( "/assets/media/pricing-img.png" ) ); ?>">
<img class="orma-layout-388 orma-positioned orma-art" alt="" src="<?php echo esc_url( get_theme_file_uri( "/assets/media/pricing-img1.png" ) ); ?>">
      <div class="orma-layout-389 orma-positioned"></div>
    </div>
    <p class="orma-layout-390 orma-width orma-height" data-node="103:330">УСЛУГИ / <?php echo esc_html(orma_service_title()); ?></p>
    <h1 class="orma-layout-391 orma-width orma-height" data-node="103:331"><?php if (orma_service_variant()) : ?><span><?php echo esc_html(orma_service_title()); ?></span><?php else : ?>
      <span class="orma-layout-69">Дизайн сайтов,</span>
      <span class="orma-layout-70">которые понятны людям.</span>
    <?php endif; ?></h1>
    <div class="orma-layout-392 orma-width orma-height" data-node="103:332"><?php if (orma_service_variant()) : ?><p class="orma-service-intro"><?php echo esc_html(orma_service_variant()); ?></p><?php else : ?>
      <p class="orma-layout-19">Продумываю структуру, сценарии и визуальную систему сайта —</p>
      <p class="orma-layout-20">от первого экрана до адаптивных макетов в Figma.</p>
    <?php endif; ?></div>
    <div class="orma-layout-393 orma-row orma-width orma-height" data-node="103:333">      <a class="orma-layout-394 orma-width orma-height" data-node="103:334" href="<?php echo esc_url(orma_url("contacts")); ?>">Обсудить дизайн ↗</a></div>
  </section>
  <?php if (orma_service_variant()) : ?>
  <section class="orma-editor-content">
    <h2>Что входит в работу</h2>
    <?php if (get_post_field('post_content', get_queried_object_id())) : ?>
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
    <?php else : ?>
      <p>Обсуждаем задачу, проектируем ключевые сценарии и готовим адаптивные макеты в Figma. Объём работ и сроки согласуем перед стартом.</p>
    <?php endif; ?>
  </section>
  <?php else : ?>
  <section class="orma-layout-463 orma-positioned orma-width orma-height orma-section orma-mobile-flow" data-node="103:422">
    <p class="orma-layout-464 orma-positioned orma-width orma-height" data-node="103:423">01 / СОСТАВ РАБОТ</p>
    <h2 class="orma-layout-465 orma-positioned orma-width orma-height" data-node="103:424">От идеи до готовых макетов</h2>
    <div class="orma-layout-466 orma-positioned orma-width orma-mobile-rule" data-node="103:425"></div>
    <p class="orma-layout-467 orma-positioned orma-width orma-height" data-node="103:426">01</p>
    <p class="orma-layout-468 orma-positioned orma-width orma-height" data-node="103:427">Структура и логика</p>
    <p class="orma-layout-469 orma-positioned orma-width orma-height" data-node="103:428">Изучаю задачу, определяю разделы и путь пользователя.</p>
    <div class="orma-layout-470 orma-positioned orma-width orma-mobile-rule" data-node="103:429"></div>
    <p class="orma-layout-471 orma-positioned orma-width orma-height" data-node="103:430">02</p>
    <p class="orma-layout-472 orma-positioned orma-width orma-height" data-node="103:431">Прототипы</p>
    <p class="orma-layout-473 orma-positioned orma-width orma-height" data-node="103:432">Прорабатываю расположение блоков и сценарии взаимодействия.</p>
    <div class="orma-layout-474 orma-positioned orma-width orma-mobile-rule" data-node="103:433"></div>
    <p class="orma-layout-475 orma-positioned orma-width orma-height" data-node="103:434">03</p>
    <p class="orma-layout-476 orma-positioned orma-width orma-height" data-node="103:435">Визуальный дизайн</p>
    <p class="orma-layout-477 orma-positioned orma-width orma-height" data-node="103:436">Создаю интерфейс, типографику, цветовую систему и компоненты.</p>
    <div class="orma-layout-478 orma-positioned orma-width orma-mobile-rule" data-node="103:437"></div>
    <p class="orma-layout-479 orma-positioned orma-width orma-height" data-node="103:438">04</p>
    <p class="orma-layout-480 orma-positioned orma-width orma-height" data-node="103:439">Адаптивные версии</p>
    <p class="orma-layout-481 orma-positioned orma-width orma-height" data-node="103:440">Подготавливаю макеты для компьютера и мобильных устройств.</p>
  </section>
  <section class="orma-layout-482 orma-positioned orma-width orma-height orma-section orma-mobile-flow" data-node="103:441">
    <p class="orma-layout-483 orma-positioned orma-width orma-height" data-node="103:442">02 / РЕЗУЛЬТАТ</p>
    <h2 class="orma-layout-484 orma-positioned orma-width orma-height" data-node="103:443">Что вы получите</h2>
    <p class="orma-layout-485 orma-positioned orma-width orma-height" data-node="103:444">01</p>
    <p class="orma-layout-486 orma-positioned orma-width orma-height" data-node="103:445">Макеты Figma</p>
    <p class="orma-layout-487 orma-positioned orma-width orma-height" data-node="103:446">Страницы и адаптивные версии для разработки.</p>
    <p class="orma-layout-488 orma-positioned orma-width orma-height" data-node="103:447">02</p>
    <p class="orma-layout-489 orma-positioned orma-width orma-height" data-node="103:448">Единая система</p>
    <p class="orma-layout-490 orma-positioned orma-width orma-height" data-node="103:449">Согласованные стили, компоненты и состояния.</p>
    <p class="orma-layout-491 orma-positioned orma-width orma-height" data-node="103:450">03</p>
    <p class="orma-layout-492 orma-positioned orma-width orma-height" data-node="103:451">Передача проекта</p>
    <p class="orma-layout-493 orma-positioned orma-width orma-height" data-node="103:452">Организованный файл и материалы для разработчика.</p>
  </section>
  <section class="orma-layout-494 orma-positioned orma-width orma-height orma-section orma-mobile-flow" data-node="103:453">
    <p class="orma-layout-495 orma-positioned orma-width orma-height" data-node="103:454">03 / УСЛОВИЯ</p>
    <h2 class="orma-layout-496 orma-positioned orma-width orma-height" data-node="103:455">Как формируется стоимость</h2>
    <p class="orma-layout-497 orma-positioned orma-width orma-height" data-node="103:456">Стоимость рассчитывается индивидуально. Она зависит от количества уникальных страниц, сложности структуры, интерактивных сценариев и объёма адаптивных макетов.</p>
    <div class="orma-layout-498 orma-positioned orma-width orma-mobile-rule" data-node="103:457"></div>
    <p class="orma-layout-499 orma-positioned orma-width orma-height" data-node="103:458">01</p>
    <p class="orma-layout-500 orma-positioned orma-width orma-height" data-node="103:459">Обсуждение</p>
    <p class="orma-layout-501 orma-positioned orma-width orma-height" data-node="103:460">Определяем цели, состав страниц и пожелания.</p>
    <p class="orma-layout-502 orma-positioned orma-width orma-height" data-node="103:461">02</p>
    <p class="orma-layout-503 orma-positioned orma-width orma-height" data-node="103:462">Оценка</p>
    <p class="orma-layout-504 orma-positioned orma-width orma-height" data-node="103:463">Согласовываем объём, сроки и условия.</p>
    <p class="orma-layout-505 orma-positioned orma-width orma-height" data-node="103:464">03</p>
    <p class="orma-layout-506 orma-positioned orma-width orma-height" data-node="103:465">Работа</p>
    <p class="orma-layout-507 orma-positioned orma-width orma-height" data-node="103:466">Создаю и согласовываю дизайн по этапам.</p>
  </section>
  <?php endif; ?>
  <section class="orma-layout-508 orma-positioned orma-width orma-section orma-cta" data-node="103:383">
    <p class="orma-layout-66" data-node="103:384">ОБСУДИМ ВАШУ ЗАДАЧУ</p>
    <div class="orma-layout-67 orma-row" data-node="103:385">
      <div class="orma-layout-68 orma-width" data-node="103:386">
        <p class="orma-layout-69">Давайте обсудим</p>
        <p class="orma-layout-70">ваш проект</p>
      </div>
      <div class="orma-layout-71 orma-width" data-node="103:387">
        <a class="orma-layout-424 orma-row orma-width orma-height orma-link" data-node="103:388" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">          <p class="orma-layout-83" data-node="I103:388;76:4962">Обсудить проект ↗</p></a>
        <div class="orma-layout-74 orma-width" data-node="103:389">
          <p class="orma-layout-75">Расскажите об идее —</p>
          <p class="orma-layout-76">найдём подходящее решение.</p>
        </div>
      </div>
    </div>
  </section>
  <footer class="orma-layout-509 orma-positioned orma-width orma-footer" data-node="103:390">
    <div class="orma-layout-78 orma-row orma-width orma-footer-grid" data-node="I103:390;64:326">
      <div class="orma-layout-79 orma-width" data-node="I103:390;64:327">
        <h2 class="orma-layout-80" data-node="I103:390;64:328">ORMA</h2>
        <p class="orma-layout-81 orma-width" data-node="I103:390;64:329">Я Елена — UI/UX-дизайнер. Создаю сайты, магазины и приложения с вниманием к людям и деталям.</p>
        <a class="orma-layout-82 orma-row orma-width orma-height orma-link" data-node="I103:390;64:330" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">          <p class="orma-layout-83" data-node="I103:390;64:330;18:73">Обсудим проект ↗</p></a>
      </div>
      <div class="orma-layout-84 orma-width" data-node="I103:390;64:332">
        <p class="orma-layout-85 orma-width" data-node="I103:390;64:333">Навигация</p>
        <a class="orma-layout-86 orma-width orma-link" data-node="I103:390;64:334" href="<?php echo esc_url( orma_url( "" ) ); ?>">Главная</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I103:390;64:335" href="<?php echo esc_url( orma_url( "works" ) ); ?>">Работы</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I103:390;64:336" href="<?php echo esc_url( orma_url( "about" ) ); ?>">Обо мне</a>
        <a class="orma-layout-86 orma-width" data-node="I103:390;64:337" href="<?php echo esc_url(orma_url("process")); ?>">Процесс</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I103:390;64:338" href="<?php echo esc_url( orma_url( "blog" ) ); ?>">Блог</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I103:390;64:339" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Контакты</a>
      </div>
      <div class="orma-layout-84 orma-width" data-node="I103:390;64:340">
        <a class="orma-layout-85 orma-width orma-link" data-node="I103:390;64:341" href="<?php echo esc_url( orma_url( "services" ) ); ?>">Услуги</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I103:390;64:342" href="<?php echo esc_url( orma_url( "service" ) ); ?>">Дизайн сайтов</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I103:390;64:343" href="<?php echo esc_url( orma_url( "shop-design" ) ); ?>">Дизайн интернет-магазинов</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I103:390;64:344" href="<?php echo esc_url( orma_url( "redesign" ) ); ?>">Редизайн сайтов</a>
        <a class="orma-layout-86 orma-width" data-node="I103:390;64:345" href="<?php echo esc_url(orma_url("app-design")); ?>">Приложения и сервисы</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I103:390;64:346" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Обсудить задачу</a>
      </div>
      <div class="orma-layout-87 orma-width" data-node="I103:390;64:347">
        <a class="orma-layout-88 orma-width orma-link" data-node="I103:390;64:348" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Связаться</a>
        <div class="orma-layout-89 orma-width" data-node="I103:390;64:349">
          <p class="orma-layout-75">Есть идея проекта?</p>
          <p class="orma-layout-76">Найдём понятную точку старта.</p>
        </div>
        <a class="orma-layout-90 orma-width orma-link" data-node="I103:390;64:350" href="<?php echo esc_url( orma_contact_url( "email" ) ); ?>">Почта ↗</a>
        <a class="orma-layout-90 orma-width orma-link" data-node="I103:390;64:351" href="<?php echo esc_url( orma_contact_url( "telegram" ) ); ?>">Telegram ↗</a>
        <a class="orma-layout-90 orma-width orma-link" data-node="I103:390;64:352" href="<?php echo esc_url( orma_contact_url( "linkedin" ) ); ?>">LinkedIn ↗</a>
      </div>
    </div>
    <div class="orma-layout-91 orma-width" data-node="I103:390;64:353"></div>
    <div class="orma-layout-92 orma-row orma-width" data-node="I103:390;64:354">
      <p class="orma-layout-93 orma-width" data-node="I103:390;64:355">© 2026 Елена. Все права защищены.</p>
      <a class="orma-layout-94 orma-width orma-link" data-node="I103:390;64:356" href="#orma-top">Наверх ↑</a>
    </div>
  </footer>
</div>
