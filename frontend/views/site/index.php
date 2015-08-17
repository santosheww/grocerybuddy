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
  <!-------SIDE BAR-->
    <div class="col-sm-3">
      <div class="left-sidebar">
        <div class="shipping text-center"><!--shipping--> 
          <img src="images/home/shipping1.jpg" alt=""  class="img-responsive"/> </div>
        <!--/shipping-->
        <div class="shipping text-center"><!--shipping--> 
          <img src="images/home/shipping.jpg" alt="" class="img-responsive" /> </div>
        <!--/shipping--> 
        
      </div>
    </div>
      <!-------SIDE BAR-->
      
    <!--features_items-->
    <div class="col-sm-9 padding-right">
      <div class="features_items">
        
        
        <!--product 1--><div class="col-sm-6 col-md-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center"> <img src="images/home/product1.jpg" alt="" class="img-responsive"/>
                <h2>GROCERY STORE NAME</h2>
                <p>Sale Items <span class="no">25</span></p>
                <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              <div class="product-overlay">
                <div class="overlay-content">
                  <p>Sale Items <span class="nm">25</span></p>
                  <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              </div>
              <p class="new" >10%<br/>
                Off</p>
            </div>
          </div>
        </div>
       <!--product 1-->
             
         <!--product 2--> <div class="col-sm-6 col-md-3 ">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center"> <img src="images/home/product2.jpg" alt="" class="img-responsive" />
                <h2>GROCERY STORE NAME</h2>
                <p>Sale Items <span class="no">25</span></p>
                <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              <div class="product-overlay">
                <div class="overlay-content">
                  <p>Sale Items <span class="nm">25</span></p>
                  <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              </div>
              <p class="new" >10%<br/>
                Off</p>
            </div>
          </div>
        </div>
       <!--product 2-->
     
         <!--product 3-->
         <div class="col-sm-6 col-md-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center"> <img src="images/home/product3.jpg" alt="" class="img-responsive"/>
                <h2>GROCERY STORE NAME</h2>
                <p>Sale Items <span class="no">25</span></p>
                <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              <div class="product-overlay">
                <div class="overlay-content">
                  <p>Sale Items <span class="nm">25</span></p>
                  <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              </div>
              <p class="new" >10%<br/>
                Off</p>
            </div>
          </div>
        </div>
       <!--product 3-->
             
        <!--product 4-->  <div class="col-sm-6 col-md-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center"> <img src="images/home/product4.jpg" alt="" class="img-responsive"/>
                <h2>FRESHCO. </h2>
                <p>Sale Items <span class="no">25</span></p>
                <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              <div class="product-overlay">
                <div class="overlay-content">
                  <p>Sale Items <span class="nm">25</span></p>
                  <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              </div>
              <p class="new" >10%<br/>
                Off</p>
            </div>
          </div>
        </div>
       <!--product 4-->
             
      <!--product 5-->    <div class="col-sm-6 col-md-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center"> <img src="images/home/product5.jpg" alt="" class="img-responsive" />
                <h2>MEGA</h2>
                <p>Sale Items <span class="no">25</span></p>
                <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              <div class="product-overlay">
                <div class="overlay-content">
                  <p>Sale Items <span class="nm">25</span></p>
                  <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              </div>
              <p class="new" >10%<br/>
                Off</p>
            </div>
          </div>
        </div>
       <!--product 5-->
             
         <!--product 6--> <div class="col-sm-6 col-md-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center"> <img src="images/home/product1.jpg" alt="" class="img-responsive" />
                <h2>GROCERY STORE NAME</h2>
                <p>Sale Items <span class="no">25</span></p>
                <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              <div class="product-overlay">
                <div class="overlay-content">
                  <p>Sale Items <span class="nm">25</span></p>
                  <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              </div>
              <p class="new" >10%<br/>
                Off</p>
            </div>
          </div>
        </div>
       <!--product 6-->
        
        
      <!--product 7-->    <div class="col-sm-6 col-md-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center"> <img src="images/home/product1.jpg" alt="" class="img-responsive" />
                <h2>GROCERY STORE NAME</h2>
                <p>Sale Items <span class="no">25</span></p>
                <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              <div class="product-overlay">
                <div class="overlay-content">
                  <p>Sale Items <span class="nm">25</span></p>
                  <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              </div>
              <p class="new" >10%<br/>
                Off</p>
            </div>
          </div>
        </div>
       <!--product 7-->
        
       <!--product 8-->   <div class="col-sm-6 col-md-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center"> <img src="images/home/product1.jpg" alt=""  class="img-responsive"/>
                <h2>GROCERY STORE NAME</h2>
                <p>Sale Items <span class="no">25</span></p>
                <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              <div class="product-overlay">
                <div class="overlay-content">
                  <p>Sale Items <span class="nm">25</span></p>
                  <a href="#" class="btn btn-default add-to-cart">Store Location</a> </div>
              </div>
              <p class="new" >10%<br/>
                Off</p>
            </div>
          </div>
        </div>
       <!--product 8-->
        
        
        
        
        
        
        
        
    
      </div> <!--features_item end-->
    </div><!--col-sm-9 end-->
  </div><!--row end-->
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
<style>

.navbar{
margin-bottom:0px !important;
}
</style>
