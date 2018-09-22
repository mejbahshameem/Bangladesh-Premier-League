<?php require_once("include/session.php"); ?>
<?php require_once("include/db_connection.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php include("include/layout/header.php"); ?>

<?php
  $_SESSION['subject_id'] = $_GET["s_id"];
  $subject_id = $_SESSION['subject_id'];
  $res_ref = get_resource_of_subject($subject_id);
?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Resources</h1>

                    <table class="table table-hover">
                      <tr style="font-weight: bold;">
                        <td>Resource Type</td>
                        <td>Downoad Link</td>
                      </tr>
                        <?php
                          while ($res_list = mysqli_fetch_assoc($res_ref)) {
                        ?>
                        <tr>
                          <td><?php echo $res_list['r_type']; ?></td>
                          <td><a target=_blink href="<?php echo $res_list['r_link']; ?>"><?php echo $res_list['r_link']; ?></a></td>
                        </tr>
                        <?php
                          }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?php include("include/layout/footer.php"); ?>
