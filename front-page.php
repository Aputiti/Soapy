<?php get_header(); ?>
<main class="home-main">
    <section class="hero-section">
        <h1>Soapy - for all your soap needs.</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/soapyLogo.webp" alt="Scenic Travel" class="mainLogo">
        <p>Soapy Limited.</p>
        <a href="<?php echo get_permalink(get_page_by_title('Products')); ?>" class="button">Check out Soapy!</a>
    </section>

    <!--
    <section class="features-section">
        <div class="feature">
            <h2>Sustainable Travel</h2>
            <p>Discover eco-friendly travel options that minimize your environmental impact.</p>
        </div>
        <div class="feature">
            <h2>Expert Guides</h2>
            <p>Learn from knowledgeable guides about the local ecosystem and culture.</p>
        </div>
        <div class="feature">
            <h2>Unforgettable Experiences</h2>
            <p>Enjoy unique and memorable travel experiences curated just for you.</p>
        </div>
    </section>
    -->

</main>
<?php get_footer(); ?>
