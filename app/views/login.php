<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo BASE_URL . PUBLIC_DIR; ?>/login.css">
	<?php include ('user/includes/header.php');?>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-2">Login</h2>
        <?php flash_alert(); ?>

        <div class="card my-2">

          <form class="card-body cardbody-color p-lg-5" method="post" action="<?php echo BASE_URL; ?>Login">

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" name="username" aria-describedby="emailHelp"
                placeholder="Username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-info px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="#" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div></body>
</html>