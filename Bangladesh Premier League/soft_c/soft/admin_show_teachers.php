<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>United School and College | Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-width-pics.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">United School and College</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Class Pannel<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="admin_show_classes.php">Show Class</a></li>
                        <li><a href="admin_add_classes.php">Add Class</a></li>
                        <li><a href="admin_add_subjects_pre.php">Add Subject</a></li>
                        <li><a href="admin_delete_classes.php">Remove Class</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teacher Pannel<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="admin_show_teachers.php">Show Teachers</a></li>
                        <li><a href="admin_add_classes.php">Add Teacher</a></li>
                        <li><a href="admin_assign_teacher.php">Assign Teacher</a></li>
                        <li><a href="admin_delete_teachers.php">Delete Teacher</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Student Pannel<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="admin_show_students_pre.php">Show Students</a></li>
                        <li><a href="admin_add_student.php">Add Student</a></li>
                        <li><a href="admin_assign_student.php">Assign Student</a></li>
                        <li><a href="admin_delete_student.php">Delete Student</a></li>
                      </ul>
                    </li>

                    <li>
                        <a href="#">Sign Up</a>
                    </li>
                    <li>
                        <a href="#">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->


    <!-- Content Section -->
    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Teacher's Information</h1>


                    <table class="table table-hover">
                      <tr style="font-weight: bold;">
                        <td>Name</td>
                        <td>Address</td>
                        <td>Specialization</td>
                      </tr>

                      <tr>
                        <td>Mohammad Ali</td>
                        <td>Dhanmondi</td>
                        <td>Math</td>
                      </tr>

                      <tr>
                        <td>Mr Sabuj</td>
                        <td>Mohammadpur</td>
                        <td>English</td>
                      </tr>

                    </table>


                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; cse.uiu.ac.bd</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
