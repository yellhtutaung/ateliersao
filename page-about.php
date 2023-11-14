<?php include 'includes/head.php'?>
<body class="body-bg">

<?php include 'includes/header.php'?>

<hr data-url="about" class="data-url themes-text-color " style="margin-top: 30px">


<section>
    <div class="container">
        <h4 style="font-size: 60px" class="text-center themes-title-fonts my-5 animate__animated animate__fadeInDown">About Us</h4>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-6 overflow-hidden  d-flex align-items-center">
				<div class="animate__animated animate__fadeInLeft">
					<h4 style="font-size: 55px" class="text-center ml-5 themes-title-fonts">Our Mission</h4>
                <p class="themes-para-fonts text-white text-center w-100 mx-auto">Empowering individuals with confidence, style, and self-expression through high-quality wigs that enhance their natural beauty and inspire their personal journeys.</p>
				</div>
                
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dual-card animate__animated animate__fadeInUp theme-card-bg">
                            <div>
                                <p class="text-white" >Over</p>
                                <h2 class="text-white">500 +</h2><br><br>
                                <p class="text-white mt-3">Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dual-card animate__animated animate__fadeInUp theme-card-bg">
                            <div>
                                <p class="text-white" >Over</p>
                                <h2 class="text-white">1000 +</h2><br><br>
                                <p class="text-white mt-3">Customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="" style="background: #202122;padding: 50px 0;">
    <div class="container">
        <div class="row">
            <h4 style="font-size: 55px" class="text-center themes-title-fonts">Brand Value</h4>
            <p class="themes-para-fonts text-white text-center w-100 mx-auto">The glory of both men and women, as well as the beauty of hairstyles, transcends age. The Burmese people have a deep appreciation for their hair, cherishing it with great fondness. The abundant use of coconut oil further enhances the quality of their hair. In addition to their commitment to hair care, DMD Hair Company plays a significant role in generating employment opportunities.</p>
        </div>

        <div class="row my-5">
            <div class="col-sm-12 col-md-3">
                <img class="w-100 left-about-img" style="height: 550px" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/left.png" alt="">
            </div>
            <div class="col-sm-12 col-md-6">
                <img class="w-100 mid-upper-img" style="height: 320px"  src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mid.png" alt="">
                <div class="row mt-4">
                    <div class="col-6">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mid_bt1.png" alt="">
                    </div>
                    <div class="col-6">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mid_bt2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <img class="w-100 img-general-scale"  style="height: 550px" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/right.png" alt="">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="w-100 ">
                    <img class="img-general-scale w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about-girl.png" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 ">
                <div class="text-content text-start">
                    <h4 style="font-size: 30px" class="text-start themes-title-fonts">Get the desired hair of your choice</h4>
                    <p class="themes-para-fonts text-white opacity-75 text-start">Viverra vulputate at in at ultrices. Libero suspendisse donec sagittis curabitur semper nunc sit suspendisse. Viverra est ipsum auctor mi vitae eu commodo.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'?>

<script>
    $('title').html('DMD | About');
    if (screen.width < 600) {
        $('.for-mobile').removeAttr("src");
        console.log('remove');
        $('.hambager-list').addClass('d-none');
    }
</script>

</body>
</html>