<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | VGS Potral</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

        <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">

    <style>
        /* For smaller screens, allow horizontal scrolling */
        .table-responsive {
            overflow-x: auto;
        }
    </style>
    </head>

    <?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

// Fetch students and their feedback
$sql = "SELECT students.*, feedback.feedback_text FROM students
        LEFT JOIN feedback ON students.id = feedback.student_id";
$result = $conn->query($sql);
?>

    <body>


        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

        

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <!-- <img src="../assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle"> -->
                            <span class="pro-user-name ml-1">
                                    Admin<i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="admin_logout.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                            <i class="mdi mdi-settings-outline noti-icon"></i>
                        </a>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="../assets/images/vertexlogo.png" alt="" height="26">
                            <!-- <span class="logo-lg-text-dark">Simple</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">S</span> -->
                            <img src="../assets/images/vertexlogo.png" alt="" height="22">
                        </span>
                    </a>

                    <a href="index.html" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="../assets/images/logo-light.png" alt="" height="26">
                            <!-- <span class="logo-lg-text-light">Simple</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-light">S</span> -->
                            <img src="../assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">


                <div class="user-box">
                        <div class="float-left">
                            <!-- <img src="../assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle"> -->
                        </div>
                        <div class="user-info">
                            <a href="#">Vertex Group</a>
                            <!-- <p class="text-muted m-0">Administrator</p> -->
                        </div>
                    </div>
    
            <!--- Sidemenu -->
            <div id="sidebar-menu">
    
                <ul class="metismenu" id="side-menu">
    
                    <li class="menu-title">Navigation</li>
    
                    <li>
                        <a href="Dashboard.php">
                            <i class="ti-home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="Employees.php">
                            <i class="ti-clipboard"></i>
                            <span> Manage Employee </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-files"></i>
                            <span> Quality Scoring </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="admin_marks_update.php">Add Score</a></li>
                            <li><a href="quality_score_admin.php">RView Score List</a></li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="Feedback.php">
                            <i class="ti-write"></i>
                            <span> Feedback</span>
                        </a>
                    </li>

                </ul>
    
            </div>
            <!-- End Sidebar -->
    
            <div class="clearfix"></div>

    
    </div>
    <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start container-fluid -->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h4 class="header-title mb-3">Welcome !</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!--end row -->

                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="row" style="justify-content:space-between;padding:5px 15px">
                                        <div class="div">
                                        <h5 class="mt-0 font-14 mb-3">Employees List</h5>
                                        </div>
                                        <div class="div">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add New Employee</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Employee ID</th>
                                                    <th>Process Name</th>
                                                    <th>Team Leader</th>
                                                    <th>Feedback</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            <?php while ($student = $result->fetch_assoc()) { ?>
                                                <tr>
                                                   
                                                    <td><?= $student['name'] ?></td>
                                                    <td><?= $student['email'] ?></td>
                                                    <td><?= $student['empid'] ?></td>
                                                    <td><?= $student['process'] ?></td>
                                                    <td><?= $student['course'] ?></td>
                                                    <td><?= $student['feedback_text'] ?></td>
                                                    <td>
                                                        <a href="edit_Employee.php?id=<?= $student['id'] ?>">Edit</a> | 
                                                        <a href="delete_employee.php?id=<?= $student['id'] ?>">Delete</a> 
                                                    </td>

                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container-fluid -->
                    <div class="container">
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>
        <div class="modal-body">
        <?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $process = $_POST['process'];  // New field
    $empid = $_POST['empid'];      // New field

    $sql = "INSERT INTO students (name, email, course, password, process, empid) 
            VALUES ('$name', '$email', '$course', '$password', '$process', '$empid')";
    
    if ($conn->query($sql)) {
        
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Hi,</h2>
<form method="POST">
    <div class="row" style="display:flex;justify-content:space-between;padding:0px 10px;">
        <div class="col">
             <div class="form-group">
            <label for="name">User Name</label>
                <input class="form-control" name="name" type="text" id="name" required="" placeholder="Enter Your Name">
            </div>

            <div class="form-group">
            <label for="password">Password</label>
                <input class="form-control" name="password" type="password" id="password" required="" placeholder="Enter Your password">
            </div>
            <div class="form-group">
            <label for="process">Process Name</label>
                <input class="form-control" name="process" type="text" id="process" required="" placeholder="Enter Process Name">
            </div>
        </div>

        <div class="col">
            <div class="form-group">
            <label for="email">Email</label>
                <input class="form-control" name="email" type="email" id="email" required="" placeholder="Enter Your email">
            </div>
            
            <div class="form-group">
            <label for="course">Team Leader </label>
                <input class="form-control" name="course" type="text" id="course" required="" placeholder="Enter Your course">
            </div>

            <div class="form-group">
            <label for="empid">Employee ID</label>
                <input class="form-control" name="empid" type="text" id="empid" required="" placeholder="Enter Your ID">
            </div>
            
</div>

</div>
<div class="mb-3 text-center" >    
           <button class="btn btn-primary btn-block" type="submit">Add</button>
        </div>

    <!-- <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="course" placeholder="Course" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="text" name="process" placeholder="process" required>
    <input type="text" name="empid" placeholder="empid" required>
    <button type="submit">Add Student</button> -->
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
                    
<!-- Quality Scoring  -->

<?php

include 'db.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}



// Fetch student marks along with acknowledgment status
$sql = "
    SELECT students.name, students.email, students.empid, marks.*
    FROM students
    LEFT JOIN marks ON students.id = marks.student_id
";
$result = $conn->query($sql);
?>


<h1>Admin Dashboard</h1>
<div style="overflow-x:auto;">
<!-- Display Table -->
<table id="marksTable" class="" border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Transparency</th>
        <th>Helpfulness</th>
        <th>Empathy</th>
        <th>Opening</th>
        <th>Effectively</th>
        <th>Closing</th>
        <th>Process & Policy</th>
        <th>Call on hold</th>
        <th>Active Listerning</th>
        <th>Voice Modulation</th>
        <th>Effective pronunciation</th>
        <th>Timely manner</th>
        <th>Achieved Score</th>
        <th>Total Score</th>
        <th>Percentage</th>
        <th>Status</th>
        <th>Acknowledgment</th>
    </tr>

    <!-- Loop through each student and display their data -->
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['empid'] ?></td>
            <td><?= $row['subject1_marks'] ?></td>
            <td><?= $row['subject2_marks'] ?></td>
            <td><?= $row['subject3_marks'] ?></td>
            <td><?= $row['subject4_marks'] ?></td>
            <td><?= $row['subject5_marks'] ?></td>
            <td><?= $row['subject6_marks'] ?></td>
            <td><?= $row['subject7_marks'] ?></td>
            <td><?= $row['subject8_marks'] ?></td>
            <td><?= $row['subject9_marks'] ?></td>
            <td><?= $row['subject10_marks'] ?></td>
            <td><?= $row['subject11_marks'] ?></td>
            <td><?= $row['subject12_marks'] ?></td>
            <td><?= $row['achieved_score'] ?></td>
            <td><?= $row['total_marks'] ?></td>
            <td><?= $row['percentage'] ?>%</td>
            <td>
                <?php if ($row['acknowledged'] == 1) { ?>
                    <span style="color: green;">Yes</span>
                <?php } else { ?>
                    <span style="color: red;">No</span>
                <?php } ?>
            </td>
            <td><?= $row['acknowledgment_text'] ? $row['acknowledgment_text'] : 'No Acknowledgment' ?></td>
        </tr>
    <?php } ?>
</table>
</div>
                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                   2024 &copy; Vertex Group <a href=""></a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div>
                <!-- end content -->

            </div>
            <!-- END content-page -->

        </div>
        <!-- END wrapper -->

        
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="font-16 m-0 text-white">Theme Customizer</h5>
            </div>
            <div class="slimscroll-menu">
        
                <div class="p-4">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="../assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="../assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="../assets/css/bootstrap-dark.min.css" 
                            data-appStyle="../assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="../assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="../assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/EK71X" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
                </div>
            </div> 
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
<!-- 
        <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
            <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
        </a> -->

        <script>
    $(document).ready(function() {
        $('#marksTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            responsive: true,
            scrollX: true,  // Enable horizontal scrolling
        });
    });
</script>


        <script src="../assets/js/vendor.min.js"></script>

        <script src="../assets/libs/morris-js/morris.min.js"></script>
        <script src="../assets/libs/raphael/raphael.min.js"></script>

        <script src="../assets/js/pages/dashboard.init.js"></script>

        <script src="../assets/js/app.min.js"></script>

    </body>

</html>