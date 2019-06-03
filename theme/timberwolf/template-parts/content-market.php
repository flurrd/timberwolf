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

<!--         <div class="service-item__cover-wrap">
            <div class="service-cover">
                
            </div>
        </div> -->

        <div class="service-item__content-wrap">
            <div class="service-rte">

                <header class="entry-header">

                    <?php timberwolf_post_thumbnail(); ?>    

                    <small>content market</small>
                    <?php
						the_title( '<h4 class="entry-title">', '</h4>' );
                    ?>
                    <?php the_excerpt() ?>
                    
                    
                    <a class="btn" href="<?php echo get_permalink(); ?>"> Read More...</a>
                </header><!-- .entry-header -->

                <footer class="entry-footer mar-t-1">
                    <?php timberwolf_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </div>
 
        </div>

</article><!-- #post-<?php the_ID(); ?> -->
