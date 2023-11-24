
<?php include 'includes/head.php'?>
<style>
    p{
        margin: 0;
        padding: 0;
    }
    .custom-my-devider
    {
        margin: 100px 0;
    }
</style>
<body class="body-bg">
<?php include 'includes/header.php'?>
<div class="theme-container mt-4">
    <div class="custom-my-devider">
        <h1 data-aos="fade-up" data-aos-duration="1000" class="text-center works-main-title">CHANGING THE WORLD,</h1>
        <h1 data-aos="fade-up" data-aos-duration="1200" class="text-center works-main-title">ONE SPACE AT A TIME</h1>
    </div>

<!--    <div class="theme-container mt-4">-->

        <div data-aos="fade-up" data-aos-duration="1500" class="d-flex justify-content-center align-items-center">
            <h5 class="primary-theme-text-color">INTERIOR DESIGN</h5>
            <h5 class="text-muted"> &nbsp; | &nbsp;</h5>
            <h5 class="opacity-50">ARCHITECTURE</h5>
        </div>

        <div class="row px-0 mx-0" data-aos="fade-up" data-aos-duration="1800">
            <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-4 my-5">
                <div class="img-container">
                    <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/arche/1.jpg" alt="">
                </div>
                <div class="card-text mt-3">
                    <p>ZOM STADIUM</p>
                    <p class="opacity-50">ART GALLERY</p>
                    <p class="opacity-50">JULY 2021</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-4 my-5">
                <div class="img-container">
                    <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/arche/2.jpg" alt="">
                </div>
                <div class="card-text mt-3">
                    <p>ZOM STADIUM</p>
                    <p class="opacity-50">ART GALLERY</p>
                    <p class="opacity-50">JULY 2021</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-4 my-5">
                <div class="img-container">
                    <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/arche/3.jpg" alt="">
                </div>
                <div class="card-text mt-3">
                    <p>ZOM STADIUM</p>
                    <p class="opacity-50">ART GALLERY</p>
                    <p class="opacity-50">JULY 2021</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-4 my-5">
                <div class="img-container">
                    <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/arche/4.jpg" alt="">
                </div>
                <div class="card-text mt-3">
                    <p>ZOM STADIUM</p>
                    <p class="opacity-50">ART GALLERY</p>
                    <p class="opacity-50">JULY 2021</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-4 my-5">
                <div class="img-container">
                    <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/arche/5.jpg" alt="">
                </div>
                <div class="card-text mt-3">
                    <p>ZOM STADIUM</p>
                    <p class="opacity-50">ART GALLERY</p>
                    <p class="opacity-50">JULY 2021</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-12 col-md-4 my-5">
                <div class="img-container">
                    <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/arche/6.jpg" alt="">
                </div>
                <div class="card-text mt-3">
                    <p>ZOM STADIUM</p>
                    <p class="opacity-50">ART GALLERY</p>
                    <p class="opacity-50">JULY 2021</p>
                </div>
            </div>
        </div>

        <p class="opacity-50 text-center explore-devider">EXPLORE</p>

<!--    </div>-->

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