<?php include 'includes/head.php'?>
<style>
    .owl-carousel .owl-item img
    {
        padding: 20px;
    }
    .color-plate
    {
        width: 100%;
        height: 510px;
        background: #D8B681;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .color-plate-white-box
    {
        width: 100%;
        height: 300px;
    }

</style>
<body class="body-bg">

<?php include 'includes/header.php'?>

<hr data-url="color-chart" class="data-url themes-text-color " style="margin-top: 30px">


<section >
    <div style="padding-bottom: 70px;">
        <h1 class="themes-title-fonts text-center my-2 animate__animated animate__fadeInUp">Colour Chart</h1>
        <p class="text-center mx-auto themes-para-fonts w-50">You can find an extensive collection of top-notch hair wigs in a variety of styles and colors that greatly enhance your sense of style.
            <a class="themes-text-color" href="">Explore more</a> </p>
    </div>

    <div class="custom-theme-container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="color-plate animate__animated animate__fadeInUp">
                    <h3 class="text-black">Color 1 </h3>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="img-container w-100 h-auto animate__animated animate__fadeInUp">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/wigs.png" alt="">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12 col-md-3">
                <div class="color-plate-white-box bg-white overflow-hidden d-flex justify-content-center align-items-center">
                    <h3>Box 1</h3>
                </div>
                <h5 class="mt-3 text-white text-center">Color sample</h5>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="color-plate-white-box bg-white overflow-hidden d-flex justify-content-center align-items-center">
                    <h3>Box 2</h3>
                </div>
                <h5 class="mt-3 text-white text-center">Color sample</h5>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="color-plate-white-box bg-white overflow-hidden d-flex justify-content-center align-items-center">
                    <h3>Box 3</h3>
                </div>
                <h5 class="mt-3 text-white text-center">Color sample</h5>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="color-plate-white-box bg-white overflow-hidden d-flex justify-content-center align-items-center">
                    <h3>Box 4</h3>
                </div>
                <h5 class="mt-3 text-white text-center">Color sample</h5>
            </div>
        </div>
    </div>


</section>

<!--<section>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-12 col-md-6" >-->
<!--                <h4 style="font-size: 55px" class="text-center themes-title-fonts"> Frequently Asked Questions</h4>-->
<!--                <div class="text-content pt-0">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-12 col-md-6" >-->
<!--                <div class="my-4">-->
<!--                    <div class="expend-div expend1 ">-->
<!--                        <div class="row p-0 m-0">-->
<!--                            <div class="col-10">-->
<!--                                <p class="mt-2  w-75">How long does the wig last for?</p>-->
<!--                            </div>-->
<!--                            <div class="col-2 expend-click-1" onclick="toggleOnOffBtn(1,'remove');">-->
<!--                                <span class="mt-2 material-symbols-rounded expend-icon-1">remove</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div  data-id="expend1" class="expend-text1 w-75 m-2 text-white opacity-75 my-2">-->
<!--                        With proper care and maintenance the hair can last for 3 years. Generally, avoid excessive heat, brush gently with a wig brush, and use appropriate wig care products.-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="my-4">-->
<!--                    <div class="expend-div expend2 ">-->
<!--                        <div class="row p-0 m-0">-->
<!--                            <div class="col-10">-->
<!--                                <p class="mt-2  w-75">What types of wigs do you offer?</p>-->
<!--                            </div>-->
<!--                            <div class="col-2 expend-click-2" onclick="toggleOnOffBtn(2,'remove');">-->
<!--                                <span class="mt-2 material-symbols-rounded expend-icon-2">remove</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div  data-id="expend2" class="expend-text2 w-75 m-2 text-white opacity-75 my-2">-->
<!--                        We offer a wide variety of wigs, including human hair wigs, lace front wigs, full lace wigs and more. Our wigs come in various styles, lengths, and colors to suit your preferences.-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="my-4">-->
<!--                    <div class="expend-div expend3 ">-->
<!--                        <div class="row p-0 m-0">-->
<!--                            <div class="col-10">-->
<!--                                <p class="mt-2  w-75">Can I style the wigs?</p>-->
<!--                            </div>-->
<!--                            <div class="col-2 expend-click-3" onclick="toggleOnOffBtn(3,'remove');">-->
<!--                                <span class="mt-2 material-symbols-rounded expend-icon-3">remove</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div  data-id="expend3" class="expend-text3 w-75 m-2 text-white opacity-75 my-2">-->
<!--                        Yes, because all of our wigs are made with 100% human hair so it can be styled just like real hair. You can use heat styling tools, dye and cut them to achieve your desired look.-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

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
    const toggleOnOffBtn = (id,whichOne) =>
    {
        console.log(id + whichOne);
        if (whichOne == 'remove')
        {
            $(`.expend-text${id}`).addClass('d-none');
            $(`.expend-click-${id}`).attr("onclick",`toggleOnOffBtn(${id},'add')`);
            $(`.expend-icon-${id}`).html("add");
        }else {
            $(`.expend-text${id}`).removeClass('d-none');
            $(`.expend-click-${id}`).attr("onclick",`toggleOnOffBtn(${id},'remove')`);
            $(`.expend-icon-${id}`).html("remove");
        }
    }

</script>
</body>
</html>