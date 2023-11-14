<?php include 'includes/head.php'?>
<style>
    .cat-title-for-left
    {
        color:#FCFCFC;
        background: #373232;
        border-left: 5px solid #CD9E54;
        margin-left: 20px;
    }
    li{
        color: #A08F73;
        padding: 10px;
        text-align: left;
    }
	a{
		text-decoration: none !important;
		color:#FCFCFC;
	}
	.cat-active
	{
		border-left: 2px solid #CD9E54;
	}
	.sub-cat-row
	{
		display: flex;
		justify-content: start;
		align-items: center;
		overflow: hidden;
		padding: 17px;
	}
	.sub-cat-btn
	{
		padding: 15px !important;
		border: 2px solid gold;
		border-radius: 50px;
		margin: 0 20px;
	}
	
</style>
<body class="body-bg">

<?php include 'includes/header.php'?>

<hr data-url="wigs" class="data-url themes-text-color " style="margin-top: 30px">
<?php

    @$cat = $_GET["cat"];
    $cat = ($cat) ? $cat : '';

?>
<section>
	<h4 style="font-size: 55px" class="text-center my-5 themes-title-fonts">Wigs</h4>
	<div class="custom-theme-container">
		<div class="row">
			<div class="col-md-3 my-2">
				<div class="card-header p-3  themes-fonts cat-title-for-left" >Category</div>

				<?php
				$terms = get_terms( array(
					'taxonomy' => 'wig-category',
// 					'hide_empty' => true,
				) );

				?>
				<ul data="<?php print_r($terms); ?>">
					<li><a href="<?php echo home_url(); ?>/wigs">All</a></li>
					<?php foreach($terms as $value): ?>
						<li class='<?php echo $value->slug == $cat ? "cat-active" : ""?> '>
							<a href="?cat=<?php echo $value->slug; ?>"><?php echo $value->name; ?></a>
						</li>
					<?php endforeach;  ?>
				</ul>
				<!--                <div class="card-header mt-4 p-3  themes-fonts cat-title-for-left" >By Price ( $ )</div>-->
				<hr class="themes-text-color ">
			</div>
			<div class="col-md-9 my-2">
				<div class="sub-cat-row ">
					<div class="">
						<a href="" class="sub-cat-btn ">Long Hair</a>
					</div>
					<div class="">
						<a href="" class="sub-cat-btn ">Short Hair</a>
					</div>
				</div>
				<div class="row">
					<?php
					if($cat == ''){
						$args = array(
							'post_type' => 'wig-post',
							'posts_per_page'=>-1,
							'post_status' => array( 'publish', 'private' ),
							//'paged' => get_query_var('paged') // Set the 'paged' parameter to enable pagination
						);
					}else{
						$args = array(
							'post_type' => 'wig-post',
							'posts_per_page'=>-1,
							'post_status' => array( 'publish', 'private' ),
							'tax_query' => array(
								array(
									'taxonomy' => 'wig-category',
									'field'    => 'slug',
									'terms'    => $cat,
								),
							),
						);
					}

					$posts = new WP_Query( $args );
					if( $posts->have_posts() ) :

					while( $posts->have_posts() ) :
					$posts->the_post();
					?>
					<div class="col-sm-12 col-md-6 col-lg-4 mb-4">
						<div class="hair-card">
							<div>
								<img src="<?php echo get_field('thumbnail'); ?>" alt="">
							</div>
							<h5 class="text-center opacity-50"><?php echo get_the_title(); ?></h5>
							<h5 class="text-center opacity-50"><?php echo get_field('price'); ?></h5>
<!-- 							<h5 class="text-center opacity-50"><?php // echo get_field('category')->name; ?></h5> -->
						</div>
					</div>
					<?php endwhile; ?>
						
					<?php // echo paginate_links( array(
// 							'total' => $posts->max_num_pages,
// 							'prev_text' => 'Previous',
// 							'next_text' => 'Next'
// 						) ); ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>

			</div>
		</div>
	</div>
	</section>
	<hr class="themes-text-color my-5">
	<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6" >
                    <h4 style="font-size: 55px" class="text-center themes-title-fonts">FAQ / Frequently</h4>
                    <h4 style="font-size: 55px" class="text-center themes-title-fonts">Asked Questions</h4>
                    <div class="text-content pt-0">
                        <p class="themes-para-fonts">Viverra vulputate at in at ultrices. Libero suspendisse donec sagittis curabitur semper nunc sit suspendisse. Viverra est ipsum auctor mi vitae eu commodo.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6" >
                    <div class="my-4">
                        <div class="expend-div expend1 ">
                            <div class="row p-0 m-0">
                                <div class="col-10">
                                    <p class="mt-2  w-75">Hair collected from verified sources</p>
                                </div>
                                <div class="col-2 expend-click-1" onclick="toggleOnOffBtn(1,'remove');">
                                    <span class="mt-2 material-symbols-rounded expend-icon-1">remove</span>
                                </div>
                            </div>
                        </div>
                        <div  data-id="expend1" class="expend-text1 w-75 m-2 text-white opacity-75 my-2">
                            Viverra vulputate at in at ultrices. Libero suspendisse donec sagittis curabitur semper nunc sit suspendisse.
                        </div>
                    </div>
    
                    <div class="my-4">
                        <div class="expend-div expend2 ">
                            <div class="row p-0 m-0">
                                <div class="col-10">
                                    <p class="mt-2  w-75">Hair collected from verified sources</p>
                                </div>
                                <div class="col-2 expend-click-2" onclick="toggleOnOffBtn(2,'remove');">
                                    <span class="mt-2 material-symbols-rounded expend-icon-2">remove</span>
                                </div>
                            </div>
                        </div>
                        <div  data-id="expend2" class="expend-text2 w-75 m-2 text-white opacity-75 my-2">
                            Viverra vulputate at in at ultrices. Libero suspendisse donec sagittis curabitur semper nunc sit suspendisse.
                        </div>
                    </div>
    
                    <div class="my-4">
                        <div class="expend-div expend3 ">
                            <div class="row p-0 m-0">
                                <div class="col-10">
                                    <p class="mt-2  w-75">Hair collected from verified sources</p>
                                </div>
                                <div class="col-2 expend-click-3" onclick="toggleOnOffBtn(3,'add');">
                                    <span class="mt-2 material-symbols-rounded  expend-icon-3">add</span>
                                </div>
                            </div>
                        </div>
                        <div  data-id="expend3" class="expend-text3 w-75 m-2 text-white opacity-75 my-2">
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'?>


<script>
    $('title').html('DMD | Wigs');
    if (screen.width < 600) {
        $('.for-mobile').removeAttr("src");
        console.log('remove');
        $('.hambager-list').addClass('d-none');
    }
</script>

</body>
</html>