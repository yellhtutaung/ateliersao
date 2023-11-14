<?php include 'includes/head.php'?>
<style>
.screen-reader-response , .wpcf7-response-output
	{
		display:none;
	}
.wpcf7-not-valid-tip
	{
		color: red;
	}
</style>
<body class="body-bg">

<?php include 'includes/header.php'?>

<hr data-url="contact" class="data-url themes-text-color " style="margin-top: 30px">

<section>
    <div class="container">
        <h4 style="font-size: 55px" class="text-center my-5 themes-title-fonts">Contact Us</h4>
        
        <div class="row">
            <div class="col-6">
                <h4 style="font-size: 35px" class="text-center themes-title-fonts">We are here</h4>
            </div>
            <div class="col-6">
                <p class="themes-para-fonts">550 Winchester Avenue Newtown, PA 18940</p>
                <a href="tel:+959795402183" class="text-white opacity-75 text-decoration-none">+95 979 540 2183</a><br>
                <a href="mailto:info@wigme.com" class="text-white opacity-75 text-decoration-none">info@wigme.com</a>
            </div>
        </div>
    </div>
    <hr class="themes-text-color my-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h4 style="font-size: 35px" class="text-center themes-title-fonts">Get in touch</h4>
            </div>
            <div class="col-sm-12 col-md-6">
				  <?php echo do_shortcode('[contact-form-7 id="68" title="Contact Messages"]'); ?>
<!--                 <form>
                    <div class="form-group my-4">
                        <input type="text" class="subscribe-input w-100" placeholder="Name" />
                    </div>
                    <div class="form-group my-4">
                        <input type="email" class="subscribe-input w-100" placeholder="Email" />
                    </div>
                    <div class="form-group my-4">
                        <textarea class="subscribe-input w-100" placeholder="Message" name="" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group my-4">
                        <input type="submit" value="Send" class="subscribe-btn" style="margin-left: 0;" >
                    </div>
                </form> -->
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'?>


<script>
    $('title').html('DMD | Contact Us');
    if (screen.width < 600) {
        $('.for-mobile').removeAttr("src");
        console.log('remove');
        $('.hambager-list').addClass('d-none');
    }
</script>

</body>
</html>