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
<section class="ftco-section">
	<div class="container">
		<h2 class="mb-4 text-center">Choose your Room</h2>
		<div class="row">
			<?php $x=0; foreach ($data[2] as $room) {
				if ($room['category_id']==$data[3]){
				foreach($data[1] as $book){
					if($book['room_id']==$room['room_id']){
						$x++;
					}
				}
				if($x==0){?>
					<div class="col-md-4">
						<a href="<?= site_url('User/registration/'.$room['room_id'])?>">
						<div class="card">
						<img src="<?php echo BASE_URL."Files/room_category/".html_escape($room['image']);?>" class="card-img-top" alt="...">
							<div class="card-body bg-primary">
								<h4 class="text-center text-white"><?php echo $room['room_name'];?></h4>
							</div>
						</div>
					</a>
					</div>
				<?php } 
				$x=0;

			}}?>
		</div>
	</div>
	
</section>