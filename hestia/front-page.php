<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hestia
 * @since Hestia 1.0
 */


if ( ! is_page_template() && ! get_theme_mod( 'disable_frontpage_sections', false ) ) {

		get_header();
		/**
		 * Hestia Header hook.
		 *
		 * @hooked hestia_slider_section
		 */
		do_action( 'hestia_header' ); ?>

<style type="text/css">
  .hero-wrap {
    width: 100%;
    height: 100%;
    position: inherit;
    z-index: 0;
}

.js-fullheight{
  height: 100vh;
      background: #fff;
}
.js-fullheight .container .row{
      display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
.text-center{
  text-align: center;
}
.hero-wrap .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: .97;
    background: #fff200;
    background-size: cover;
    background: url('http://localhost/slingit/wp-content/uploads/2018/12/bg3.jpg');
}
.slider-text {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    color: #fff;
}
.slider-text h1 {
    font-size: 55px;
    color: #2e3192;
    line-height: 1.2;
    font-weight: 200;
}
.slider-text p {
    font-size: 20px;
    line-height: 1.5;
    font-weight: 300;
    color: rgba(0, 0, 0, 0.8);
}
</style>
<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>We love to create Beautiful websites</strong></h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary  px-5 py-3">Shop Now</a></p>
          </div>
        </div>
      </div>
    </div>



   <div class="bg-light">
    <section class="ftco-section-featured ftco-animate">
      <div class="container-fluid" data-scrollax-parent="true">
        <div class="row no-gutters d-flex align-items-center special" data-scrollax=" properties: { translateY: '-30%'}">

          <div class="col-md-3 mb-3">
            <a href="#" class="featured-img">
              <div class="text-1 p-4 d-flex align-items-center">
                <h3>The Verge<br><span class="tag">Website</span></h3>
              </div>
              <img src="http://localhost/slingit/wp-content/uploads/2018/12/image_1.jpg" class="img-fluid" alt="">
              
            </a>
          </div>
          
          <div class="col-md-6">
            <div class="row no-gutters">
              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-end special">

                  <div class="col-md-8">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Racks<br><span class="tag">Website</span></h3>
                      </div>
                      <img src="http://localhost/slingit/wp-content/uploads/2018/12/image_5.jpg" class="img-fluid" alt="">
                      
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Zendesk<br><span class="tag">Website</span></h3>
                      </div>
                      <img src="http://localhost/slingit/wp-content/uploads/2018/12/image_4.jpg" class="img-fluid" alt="">
                      
                    </a>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-start special">
                  <div class="col-md-8">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Curator<br><span class="tag">Website</span></h3>
                      </div>
                      <img src="http://localhost/slingit/wp-content/uploads/2018/12/image_6.jpg" class="img-fluid" alt="">
                      
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Tasty<br><span class="tag">Website</span></h3>
                      </div>
                      <img src="http://localhost/slingit/wp-content/uploads/2018/12/image_3.jpg" class="img-fluid" alt="">
                      
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <a href="#" class="featured-img">
              <div class="text-1 p-4 d-flex align-items-center">
                <h3>Voyage<br><span class="tag">Website</span></h3>
              </div>
              <img src="http://localhost/slingit/wp-content/uploads/2018/12/image_2.jpg" class="img-fluid" alt="">
              
            </a>
          </div>

        </div>
        <div class="row mt-5 d-flex justify-content-center special">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="h1">UI/UX, visual, <strong class="px-3">Web designer</strong> with more than 12 years of experience in designing websites and mobile apps.</h2>
            <p><a href="#" class="btn btn-primary mt-3 py-3 px-5">Get in h</a></p>
          </div>
        </div>
      </div>
    </section>
  </div>




		<?php
		/**
		 * Hestia Sections hook.
		 *
		 * @hooked hestia_features_section - 1
		 * @hooked hestia_about_section - 2
		 * @hooked hestia_shop_section - 3
		 * @hooked hestia_portfolio_section - 4
		 * @hooked hestia_team_section - 5
		 * @hooked hestia_pricing_section - 6
		 * @hooked hestia_testimonials_section - 7
		 * @hooked hestia_subscribe_section - 8
		 * @hooked hestia_blog_section - 9
		 * @hooked hestia_contact_section - 10
		 */
		do_action( 'hestia_sections', false );

		get_footer();

} else {
	include( get_page_template() );
} ?>
<script>	
	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();</script>