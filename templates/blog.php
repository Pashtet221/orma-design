<?php defined('ABSPATH') || exit; ?>
<div class="orma-layout-1 orma-layout orma-blog" data-node="38:1368">
  <header class="orma-layout-2 orma-row orma-width orma-header" data-node="50:336" id="orma-top">
    <div class="orma-layout-3" data-node="50:337">
      <div class="orma-layout-4 orma-width orma-height" data-node="50:338"><img class="orma-layout-5 orma-positioned orma-art" alt="" src="<?php echo esc_url( get_theme_file_uri( "/assets/media/about-imgGroup6.svg" ) ); ?>"></div>
      <a class="orma-layout-6 orma-link" data-node="50:342" href="<?php echo esc_url( orma_url( "" ) ); ?>">ORMA®</a>
    </div>
    <nav class="orma-layout-7 orma-row orma-width orma-nav" data-node="50:343" aria-label="Основная навигация">
<button class="orma-menu-toggle" type="button" aria-expanded="false" aria-controls="orma-menu" aria-label="Открыть меню"><span></span><span></span><span></span></button><div class="orma-menu-items" id="orma-menu">      <a class="orma-layout-8 orma-link" data-node="50:344" href="<?php echo esc_url( orma_url( "works" ) ); ?>">Работы</a>
      <a class="orma-layout-8 orma-link" data-node="50:345" href="<?php echo esc_url( orma_url( "services" ) ); ?>">Услуги</a>
      <a class="orma-layout-8 orma-link" data-node="50:346" href="<?php echo esc_url( orma_url( "about" ) ); ?>">Обо мне</a>
      <a class="orma-layout-8" data-node="50:347" href="<?php echo esc_url(orma_url("process")); ?>">Процесс</a>
      <a class="orma-layout-8 orma-link" data-node="50:348" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Контакты</a></div>
    </nav>
    <a class="orma-layout-9 orma-row orma-width orma-height orma-link" data-node="50:349" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">      <p class="orma-layout-10" data-node="I50:349;76:4962">Обсудим проект ↗</p></a>
  </header>
  <section class="orma-layout-138 orma-width orma-height orma-section" data-node="50:351">
    <p class="orma-layout-139 orma-width orma-height" data-node="55:301">БЛОГ / ЗАМЕТКИ О ДИЗАЙНЕ</p>
    <h1 class="orma-layout-140 orma-width orma-height" data-node="50:353">
      <span class="orma-layout-69">Идеи для удобных</span>
      <span class="orma-layout-70">цифровых продуктов</span>
    </h1>
    <div class="orma-layout-141 orma-width orma-height" data-node="50:354">
      <p class="orma-layout-19">Практические заметки об UX, дизайне интерфейсов</p>
      <p class="orma-layout-20">и создании сайтов WordPress.</p>
    </div>
  </section>
  <?php if (orma_has_posts()) : get_template_part("template-parts/posts"); else : ?>
  <section class="orma-layout-142 orma-width orma-height orma-section" data-node="55:302">
    <div class="orma-layout-143 orma-row orma-width orma-height" data-node="53:302">
      <div class="orma-layout-144 orma-width orma-height" data-node="53:303"></div>
      <div class="orma-layout-145 orma-width orma-height" data-node="53:304">
        <div class="orma-layout-146 orma-row orma-width orma-height" data-node="59:301">
          <div class="orma-layout-147 orma-row orma-width orma-height" data-node="59:302">            <p class="orma-layout-148 orma-width" data-node="59:303">UX/UI</p></div>
          <div class="orma-layout-149 orma-row orma-width orma-height" data-node="60:301">            <p class="orma-layout-150 orma-width" data-node="60:302">Веб-дизайн</p></div>
          <div class="orma-layout-151 orma-row orma-width orma-height" data-node="60:303">            <p class="orma-layout-152 orma-width" data-node="60:304">Структура сайта</p></div>
        </div>
        <p class="orma-layout-153 orma-width orma-height" data-node="53:305">6 минут чтения</p>
        <h2 class="orma-layout-154 orma-width orma-height" data-node="53:308">Хороший сайт начинается с понятной структуры</h2>
        <p class="orma-layout-155 orma-width orma-height" data-node="53:309">Как продумать страницы и навигацию, чтобы пользователь легко находил нужное и переходил к действию.</p>
        <a class="orma-layout-156 orma-row orma-width orma-height orma-link" data-node="61:301" href="<?php echo esc_url( orma_url( "article" ) ); ?>">          <a class="orma-layout-157 orma-width orma-height" data-node="53:310" href="<?php echo esc_url(orma_url("article")); ?>">Читать статью ↗</a></a>
      </div>
    </div>
  </section>
  <section class="orma-layout-158 orma-width orma-height orma-section" data-node="50:366">
    <h2 class="orma-layout-159 orma-width orma-height" data-node="53:311">Новые статьи</h2>
    <div class="orma-layout-160 orma-row orma-width orma-height orma-filters" data-node="50:368">
      <button class="orma-layout-161 orma-row orma-width orma-height" data-node="50:369" type="button" data-filter="all" aria-pressed="true">        <p class="orma-layout-162 orma-width orma-height" data-node="50:370">Все статьи</p></button>
      <button class="orma-layout-129 orma-row orma-width orma-height" data-node="50:371" type="button" data-filter="ux" aria-pressed="false">        <p class="orma-layout-130 orma-width orma-height" data-node="50:372">UX/UI</p></button>
      <button class="orma-layout-136 orma-row orma-width orma-height" data-node="50:373" type="button" data-filter="wordpress" aria-pressed="false">        <p class="orma-layout-163 orma-width orma-height" data-node="50:374">WordPress</p></button>
      <button class="orma-layout-164 orma-row orma-width orma-height" data-node="50:375" type="button" data-filter="process" aria-pressed="false">        <p class="orma-layout-165 orma-width orma-height" data-node="50:376">Процесс работы</p></button>
    </div>
<div class="orma-card-list">
    <div class="orma-layout-166 orma-row orma-width orma-height orma-card-row" data-node="50:377">
      <div class="orma-layout-126 orma-width orma-height" data-node="50:378" data-category="ux">
        <div class="orma-layout-127 orma-width orma-height" data-node="50:379"></div>
        <div class="orma-layout-128 orma-row orma-width orma-height" data-node="50:380">          <div class="orma-layout-129 orma-row orma-width orma-height" data-node="50:381">            <p class="orma-layout-130 orma-width orma-height" data-node="50:382">UX/UI</p></div></div>
        <div class="orma-layout-131 orma-width orma-height" data-node="50:383">
          <p class="orma-layout-132">Почему прототипы</p>
          <p class="orma-layout-133">упрощают работу</p>
        </div>
        <p class="orma-layout-134 orma-width orma-height" data-node="50:384">Начинайте со структуры, прежде чем переходить к визуальным деталям.</p>
        <a class="orma-layout-135 orma-width orma-height" data-node="53:312" href="<?php echo esc_url(orma_url("article")); ?>">Читать статью ↗</a>
      </div>
      <div class="orma-layout-126 orma-width orma-height" data-node="50:386" data-category="wordpress">
        <div class="orma-layout-127 orma-width orma-height" data-node="50:387"></div>
        <div class="orma-layout-128 orma-row orma-width orma-height" data-node="50:388">          <div class="orma-layout-136 orma-row orma-width orma-height" data-node="50:389">            <p class="orma-layout-137 orma-width orma-height" data-node="50:390">WordPress</p></div></div>
        <div class="orma-layout-131 orma-width orma-height" data-node="50:391">
          <p class="orma-layout-132">Авторская тема</p>
          <p class="orma-layout-133">или конструктор?</p>
        </div>
        <p class="orma-layout-134 orma-width orma-height" data-node="50:392">Как выбрать подход, который соответствует контенту и задачам проекта.</p>
        <a class="orma-layout-135 orma-width orma-height" data-node="53:313" href="<?php echo esc_url(orma_url("article")); ?>">Читать статью ↗</a>
      </div>
      <div class="orma-layout-126 orma-width orma-height" data-node="50:394" data-category="ux">
        <div class="orma-layout-127 orma-width orma-height" data-node="50:395"></div>
        <div class="orma-layout-128 orma-row orma-width orma-height" data-node="50:396">          <div class="orma-layout-129 orma-row orma-width orma-height" data-node="50:397">            <p class="orma-layout-130 orma-width orma-height" data-node="50:398">UX/UI</p></div></div>
        <div class="orma-layout-131 orma-width orma-height" data-node="50:399">
          <p class="orma-layout-132">Как упростить</p>
          <p class="orma-layout-133">оформление заказа</p>
        </div>
        <p class="orma-layout-134 orma-width orma-height" data-node="50:400">Понятные поля, полезные подсказки и меньше сложных решений.</p>
        <a class="orma-layout-135 orma-width orma-height" data-node="53:314" href="<?php echo esc_url(orma_url("article")); ?>">Читать статью ↗</a>
      </div>
    </div>
    <div class="orma-layout-166 orma-row orma-width orma-height orma-card-row" data-node="50:402">
      <div class="orma-layout-126 orma-width orma-height" data-node="50:403" data-category="process">
        <div class="orma-layout-127 orma-width orma-height" data-node="50:404"></div>
        <div class="orma-layout-128 orma-row orma-width orma-height" data-node="50:405">          <div class="orma-layout-164 orma-row orma-width orma-height" data-node="50:406">            <p class="orma-layout-165 orma-width orma-height" data-node="50:407">Процесс работы</p></div></div>
        <div class="orma-layout-131 orma-width orma-height" data-node="50:408">
          <p class="orma-layout-132">Как подготовить дизайн</p>
          <p class="orma-layout-133">к передаче?</p>
        </div>
        <p class="orma-layout-134 orma-width orma-height" data-node="50:409">Файлы, компоненты и пояснения, с которыми команде проще начать разработку.</p>
        <a class="orma-layout-135 orma-width orma-height" data-node="53:315" href="<?php echo esc_url(orma_url("article")); ?>">Читать статью ↗</a>
      </div>
      <div class="orma-layout-126 orma-width orma-height" data-node="50:411" data-category="ux">
        <div class="orma-layout-127 orma-width orma-height" data-node="50:412"></div>
        <div class="orma-layout-128 orma-row orma-width orma-height" data-node="50:413">          <div class="orma-layout-129 orma-row orma-width orma-height" data-node="50:414">            <p class="orma-layout-130 orma-width orma-height" data-node="50:415">UX/UI</p></div></div>
        <div class="orma-layout-131 orma-width orma-height" data-node="50:416">
          <p class="orma-layout-132">Как фотографии меняют</p>
          <p class="orma-layout-133">восприятие сайта</p>
        </div>
        <p class="orma-layout-134 orma-width orma-height" data-node="50:417">Используйте изображения, чтобы поддержать историю и направить внимание.</p>
        <a class="orma-layout-135 orma-width orma-height" data-node="53:316" href="<?php echo esc_url(orma_url("article")); ?>">Читать статью ↗</a>
      </div>
      <div class="orma-layout-126 orma-width orma-height" data-node="50:419" data-category="wordpress">
        <div class="orma-layout-127 orma-width orma-height" data-node="50:420"></div>
        <div class="orma-layout-128 orma-row orma-width orma-height" data-node="50:421">          <div class="orma-layout-136 orma-row orma-width orma-height" data-node="50:422">            <p class="orma-layout-137 orma-width orma-height" data-node="50:423">WordPress</p></div></div>
        <div class="orma-layout-131 orma-width orma-height" data-node="50:424">
          <p class="orma-layout-132">Как упростить</p>
          <p class="orma-layout-133">управление контентом</p>
        </div>
        <p class="orma-layout-134 orma-width orma-height" data-node="50:425">Практический взгляд на гибкие блоки и повседневное редактирование сайта.</p>
        <a class="orma-layout-135 orma-width orma-height" data-node="53:317" href="<?php echo esc_url(orma_url("article")); ?>">Читать статью ↗</a>
      </div>
    </div>
</div>
    <div class="orma-layout-167 orma-width orma-height" data-node="63:305"></div>
    <div class="orma-layout-168 orma-row orma-width orma-height orma-pagination" data-node="62:301">
      <div class="orma-layout-169 orma-row" data-node="62:302">        <p class="orma-layout-170" data-node="I62:302;76:4954">1</p></div>
      <div class="orma-layout-171 orma-row" data-node="62:303">        <p class="orma-layout-172" data-node="I62:303;76:4958">2</p></div>
      <div class="orma-layout-171 orma-row" data-node="62:304">        <p class="orma-layout-172" data-node="I62:304;76:4958">3</p></div>
      <div class="orma-layout-173 orma-row orma-width orma-height" data-node="62:305">        <p class="orma-layout-172" data-node="I62:305;76:4958">Следующая →</p></div>
    </div>
  </section>
  <?php endif; ?>
  <section class="orma-layout-65 orma-width orma-section orma-cta" data-node="53:318">
    <p class="orma-layout-66" data-node="53:319">ОБСУДИМ ВАШУ ЗАДАЧУ</p>
    <div class="orma-layout-67 orma-row" data-node="53:320">
      <div class="orma-layout-68 orma-width" data-node="53:321">
        <p class="orma-layout-69">Давайте обсудим</p>
        <p class="orma-layout-70">ваш проект</p>
      </div>
      <div class="orma-layout-71 orma-width" data-node="53:322">
        <a class="orma-layout-72 orma-row orma-width orma-height orma-link" data-node="53:323" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">          <p class="orma-layout-73" data-node="I53:323;76:4962">Обсудить проект ↗</p></a>
        <div class="orma-layout-74 orma-width" data-node="53:324">
          <p class="orma-layout-75">Расскажите об идее —</p>
          <p class="orma-layout-76">найдём подходящее решение.</p>
        </div>
      </div>
    </div>
  </section>
  <footer class="orma-layout-77 orma-width orma-footer" data-node="50:435">
    <div class="orma-layout-78 orma-row orma-width orma-footer-grid" data-node="I50:435;64:326">
      <div class="orma-layout-79 orma-width" data-node="I50:435;64:327">
        <h2 class="orma-layout-80" data-node="I50:435;64:328">ORMA</h2>
        <p class="orma-layout-81 orma-width" data-node="I50:435;64:329">Я Елена — UI/UX-дизайнер. Создаю сайты, магазины и приложения с вниманием к людям и деталям.</p>
        <a class="orma-layout-82 orma-row orma-width orma-height orma-link" data-node="I50:435;64:330" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">          <p class="orma-layout-83" data-node="I50:435;64:330;18:73">Обсудим проект ↗</p></a>
      </div>
      <div class="orma-layout-84 orma-width" data-node="I50:435;64:332">
        <p class="orma-layout-85 orma-width" data-node="I50:435;64:333">Навигация</p>
        <a class="orma-layout-86 orma-width orma-link" data-node="I50:435;64:334" href="<?php echo esc_url( orma_url( "" ) ); ?>">Главная</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I50:435;64:335" href="<?php echo esc_url( orma_url( "works" ) ); ?>">Работы</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I50:435;64:336" href="<?php echo esc_url( orma_url( "about" ) ); ?>">Обо мне</a>
        <a class="orma-layout-86 orma-width" data-node="I50:435;64:337" href="<?php echo esc_url(orma_url("process")); ?>">Процесс</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I50:435;64:338" href="<?php echo esc_url( orma_url( "blog" ) ); ?>">Блог</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I50:435;64:339" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Контакты</a>
      </div>
      <div class="orma-layout-84 orma-width" data-node="I50:435;64:340">
        <a class="orma-layout-85 orma-width orma-link" data-node="I50:435;64:341" href="<?php echo esc_url( orma_url( "services" ) ); ?>">Услуги</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I50:435;64:342" href="<?php echo esc_url( orma_url( "service" ) ); ?>">Дизайн сайтов</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I50:435;64:343" href="<?php echo esc_url( orma_url( "shop-design" ) ); ?>">Дизайн интернет-магазинов</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I50:435;64:344" href="<?php echo esc_url( orma_url( "redesign" ) ); ?>">Редизайн сайтов</a>
        <a class="orma-layout-86 orma-width" data-node="I50:435;64:345" href="<?php echo esc_url(orma_url("app-design")); ?>">Приложения и сервисы</a>
        <a class="orma-layout-86 orma-width orma-link" data-node="I50:435;64:346" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Обсудить задачу</a>
      </div>
      <div class="orma-layout-87 orma-width" data-node="I50:435;64:347">
        <a class="orma-layout-88 orma-width orma-link" data-node="I50:435;64:348" href="<?php echo esc_url( orma_url( "contacts" ) ); ?>">Связаться</a>
        <div class="orma-layout-89 orma-width" data-node="I50:435;64:349">
          <p class="orma-layout-75">Есть идея проекта?</p>
          <p class="orma-layout-76">Найдём понятную точку старта.</p>
        </div>
        <a class="orma-layout-90 orma-width orma-link" data-node="I50:435;64:350" href="<?php echo esc_url( orma_contact_url( "email" ) ); ?>">Почта ↗</a>
        <a class="orma-layout-90 orma-width orma-link" data-node="I50:435;64:351" href="<?php echo esc_url( orma_contact_url( "telegram" ) ); ?>">Telegram ↗</a>
        <a class="orma-layout-90 orma-width orma-link" data-node="I50:435;64:352" href="<?php echo esc_url( orma_contact_url( "linkedin" ) ); ?>">LinkedIn ↗</a>
      </div>
    </div>
    <div class="orma-layout-91 orma-width" data-node="I50:435;64:353"></div>
    <div class="orma-layout-92 orma-row orma-width" data-node="I50:435;64:354">
      <p class="orma-layout-93 orma-width" data-node="I50:435;64:355">© 2026 Елена. Все права защищены.</p>
      <a class="orma-layout-94 orma-width orma-link" data-node="I50:435;64:356" href="#orma-top">Наверх ↑</a>
    </div>
  </footer>
</div>
