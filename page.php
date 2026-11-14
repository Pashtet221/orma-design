<?php
defined( 'ABSPATH' ) || exit;

$template = orma_template_for_page();
if ( $template ) {
	orma_render( $template );
} else {
	orma_render( 'content' );
}
