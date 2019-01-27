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

                Development
                Web/Mobile
                VR/AR
                Team Lead

                <p>I am a driven and inquisitive full-stack developer that combines a background in large-scale projects and team management with expertise in development with the web's leading-edge technologies to deliver on time and above expectations. I deliver award-winning websites for brands including Toyota and Lexus. My near-obsessive organizational and planning skills keeping projects on target. Always hungry to learn the next interesting technology, I am continuously learning and expanding my knowledge base.</p>
            </div>
        </section>

        <!-- Résumé -->
        <section id="resume">
            <div class="section__container">
                <h1 class="heading-1">Résumé</h1>

                <ul class="resume">
                    <li class="resume__title">Present</li>
                    <li class="resume__item">
                        <h2 class="heading-2">Saatchi & Saatchi Canada (formerly TPM Communications)</h2>
                        <p class="resume__position">Senior Developer</p>
                        <ul>
                            <li>Involved from wireframing through launch with redesigns for both Toyota and Lexus that achieved the #1 rank for automotive company OEM websites and Canada’s 1st responsive automotive brand website</li>
                            <li>Architected technology stacks for projects utilizing modern technologies including Java/Struts, Freemarker, LESS, Laravel, WordPress, and Angular</li>
                            <li>Spearheaded the development and implementation of new company-wide processes to switch from waterfall to an agile development model, including the onboarding of non-technical team members</li>
                        </ul>
                        <p class="resume__time">Jun 2010 - Present</p>
                    </li>
                    <li class="resume__item">
                        <h2 class="heading-2">TunnelBear</h2>
                        <p class="resume__position">Freelance Developer</p>
                        <ul>
                            <li>Built a user dashboard and payment system using Stripe.js streamlining the subscription process</li>
                            <li>Implemented animations using CSS3 and jQuery to create a fun and engaging user upgrade/downgrade experience</li>
                            <li>Integrated ZenDesk support into the existing TunnelBear website, allowing a seamless help experience for users</li>
                        </ul>
                        <p class="resume__time">Sep 2012 - Mar 2015</p>
                    </li>
                    <li class="resume__item">
                        <h2 class="heading-2">Sesame Communications</h2>
                        <p class="resume__position">Freelance Developer</p>
                        <ul>
                            <li>Build standards-compliant and efficient sites for the dental and orthodontics industry using XHTML, CSS, JavaScript, and PHP</li>
                        </ul>
                        <p class="resume__time">Sep 2009 - Aug 2010</p>
                    </li>
                    <li class="resume__item">
                        <h2 class="heading-2">Blast Radius</h2>
                        <p class="resume__position">Lead Interface Developer, Contract</p>
                        <ul>
                            <li>Developed XHTML/CSS and JavaScript pages for Scotts Miracle-Gro homepage and brand micro-sites</li>
                            <li>Oversaw a team of interface developers in the development of a CMS to allow Scotts to manage their own web properties</li>
                        </ul>
                        <p class="resume__time">Dec 2008 - Jul 2010</p>
                    </li>
                    <li class="resume__item">
                        <h2 class="heading-2">Henderson Bas</h2>
                        <p class="resume__position">Interface Developer, Contract</p>
                        <ul>
                            <li>Created a templating system to facilitate faster development of website updates for new products, news & events for Nintendo, Molson Canadian, Coca-Cola, and Mercedes-Benz</li>
                        </ul>
                        <p class="resume__time">Sep 2008 - Dec 2008</p>
                    </li>
                    <li class="resume__item">
                        <h2 class="heading-2">Boom Resource</h2>
                        <p class="resume__position">Freelance Developer</p>
                        <ul>
                            <li>Designed and developed websites for Boom Resource’s internal site and Otis Capital Mining Exploration</li>
                        </ul>
                        <p class="resume__time">Jun 2008 - Dec 2008</p>
                    </li>
                    <li class="resume__item">
                        <h2 class="heading-2">Project JLM</h2>
                        <p class="resume__position">Technical Lead</p>
                        <ul>
                            <li>Led development of flagship CMS product, managing a remote team of developers around the world in a startup environment</li>
                            <li>Programmed client sites and both font- and back-end functionality of CMS</li>
                        </ul>
                        <p class="resume__time">May 2008 - Jul 2010</p>
                    </li>
                    <li class="resume__item">
                        <h2 class="heading-2">e-BizSoft</h2>
                        <p class="resume__position">Freelance Developer</p>
                        <ul>
                            <li>Sliced PSD files into standards-compliant XHTML/CSS</li>
                        </ul>
                        <p class="resume__time">May 2008 - Jul 2009</p>
                    </li>
                    <li class="resume__item">
                        <h2 class="heading-2">ESAB Welding & Cutting Products</h2>
                        <p class="resume__position">Freelance Developer</p>
                        <ul>
                            <li>Designed and developed websites for various ESAB Brands including PowerCut and FastTrack</li>
                        </ul>
                        <p class="resume__time">Mar 2008 - Sep 2008</p>
                    </li>
                    <li class="resume__item">
                        <h2 class="heading-2">Fortify Software</h2>
                        <p class="resume__position">Freelance Developer</p>
                        <ul>
                            <li>Perform website maintenance including designing and building new pages</li>
                        </ul>
                        <p class="resume__time">Feb 2007 - Nov 2007</p>
                    </li>
                    <li class="resume__item">
                        <h2 class="heading-2">Cleanpage</h2>
                        <p class="resume__position">Freelance Developer</p>
                        <ul>
                            <li>Developed websites for local businesses and organizations</li>
                        </ul>
                        <p class="resume__time">Aug 2006 - Sep 2008</p>
                    </li>
                    <li class="resume__title">Education</li>
                    <li class="resume__item">
                        <h2 class="heading-2">Rochester Institute of Technology</h2>
                        <p class="resume__position">Information Technology</p>
                        <p>Concentration in web & game development</p>
                        <p class="resume__time">2003 - 2008</p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Skills -->
        <section id="skills">
            <div class="section__container">
                <h1 class="heading-1">Skills</h1>

                <h2 class="heading-2">Development</h2>
                HTML5
                CSS (Inc. Flexbox & Grid)
                SASS/LESS
                Responsive
                CSS Animation
                JavaScript/jQuery
                React
                Accessibility
                PHP
                ASP.NET
                Classic ASP
                WordPress
                Git
                Database
                Photoshop CC

                <h2 class="heading-2">VR/AR</h2>
                Photogrammetry
                3D Modeling
                Unreal Engine
                Unity

                <h2 class="heading-2">Soft Skills</h2>
                Team Management
                Organization
                Process Management
                User Experience Design
                Wireframing
                Problem-solving to hunt down that last elusive bug
            </div>
        </section>

<?php
get_footer();