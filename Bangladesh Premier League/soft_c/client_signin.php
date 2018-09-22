<?php

  $stu_email = NULL;
  $stu_pass = NULL;

?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/db_connection.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php include("include/layout/header.php"); ?>


    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src="img/logo.png" alt="">
    </header>

    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Sign In</h1>
                    <p class="lead section-lead">Please enter your Email ID and Password</p>

                    <?php echo signup_success(); ?>
                    <?php echo signin_error_mgs(); ?>


                    <form class="form-horizontal" action="client_signin_back.php" method="get">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-md-4 control-label">Email</label>
                        <div class="col-md-4">
                          <input type="email" name="t_email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-md-4 control-label">Password</label>
                        <div class="col-sm-4">
                          <input type="password" name="t_pass" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-offset-4 col-md-7">
                          <button name="submit" type="submit" class="btn btn-default">Sign in</button>
                        </div>
                      </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

<?php
  // Release return database
  signup_success_mgs_reset();
  signin_error_mgs_reset();
?>

<?php include("include/layout/footer.php"); ?>
