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
    <section id="marquee" class="stage">
        <div class="marquee__wrapper" data-top-bottom="transform: translateY(250px);" data-bottom-top="transform: translateY(-250px);">
            <div class="marquee__slide">
                <div class="marquee__text" data-top-bottom="transform: translateY(-150px);" data-bottom-top="transform: translateY(150px);">
                    <h1 class="heading-1">Hi, I&rsquo;m Dave Beach</h1>
                    <h2 class="heading-2">Full-stack developer with a passion for immersive experiences and blazing-fast code</h2>
                    <button class="btn btn-primary" data-start-btn data-bg="about.jpg" data-text="About Me"><span>Let&rsquo;s Go</span></button>
                </div>
            </div>
        </div>
    </section>

    <div class="title-block stage">

        <div class="title-block__wrapper">
            <div class="title-block__bg"></div>
            <div class="title-block__text"></div>
        </div>

    </div>
    
    <div class="content-block stage">

        <!-- About -->
        <section id="about">
            <div class="section__container">
                <h1 class="heading-1">About</h1>
            </div>
        </section>

        <!-- Résumé -->
        <section id="resume">
            <div class="section__container">
                <h1 class="heading-1">Résumé</h1>
            </div>
        </section>

        <!-- Skills -->
        <section id="skills">
            <div class="section__container">
                <h1 class="heading-1">Skills</h1>
            </div>
        </section>

        <!-- Blog -->


        <!-- Clients & Testimonials -->


        <!-- Contact -->

        
    </div>

<?php
get_footer();