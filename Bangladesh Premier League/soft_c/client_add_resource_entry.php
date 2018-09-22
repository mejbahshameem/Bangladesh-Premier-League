<?php require_once("include/session.php"); ?>
<?php require_once("include/db_connection.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php include("include/layout/header.php"); ?>

<?php
   $_SESSION['subject_id'] = $_GET["s_id"];
?>

    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Add Resource</h1>
                    <p class="lead section-lead">Please input the Resource</p>

                    <form class="form-horizontal" action="client_add_resource_back.php" method="get">
                      <div class="form-group">
                        <label for="inputClass3" class="col-md-4 control-label">Resource Type</label>
                        <div class="col-md-4">
                          <input type="text" name="r_type" class="form-control" id="inputClass3" placeholder="Resource Type">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputClass3" class="col-md-4 control-label">Resource Link</label>
                        <div class="col-md-4">
                          <input type="text" name="r_link" class="form-control" id="inputClass3" placeholder="Resource Link">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-offset-4 col-md-7">
                          <button name="submit" type="submit" class="btn btn-default">Save</button>
                        </div>
                      </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

<?php include("include/layout/footer.php"); ?>
