<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package CryptiBIT
 */

get_header(); ?>
<div class="content-block">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-404">
					<div class="page-404-box">
					<h3><?php esc_html_e( 'Page not found', 'cryptibit' ); ?></h3>
					<h1><?php esc_html_e("404", 'cryptibit'); ?></h1>
					</div>
					<p><?php esc_html_e( 'You may have typed the address incorrectly or you may have used an outdated link. Try search our site.', 'cryptibit' ); ?></p>
					<div class="search-form">
						<?php get_search_form(true); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
