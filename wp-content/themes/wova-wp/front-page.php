<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sparkling
 */

get_header(); ?>


<section
	class="bg-[url('./assets/img/headerbg.jpg')] sm:bg-none xs:bg-none bg-fixed relative bg-cover text-white	 w-[100%] h-[100vh] bg-left-top bg-[#163DB9]  h-[100vh] relative opacity-100 flex items-center justify-center herosection">
	<div class="column large-2 absolute top-[25px] right-[0px] stamp-img ">
		<img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Stamp-Duty-Saving.svg">
	</div>
	<div class="row center">
		<!--<div class="water-mark block">
		  </div>-->
		<div class="column large-12">
			<div class="max-w-[250px] m-auto relative z-[1] mb-[70px] block opacity-100	 translate-y-0	"
				style="transition-delay: 0ms;">
				<img class="block m-auto" src=" <?php echo get_stylesheet_directory_uri(); ?>/assets/img/wovw-logo.svg">
				<div class="hm-logo-sub">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/circle-logo.svg" class="rotate">
				</div>
			</div>
			<div class="text-white text-center block customwova opacity-100 translate-y-0	"
				style="transition-delay: 400ms;">
				<h2 class="font-['Champion-HTF-Featherweight'] leading-[45px]  !font-normal	 text-[45px] ">
					<?php echo get_theme_mod('hero_section_title'); ?>
				</h2>
				<p class="text-[18px] leading-[24px] font-medium font-['Recoleta-Medium']">
					<?php echo get_theme_mod('hero_section_description'); ?>
				</p>
				<!-- <p>Limited 1, 2 &amp; 3 bedroom apartments <br>available from $369,900^.</p> -->
			</div>
			<div
				class="hover:bg-[#fff] mt-[20px] w-[130px] cursor-pointer	 rounded-full border border-solid block m-auto text-center p-3 border-white group font-['Calibre-SemiBold']">
				<a class="text-[15px] hover:no-underline group-hover:text-[#FF503D]  text-white bg-transparent"
					href="#enquire-now">ENQUIRE
					NOW</a>
			</div>
			<!-- <div class="cta block mx-auto opacity-100	 translate-y-0	" style="transition-delay: 800ms;">
				<a href="#enquire-now" class="white-hover block mx-auto ">Enquire Now </a>
			</div> -->
		</div>
	</div> <!-- row end -->
	<div class="arrow bounce">
		<a href="#living">
			<svg class="Scroll_Arrow_White" data-name="Scroll Arrow_White" xmlns="http://www.w3.org/2000/svg" width="24"
				height="24" viewBox="0 0 24 24">
				<g id="Group_41" data-name="Group 41" transform="translate(-1307 -1478)">
					<g id="Group_39" data-name="Group 39" transform="translate(1 766)">
						<g id="Group_19" data-name="Group 19" transform="translate(0.221 1.245)">
							<path id="Path_83" class="path_white" data-name="Path 83"
								d="M713.758,3360.383l5.28,4.782,5.28-4.782" transform="translate(598.742 -2636.818)"
								fill="none" stroke="#fff" stroke-width="1"></path>
							<path id="Path_84" class="path_white" data-name="Path 84" d="M-6530.221,2382.416v-11.183"
								transform="translate(7848 -1654.07)" fill="none" stroke="#fff" stroke-width="1"></path>
						</g>
						<g id="Ellipse_1" data-name="Ellipse 1" transform="translate(1306 712)" fill="none"
							stroke="#fff" stroke-width="1">
							<circle cx="12" cy="12" r="12" stroke="none"></circle>
							<circle cx="12" cy="12" r="11.5" fill="none"></circle>
						</g>
					</g>
				</g>
			</svg>
		</a>
	</div>
</section>

<section class="h-[100vh] flex relative second-section">
	<div class="row">
		<div class="sectiononerow flex items-center justify-center  large-6  text-black">
			<div>
				<h1 class="text-[90px] text-center text-[#FC785C]">
					<div class="font-['Champion-HTF-Featherweight'] leading-[60px]  text-[70px] block1 opacity-100	 translate-y-0	"
						style="transition-delay: 0ms;">
						<?php echo get_theme_mod('second_section_heading_one') ?>
					</div>
					<div class="font-['Champion-HTF-Featherweight'] leading-[60px]  text-[70px] block1 opacity-100	 translate-y-0	"
						style="transition-delay: 400ms;">
						<?php echo get_theme_mod('second_section_heading_twoo') ?>
					</div>
				</h1>
				<div class="block1 opacity-100	text-center  font-['Recoleta-Medium'] translate-y-0 text-[18px] " style="
						transition-delay: 800ms;">
					<p class="max-w-[441px] mb-[15px] block m-auto">
						<?php echo get_theme_mod('second_section_description_one'); ?>
						<!--  -->
					</p>
					<!-- Place yourself at the heart of a vibrant new urban
							village in
							Canberra’s
							south. -->
					<p class="max-w-[441px]  mb-[15px] block m-auto">
						<?php echo get_theme_mod('second_section_description_two'); ?>

					</p>
					<!-- WOVA marks the beginning of a brand new era for
							Woden Valley.
							Representing
							a golden opportunity
							to invest in a landmark residential precinct. -->
					<p class="max-w-[441px]  mb-[15px] block m-auto">
						<?php echo get_theme_mod('second_section_description_three'); ?>
					</p>
					<!-- Learn more and be the first to make your move! -->

					<div
						class="hover:bg-[#FF503D] mt-[20px] w-[200px] cursor-pointer	 rounded-full border border-solid block m-auto text-center p-3 border-[#FF503D] group font-['Calibre-SemiBold']">
						<a class="text-[15px] hover:no-underline group-hover:text-[#FFF] text-[20px]  text-[#FF503D] bg-transparent"
							href="tel:1300979757">CALL 1300 979 757</a>
					</div>

				</div>
			</div>
		</div>
		<div class="column large-6 green-bg-watermark ">
			<div class="green-bg-watermark-img block opacity-100	 translate-y-0	" style="transition-delay: 1200ms;">
				<iframe
					src="https://player.vimeo.com/video/709312146?h=b2aa5ca8c4&amp;dnt=1&amp;autoplay=1&amp;loop=1&amp;muted=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;background=1"
					frameborder="0" allow="autoplay; fullscreen" width="100%" height="100%" allowfullscreen=""></iframe>

				<!--<iframe src="https://player.vimeo.com/video/708019024?dnt=1&amp;app_id=213f7ff981&amp;autoplay=1&amp;loop=1&amp;muted=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;background=1" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>-->

				<!--<img src="/images/candice-picard-unsplash.png">-->
			</div>
		</div>

	</div>

</section>

<section class="flex h-[100vh] third-section relative bg-[#FEE3DE]">
	<div class="row">
		<div class="block m-auto large-12 text-black">
			<div class="copy ">
				<h1><img class="m-auto block  mb-[40px]"
						src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/circle-logo.svg"></h1>
				<div class="text-[18px] w-max-[440px] font-['Recoleta-Medium'] block1 opacity-100 text-center translate-y-0 vissible blockk m-auto block "
					style="transition-delay: 1200ms;">
					<p class="mb-[30px]">
						<?php echo get_theme_mod('third_section_description_one') ?>
					</p>

					<!-- <p class="mb-[10px]">WOVA is a thriving residential and mixed-use community
					precinct with a beating heart.</p>
					<p class="mb-[30px]">Four distinctly different addresses, united in one future-shaping community.
					</p> -->
					<p class="mb-[10px]">
						<?php echo get_theme_mod('third_section_description_two') ?>
					</p>
					<p class="mb-[10px]">
						<?php echo get_theme_mod('third_section_description_three') ?>
					</p>
					<p class="mb-[10px]">
						<?php echo get_theme_mod('third_section_description_four') ?>
					</p>


					<!-- <p class="mb-[10px]">Welcome to Woden. Revamped.</p>
					<p class="mb-[10px]">Be the first to visit the brand new display suite.</p>
					<p class="mb-[10px]">G2/12 Furzer St, Phillip ACT 2606.</p> -->
					<div
						class="hover:no-underline hover:bg-[#000] mt-[20px]  w-[170px] cursor-pointer	 rounded-full border border-solid block m-auto text-center p-3  #wpcf7-f5-o1 border-black group font-['Calibre-SemiBold']">
						<a class="hover:no-underline group-hover:text-white  text-black bg-transparent"
							href="#enquire-now">ENQUIRE
							NOW</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$loop = new WP_Query(
	array(
		'post_type' => 'Sliders',
		'posts_per_page' => -1
	)
);
?>

<section class="slider-section relative bg-[#FC785C]">
	<div class="main-carousel">
		<?php while ($loop->have_posts()):
			$loop->the_post(); ?>

			<?php $images = rwmb_meta('slider-image', ['limit' => 1]) ?>
			<?php $image = reset($images) ?>
			<div class="carousel-cell w-[100%]">
				<div class="row flex h-[100vh] ">
					<div class="column  large-6" style="background-image: url('<?php echo $images[0]['full_url'] ?>');">
					</div>
					<?php do_shortcode('[rwmb_meta id="slider-image" size="thumbnail"]') ?>
					<div class="column large-6 slider-right">
						<div>
							<p class="text-[#163db9] pt-[50px] slider-topText text-center translate-y-0	"
								style="transition-delay: 0ms;">
								<?php echo rwmb_meta('slider-topheader') ?>
							</p>
						</div>
						<!-- mt-[170px] -->
						<div class="text-center  slider-textSection">
							<h1 class="text-[#163db9]   text-[80px] leading-[80px] font-['Champion-HTF-Featherweight']  font-normal block4 opacity-100 translate-y-0	"
								style="transition-delay: 400ms;">
								<?php echo rwmb_meta('slider-heading') ?>
							</h1>
							<p class=" mt-[30px] text-[#163db9] text-center block m-auto text-[18px] max-w-[320px] font-['Recoleta-Medium']   opacity-100	 translate-y-0	"
								style="transition-delay: 800ms;">
								<?php echo rwmb_meta('slider-description') ?>
							</p>

							<div
								class="hover:bg-[#163db9] mt-[20px] w-[130px] cursor-pointer	 rounded-full border border-solid block m-auto text-center p-3 border-[#163db9] group font-['Calibre-SemiBold']">
								<a class="hover:no-underline group-hover:text-white   text-[#163db9] bg-transparent"
									href="	<?php echo rwmb_meta('slider-url') ?>">ENQUIRE NOW</a>
							</div>

						</div>
					</div>
				</div>
			</div>



			<!-- do stuff -->

		<?php endwhile;
		wp_reset_query(); ?>

	</div>
</section>

<section class="bg-[#163DB9] flex h-[100vh]" id="enquire-now">
	<div class="row flex items-center justify-center ">
		<div class="column max-w-[615px] ">
			<div class="large-text text-center block3 opacity-100	 translate-y-0" style="transition-delay: 0ms;">
				<h2 class="text-[45px] leading-[45px] text-white font-['Champion-HTF-Featherweight'] ">FINAL RELEASE NOW
					SELLING.
					<br>REGISTER
					YOUR INTEREST TODAY.
				</h2>
			</div>
			<div class="block3 mt-[30px] form-section max-w-[ opacity-100	 translate-y-0	"
				style="transition-delay: 400ms;">
				<?php echo do_shortcode('[contact-form-7 id="6784c77" title="Contact Form"]') ?>
			</div>
			<p class=" mt-[20px] text-white m-auto text-center max-w-[590px] text-[10px] block ">
				<?php echo get_theme_mod('footer_section_description') ?>

			</p>
		</div>
	</div>
</section>



<div class="maps">
	<img class="hide-desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webmap.jpg" />
	<img class="hide-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mobilemap.jpg" />
</div>

<?php get_footer(); ?>