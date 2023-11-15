<!--<style>-->
<!--    .sub-menu-->
<!--    {-->
<!--        margin: 445px 0 0 7.5%;-->
<!--        width: 13%;-->
<!--        height: auto;-->
<!--        position: absolute;-->
<!--        z-index: 5;-->
<!--    }-->
<!--    .list-group-item a-->
<!--    {-->
<!--        font-weight: lighter !important;-->
<!--        color: white;-->
<!--    }-->
<!--    .list-group-item-->
<!--    {-->
<!--        display: flex;-->
<!--        justify-content: start;-->
<!--        align-items: center;-->
<!--        margin: 0.5px 0;-->
<!--        height: 58px;-->
<!--    }-->
<!--    .list-group-item:hover-->
<!--    {-->
<!--        background: #D7C487;-->
<!--    }-->
<!--    .list-group{-->
<!--        border-radius: 0px !important;-->
<!--    }-->
<!--</style>-->

<header class="d-flex">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 d-flex align-items-center justify-content-start">
				<a class="header-logo-mobile-margin text-decoration-none p-md-0 m-md-0" href="<?php echo home_url();?>" >
				<img class="d-inline " src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/dmd_logo.svg" alt="">
                <h5 class="d-inline text-white mt-3 fw-bold themes-fonts">Arelier Sao</h5>
				</a>
                
            </div>
            <div class="hambager-list col-md-6  d-flex justify-content-evenly align-items-center">
                <!--<div class="">-->
                <div class=" url-home d-flex justify-content-center align-items-center">
                    <a href="<?php echo home_url(); ?>" class="themes-fonts text-decoration-none text-white" >Home</a>
                </div>
                <div class=" url-about d-flex justify-content-center align-items-center">
                    <a href="<?php echo home_url(); ?>/about" class="themes-fonts text-decoration-none text-white" >About</a>
                </div>
                <div class=" url-color-chart d-flex justify-content-center align-items-center">
                    <a href="<?php echo home_url(); ?>/colour-chart" class="themes-fonts text-decoration-none text-white" >Colour Chart</a>
                </div>
                <div class="url-products d-flex justify-content-center align-items-center">
                    <a href="javascript:void(0);"  class="dropdown-toggle products-cat themes-fonts text-decoration-none text-white" data-bs-toggle="dropdown" aria-expanded="false">Products

                    </a>
                </div>
            </div>
        </div>
    </div>
	<div class="col-sm-6 hambager-menu mt-3">
		<div class="bar"></div>
		<div class="bar"></div>
		<div class="bar"></div>
	</div>
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