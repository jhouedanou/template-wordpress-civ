<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
		<?php if (have_posts()) : ?>
    <div id="datez" class="ym-wrapper orange darken-1 white-text">
      <div class="ym-wbox">
          <h3 class="retarded light white-text right"><?php single_cat_title(); ?></h3>
        </div>
    </div>
<div class="section grey lighten-5">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			<div id="mainc">
    <ul id="gridz" class="ym-grid linearize-level-1">

			<?php while (have_posts()) : the_post(); ?>

			<li class="jenesa ym-g33 ym-gl fly">
                <div class="ym-gbox">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <?php
                          if ( has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('class' => 'activator'));
                          }
                        ?>

                      </div>
                      <div class="card-content">
                        <span class="card-title activator orange-text text-darken-4 robotoslab"><?php the_title(); ?><i class="material-icons orange-text text-darken-4 right">more_vert</i></span>
                      </div>
                      <div class="card-reveal">
                        <span class="card-title orange-text text-darken-4 robotoslab"><?php the_title(); ?><i class="material-icons right">close</i></span>
                        <hr>
                            <p><?php  global $more;
                            $more = 0;
                           the_content(); ?>
                       </p>
                      </div>
                    </div>
                </div>

                </li>

			<?php endwhile; ?>

			<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
