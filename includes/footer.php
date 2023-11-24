<style>
    .footer-listing
    {
        color: white;
    }
</style>

<footer style="padding: 100px 0;">
    <div class="theme-container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <p class="themes-para-fonts brandon-regular text-white mb-0">Atelier Sao Design Inc.</p>
                <p class="themes-para-fonts brandon-regular text-white">A Creative Concept Driven International Award Winning Interior Architecture Studio</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="img-container d-flex justify-content-center ">
                    <img style="width: 80px;height: auto;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/white.png" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-4 ">
                <ul class="footer-listing d-flex justify-content-between align-items-center">
                    <li>
                        <a class="text-white brandon-regular" style="font-size: 20px!important;" href="<?php echo home_url(); ?>/contact">Contact Us</a>
                    </li>
                    <li>
                        <a class="text-white brandon-regular" style="font-size: 20px!important;" href="">Facebook</a>
                    </li>
                    <li>
                        <a class="text-white brandon-regular" style="font-size: 20px!important;" href="">Instagram</a>
                    </li>
                </ul>
            </div>
        </div>
        <div style="margin-top: 50px;" class="d-flex justify-content-between align-items-center">
            <p class="text-white">
                <a class="text-white brandon-regular" style="font-size: 18px;" href="https://futurenowmm.com/">Site by Future Now</a>
            </p>
            <p style="font-size: 18px" class="themes-para-fonts brandon-regular text-center text-white">All images @ Atelier Sao</p>
        </div>
    </div>
</footer>

<script>
    let dataUrl = $('.data-url').attr('data-url');
    console.log(dataUrl);
    $('.url-'+dataUrl).addClass('active-border-color url-combo');
	
	$('.hambager-menu').click(function (){
        $('#navbar_overlay').css({height:"100%"});
    });

    overlayClose = () =>
    {
        $('#navbar_overlay').css({height:"0%"});
    }
	
	let first_press = false;
	window.addEventListener('keypress', (e) => {
		if(e.keyCode === 97){
			if(first_press) {
				first_press = false
				window.open('/wp-admin', '_blank');
			}else {
				first_press = true
				window.setTimeout(()=> {
					first_press = false
				}, 500)
			}
		}
	});
</script>
