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

    </head>
    <?php
session_start();
include 'db.php';

// Ensure the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

// Fetch all students
$students_sql = "SELECT * FROM students";
$students_result = $conn->query($students_sql);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $subject1_marks = $_POST['subject1_marks'];
    $subject2_marks = $_POST['subject2_marks'];
    $subject3_marks = $_POST['subject3_marks'];
    $subject4_marks = $_POST['subject4_marks'];
    $subject5_marks = $_POST['subject5_marks'];
    $subject6_marks = $_POST['subject6_marks'];
    $subject7_marks = $_POST['subject7_marks'];
    $subject8_marks = $_POST['subject8_marks'];
    $subject9_marks = $_POST['subject9_marks'];
    $subject10_marks = $_POST['subject10_marks'];
    $subject11_marks = $_POST['subject11_marks'];
    $subject12_marks = $_POST['subject12_marks'];

    // Calculate total score from all subjects
    $total_score = $subject1_marks + $subject2_marks + $subject3_marks + $subject4_marks + 
                   $subject5_marks + $subject6_marks + $subject7_marks + $subject8_marks + 
                   $subject9_marks + $subject10_marks + $subject11_marks + $subject12_marks;

                   echo $total_score;

    // Insert or update marks for the student
    $sql = "INSERT INTO marks (student_id, subject1_marks, subject2_marks, subject3_marks, subject4_marks, 
                                subject5_marks, subject6_marks, subject7_marks, subject8_marks, 
                                subject9_marks, subject10_marks, subject11_marks, subject12_marks, 
                                total_marks) 
            VALUES ('$student_id', '$subject1_marks', '$subject2_marks', '$subject3_marks', '$subject4_marks', 
                    '$subject5_marks', '$subject6_marks', '$subject7_marks', '$subject8_marks', 
                    '$subject9_marks', '$subject10_marks', '$subject11_marks', '$subject12_marks', 200)
            ON DUPLICATE KEY UPDATE 
                subject1_marks='$subject1_marks', 
                subject2_marks='$subject2_marks',
                subject3_marks='$subject3_marks', 
                subject4_marks='$subject4_marks', 
                subject5_marks='$subject5_marks',
                subject6_marks='$subject6_marks',
                subject7_marks='$subject7_marks',
                subject8_marks='$subject8_marks',
                subject9_marks='$subject9_marks',
                subject10_marks='$subject10_marks',
                subject11_marks='$subject11_marks',
                subject12_marks='$subject12_marks', 
                acknowledged=0";

    if ($conn->query($sql)) {
        echo "Marks updated successfully!";
        header('Location: Employees.php');
    } else {
        echo "Error: " . $conn->error;
    }
}
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
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                                    <h4 class="header-title mb-3">Feedback</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        

<h2>Update Quality Score</h2>


<!-- new one  -->
<form method="POST">
   
<div class="form-group">
        <label for="student_id">Select Employee</label>
        <select class="form-control" name="student_id" id="student_id" required>
            <?php while ($student = $students_result->fetch_assoc()) { ?>
                <option value="<?= $student['id'] ?>"><?= $student['name'] ?></option>
            <?php } ?>
        </select>
    </div>
  <h4>Customer Service</h4>
  <div class="row">
    <div class="col-sm-4">
    <div class="form-group">
        <label for="subject1_marks"><strong>Transparency</strong></label>
        <!-- <input class="form-control" name="subject1_marks" type="number" id="subject1_marks" required placeholder="Subject 1 Marks"> -->
        <select name="subject1_marks" class="form-control" required>
            <option value="0">0</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="30">30</option>
        </select>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="form-group">
        <label for="subject2_marks"><strong>Helpfulness</strong></label>
        <select name="subject2_marks" class="form-control" required>
            <option value="0">0</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="30">30</option>
        </select>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="form-group">
        <label for="subject3_marks"><strong>Empathy</strong></label>
        <select name="subject3_marks" class="form-control" required>
            <option value="0">0</option>
            <option value="15">15</option>
            <option value="35">35</option>
            <option value="40">40</option>
        </select>
    </div>
    </div>
    </div>
    <!-- 1 row end  -->

     <h4>Problem Solving</h4>
     <h6>Call Follow</h6>
     <div class="row">
        <div class="col-sm-6">
    <div class="form-group">
        <label for="subject4_marks">Warm and welcoming in the opening</label>
        <select name="subject4_marks" class="form-control" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
        </select>
    </div>
    </div>
    <div class="col-sm-3">
    <div class="form-group">
        <label for="subject5_marks">Probed effectively</label>
        <select name="subject5_marks" class="form-control" required>
            <option value="0">0</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
        </select>
    </div>
    </div>
    <div class="col-sm-3">
    <div class="form-group">
        <label for="subject6_marks">Closing</label>
        <select name="subject6_marks" class="form-control" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
        </select>
    </div>
    </div>
    </div>
     <!-- 2nd row end  -->
      <h6>Process & Policy</h6>
      <div class="row">
        <div class="col-sm-6">
    <div class="form-group">
        <label for="subject7_marks">Asked for the Player's username and date of Birth</label>
        <select name="subject7_marks" class="form-control" required>
            <option value="0">0</option>
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="15">15</option>
        </select>
    </div>
    </div>

    <div class="col-sm-6">
    <div class="form-group">
        <label for="subject8_marks">Followed correct procedure for placing the customer's call  on hold</label>
        <select name="subject8_marks" class="form-control" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
        </select>
    </div>
    </div>
    </div>
    <!-- 3rd row end  -->
     <h4>Soft Skills</h4>
     <div class="row" >
     <h6>Communication / </h6>
     <h6>/ Resolution</h6>
     </div>
     <div class="row">
        <div class="col-sm-3">
    <div class="form-group">
        <label for="subject9_marks">Active Listerning</label>
        <select name="subject9_marks" class="form-control" required>
        <option value="0">0</option>
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
        </select>
    </div>
    </div>
    <div class="col-sm-3">
    <div class="form-group">
        <label for="subject10_marks">Voice Modulation</label>
        <select name="subject10_marks" class="form-control" required>
        <option value="0">0</option>
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
        </select>
    </div>
    </div>
    <div class="col-sm-3">
    <div class="form-group">
        <label for="subject11_marks">Effective pronunciation</label>
        <select name="subject11_marks" class="form-control" required>
        <option value="0">0</option>
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
        </select>
    </div>
    </div>
   
    <div class="col-sm-3">
    <div class="form-group">
        <label for="subject12_marks">Timely manner</label>
        <select name="subject12_marks" class="form-control" required>
        <option value="0">0</option>
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
        </select>
    </div>
    </div>

    </div>
    
    <button type="submit" class="btn btn-primary">Update Score</button>
</form>

                        <!--end row -->
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


    <a href="Employees.php">Back/a>


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



        <script src="../assets/js/vendor.min.js"></script>

        <script src="../assets/libs/morris-js/morris.min.js"></script>
        <script src="../assets/libs/raphael/raphael.min.js"></script>

        <script src="../assets/js/pages/dashboard.init.js"></script>

        <script src="../assets/js/app.min.js"></script>

    </body>

</html>