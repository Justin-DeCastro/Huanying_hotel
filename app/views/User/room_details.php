<div class="hero-wrap" style="background-image: url('<?php echo BASE_URL?>/Files/room_category/<?php echo $data['image']?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="rooms.html">Rooms</a></span> <span>Rooms Single</span></p>
	            <h1 class="mb-4 bread">Rooms Details</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="room-img" style="background-image: url(<?php echo BASE_URL?>/Files/room_category/<?php echo $data['image']?>);"></div>
          				</div>
          			</div>
          		</div>
          	

          
          	</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate pl-md-5">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Details:


                </h3>
                <li><a href="#">Price <span>Php <?php echo $data['price'];?></span></a></li>
                <li><a href="#">No. of Bed: <span><?php echo $data['bed'];?></span></a></li>
                <li><a href="#">Max Person: <span><?php echo $data['max_persons'];?></span></a></li>
                <li><a href="#">Size <span><?php echo $data['size'];?></span></a></li>
                <li><a href="#">Availability <span><?php echo $data['availability'];?></span></a></li>
              </div>
            </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-8 room-single mt-4 mb-5 ftco-animate">
                <h2 class="mb-4"><?php echo $data['category_name'];?> <span> (<?php echo $data['availability'];?> Available rooms)</span></h2>
                <p><?php echo $data['description'];?></p>
        </div>
        <div class="col-md-4 room-single mt-4 mb-5 ftco-animate">
            <div class="card card-shadow">
              <div class="card-header bg-info">
                <h4 class="text-center text-white mt-1">Reserve Your Room</h4>
              </div>
              <div class="card-body">
                <form action="<?= site_url('User/check_room')?>" method="post">
                  <div class="form-group">
                  <input type="hidden"  name="category_id" class="form-control" value="<?php echo $data['category_id'];?>">
                  </div>
                  <div class="form-group">
                  <label class="form-control-label">Choose Date From:</label>
                  <input type="datetime-local"  name="datetime_from" required class="form-control">
                  </div>
                  <div class="form-group">
                  <label class="form-control-label">Choose Date To:</label>
                  <input type="datetime-local" name="datetime_to" required class="form-control">
                  </div>
                  <div class="form-group">

                  <input type="submit" name="save" value="Check Available Rooms" class="btn btn-outline-primary btn-block" style="border-radius: 30px; font-size: 16px; padding: 10px;">
                  </div>


                </form>
              </div>
              </div>
        </div>
      </div>
        
    </section> <!-- .section -->