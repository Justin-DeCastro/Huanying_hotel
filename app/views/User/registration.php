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
	<div class="container d-flex justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header bg-info">
					<h4 class="text-center text-white">Please Fill-up your Information</h4>
				</div>
				<div class="card-body">
					<form action="<?= site_url('User/registration/'.$data['room_id'])?>" method="post">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-control-label">First Name:</label>
									<input type="text" name="firstname" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-control-label">Middle Name:</label>
									<input type="text" name="middlename" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-control-label">Last Name:</label>
									<input type="text" name="lastname" class="form-control" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-control-label">Gender:</label>
									<select class="form-control" name="gender" required>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-control-label">Birthday:</label>
									<input type="date" name="birthday" class="form-control" placeholder="Birthday" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-control-label">Email:</label>
									<input type="text" name="email" class="form-control" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-control-label">Contact Number:</label>
									<input type="text" name="contact" class="form-control" required>
								</div>
							</div>
						</div>
						<div class="row">
							<input type="submit" name="submit" class="btn btn-info btn-block" style="padding:10px;">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</section>