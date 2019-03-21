<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */

?>


<article class="service-archive-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="service-item__img-wrap">
            <div class="service-img">
                <?php timberwolf_post_thumbnail(); ?>                
            </div>
            <div class="service-rte">

                <header class="entry-header">
                <a href="<?php echo get_permalink(); ?>">    <?php
						the_title( '<h2 class="entry-title">', '</h2>' );
                    ?>
                </a>
                    <?php the_excerpt() ?>
                    
                    <!-- <a class="btn" href=""> Read More...</a> -->
                </header><!-- .entry-header -->

                <footer class="entry-footer mar-t-1">
                    <?php timberwolf_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </div>


        </div>

 






        
</article><!-- #post-<?php the_ID(); ?> -->
