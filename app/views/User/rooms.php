<div class="hero-wrap" style="background-image: url('<?php echo BASE_URL . PUBLIC_DIR; ?>/images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-room">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	
            <h2 class="mb-4">Hotel Master's Rooms</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
          <?php foreach ($data as $room) {?>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img" style="background-image: url('<?php echo BASE_URL?>/Files/room_category/<?php echo $room['image']?>')"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">Php <?php echo $room['price']; ?></span> <span class="per">per day</span></p>
	    						<h3 class="mb-3"><a href="rooms.html"><?php echo $room['category_name'];?></a></h3>
                  <h6 class="mb-3"><?php echo $room['description'];?></h6>
	    						<p class="pt-1"><a href="<?php echo site_url('User/room_details/'.$room['category_id'])?>" class="btn-custom px-3 py-2 rounded">Book Now <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<?php } ?>

    			
    			
    </section>