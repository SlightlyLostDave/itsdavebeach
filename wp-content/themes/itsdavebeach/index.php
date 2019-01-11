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
                    <button class="btn btn-primary"><span>Let&rsquo;s Go</span></button>
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
                <p>Sea Legs pirate aye dead men tell no tales hands rutters yard furl killick poop deck. Spanish Main to go on account overhaul yardarm skysail clipper quarter scourge of the seven seas flogging tack. Man-of-war smartly Jack Tar Shiver me timbers nipper trysail hands boatswain league jib.<p>
                <p>Lanyard careen grapple weigh anchor square-rigged booty topgallant schooner yard log. Barkadeer aft holystone run a shot across the bow grog reef hornswaggle avast schooner pinnace. Haul wind pillage Nelsons folly ho gunwalls chase guns code of conduct gibbet salmagundi lookout.</p>
                <p>Barkadeer six pounders galleon loaded to the gunwalls sutler Jack Tar grapple jib snow landlubber or just lubber. Brethren of the Coast run a rig pressgang measured fer yer chains Spanish Main heave down nipperkin wench Sail ho holystone. Me wherry lateen sail sutler jury mast log line topgallant scurvy Blimey.</p>
            </div>
        </section>

        <!-- Résumé -->
        <section id="resume">
            <div class="section__container">
                <p>Sea Legs pirate aye dead men tell no tales hands rutters yard furl killick poop deck. Spanish Main to go on account overhaul yardarm skysail clipper quarter scourge of the seven seas flogging tack. Man-of-war smartly Jack Tar Shiver me timbers nipper trysail hands boatswain league jib.<p>
                <p>Lanyard careen grapple weigh anchor square-rigged booty topgallant schooner yard log. Barkadeer aft holystone run a shot across the bow grog reef hornswaggle avast schooner pinnace. Haul wind pillage Nelsons folly ho gunwalls chase guns code of conduct gibbet salmagundi lookout.</p>
                <p>Barkadeer six pounders galleon loaded to the gunwalls sutler Jack Tar grapple jib snow landlubber or just lubber. Brethren of the Coast run a rig pressgang measured fer yer chains Spanish Main heave down nipperkin wench Sail ho holystone. Me wherry lateen sail sutler jury mast log line topgallant scurvy Blimey.</p>
            </div>
        </section>

        <!-- Skills -->
        <section id="skills">
            <div class="section__container">
                <p>Sea Legs pirate aye dead men tell no tales hands rutters yard furl killick poop deck. Spanish Main to go on account overhaul yardarm skysail clipper quarter scourge of the seven seas flogging tack. Man-of-war smartly Jack Tar Shiver me timbers nipper trysail hands boatswain league jib.<p>
                <p>Lanyard careen grapple weigh anchor square-rigged booty topgallant schooner yard log. Barkadeer aft holystone run a shot across the bow grog reef hornswaggle avast schooner pinnace. Haul wind pillage Nelsons folly ho gunwalls chase guns code of conduct gibbet salmagundi lookout.</p>
                <p>Barkadeer six pounders galleon loaded to the gunwalls sutler Jack Tar grapple jib snow landlubber or just lubber. Brethren of the Coast run a rig pressgang measured fer yer chains Spanish Main heave down nipperkin wench Sail ho holystone. Me wherry lateen sail sutler jury mast log line topgallant scurvy Blimey.</p>
            </div>
        </section>

        <!-- Blog -->


        <!-- Clients & Testimonials -->


        <!-- Contact -->

        
    </div>

<?php
get_footer();