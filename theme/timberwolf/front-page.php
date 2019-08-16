<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package timberwolf
 */

get_header();
?>


<!--  <section>
  <header class="page__header-image page__header-image-full contact-header" style="background-image: url('https://sydneytimbersolutions.com.au/wp-content/uploads/2019/06/RAINFOREST.jpg')">
	<h1>Protect your timber before it gets back into nature</h1>
  </header>
</section>
 -->

<div class="landing-hero-wrapper">
    <div class="landing-hero">
        <div class="landing-hero-image-wrapper" data-parallax="yes">
            <div class="landing-hero-image-wrapper" data-start="transform: translateY(0px);"
                data-1440="transform: translateY(-500px);">
                <div class="landing-hero-content">
                    <h2 data-0=" opacity: 1; top: 50%;" data-300="opacity: 0; top: 10%;">serious about timber protection</h2>
                    <div class="image">
                        <img src="https://sydneytimbersolutions.com.au/wp-content/uploads/2019/08/STS-HOME-PAGE-HERO-IMAGE-iStock-629074900.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="primary" class="content-area">
    <main id="main" class="site-main site-max-width padd-b-3 padd-t-3">

        <section class="landing-content-hero">
            <div class="landing-content-hero__col landing-content-hero__col--text">
                <div class="landing-content-hero__rte">
                <h2>Protect timber before it's installed with our pre-coating service.</h2>
                <p>Pre-coating timber means all sides of your timber are coated and protected before being installed.</p>
                <a class="btn btn--default" href="/pre-coating/">Find out more</a>
                </div>
            </div>
            <div class="landing-content-hero__col landing-content-hero__col--img">
                <img class="landing-content-hero__img" src="https://sydneytimbersolutions.com.au/wp-content/uploads/2019/08/precoat.jpg" alt="">
            </div>
        </section>

        <section class="landing-content-box-links">
            <div class="flex-grid__row">
                <div class="flex-grid__col">
                    <a class="feature-box" href="/pre-coating/">
                        <div class="feature-box__img"
                            style="background-image: url('https://www.cutek.com.au/wp-content/uploads/2017/11/AERO90X18-HSKPT2-10-1.jpg')">
                        </div>
                        <span class="feature-box__link-txt">Pre-Coating</span>
                    </a>
                </div>
                <div class="flex-grid__col">
                    <a class="feature-box" href="/restoration-maintenance/">
                        <div class="feature-box__img"
                            style="background-image: urL('/wp-content/uploads/2019/04/SLIDER_Manufacturers-C_Stacks2.jpg')">
                        </div>
                        <span class="feature-box__link-txt">Restoration & Maintenance</span>
                    </a>
                </div>
                <div class="flex-grid__col">
                    <a class="feature-box" href="/our-work/">
                        <div class="feature-box__img"
                            style="background-image: urL('https://sydneytimbersolutions.com.au/wp-content/uploads/2019/03/adrien-olichon-1240768-unsplash.jpg')">
                        </div>
                        <span class="feature-box__link-txt">Our Work</span>
                    </a>
                </div>
                <div class="flex-grid__col">
                    <a class="feature-box" href="/contact/">
                        <div class="feature-box__img"
                            style="background-image: urL('https://sydneytimbersolutions.com.au/wp-content/uploads/2019/07/Background222-1.jpg')">
                        </div>
                        <span class="feature-box__link-txt">Contact</span>
                    </a>
                </div>
            </div>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
/* get_sidebar(); */
get_footer();