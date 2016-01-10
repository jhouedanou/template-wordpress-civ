<?php get_header(); ?>
<div class="main">
        <div class="orange darken-2 ym-wrapper section">
          <div class="introtext flow-text ym-wbox">
          <?php
            query_posts('p=41');
            global $more;
             $more = 0;
            while (have_posts()) : the_post();
          ?>
            <h1 class="robotoslab center-align white-text text-">
              <?php the_title();?>
            </h1>
            <div class="white-text"><?php the_content(); ?></div>
            <div class="boy center">
              <a id="priva" class="waves-effect waves-light btn orange lighten-1" href="<?php the_permalink(); ?>">En savoir plus</a>
            </div>
            <?php
              endwhile;
            ?>
          </div>
        </div>
        <div id="introwpciv" class="ym-wrapper z-depth-1 section">
          <div class="petit ym-wbox center">
                  <h1 class="grey-text lighten-2 flow-text center">Découvrez une communaut&eacute; multi facettes.</h1>
            </div>
          <div id="intropi" class="ym-wbox ym-grid linearize-level-1">
                  <div class="ym-g33 ym-gl slappy">
                    <div class="center promo promo-example">
                     <i class="material-icons orange lighten-2 white-text">&#xE86F;</i>
                        <?php
                          query_posts('p=32');
                          global $more;
                          $more = 1;
                          while (have_posts()) : the_post();
                        ?>
                      <h2 class="promo-caption orange-text darken-4 robotoslab"><?php the_title(); ?></h2>
                      <div class="grey-text light left tapey"><?php the_excerpt(); ?></div>
                    </div>
                     <?php
                        endwhile;
                      ?>
                  </div>
                  <div class="ym-g33 ym-gl slappy">
                    <div class="center promo promo-example">
                        <i class="material-icons orange lighten-2 white-text">&#xE7FB;</i>
                        <?php
                          query_posts('p=35');
                          global $more;
                          $more = 1;
                          while (have_posts()) : the_post();
                        ?>
                      <h2 class="promo-caption orange-text darken-4 robotoslab"><?php the_title(); ?></h2>
                      <div class="grey-text light left tapey"><?php the_excerpt(); ?></div>
                    </div>
                     <?php
                        endwhile;
                      ?>
                  </div>
                  <div class="ym-g33 ym-gl slappy">
                    <div class="center promo promo-example">
                      <i class="material-icons orange lighten-2 white-text">&#xE8B8;</i>
                        <?php
                          query_posts('p=38');
                          global $more;
                          $more = 1;
                          while (have_posts()) : the_post();
                        ?>
                      <h2 class="promo-caption orange-text darken-4 robotoslab"><?php the_title(); ?></h2>
                      <div class="grey-text light left tapey"><?php the_excerpt(); ?></div>
                    </div>
                     <?php
                        endwhile;
                      ?>
                </div>
        </div>
      </div>
      <div class="section orange lighten-1 bas">
        <div class="ym-wrapper">
          <div class="ym-wbox">
            <div id="mainc">
                  <ul id="gridz" class="ym-grid linearize-level-1">
                    <?php
                         $args = array( 'cat'=> 4, 'showposts'=> 6);
                         $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                      ?>
                      <li class="jenesa ym-g33 ym-gl">
                      <div class="ym-gbox">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <?php
                                if ( has_post_thumbnail()) {
                                  the_post_thumbnail('medium', array('class' => 'activator responsive-img'));
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
                       <?php
                        endwhile;
                        wp_reset_query(); // Remember to reset
                      ?>
                  </ul>

            </div>
          </div>
        </div>
      </div>
</div>


 <?php get_footer(); ?>