<?php include 'includes/head.php'?>
<body class="body-bg">

    <?php include 'includes/header.php'?>
        

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