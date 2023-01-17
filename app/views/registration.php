<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo BASE_URL . PUBLIC_DIR; ?>/registration/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    <div class="main d-flex justify-content-center">
        <div class="col-md-7 ">
        <div class="container">

            <div class="sign-up-content">
                <form method="POST" action="<?php echo site_url('Login/register')?>" class="signup-form">
                    <h2 class="form-title">Create an Account</h2>
                    <div class="form-textbox">
                        <label for="email">Email :</label>
                        <input type="text" name="email" id="name"  />
                    </div>
                    <br>
                    <div class="form-textbox">
                        <label for="pass">Password :</label>
                        <input type="password" name="password" id="pass" required />
                    </div>
                    <br>
                    <div class="form-textbox">
                        <label for="pass">Confirm Pass :</label>
                        <input type="password" name="confirm_password" id="name"  required />
                    </div>
                    <br>
                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="Create account" />
                    </div>
                </form>
                <br>

                <p class="loginhere">
                    Already have an account ?<a href="#" class="loginhere-link"> Log in</a>
                </p>
            </div>
        </div>
    </div>

    </div>

    <!-- JS -->

    <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/registration/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/registration/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <?php if(isset($_SESSION['status'])){ ?>
    <script type="text/javascript">
        Swal.fire({
              position: 'top-end',
              icon: '<?php echo $_SESSION['status_code'];?>',
              title: '<?php echo $_SESSION['status'];?>',
              showConfirmButton: false,
              timer: 1500
            })
    </script>
<?php unset($_SESSION["status"]);  }?>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>