<?php require_once 'controllers/authController.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Booststrap 4 CSS    -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Forgot Password page</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form-div login">
            <form action="forgot_password.php" method="post">
                <h3 class="text-center">Recover password </h3>
                <p>
                    Please enter your email address you used to sign up on this site
                    and we will assist you in recovering your password.
                </p>
                <?php if (count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <input type="email" name="email"  class="form-control form-control-lg">
                </div>

                <div class="form-group">
                    <button type="submit" name="forgot-password-btn" class="btn btn-primary btn-block btn-lg">
                        Recover your password
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>