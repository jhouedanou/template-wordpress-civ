<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="section section grey lighten-5 mpz fre">
		<div class="trzo ym-wrapper orange darken-1 white-text">
			<div class="trzoe  ym-wbox">
				<h3 class="retarded light white-text right"><?php the_title(); ?></h3>
				</div>
		</div>
	<div class="ym-wrapper">
		<div class="ym-wbox">
			<div id="mainc" class="ym-grid linearize-level">
				<div class="ym-g66 ym-gl">
					<div class="ym-gbox">
						<article class="post white " id="post-<?php the_ID(); ?>">
								<div class="opp">
									<?php posted_on(); ?>
								</div>

								<div class="entry">

									<?php the_content(); ?>

									<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

								</div>

								<?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?>

							</article>

							<?php comments_template(); ?>

							<?php endwhile; endif; ?>
					</div>
				</div>
				<div class="ym-g33 ym-gr">
					<div class="ym-gbox">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>

