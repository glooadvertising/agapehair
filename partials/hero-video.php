<section class="hero-video" data-aos="fade" data-aos-easing="ease-out" data-aos-duration="900">
    <div class="overlay"></div>
    <video id="bgvid" autoplay muted loop playsinline >
        <source src="<?php echo get_template_directory_uri();?>/assets/videos/hero-bg.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri();?>/assets/videos/hero-bg.webm" type="video/webm">
        <source src="<?php echo get_template_directory_uri();?>/assets/videos/hero-bg.ogv" type="video/ogv">
    </video>
    <?php get_template_part( 'partials/agape-logo' ); ?>
</section>