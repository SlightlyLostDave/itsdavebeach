<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package It's_Dave_Beach
 */
get_header();
?>

    <!-- Marquee -->
    <section id="marquee">
        <div class="marquee__slide">
            <div class="marquee__title">
                <h1 class="heading-1">Hi, I&rsquo;m Dave Beach</h1>
                <h2 class="heading-2">Full-stack developer with a passion for immersive experiences and blazing-fast code</h2>
                <button>Let&rsquo;s Go</button>
            </div>
        </div>
    </section>

    <div class="title-block">

    </div>
    
    <div class="content-block">

        <!-- About -->
        <section id="about">

        </section>

        <!-- Résumé -->
        <section id="resume">

        </section>

        <!-- Skills -->
        <section id="skills">

        </section>

        <!-- Blog -->


        <!-- Clients & Testimonials -->


        <!-- Contact -->

        
    </div>

<?php
get_footer();