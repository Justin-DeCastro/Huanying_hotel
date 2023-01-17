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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="sign-up-content">
                <form method="POST" action="<?php echo site_url('Login/verification')?>" class="signup-form">
                    <h2 class="form-title">Please Verify Your Account</h2>
                    <div class="form-textbox">
                        <input type="text" name="code" required>Enter the 5 digit number we have sent on your email.</input>
                        <input type="hidden" name="email" value="<?php echo $data['email'];?>">
                        <input type="hidden" name="token" value="<?php echo $data['token'];?>">
                    </div>
                    <br>
                    
                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="Submit" />
                    </div>
                </form>
                <br>

                
           

    </div>

    <!-- JS -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/registration/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/registration/js/main.js"></script>
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