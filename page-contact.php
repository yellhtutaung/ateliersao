<?php include 'includes/head.php'?>
<style>

</style>
<body class="body-bg">
<?php include 'includes/header.php'?>
<div class="theme-container " style="margin-top: 100px">
   <div class="row">
       <div class="col-sm-12 col-md-6">
           <h1 class="brandon-font">Let's Chat</h1>
           <div class="row my-5">
               <div class="col-sm-6">
                   <p>Contact Us</p>
                   <a class="link-to-font-style opacity-50 primary-theme-text-color" href="">+95 987373829</a><br>
                   <a class="link-to-font-style opacity-50 primary-theme-text-color" href="">+95 925832494</a>
               </div>
               <div class="col-sm-6">
                   <p>Visit Us</p>
                   <p class="pb-0 mb-0 opacity-50">No 308 (A) Yuzana Tower, Kabar Aye</p>
                   <p class="opacity-50">Pagoda Rd, Yangon Myanmar, 11201</p>
               </div>
           </div>
           <div class="row">
               <div class="col-sm-6">
                   <p>Opening Hours</p>
                   <p class="opacity-50 pb-0 mb-0">Monday to Friday</p>
                   <p class="opacity-50 pb-0 mb-0">10 am to 6pm</p>
                   <p class="opacity-50 pb-0 mb-0">Close on Sunday & Public Holidays</p>
               </div>
               <div class="col-sm-6">
                   <p>Write Us</p>
                   <a href="mailto:business@saointeriors.com" class="link-to-font-style pb-0 mb-0 opacity-50 primary-theme-text-color">business@saointeriors.com </a>
               </div>
           </div>
       </div>
       <div class="col-sm-12 col-md-6">
           <div class="form-group mb-2">
               <input type="text" class="themes-input" placeholder="Your Name">
           </div>
           <div class="form-group mb-2">
               <input type="text" class="themes-input" placeholder="Company Name">
           </div>
           <div class="form-group mb-2">
               <input type="email" class="themes-input" placeholder="Email">
           </div>
           <div class="form-group mb-2">
               <input type="text" class="themes-input" placeholder="Phone">
           </div>
           <textarea class="themes-input" rows="5" >Message</textarea>
       </div>
   </div>
</div>
<div class="theme-container my-5">
    <div class="img-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.png" alt="">
    </div>
</div>

<?php include 'includes/desk-menu-overlay.php'?>

<?php include 'includes/footer.php'?>
<?php include 'includes/footer-script.php'?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl-setup.js" ></script>
<script>
    if (screen.width < 600) {

    }
    const wpPrefix = "<?php echo get_template_directory_uri(); ?>";

</script>

</body>
</html>