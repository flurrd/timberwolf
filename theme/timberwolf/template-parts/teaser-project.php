<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */

?>


<article class="project-archive-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
    <a href="<?php echo get_permalink(); ?>">    <?php
                the_title( '<h1 class="entry-title">Project | ', '</h2>' );
            ?>
        </a>   
        <?php the_excerpt() ?>
    
    </header><!-- .entry-header -->
    <div class="d-flex mar-t-3">
        <div class="project-img">
            <?php timberwolf_post_thumbnail(); ?>  
            <a class="btn project-btn" href="<?php echo get_permalink(); ?>">View Project</a>              
        </div>
    </div>
   
    
</article>


<!-- #post-<?php the_ID(); ?> -->
