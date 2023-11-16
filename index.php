<?php include 'includes/head.php'?>
<body class="body-bg">

    <?php include 'includes/header.php'?>
    <div class="theme-container">
        <div class="img-container">
            <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/s1.jpg" alt="">
        </div>

        <p class="text-center themes-title-fonts my-5"><b>BRAND STORY</b></p>
        <p class="themes-para-fonts my-5">Atelier Sao Design Inc is a luxury interior architecture. Founded in 2016 as int design studio, the Yangon-based an interdisciplinary brand has evolved into an interior rchitecture firm that is practicing the contemporary deFounded in 2016 as an interior design studio, the Yangon-based an interdisciplinary. The studio presently consists of a team of creative individuals ho share design expertise and inspiration through a wide range of skills such as Interior Design, Interior Architecture, Product Design, Visual Merchandising, Interior Styling, Creative Interior Branding,</p>
    </div>


<!--    --><?php //include 'includes/footer.php'?>

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