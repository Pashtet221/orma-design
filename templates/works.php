<?php defined('ABSPATH') || exit; ?>
<div class="orma-layout-1 orma-layout orma-works" data-node="23:168">
  <header class="orma-layout-2 orma-row orma-width orma-header" data-node="23:313" id="orma-top">
    <div class="orma-layout-3" data-node="23:314">
      <div class="orma-layout-4 orma-width orma-height" data-node="23:315"><img class="orma-layout-5 orma-positioned orma-art" alt="" src="<?php echo esc_url( get_theme_file_uri( "/assets/media/about-imgGroup6.svg" ) ); ?>"></div>
      <a class="orma-layout-6 orma-link" data-node="23:319" href="<?php echo esc_url( orma_url( "" ) ); ?>">ORMA®</a>
    </div>
    <nav class="orma-layout-7 orma-row orma-width orma-nav" data-node="23:320" aria-label="Основная навигация">
<button class="orma-menu-toggle" type="button" aria-expanded="false" aria-controls="orma-menu" aria-label="Открыть меню"><span></span><span></span><span></span></button><div class="orma-menu-items" id="orma-menu">      <a class="orma-layout-8 orma-link" data-node="23:321" href="<?php echo esc_url( orma_url( "works" ) ); ?>">Работы</a>
      <a class="orma-layout-8 orma-link" data-node="23:322" href="<?php echo esc_url( orma_url( "services" ) ); ?>">Услуги</a>
      <a class="orma-layout-8 orma-link" data-node="23:323" href="<?php echo esc_url( orma_url( "about" ) ); ?>">Обо мне</a>
      <a class="orma-layout-8" data-node="23:324" href="<?php echo esc_url(orma_url("process")); ?>">Процесс</a>
      <a class="orma-layout-8 orma-link" data-node="23:325" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Контакты</a></div>
    </nav>
    <a class="orma-layout-9 orma-row orma-width orma-height orma-link" data-node="23:326" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">      <p class="orma-layout-10" data-node="I23:326;76:4962">Обсудим проект ↗</p></a>
  </header>
  <?php
  $project = isset( $_GET['project'] ) && is_scalar( $_GET['project'] ) ? absint( $_GET['project'] ) : 0;
  $projects = orma_projects();
  if (isset($projects[$project - 1])) :
    get_template_part('template-parts/project', null, array('name' => $projects[$project - 1]));
  else :
  ?>

  <section class="orma-layout-588 orma-width orma-section" data-node="23:178">
    <p class="orma-layout-589 orma-width" data-node="23:179">РАБОТЫ / ПОРТФОЛИО</p>
    <h1 class="orma-layout-590 orma-width orma-height" data-node="23:180">
      <span class="orma-layout-591">Проекты, в которых</span>
      <span class="orma-layout-592">дизайн решает задачу</span>
    </h1>
    <div class="orma-layout-593 orma-width orma-height" data-node="23:181">
      <p class="orma-layout-277">Сайты, интернет-магазины и цифровые сервисы.</p>
      <p class="orma-layout-278">От задачи и структуры — до готового интерфейса.</p>
    </div>
  </section>
  <section class="orma-layout-594 orma-width orma-section" data-node="23:182">
    <div class="orma-layout-595 orma-row orma-width orma-height orma-filters" data-node="23:183">
      <button class="orma-layout-596 orma-row orma-width orma-height" data-node="23:184" type="button" data-filter="all" aria-pressed="true">        <p class="orma-layout-170" data-node="I23:184;76:4954">Все работы</p></button>
      <button class="orma-layout-597 orma-row orma-width orma-height" data-node="23:185" type="button" data-filter="sites" aria-pressed="false">        <p class="orma-layout-598" data-node="I23:185;76:4958">Сайты</p></button>
      <button class="orma-layout-599 orma-row orma-width orma-height" data-node="23:186" type="button" data-filter="shops" aria-pressed="false">        <p class="orma-layout-598" data-node="I23:186;76:4958">Интернет-магазины</p></button>
      <button class="orma-layout-600 orma-row orma-width orma-height" data-node="23:187" type="button" data-filter="ux" aria-pressed="false">        <p class="orma-layout-598" data-node="I23:187;76:4958">UI/UX-дизайн</p></button>
      <button class="orma-layout-601 orma-row orma-width orma-height" data-node="23:188" type="button" data-filter="wordpress" aria-pressed="false">        <p class="orma-layout-598" data-node="I23:188;76:4958">WordPress</p></button>
    </div>
<div class="orma-card-list">
    <div class="orma-layout-602 orma-row orma-width orma-height orma-card-row" data-node="23:189">
      <div class="orma-layout-603 orma-width orma-height" data-node="26:259" data-category="sites wordpress">
        <div class="orma-layout-546 orma-width orma-height" data-node="26:260"></div>
        <div class="orma-layout-604 orma-width" data-node="27:210">
          <div class="orma-layout-605 orma-width" data-node="27:211">
            <a class="orma-layout-606 orma-row" data-node="26:261" href="<?php echo esc_url(orma_project_url(1)); ?>">
              <p class="orma-layout-550 orma-width" data-node="26:262">Orbit</p>
              <p class="orma-layout-551" data-node="26:263">↗</p>
            </a>
            <div class="orma-layout-21 orma-row orma-width orma-height" data-node="26:266">
              <div class="orma-layout-607 orma-row" data-node="26:267">                <p class="orma-layout-553" data-node="26:268">Дизайн сайта</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:269">                <p class="orma-layout-553" data-node="26:270">UX/UI</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:271">                <p class="orma-layout-553" data-node="26:272">Концепт</p></div>
            </div>
          </div>
          <p class="orma-layout-556 orma-width orma-height" data-node="26:265">Автомобильный сайт: от выбора автомобиля до заявки.</p>
        </div>
      </div>
      <div class="orma-layout-603 orma-width orma-height" data-node="26:273" data-category="shops">
        <div class="orma-layout-546 orma-width orma-height" data-node="26:274"></div>
        <div class="orma-layout-604 orma-width" data-node="27:212">
          <div class="orma-layout-605 orma-width" data-node="27:213">
            <a class="orma-layout-606 orma-row" data-node="26:275" href="<?php echo esc_url(orma_project_url(2)); ?>">
              <p class="orma-layout-550 orma-width" data-node="26:276">Atelier</p>
              <p class="orma-layout-551" data-node="26:277">↗</p>
            </a>
            <div class="orma-layout-21 orma-row orma-width orma-height" data-node="26:280">
              <div class="orma-layout-607 orma-row" data-node="26:281">                <p class="orma-layout-553" data-node="26:282">Интернет-магазин</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:283">                <p class="orma-layout-553" data-node="26:284">UX/UI</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:285">                <p class="orma-layout-553" data-node="26:286">Концепт</p></div>
            </div>
          </div>
          <p class="orma-layout-556 orma-width orma-height" data-node="26:279">Интернет-магазин: каталог, карточка товара и оформление покупки.</p>
        </div>
      </div>
    </div>
    <div class="orma-layout-602 orma-row orma-width orma-height orma-card-row" data-node="23:192">
      <div class="orma-layout-603 orma-width orma-height" data-node="26:287" data-category="sites">
        <div class="orma-layout-546 orma-width orma-height" data-node="26:288"></div>
        <div class="orma-layout-604 orma-width" data-node="27:214">
          <div class="orma-layout-605 orma-width" data-node="27:215">
            <a class="orma-layout-606 orma-row" data-node="26:289" href="<?php echo esc_url(orma_project_url(3)); ?>">
              <p class="orma-layout-550 orma-width" data-node="26:290">Forma</p>
              <p class="orma-layout-551" data-node="26:291">↗</p>
            </a>
            <div class="orma-layout-21 orma-row orma-width orma-height" data-node="26:294">
              <div class="orma-layout-607 orma-row" data-node="26:295">                <p class="orma-layout-553" data-node="26:296">Сайт бренда</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:297">                <p class="orma-layout-553" data-node="26:298">Арт-дирекшн</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:299">                <p class="orma-layout-553" data-node="26:300">Концепт</p></div>
            </div>
          </div>
          <p class="orma-layout-556 orma-width orma-height" data-node="26:293">Сайт бренда с продуманной структурой и визуальным стилем.</p>
        </div>
      </div>
      <div class="orma-layout-603 orma-width orma-height" data-node="26:301" data-category="ux">
        <div class="orma-layout-546 orma-width orma-height" data-node="26:302"></div>
        <div class="orma-layout-604 orma-width" data-node="27:216">
          <div class="orma-layout-605 orma-width" data-node="27:217">
            <a class="orma-layout-606 orma-row" data-node="26:303" href="<?php echo esc_url(orma_project_url(4)); ?>">
              <p class="orma-layout-550 orma-width" data-node="26:304">Daily objects</p>
              <p class="orma-layout-551" data-node="26:305">↗</p>
            </a>
            <div class="orma-layout-21 orma-row orma-width orma-height" data-node="26:308">
              <div class="orma-layout-607 orma-row" data-node="26:309">                <p class="orma-layout-553" data-node="26:310">Цифровой продукт</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:311">                <p class="orma-layout-553" data-node="26:312">Дизайн-система</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:313">                <p class="orma-layout-553" data-node="26:314">Концепт</p></div>
            </div>
          </div>
          <p class="orma-layout-556 orma-width orma-height" data-node="26:307">Дизайн-система с едиными правилами и компонентами интерфейса.</p>
        </div>
      </div>
    </div>
    <div class="orma-layout-602 orma-row orma-width orma-height orma-card-row" data-node="23:195">
      <div class="orma-layout-603 orma-width orma-height" data-node="26:315" data-category="sites wordpress">
        <div class="orma-layout-546 orma-width orma-height" data-node="26:316"></div>
        <div class="orma-layout-604 orma-width" data-node="27:218">
          <div class="orma-layout-605 orma-width" data-node="27:219">
            <a class="orma-layout-606 orma-row" data-node="26:317" href="<?php echo esc_url(orma_project_url(5)); ?>">
              <p class="orma-layout-550 orma-width" data-node="26:318">Сайт студии</p>
              <p class="orma-layout-551" data-node="26:319">↗</p>
            </a>
            <div class="orma-layout-21 orma-row orma-width orma-height" data-node="26:322">
              <div class="orma-layout-607 orma-row" data-node="26:323">                <p class="orma-layout-553" data-node="26:324">Дизайн сайта</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:325">                <p class="orma-layout-553" data-node="26:326">WordPress</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:327">                <p class="orma-layout-553" data-node="26:328">Концепт</p></div>
            </div>
          </div>
          <p class="orma-layout-556 orma-width orma-height" data-node="26:321">Сайт студии с услугами, портфолио и формой обращения.</p>
        </div>
      </div>
      <div class="orma-layout-603 orma-width orma-height" data-node="26:329" data-category="shops wordpress">
        <div class="orma-layout-546 orma-width orma-height" data-node="26:330"></div>
        <div class="orma-layout-604 orma-width" data-node="27:220">
          <div class="orma-layout-605 orma-width" data-node="27:221">
            <a class="orma-layout-606 orma-row" data-node="26:331" href="<?php echo esc_url(orma_project_url(6)); ?>">
              <p class="orma-layout-550 orma-width" data-node="26:332">Каталог товаров</p>
              <p class="orma-layout-551" data-node="26:333">↗</p>
            </a>
            <div class="orma-layout-21 orma-row orma-width orma-height" data-node="26:336">
              <div class="orma-layout-607 orma-row" data-node="26:337">                <p class="orma-layout-553" data-node="26:338">Интернет-магазин</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:339">                <p class="orma-layout-553" data-node="26:340">WooCommerce</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:341">                <p class="orma-layout-553" data-node="26:342">Концепт</p></div>
            </div>
          </div>
          <p class="orma-layout-556 orma-width orma-height" data-node="26:335">Каталог товаров с удобной навигацией и выбором.</p>
        </div>
      </div>
    </div>
    <div class="orma-layout-602 orma-row orma-width orma-height orma-card-row" data-node="23:198">
      <div class="orma-layout-603 orma-width orma-height" data-node="26:343" data-category="ux">
        <div class="orma-layout-546 orma-width orma-height" data-node="26:344"></div>
        <div class="orma-layout-604 orma-width" data-node="27:222">
          <div class="orma-layout-605 orma-width" data-node="27:223">
            <a class="orma-layout-606 orma-row" data-node="26:345" href="<?php echo esc_url(orma_project_url(7)); ?>">
              <p class="orma-layout-550 orma-width" data-node="26:346">Личный кабинет</p>
              <p class="orma-layout-551" data-node="26:347">↗</p>
            </a>
            <div class="orma-layout-21 orma-row orma-width orma-height" data-node="26:350">
              <div class="orma-layout-607 orma-row" data-node="26:351">                <p class="orma-layout-553" data-node="26:352">UI/UX-дизайн</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:353">                <p class="orma-layout-553" data-node="26:354">Веб-сервис</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:355">                <p class="orma-layout-553" data-node="26:356">Концепт</p></div>
            </div>
          </div>
          <p class="orma-layout-556 orma-width orma-height" data-node="26:349">Личный кабинет с понятной навигацией и сценариями работы.</p>
        </div>
      </div>
      <div class="orma-layout-603 orma-width orma-height" data-node="26:357" data-category="sites wordpress">
        <div class="orma-layout-546 orma-width orma-height" data-node="26:358"></div>
        <div class="orma-layout-604 orma-width" data-node="27:224">
          <div class="orma-layout-605 orma-width" data-node="27:225">
            <a class="orma-layout-606 orma-row" data-node="26:359" href="<?php echo esc_url(orma_project_url(8)); ?>">
              <p class="orma-layout-550 orma-width" data-node="26:360">Сайт сервиса</p>
              <p class="orma-layout-551" data-node="26:361">↗</p>
            </a>
            <div class="orma-layout-21 orma-row orma-width orma-height" data-node="26:364">
              <div class="orma-layout-607 orma-row" data-node="26:365">                <p class="orma-layout-553" data-node="26:366">Дизайн сайта</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:367">                <p class="orma-layout-553" data-node="26:368">WordPress</p></div>
              <div class="orma-layout-607 orma-row" data-node="26:369">                <p class="orma-layout-553" data-node="26:370">Концепт</p></div>
            </div>
          </div>
          <p class="orma-layout-556 orma-width orma-height" data-node="26:363">Сайт сервиса с описанием предложения и переходом к заявке.</p>
        </div>
      </div>
    </div>
</div>
    <div class="orma-layout-608 orma-width orma-pagination" data-node="23:208">
      <div class="orma-layout-609 orma-row orma-width" data-node="23:209">
        <div class="orma-layout-169 orma-row" data-node="23:210">          <p class="orma-layout-170" data-node="I23:210;76:4954">1</p></div>
        <div class="orma-layout-171 orma-row" data-node="23:211">          <p class="orma-layout-172" data-node="I23:211;76:4958">2</p></div>
        <div class="orma-layout-171 orma-row" data-node="23:212">          <p class="orma-layout-172" data-node="I23:212;76:4958">3</p></div>
        <div class="orma-layout-173 orma-row orma-width orma-height" data-node="23:213">          <p class="orma-layout-172" data-node="I23:213;76:4958">Следующая →</p></div>
      </div>
    </div>
  </section>
  <section class="orma-layout-65 orma-width orma-section orma-cta" data-node="23:327">
    <p class="orma-layout-66" data-node="23:328">ОБСУДИМ ВАШУ ЗАДАЧУ</p>
    <div class="orma-layout-67 orma-row" data-node="23:329">
      <div class="orma-layout-326 orma-width" data-node="23:330">
        <p class="orma-layout-69">Давайте обсудим</p>
        <p class="orma-layout-70">ваш проект</p>
      </div>
      <div class="orma-layout-71 orma-width" data-node="23:331">
        <a class="orma-layout-72 orma-row orma-width orma-height orma-link" data-node="23:332" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">          <p class="orma-layout-73" data-node="I23:332;76:4962">Обсудить проект ↗</p></a>
        <div class="orma-layout-74 orma-width" data-node="23:333">
          <p class="orma-layout-75">Расскажите об идее —</p>
          <p class="orma-layout-76">найдём подходящее решение.</p>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <footer class="orma-layout-77 orma-width orma-footer" data-node="23:334">
    <div class="orma-layout-78 orma-row orma-width orma-footer-grid" data-node="I23:334;64:326">
      <div class="orma-layout-79 orma-width" data-node="I23:334;64:327">
        <h2 class="orma-layout-80" data-node="I23:334;64:328">ORMA</h2>
        <p class="orma-layout-81 orma-width" data-node="I23:334;64:329">Я Елена — UI/UX-дизайнер. Создаю сайты, магазины и приложения с вниманием к людям и деталям.</p>
        <a class="orma-layout-82 orma-row orma-width orma-height orma-link" data-node="I23:334;64:330" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">          <p class="orma-layout-83" data-node="I23:334;64:330;18:73">Обсудим проект ↗</p></a>
      </div>
      <div class="orma-layout-84 orma-width" data-node="I23:334;64:332">
        <p class="orma-layout-85 orma-width" data-node="I23:334;64:333">Навигация</p>
        <a class="orma-layout-86 orma-width orma-link" data-node="I23:334;64:334" href="<?php echo esc_url( orma_url( "" ) ); ?>">Главная</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I23:334;64:335" href="<?php echo esc_url( orma_url( "works" ) ); ?>">Работы</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I23:334;64:336" href="<?php echo esc_url( orma_url( "about" ) ); ?>">Обо мне</a>
        <a class="orma-layout-86 orma-width" data-node="I23:334;64:337" href="<?php echo esc_url(orma_url("process")); ?>">Процесс</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I23:334;64:338" href="<?php echo esc_url( orma_url( "blog" ) ); ?>">Блог</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I23:334;64:339" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Контакты</a>
      </div>
      <div class="orma-layout-84 orma-width" data-node="I23:334;64:340">
        <a class="orma-layout-85 orma-width orma-link" data-node="I23:334;64:341" href="<?php echo esc_url( orma_url( "services" ) ); ?>">Услуги</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I23:334;64:342" href="<?php echo esc_url( orma_url( "service" ) ); ?>">Дизайн сайтов</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I23:334;64:343" href="<?php echo esc_url( orma_url( "shop-design" ) ); ?>">Дизайн интернет-магазинов</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I23:334;64:344" href="<?php echo esc_url( orma_url( "redesign" ) ); ?>">Редизайн сайтов</a>
        <a class="orma-layout-86 orma-width" data-node="I23:334;64:345" href="<?php echo esc_url(orma_url("app-design")); ?>">Приложения и сервисы</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I23:334;64:346" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Обсудить задачу</a>
      </div>
      <div class="orma-layout-87 orma-width" data-node="I23:334;64:347">
        <a class="orma-layout-88 orma-width orma-link" data-node="I23:334;64:348" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Связаться</a>
        <div class="orma-layout-89 orma-width" data-node="I23:334;64:349">
          <p class="orma-layout-75">Есть идея проекта?</p>
          <p class="orma-layout-76">Найдём понятную точку старта.</p>
        </div>
        <a class="orma-layout-90 orma-width orma-link" data-node="I23:334;64:350" href="<?php echo esc_url( orma_contact_url( "email" ) ); ?>">Почта ↗</a>
        <a class="orma-layout-90 orma-width orma-link" data-node="I23:334;64:351" href="<?php echo esc_url( orma_contact_url( "telegram" ) ); ?>">Telegram ↗</a>
        <a class="orma-layout-90 orma-width orma-link" data-node="I23:334;64:352" href="<?php echo esc_url( orma_contact_url( "linkedin" ) ); ?>">LinkedIn ↗</a>
      </div>
    </div>
    <div class="orma-layout-91 orma-width" data-node="I23:334;64:353"></div>
    <div class="orma-layout-92 orma-row orma-width" data-node="I23:334;64:354">
      <p class="orma-layout-93 orma-width" data-node="I23:334;64:355">© 2026 Елена. Все права защищены.</p>
      <a class="orma-layout-94 orma-width orma-link" data-node="I23:334;64:356" href="#orma-top">Наверх ↑</a>
    </div>
  </footer>
</div>
