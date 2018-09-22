<?php include("include/layout/header.php"); ?>
    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Delete Resource</h1>
                    <p class="lead section-lead">Please enter the Class</p>

                    <form action="client_delete_resource_subject.php" class="form-horizontal" method="get">
                      <div class="form-group">
                        <label for="inputClass3" class="col-md-4 control-label">Class Name</label>
                        <div class="col-md-4">
                          <input type="text" name="c_name" class="form-control" id="inputClass3" placeholder="Class Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-offset-4 col-md-7">
                          <button type="submit" class="btn btn-default">Next</button>
                        </div>
                      </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
<?php include("include/layout/footer.php"); ?>
