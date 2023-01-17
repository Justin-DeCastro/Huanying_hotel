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
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="sign-up-content">
                <form method="POST" action="<?php echo site_url('Login/register')?>" class="signup-form">
                    <h2 class="form-title">Create an Account</h2>
                    <div class="form-textbox">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="name" />
                    </div>
                    <br>
                    <div class="form-textbox">
                        <label for="pass">Password :</label>
                        <input type="password" name="password" id="pass" />
                    </div>
                    <br>
                    <div class="form-textbox">
                        <label for="pass">Confirm Pass :</label>
                        <input type="password" name="confirm_password" id="name" />
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

    <!-- JS -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/registration/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR; ?>/registration/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>