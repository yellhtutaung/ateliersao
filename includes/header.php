<style>
    .col-md-4
    {
        /*border: 1px solid red;*/
    }
</style>

<header class="d-flex">
    <div class="theme-container">
        <div class="row mt-5 mb-4">
            <div class="col-md-4">
                <ul class="header-listing" style="justify-content: start;padding-left: 0px;">
                    <li class="pr-3">
                        <a class="text-black opacity-50" href="<?php echo home_url(); ?>">THE BRAND</a>
                    </li>
                    <li>
                        <a class="text-black opacity-50" href="<?php echo home_url(); ?>/works">WORKS</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <div style="width: 80%;" class="img-container mx-auto">
                    <a class="header-logo-mobile-margin text-decoration-none p-md-0 m-md-0" href="<?php echo home_url();?>" >
                        <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/sao.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="header-listing" style="justify-content: end;padding-right: 0px;">
                    <li>
                        <a href="<?php echo home_url(); ?>/interiors" class="text-black opacity-50" href="">INTERIORS</a>
                    </li>
                    <li class="more-menu" style="padding-right: 0px!important;">
                        <a class="text-black opacity-50" href="javascript:void(0);">MORE</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!--	<div class="col-sm-6 hambager-menu mt-3">-->
<!--		<div class="bar"></div>-->
<!--		<div class="bar"></div>-->
<!--		<div class="bar"></div>-->
<!--	</div>-->
</header>

<div id="navbar_overlay" class="overlay" style="height: 0%;" >
    <div class="overlay-content">
        <a href="<?php echo home_url(); ?>"><p >Home</p></a>
        <a href="/about"><p> About</p></a>
        <a href="/wigs"><p>Wigs </p></a>
        <a href="/contact"><p>Contact Us </p></a>
    </div>
	<div href="javascript:void(0) " onclick="overlayClose()" class="closebtn text-white p-0">
		<span style="font-size: 34px;" class="material-symbols-rounded">close</span>
	</div>
</div>
<script>
    $(".products-cat").click(function() {
        $(".sub-menu").toggleClass("d-none"); // Toggles the "myClass" CSS class
    });
</script>