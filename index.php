<?php include 'includes/head.php'?>
<style>
    .left-text-card
    {
        background: #F0F0EC;
    }
</style>
<body class="body-bg">
    <?php include 'includes/header.php'?>
    <div class="theme-container">
        <div class="img-container mb-5 pb-5">
            <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/s1.jpg" alt="">
        </div>
        <p class="text-center themes-title-fonts my-5"><b>BRAND STORY</b></p>
        <p class="themes-para-fonts my-5">Atelier Sao Design Inc is a luxury interior architecture. Founded in 2016 as int design studio, the Yangon-based an interdisciplinary brand has evolved into an interior rchitecture firm that is practicing the contemporary deFounded in 2016 as an interior design studio, the Yangon-based an interdisciplinary. The studio presently consists of a team of creative individuals ho share design expertise and inspiration through a wide range of skills such as Interior Design, Interior Architecture, Product Design, Visual Merchandising, Interior Styling, Creative Interior Branding,</p>

        <div class="row left-text-card mx-0">
            <div class="col-sm-12 col-md-3 mr-0">
                <p class="themes-para-fonts my-5">
                    We make indoor spaces functional, safe, and beaut determining space requirements and selecting esse decorative items, such as colors, lighting, and mate,
                </p>
                <p class="text-center themes-title-fonts my-5"><b>INTERIOR DESIGN</b></p>
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c1.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="row left-text-card mx-0 mt-5">
            <div class="col-sm-12 col-md-3 mr-0">
                <p class="themes-para-fonts my-5">
                    We focus on components or elements of a structur generally the one in charge of the architectural des and elements to create a coherent
                </p>
                <p class="text-center themes-title-fonts my-5"><b>ARCHITECTURE</b></p>
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/c2.jpg" alt="">
                </div>
            </div>
        </div>

        <p class="text-center mt-3">
            <a href="" style="font-size: 15px;" class="text-center themes-para-fonts my-5">SEE MORE SERVICE</a>
        </p>

        <p class="text-center themes-title-fonts my-5"><b>FEATURED WORKS</b></p>

        <div class="row">
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
        <p class="text-center mt-3">
            <a href="" style="font-size: 15px;" class="text-center themes-para-fonts my-5">EXPLORE</a>
        </p>
    </div>


    <?php include 'includes/footer.php'?>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl-setup.js" ></script>
    <script>
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