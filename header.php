<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<meta property="og:title" content="" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="" />
		<meta property="og:url" content="" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />

		<?php wp_head(); ?>

		<script src="https://unpkg.com/vue@3"></script>
		<!-- <script src="https://unpkg.com/vue@3.2.33/dist/vue.global.prod.js"></script> -->

	</head>
	<body <?php body_class(); ?>>
		<?php if ( ! function_exists( 'wp_body_open' ) ) {
			function wp_body_open() {
				do_action( 'wp_body_open' );
			}
		} ?>


	<?php if ( get_field( 'splash_page_toggle', 'option' ) == 0 ) : ?>
		<div id="app">
			
			<?php if ( have_rows( 'hero' ) ): ?>
				<?php while ( have_rows( 'hero' ) ) : the_row(); ?>

					<?php if ( get_sub_field( 'page_hero' ) == 1 ) : // this checks to see if the page hero is active. If not use some inline JS to account for header menu spacing.?>
						<header id="header" :class="[!view.atTopOfPage ? 'h-16' : 'h-16 lg:h-28']" class="w-full flex flex-wrap transition-height duration-200 fixed top-0 z-50" role="banner">
							<nav id="nav" :class="[!view.atTopOfPage ? 'bg-brand-black' : 'bg-brand-black lg:bg-transparent']"  class="flex flex-wrap items-start lg:items-center justify-between w-full h-full relative">
								<?php get_template_part('parts/nav') ?>
							</nav>
						</header>
					<?php else: ?>
						<header id="header" class="w-full flex flex-wrap transition-height h-16 duration-200 fixed top-0 z-50" role="banner">
							<nav id="nav" class="flex flex-wrap items-start lg:items-center justify-between bg-brand-black w-full h-full relative">
								<?php get_template_part('parts/nav') ?>
							</nav>
						</header>
					<?php endif; ?>

				<?php endwhile; ?>
			<?php endif; ?>
					
	<?php else: ?>
		<div id="app">
	<?php endif; ?>