<?php include 'includes/head.php'?>
<style>
    .services-divider
    {
        margin: 150px 0px 80px 0;
    }
    .border-bottom-color
    {
        border-bottom: 1px solid #7a7a78;
    }
    .text-div-control
    {
        height: 0;
        overflow: hidden;
        transition: height 0.5s ease; /* Adjust the duration and easing to your liking */
    }
    h6
    {
        font-weight: bold;
        color: black;
    }
</style>
<body class="body-bg">
<?php include 'includes/header.php'?>
<div class="theme-container mt-4">
    <div data-aos="fade-up" data-aos-duration="1000" class="img-container mb-5 pb-5">
        <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/s1.jpg" alt="">
    </div>
    <p data-aos="fade-up" data-aos-duration="1000" class="text-center themes-title-fonts my-5"><b>BRAND STORY</b></p>
    <p data-aos="fade-up" data-aos-duration="1000" class="themes-para-fonts my-5" >Atelier Sao Design Inc is a luxury interior architecture. Founded in 2016 as int design studio, the Yangon-based an interdisciplinary brand has evolved into an interior rchitecture firm that is practicing the contemporary deFounded in 2016 as an interior design studio, the Yangon-based an interdisciplinary. The studio presently consists of a team of creative individuals ho share design expertise and inspiration through a wide range of skills such as Interior Design, Interior Architecture, Product Design, Visual Merchandising, Interior Styling, Creative Interior Branding,</p>

    <p data-aos="fade-up" data-aos-duration="1000" class="text-center themes-title-fonts services-divider"><b>SERVICES & EXPERTISE</b></p>
    <div class="row">
        <div class="col-sm-12 col-md-6 expend-place">

        </div>
        <div class="col-sm-12 col-md-6">
            <div data-aos="fade-up" data-aos-duration="1000" class="img-container mb-5 pb-5">
                <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/collapse/c1.jpg" alt="">
            </div>
        </div>
    </div>

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

    function toggleHeight(id) {
        const textDivControl = document.querySelector('.expend-div'+id);
        textDivControl.style.height = textDivControl.clientHeight ? '0' : textDivControl.scrollHeight + 'px';
    }

    const toggleOnOffBtn = (id,whichOne) =>
    {
        toggleHeight(id);
        // console.log(id + whichOne);
        if (whichOne == 'remove')
        {
            $(`.expend-click-${id}`).attr("onclick",`toggleOnOffBtn(${id},'add')`);
            $(`.expend-icon-${id}`).html("add");
        }else {
            $(`.expend-click-${id}`).attr("onclick",`toggleOnOffBtn(${id},'remove')`);
            $(`.expend-icon-${id}`).html("remove");
        }
    }

    const collapseUI = (id,title,description,img_url) =>
    {
        return `<div class="expend-div expend${id} border-bottom-color">
                <a href="javascript:void(0)" class="row p-2 expend-click-${id} text-decoration-none" onclick="toggleOnOffBtn(${id},'add')">
                    <div class="col-11">
                        <p class="text-black mt-2">${title}</p>
                        <div class="text-div-control expend-div${id}" style="height: 0px;">
                            <p class="expend-text${id} specific-text-width-for-text opacity-75">
                                co-working space is about building a community of professionals who share the same passion and drive for success.
                            </p>
                        </div>
                    </div>
                    <div class="col-1">
                        <span class="text-black mt-2 material-symbols-rounded expend-icon-${id}">add</span>
                    </div>
                </a>
            </div>`;
    }

    const collapsePrefixPath = `${wpPrefix}/assets/images/collapse`;
    const collapseDb = [
        {title:'DESIGN MANAGEMENT DESIGN MEETING',description:'',img_url:collapsePrefixPath+'c1.jpg'},
        {title:'BESPOKE FURNITURE PRODUCTION DESIGN MEETING',description:'',img_url:collapsePrefixPath+'c1.jpg'},
        {title:'INTERIOR GRAPHIC DESIGN & INSTALLATION',description:'',img_url:collapsePrefixPath+'c1.jpg'},
    ];

    for (let c=0; c<collapseDb.length; c++)
    {
        let eachIndex = collapseDb[c];
        $('.expend-place').append(collapseUI(c+1,eachIndex.title,eachIndex.description,eachIndex.img_url));
    }

</script>
</body>
</html>