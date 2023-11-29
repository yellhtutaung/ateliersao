<?php include 'includes/head.php'?>
<style>
    .section-divider-margin
    {
        margin: 150px 0px;
    }
</style>
<body class="body-bg">
    <?php include 'includes/header.php'?>
    <div class="theme-container mt-4">
        <div data-aos="fade-up" data-aos-duration="1000" class="img-container mb-5 pb-5">
            <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/s1.jpg" alt="">
        </div>
        <p data-aos="fade-up" data-aos-duration="1000" class="text-center themes-title-fonts my-5"><b>BRAND STORY</b></p>
        <p data-aos="fade-up" data-aos-duration="1000" class="themes-para-fonts my-5" >Atelier Sao Design Inc is a luxury interior architecture. Founded in 2016 as int design studio, the Yangon-based an interdisciplinary brand has evolved into an interior rchitecture firm that is practicing the contemporary deFounded in 2016 as an interior design studio, the Yangon-based an interdisciplinary. The studio presently consists of a team of creative individuals ho share design expertise and inspiration through a wide range of skills such as Interior Design, Interior Architecture, Product Design, Visual Merchandising, Interior Styling, Creative Interior Branding,</p>

        <div data-aos="fade-up" data-aos-duration="1000" class="row left-text-card mx-0 px-0 "style="margin-top: 130px;">
            <div class="col-sm-12 col-md-4 mr-0 d-flex flex-column justify-content-end left-card-padding">
                <p class="themes-para-fonts mt-5">
                    We make indoor spaces functional, safe, and beaut determining space requirements and selecting esse decorative items, such as colors, lighting, and mate,
                </p>
                <p class="themes-title-fonts my-2"><b>INTERIOR DESIGN</b></p>
            </div>
            <div class="col-sm-12 col-md-8 px-0">
                <div class="img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c1.jpg" alt="">
                </div>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="1000" class="row left-text-card mx-0 mt-5">
            <div class="col-sm-12 col-md-4 mr-0 d-flex flex-column justify-content-end left-card-padding">
                <p class="themes-para-fonts mt-5">
                    We focus on components or elements of a structur generally the one in charge of the architectural des and elements to create a coherent
                </p>
                <p class="themes-title-fonts my-2"><b>ARCHITECTURE</b></p>
            </div>
            <div class="col-sm-12 col-md-8 px-0">
                <div class="img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c2.jpg" alt="">
                </div>
            </div>
        </div>

        <p data-aos="fade-up" data-aos-duration="1000" class="text-center mt-5">
            <a href="<?php echo home_url(); ?>/services" style="font-size: 15px;" class="text-center themes-para-fonts my-5">SEE MORE SERVICE AND EXPERTISE</a>
        </p>

        <div class="section-divider-margin">
            <p data-aos="fade-up" data-aos-duration="1000" class="text-center" style="letter-spacing: 4px">"INTERIOR MATTER"</p>
            <p data-aos="fade-up" data-aos-duration="1000" class="text-center themes-title-fonts mb-5"><b>FEATURED WORKS</b></p>
            <div data-aos="fade-up" data-aos-duration="1000" class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel/2.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel/3.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel/4.jpg" alt="">
                    </div>
                </div>
            </div>
            <p data-aos="fade-up" data-aos-duration="2000" class="text-center mt-5">
                <a href="" style="font-size: 15px;" class="text-center themes-para-fonts my-5">EXPLORE</a>
            </p>
        </div>


    </div>

    <?php include 'includes/desk-menu-overlay.php'?>

    <?php include 'includes/footer.php'?>
    <?php include 'includes/footer-script.php'?>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl-setup.js" ></script>
    <script>

        $(document).ready(function() {
            AOS.init();
        });


        if (screen.width < 600) {
            $('.for-mobile').removeAttr("src");
            console.log('remove');
            $('.hambager-list').remove();
            $('.remove-style').removeAttr("style");
            $('.mobile-hidden').addClass('d-none');
            $('.mobile-wrap-title').html('Hair Extentions');
        }
        const wpPrefix = "<?php echo get_template_directory_uri(); ?>";

    </script>

</body>
</html>