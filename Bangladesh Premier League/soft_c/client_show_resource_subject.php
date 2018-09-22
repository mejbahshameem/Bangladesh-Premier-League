<?php require_once("include/session.php"); ?>
<?php require_once("include/db_connection.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php include("include/layout/header.php"); ?>

<?php
   $_SESSION['class_id'] = $_GET["c_name"];
   $sub_ref  = get_subject_of_class($_SESSION['class_id']);
?>
    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Add Resource</h1>
                    <p class="lead section-lead">Please select the Subject for class <?php echo $_SESSION['class_id']; ?> </p>

                    <form action="client_add_resource_entry.php" class="form-horizontal">
                      <div class="form-group">
                        <div class="col-md-12">
                          <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              Select Subject
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                              <?php
                                while ($subject_list = mysqli_fetch_assoc($sub_ref)) {
                              ?>
                                <li>

                                  <a href="client_show_resource_list.php?s_id=<?php echo $subject_list['sub_id']; ?>"><?php echo $subject_list['sub_name']; ?> </a>

                                </li>


                              <?php
                                }
                              ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

<?php include("include/layout/footer.php"); ?>
