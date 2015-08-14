<?php
use bupy7\flexslider\FlexSlider;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';

?></div>

<div id="slider" class="flexslider">
			<ul class="slides">
			<?php
			echo FlexSlider::widget ( [
					'items' => ['<img src="images/slides/banner.jpg">',
							['content' => '<img src="images/slides/banner1.jpg">',
									'options' => ['class' => 'my-class']
									]
							]
					] );
			?>
			</ul>
		</div>

<div class="site-index">

	<div class="body-content">
		
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="shipping text-center">
							<!--shipping-->
							<img src="images/home/shipping1.jpg" alt="" />
						</div>
						<!--/shipping-->
						<div class="shipping text-center">
							<!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div>
						<!--/shipping-->

					</div>
				</div>
				<div class="col-sm-9 padding-right">
					<div class="features_items">
						<!--features_items-->

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product1.jpg" alt="" />
										<h2>GROCERY STORE NAME</h2>
										<p>
											Sale Items <span class="no">25</span>
										</p>
										<a href="#" class="btn btn-default add-to-cart">Store Location</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<p>
												Sale Items <span class="nm">25</span>
											</p>
											<a href="#" class="btn btn-default add-to-cart">Store
												Location</a>
										</div>
									</div>
									<p class="new">
										10%<br /> Off
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product2.jpg" alt="" />
										<h2>GROCERY STORE NAME</h2>
										<p>
											Sale Items <span class="no">50</span>
										</p>
										<a href="#" class="btn btn-default add-to-cart">Store Location</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<p>
												Sale Items <span class="nm">50</span>
											</p>
											<a href="#" class="btn btn-default add-to-cart">Store
												Location</a>
										</div>
									</div>
									<p class="new">
										10%<br /> Off
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product3.jpg" alt="" />
										<h2>GROCERY STORE NAME</h2>
										<p>
											Sale Items <span class="no">05</span>
										</p>
										<a href="#" class="btn btn-default add-to-cart">Store Location</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<p>
												Sale Items <span class="nm">05</span>
											</p>
											<a href="#" class="btn btn-default add-to-cart">Store
												Location</a>
										</div>
									</div>
									<p class="new">
										10%<br /> Off
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product1.jpg" alt="" />
										<h2>GROCERY STORE NAME</h2>
										<p>
											Sale Items <span class="no">25</span>
										</p>
										<a href="#" class="btn btn-default add-to-cart">Store Location</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<p>
												Sale Items <span class="nm">25</span>
											</p>
											<a href="#" class="btn btn-default add-to-cart">Store
												Location</a>
										</div>
									</div>
									<p class="new">
										10%<br /> Off
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product2.jpg" alt="" />
										<h2>GROCERY STORE NAME</h2>
										<p>
											Sale Items <span class="no">50</span>
										</p>
										<a href="#" class="btn btn-default add-to-cart">Store Location</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<p>
												Sale Items <span class="nm">50</span>
											</p>
											<a href="#" class="btn btn-default add-to-cart">Store
												Location</a>
										</div>
									</div>
									<p class="new">
										10%<br /> Off
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product3.jpg" alt="" />
										<h2>GROCERY STORE NAME</h2>
										<p>
											Sale Items <span class="no">05</span>
										</p>
										<a href="#" class="btn btn-default add-to-cart">Store Location</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<p>
												Sale Items <span class="nm">25</span>
											</p>
											<a href="#" class="btn btn-default add-to-cart">Store
												Location</a>
										</div>
									</div>
									<p class="new">
										10%<br /> Off
									</p>
								</div>
							</div>
						</div>
					</div>
					<!--features_items-->

				</div>
			</div>
		</div>
	</div>
</div>
<script>$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});

</script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
