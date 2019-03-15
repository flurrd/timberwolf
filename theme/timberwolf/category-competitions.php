<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */
    $categories=get_categories(
        array( 'parent' => $cat->cat_ID )
    );

    get_header();
?>

<div id="primary" class="content-area site-max-width">
    <main id="main" class="site-main">

    
        <header class="page-header">
            <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="archive-description">', '</div>' );
            ?>
            <h3>Category Competitions Template</h3>
        </header>


            <div class="publications-list">

            <?php


            //Capture the current category and store its child categories in an array

            $term = get_queried_object();
            $children = get_terms( $term->taxonomy, array(
                'parent'    => $term->term_id,
                'hide_empty' => false
            ) );

            if ( $children ) { 
                foreach( $children as $subcat )
                {

                    $image = get_field('category_image', $subcat);
                    $size = 'full';
                    
                    echo '
                        <div class="competition-category">
                            <a class="competition-category__image-link" href="' . esc_url(get_term_link($subcat, $subcat->taxonomy)) . '">' 
                            . wp_get_attachment_image( $image, $size ) . '
                            </a>
                            <a href="' . esc_url(get_term_link($subcat, $subcat->taxonomy)) . '">' 
                            . $subcat->name . '
                            </a>

                        </div>';
                        
                }
            }
            ?>
        
        </div>

    </main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
?>