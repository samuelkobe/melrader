<?php get_header(); ?>

	<main role="main" class="bg-slate-100">
		<!-- section -->
		<section>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="flex relative w-full mt-16 lg:mt-0 mb-6 lg:mb-12 overflow-hidden h-auto lg:h-[50vh] min-h-[280px] md:min-h-[320px] xl:min-h-[480px]">
					<div class="absolute left-0 top-0 h-full w-full bg-black z-10 opacity-40 pointer-events-none"></div>

					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<?php the_post_thumbnail('full', array('class' => 'absolute inset-0 w-full h-full object-cover mix-blend-normal theme-override')); // Fullsize image for the single post ?>
					<?php endif; ?>

					<div class="w-full py-8 md:py-16 lg:mt-0 px-6 lg:px-0 lg:container lg:mx-auto flex flex-col items-start justify-center relative z-20 text-white">

						<div class="w-full order-2 relative">
							<h1 class="font-title capitalize lg:mt-0 text-4xl lg:text-6xl 2xl:text-8xl leading-none lg:leading-tight xl:leading-snug"><?php the_title(); ?></h1>
							<p class="font-normal text-lg lg:text-xl 2xl:text-2xl w-full md:w-5/6 lg:w-3/4 "><?php the_time('M j, Y'); ?></p>
						</div>

						<div class="categories order-3 justify-self-end absolute bottom-6 lg:bottom-8"><?php the_category('&#32');?></div>

					</div>
					
				</div>

				<div class="px-6 lg:px-0 lg:container lg:mx-auto w-full flex flex-col lg:flex-row gap-x-1/12">
					<div class="w-full lg:w-3/4">

						<div class="flex flex-row items-center text-brand-black text-lg">
							<a class="text-brand-main underline" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Posts</a>
							<span class="block px-2 text-2xl">&rsaquo;</span>
							<h2 class="capitalize"><?php the_title(); ?></h2>
						</div>

						<div class="my-6 lg:my-12 blog">
							<?php if ( get_field( 'splash_page_toggle', 'option' ) == 0 ) : ?>

								<span ref="topOfContent" class="h-0 w-0 cursor-none pointer-events-none invisible"></span>

									<?php // <section> added inside row loop
									if (have_rows('rowsblog')):
										// loop through the rows of data
										while (have_rows('rowsblog')) : the_row();
										$layout = get_row_layout();
										include 'rowsblog/row-' . $layout . '.php';
									endwhile;
									else :
										echo '<p>No content rows created yet. Edit this post to add blog rows or talk to your web admin.</p>';
									endif; ?>
								
							<?php endif; ?>
						</div>


						<?php if(current_user_can('editor') || current_user_can('administrator')) : ?>
							<div class="text-brand-main font-title text-lg lg:text-xl my-6">
								<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
							</div>
						<?php endif; ?>

					</div>

					<div class="w-full flex flex-col lg:w-1/4 text-brand-black">
						
						<div class="flex flex-col lg:items-center mb-6">
							<h4 class="font-title text-xl lg:text-2xl block self-start text-brand-black">Author: </h4>
							<p class="text-base lg:text-lg font-sans self-start"><?php the_author(); ?></p>
							<?php
								$get_author_id = get_the_author_meta('ID');
								$get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));

								echo '<img src="'.$get_author_gravatar.'" class="rounded-full w-24 lg:w-full my-4" alt="'.get_the_author().'" />';
							?>
						
						</div>

						<div class="mb-6">
							<h4 class="font-title text-xl lg:text-2xl block text-brand-black">Post Tags:</h4>
							<div class="mt-4 mb-6 flex flex-wrap gap-2 tags">
								<?php if(has_tag()) : ?>
									<?php the_tags('&#32', '&#32'); ?>
								<?php else : ?>
									<p>No post tags.</p>
								<?php endif; ?>
							</div>
						</div>
						
						<?php get_sidebar(); ?>

					</div>
				</div>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'web-ok-starter' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
