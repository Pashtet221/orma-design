<?php
defined( 'ABSPATH' ) || exit;

function orma_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'orma_setup' );

function orma_assets() {
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'orma-layout', get_theme_file_uri( '/assets/layout.css' ), array(), $version );
	wp_enqueue_style( 'orma', get_theme_file_uri( '/assets/theme.css' ), array( 'orma-layout' ), $version );
	wp_enqueue_script( 'orma', get_theme_file_uri( '/assets/theme.js' ), array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'orma_assets' );

function orma_pages() {
	return array(
		'works' => array( 'Работы', 'works' ),
		'services' => array( 'Услуги', 'services' ),
		'about' => array( 'Обо мне', 'about' ),
		'pricing' => array( 'Стоимость', 'pricing' ),
		'blog' => array( 'Блог', 'blog' ),
		'contacts' => array( 'Контакты', 'contacts' ),
		'service' => array( 'Дизайн сайтов', 'service' ),
		'shop-design' => array( 'Дизайн интернет-магазинов', 'service' ),
		'redesign' => array( 'Редизайн сайтов', 'service' ),
		'app-design' => array( 'Дизайн приложений и сервисов', 'service' ),
		'pricing-v2' => array( 'Стоимость — форматы', 'pricing-v2' ),
		'pricing-refined' => array( 'Стоимость — четыре услуги', 'pricing-refined' ),
		'article' => array( 'Структура сайта до дизайна', 'article' ),
	);
}

function orma_url( $slug = '' ) {
	if ( '' === $slug ) {
		return home_url( '/' );
	}
	if ( 'process' === $slug ) {
		return home_url( '/' ) . '#orma-process';
	}
	$pages = get_option( 'orma_page_ids', array() );
	$id = $pages[ $slug ] ?? 0;
	if ( $id && 'publish' === get_post_status( $id ) ) {
		return get_permalink( $id );
	}
	$page = get_page_by_path( $slug );
	return $page && 'publish' === $page->post_status ? get_permalink( $page ) : home_url( '/' . $slug . '/' );
}

function orma_render( $template ) {
	get_header();
	get_template_part( 'templates/' . $template );
	get_footer();
}

function orma_contact_url( $channel ) {
	if ( 'email' === $channel ) {
		$email = sanitize_email( get_theme_mod( 'orma_email', get_option( 'admin_email' ) ) );
		return $email ? 'mailto:' . $email : '';
	}
	return get_theme_mod( 'orma_' . $channel, '' );
}

function orma_customize( $customizer ) {
	$customizer->add_section( 'orma_contacts', array( 'title' => 'ORMA — Контакты' ) );
	$channels = array( 'email' => 'Почта для заявок', 'telegram' => 'Telegram', 'max' => 'MAX', 'whatsapp' => 'WhatsApp', 'linkedin' => 'LinkedIn' );
	foreach ( $channels as $channel => $label ) {
		$key = 'orma_' . $channel;
		$customizer->add_setting( $key, array( 'sanitize_callback' => 'email' === $channel ? 'sanitize_email' : 'esc_url_raw' ) );
		$customizer->add_control( $key, array( 'section' => 'orma_contacts', 'label' => $label, 'type' => 'email' === $channel ? 'email' : 'url' ) );
	}
}
add_action( 'customize_register', 'orma_customize' );

function orma_form_state() {
	$value = isset( $_GET['orma_form'] ) && is_string( $_GET['orma_form'] ) ? sanitize_key( wp_unslash( $_GET['orma_form'] ) ) : '';
	$messages = array(
		'sent' => 'Сообщение отправлено.',
		'invalid' => 'Заполните имя, контакт и сообщение.',
		'expired' => 'Обновите страницу и отправьте форму ещё раз.',
		'failed' => 'Не удалось отправить сообщение. Попробуйте ещё раз или выберите другой способ связи.',
	);
	if ( isset( $messages[ $value ] ) ) {
		printf( '<p class="orma-form-status" role="status">%s</p>', esc_html( $messages[ $value ] ) );
	}
}

function orma_send_contact() {
	$values = array();
	foreach ( array( 'orma_nonce', 'name', 'contact', 'topic', 'message', 'website', 'return_url' ) as $field ) {
		$values[ $field ] = isset( $_POST[ $field ] ) && is_string( $_POST[ $field ] ) ? wp_unslash( $_POST[ $field ] ) : '';
	}
	$status = 'invalid';
	$name = sanitize_text_field( $values['name'] );
	$contact = sanitize_text_field( $values['contact'] );
	$topic = sanitize_text_field( $values['topic'] );
	$message = sanitize_textarea_field( $values['message'] );
	if ( ! wp_verify_nonce( $values['orma_nonce'], 'orma_contact' ) ) {
		$status = 'expired';
	} elseif ( '' !== $values['website'] ) {
		$status = 'sent';
	} elseif ( $name && $contact && $message && strlen( $message ) <= 20000 && max( strlen( $name ), strlen( $contact ), strlen( $topic ) ) <= 720 ) {
		$recipient = sanitize_email( get_theme_mod( 'orma_email', get_option( 'admin_email' ) ) );
		$headers = is_email( $contact ) ? array( 'Reply-To: ' . $contact ) : array();
		$body = "Имя: $name\nКонтакт: $contact\nТема: $topic\n\n$message";
		$status = $recipient && wp_mail( $recipient, 'ORMA — новое сообщение', $body, $headers ) ? 'sent' : 'failed';
	}
	$return = wp_validate_redirect( $values['return_url'], orma_url( 'contacts' ) );
	wp_safe_redirect( add_query_arg( 'orma_form', $status, $return ) . '#orma-form', 303 );
	exit;
}
add_action( 'admin_post_nopriv_orma_contact', 'orma_send_contact' );
add_action( 'admin_post_orma_contact', 'orma_send_contact' );

function orma_admin_menu() {
	add_theme_page( 'Настройка ORMA', 'Настройка ORMA', 'manage_options', 'orma-setup', 'orma_setup_screen' );
}
add_action( 'admin_menu', 'orma_admin_menu' );

function orma_setup_screen() {
	?>
	<div class="wrap">
		<h1>Настройка ORMA</h1>
		<?php if ( isset( $_GET['imported'] ) ) : ?>
			<div class="notice notice-success"><p>Страницы созданы. Проверьте список страниц и настройте контакты.</p></div>
		<?php endif; ?>
		<p>Создайте страницы из макета. Существующие страницы сохранятся. Главная отображается через front-page.php.</p>
		<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
			<?php wp_nonce_field( 'orma_create_pages' ); ?>
			<input type="hidden" name="action" value="orma_create_pages">
			<?php submit_button( 'Создать страницы ORMA' ); ?>
		</form>
	</div>
	<?php
}

function orma_create_pages() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( 'Недостаточно прав.', '', array( 'response' => 403 ) );
	}
	check_admin_referer( 'orma_create_pages' );
	$ids = get_option( 'orma_page_ids', array() );
	foreach ( orma_pages() as $slug => list( $title, $template ) ) {
		if ( ! empty( $ids[ $slug ] ) && 'publish' === get_post_status( $ids[ $slug ] ) ) {
			continue;
		}
		$existing = get_page_by_path( $slug );
		if ( $existing ) {
			$ids[ $slug ] = $existing->ID;
			continue;
		}
		$id = wp_insert_post( array(
			'post_type' => 'page', 'post_status' => 'publish', 'post_title' => $title, 'post_name' => $slug,
			'page_template' => 'page-templates/' . $template . '.php',
		), true );
		if ( is_wp_error( $id ) ) {
			update_option( 'orma_page_ids', $ids );
			wp_die( esc_html( $id->get_error_message() ) );
		}
		$ids[ $slug ] = $id;
	}
	update_option( 'orma_page_ids', $ids );
	wp_safe_redirect( admin_url( 'themes.php?page=orma-setup&imported=1' ) );
	exit;
}
add_action( 'admin_post_orma_create_pages', 'orma_create_pages' );

function orma_template_for_page() {
	$slug = get_post_field( 'post_name', get_queried_object_id() );
	return orma_pages()[ $slug ][1] ?? '';
}

function orma_service_title() {
	return get_the_title( get_queried_object_id() ) ?: 'Дизайн сайтов';
}

function orma_service_variant() {
	$content = array(
		'shop-design' => 'Проектирую каталог, карточки товаров и оформление заказа.',
		'redesign' => 'Обновляю структуру и визуальный стиль действующего сайта.',
		'app-design' => 'Разрабатываю пользовательские сценарии и интерфейсы приложений и сервисов.',
	);
	return $content[ get_post_field( 'post_name', get_queried_object_id() ) ] ?? '';
}

function orma_has_posts() {
	return (bool) get_posts( array( 'numberposts' => 1, 'fields' => 'ids' ) );
}

function orma_projects() {
	return array( 'Orbit', 'Atelier', 'Forma', 'Daily objects', 'Сайт студии', 'Каталог товаров', 'Личный кабинет', 'Сайт сервиса' );
}

function orma_project_url( $index ) {
	return add_query_arg( 'project', $index, orma_url( 'works' ) );
}

function orma_blog_pagination_url() {
	$url = is_home() && get_option( 'page_for_posts' ) ? get_permalink( get_option( 'page_for_posts' ) ) : orma_url( 'blog' );
	return add_query_arg( 'orma_page', 999999, $url );
}
