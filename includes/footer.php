<style>
    .col-md-4
    {
        border: 2px solid red;
    }
</style>

<footer style="padding: 50px 0;">
    <div class="theme-container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <p class="themes-para-fonts text-white">Atelier Sao Design Inc.</p>
                <p class="themes-para-fonts text-white mt-2">A Creative Concept Driven International Award Winning Interior Architecture Studio</p>

                <p class="themes-para-fonts mt-5 text-white">
                    <a class="text-white" href="">Site by Future Now</a>
                </p>

            </div>
            <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center">
                <div class="img-container d-flex justify-content-center align-items-center">
                    <img style="width: 80px;height: auto;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/white.png" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-4">

            </div>
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
