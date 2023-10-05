<?php get_header(); ?>
<section class="page-content">
    <div class="container">
        <div class="col-left">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
    <?php 
        if(is_page( 'team' )){
            echo "
                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"259.898\" height=\"277\" viewBox=\"0 0 259.898 277\" data-aos=\"slide-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"600\" data-aos-delay=\"600\" class=\"wiggle\" >
                    <g id=\"Group_45\" data-name=\"Group 45\" transform=\"translate(0 140.88)\">
                        <g id=\"Group_44\" data-name=\"Group 44\" transform=\"translate(0 -140.88)\" clip-path=\"url(#clip-path)\">
                        <g id=\"Group_43\" data-name=\"Group 43\" transform=\"translate(0)\">
                            <path id=\"Path_27\" data-name=\"Path 27\" d=\"M19.443,136.12q5.214-23.521,23.429-41.5Q68.4,69.46,116.487,40.906,155.536,16.117,173.954-.408q18.4-16.516,18.4-38.31,0-14.26-9.389-21.408-9.405-7.131-24.414-7.137-29.3,0-56.34,21.786-21.8,16.531-36.056,16.524-9.013,0-14.273-6.384a21.378,21.378,0,0,1-5.258-13.9q0-18.026,13.9-35.681t36.056-29.3a121.736,121.736,0,0,1,44.7-13.9q18.029-1.5,25.541-1.5,48.823,0,72.488,31.55c.159.21.311.435.468.649v-27.81q-30.661-15.652-74.458-15.657-15.776,0-24.039.751-30.814,2.256-63.1,15.775Q45.871-110.831,24.467-90.173T3.059-46.98q0,15.773,9.391,24.411t26.666,8.64q27.78,0,65.355-23.286,19.524-12.007,36.807-12.019,9.75,0,15.775,4.509a14.291,14.291,0,0,1,6.009,12.017q0,17.289-20.657,35.305T78.929,50.67Q27.1,85.236-.321,111.141q-12.995,12.275-19.8,24.979Z\" transform=\"translate(20.123 140.88)\"/>
                        </g>
                        </g>
                    </g>
                </svg>
            ";
        }
        if(is_page('products')) {
            echo "
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"151.795\" height=\"324.489\" viewBox=\"0 0 151.795 324.489\" data-aos=\"slide-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"600\" data-aos-delay=\"600\" class=\"wiggle\" >
                <path id=\"Path_50\" data-name=\"Path 50\" d=\"M130.94,395.723c-25.4,0-50.718-6.393-60.558-9.773a137.466,137.466,0,0,1-24.5-11.463c-6.23-3.712-14.66-9.485-19.438-15.909a93.486,93.486,0,0,1-11.9-22.508,103.519,103.519,0,0,1-4.284-14.719,93.442,93.442,0,0,1-1.991-16.182A60.134,60.134,0,0,1,11.4,283.532a58.6,58.6,0,0,1,8.373-15.817A68.84,68.84,0,0,1,36.19,252.081c.307-.214.55-.383.734-.517a39.13,39.13,0,0,1,7.965-4.58,38.258,38.258,0,0,1,13.736-2.937c.727-.058,1.458-.088,2.172-.088a23.788,23.788,0,0,1,8.088,1.37,32.852,32.852,0,0,1,3.676,2.074l.127.09.009.006,0,0c.058.041.118.084.177.124a65.367,65.367,0,0,1,8.334,6.753l5.626,5.255c.266.22.53.455.809.7,1.131,1.008,2.41,2.148,3.9,2.2a.861.861,0,0,1,.244-.035,1.69,1.69,0,0,1,.653.172l.049.021a1.434,1.434,0,0,0,.515.152.4.4,0,0,0,.283-.11,10.955,10.955,0,0,0,.2-1.556c-.007.182-.006.367-.006.545a7.868,7.868,0,0,1-.037.955c.376-.543.392-2,.046-4.593a14.132,14.132,0,0,0-.41-1.845,20.852,20.852,0,0,1,.419,3.664c-.131-3.647-1.763-7.246-3.342-10.727q-.248-.547-.49-1.084a93.928,93.928,0,0,0-11.928-19.832,212.467,212.467,0,0,0-15.26-17.356c-4.017-4.716-8.476-9.293-12.7-13.536-4.478-4.5-9.68-8.884-15.187-13.523-7.962-6.706-16.193-13.638-22.656-21.378a58.914,58.914,0,0,1-8.1-12.273A38.964,38.964,0,0,1,0,136.337,51.033,51.033,0,0,1,4.88,114.4,60.122,60.122,0,0,1,17.416,97.147,84.838,84.838,0,0,1,34.465,84.428a105.155,105.155,0,0,1,18.418-8.315c.183-.063.368-.129.547-.193.287-.1.58-.207.876-.3a97.535,97.535,0,0,1,29.769-4.385,123.134,123.134,0,0,1,37.872,6.106,114.429,114.429,0,0,1,15.822,6.507,94.579,94.579,0,0,1,14.026,8.625v37.263c-3.234-2.835-6.6-5.556-10.016-8.087a109.2,109.2,0,0,0-22.757-13.425,79.171,79.171,0,0,0-25.6-6.052c-2.368-.205-4.688-.31-6.9-.31a66.409,66.409,0,0,0-6.748.334c-6.98.032-12.78.979-17.238,2.814a18.723,18.723,0,0,0-9.22,7.485,20.453,20.453,0,0,0-2.725,9.956,43.466,43.466,0,0,0,1.5,12.04c1.854,7.365,5.439,16.153,10.962,26.864,4.731,9.451,9.929,18.906,14.956,28.05,8.292,15.082,16.865,30.677,23.651,46.8q.343.933.7,1.9l0,.006c2.35,6.329,5.014,13.5,5.684,20.509.778,8.136-1.336,14.353-6.463,19.006a14.583,14.583,0,0,1-8.338,2.554,13.549,13.549,0,0,1-5.035-.934,32.969,32.969,0,0,1-8.944-5.9c-2.908-2.523-5.739-5.438-8.237-8.011-4.222-4.349-7.869-8.1-10.086-8.1a1.8,1.8,0,0,0-.375.038c-1.623.348-2.711,2.342-3.326,6.1a87.252,87.252,0,0,0-.73,11.041c-.049,1.943-.095,3.779-.2,5.32a86.689,86.689,0,0,0,3.472,25.228,125.053,125.053,0,0,0,9.433,23.013c6.633,12.8,9.031,15.239,12.349,18.614.565.575,1.147,1.167,1.784,1.843a6.262,6.262,0,0,0-.961-.914.006.006,0,0,0-.007,0,42.225,42.225,0,0,0,8.584,7.751,66.16,66.16,0,0,0,17.263,7.273,71.624,71.624,0,0,0,18.211,2.305,84.56,84.56,0,0,0,25.347-4.019v33.216A120.413,120.413,0,0,1,130.94,395.723ZM54.227,244.739a23.157,23.157,0,0,0-5.7,2.177c-.172.089-.346.177-.519.265a17.859,17.859,0,0,0-1.911,1.071c.59-.366,1.217-.677,1.823-.978.187-.093.4-.2.6-.3A27.032,27.032,0,0,1,54.227,244.739Z\" transform=\"translate(0 -71.234)\" fill=\"#d5bedc\"/>
            </svg>
            ";
        }
    ?>
</section>
<?php if (is_page('team')){
    get_template_part( 'partials/team' );
} ?>
<?php 
    if (is_page('products')){
        get_template_part('partials/products');
    }
?>
<?php if (is_page('services')) {
    get_template_part( 'partials/services' );
    get_template_part( 'partials/components/services-gallery' );
}?>



<?php get_footer(); ?>