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

if (!isset($_SESSION['student_id'])) {
    header('Location:  employee_login.php');
    exit();
}

$student_id = $_SESSION['student_id'];

// Fetch student details
$sql = "SELECT * FROM students WHERE id='$student_id'";
$student_result = $conn->query($sql);
$student = $student_result->fetch_assoc();

// Fetch feedback for the student
$sql = "SELECT * FROM feedback WHERE student_id='$student_id'";
$feedback_result = $conn->query($sql);
?>

<?php


// Fetch student marks
$sql = "SELECT * FROM marks WHERE student_id = '$student_id'";
$marks_result = $conn->query($sql);
$marks = $marks_result->fetch_assoc();

if ($marks) {
    $achieved_score = $marks['subject1_marks'] + $marks['subject2_marks'] + $marks['subject3_marks'] + $marks['subject4_marks'] + $marks['subject5_marks'] + $marks['subject6_marks'];
    $total_score = $marks['total_marks']; // 500 in this case
    $percentage = ($achieved_score / $total_score) * 100;
}

// Handle acknowledgment submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['acknowledge'])) {
    $acknowledgment_text = $_POST['acknowledgment_text'];

    $update_sql = "UPDATE marks SET acknowledged = 1, acknowledgment_text = '$acknowledgment_text' WHERE student_id = '$student_id'";
    if ($conn->query($update_sql)) {
        echo "Acknowledgment submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>


<!-- Display Marks -->
 <!-- <h2>Your Marks</h2>
<p>Subject 1: <?= $marks['subject1_marks'] ?></p>
<p>Subject 2: <?= $marks['subject2_marks'] ?></p>
<p>Subject 3: <?= $marks['subject3_marks'] ?></p>
<p>Subject 4: <?= $marks['subject4_marks'] ?></p>
<p>Subject 5: <?= $marks['subject5_marks'] ?></p>
<p>Subject 5: <?= $marks['subject6_marks'] ?></p>
<p>Subject 5: <?= $marks['subject7_marks'] ?></p>
<p>Subject 5: <?= $marks['subject8_marks'] ?></p>
<p>Subject 5: <?= $marks['subject9_marks'] ?></p>
<p>Subject 5: <?= $marks['subject10_marks'] ?></p>
<p>Subject 5: <?= $marks['subject11_marks'] ?></p>
<p>Subject 5: <?= $marks['subject12_marks'] ?></p> -->

<!-- <p>Total Marks: <?= $marks['total_marks'] ?></p>
<p>Achieved Marks: <?= $marks['achieved_score'] ?></p>
<p>Percentage: <?= number_format($marks['achieved_score'] / $marks['total_marks'] * 100, 2) ?>%</p> -->

<!-- Acknowledge Form -->
<!-- <?php if ($marks['acknowledged'] == 0) { ?>
    <h2>Acknowledge Your Marks</h2>
    <form method="POST">
        <div class="form-group">
            <label for="acknowledgment_text">Your Comment</label>
            <textarea class="form-control" name="acknowledgment_text" id="acknowledgment_text" required placeholder="Enter your acknowledgment or comment here"></textarea>
        </div>
        <button type="submit" name="acknowledge" class="btn btn-primary">Acknowledge</button>
    </form>
<?php } else { ?>
    <p>You have already acknowledged your marks with the comment: <?= $marks['acknowledgment_text'] ?></p>
<?php } ?>  -->


    <body>


        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

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

<li>
        <a href="Employee_profile.php">
            <i class="ti-home"></i>
            <span> Dashboard </span>
        </a>
    </li>

    <li>
        <a href="Emp_feedback_update.php">
            <i class="ti-home"></i>
            <span>Quality Score</span>
        </a>
    </li>

    <li>
        <a href="Emp_update.php">
            <i class="ti-home"></i>
            <span>Profile Update</span>
        </a>
    </li>

    

    <a href="Emp_logout.php">
    <li class="menu-title">log out</li>
    </a>

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
                                    <h4 class="header-title mb-3">Welcome, <?= $student['name'] ?></h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!--end row -->

                        <!-- end row -->

                                       <!-- end row -->
		<section class="cards">
			<div class="card-score card" style="background-color:#7081fb;
    justify-content: center;
    /* width: 400px; */
    border: 1px solid black;
    align-items: center;
    color:white;
    font-size:40px;">
				<h4 class="card-score__title" style="color:black;font-size:26px">Your Result</h4>
				<div class="card-score__result">
					<span class="card-score__result__count"><?= $marks['achieved_score'] ?></span>
					<span class="card-score__result__max">of 200</span>
				</div>
				<h3 class="card-score__heading" style="color:black;font-size:26px">Persantage</h3>
				<p class="card-score__text"><?= number_format($marks['achieved_score'] / $marks['total_marks'] * 100, 2) ?>%</p>
			</div>
			<div class="card-details card">
				<h3 class="card-details__title">Summary</h3>
				<div class="card-details__score"> 
                <table class="table table-bordered">
  <tbody>
    <tr>
      <th>#</th>
      <td>Terms</td>
      <td>Acchived Score</td>
      <td>Total Score</td>
    </tr>
    <tr>
      <th>Transparency</th>
      <td>Explained why you need specific info, What you are doing, and Why you did it</td>
      <td><?= $marks['subject1_marks'] ?></td>
      <td>30</td>
    </tr>
    <tr>
      <th>Helpfulness</th>
      <td>Took accountability & ownership to help the customer in the best way possible  & avoided unnecessary delay's</td>
      <td><?= $marks['subject2_marks'] ?></td>
      <td>30</td>
    </tr>
    <tr>
      <th>Empathy</th>
      <td>Empathy & Personalization</td>
      <td><?= $marks['subject3_marks'] ?></td>
      <td>40</td>
    </tr>
    <!-- Call Flow Group -->
    <tr>
                <th rowspan="3" class="category-header">Call Flow</th>
                <td>Warm and welcoming in the opening</td>
                <td><?= $marks['subject4_marks'] ?></td>
                <td>10</td>
                
            </tr>
            <tr>
                <td>Probed effectively</td>
                <td><?= $marks['subject5_marks'] ?></td>
                <td>15</td>

            </tr>
            <tr>
                <td>Closing</td>
                <td><?= $marks['subject6_marks'] ?></td>
                <td>10</td>
   
            </tr>
            <!-- Proces & Pollicy -->
            <tr>
                <th rowspan="2" class="category-header">Process & Policy</th>
                <td>Asked for the Player's username and date of Birth</td>
                <td><?= $marks['subject7_marks'] ?></td>
                <td>15</td>
                
            </tr>
            <tr>
                <td>Followed correct procedure for placing the customer's call  on hold</td>
                <td><?= $marks['subject8_marks'] ?></td>
                <td>10</td>
            </tr>
             <!-- Communication -->
             <tr>
                <th rowspan="3" class="category-header">Communication</th>
                <td>Active listening</td>
                <td><?= $marks['subject9_marks'] ?></td>
                <td>10</td>
                
            </tr>
            <tr>
                <td>Voice Modulation: maintained proper tone, pitch, volume and pace (RateOfSpeech) throughout the call.</td>
                <td><?= $marks['subject10_marks'] ?></td>
                <td>10</td>
            </tr>
            <tr>
                <td>Effective pronunciation and grammar throughout the interaction</td>
                <td><?= $marks['subject11_marks'] ?></td>
                <td>10</td>
            </tr>
            <tr>
                <td>Resolution</td>
                <td>Provided accurate steps & solution with the available resources in a timely manner</td>
                <td><?= $marks['subject12_marks'] ?></td>
                <td>10</td>
            </tr>

            
           
    
  </tbody>
</table>   

                <?php if ($marks['acknowledged'] == 0) { ?>
    <h2>Acknowledge Your Marks</h2>
    <form method="POST">
        <div class="form-group">
            <label for="acknowledgment_text">Your Comment</label>
            <textarea class="form-control" name="acknowledgment_text" id="acknowledgment_text" required placeholder="Enter your acknowledgment or comment here"></textarea>
        </div>
        <button type="submit" name="acknowledge" class="btn btn-primary">Acknowledge</button>
    </form>
<?php } else { ?>
    <p>You have already acknowledged your marks with the comment: <?= $marks['acknowledgment_text'] ?></p>
<?php } ?>
				<!-- <button class="card-details__btn">Continue</button> -->
			</div>
		</section>
		<!-- Your Result
  76
  of 100

  Great
  You scored higher than 65% of the people who have taken these tests.
  
  Summary

  Reaction
  80 / 100

  Memory
  92 / 100

  Verbal
  61 / 100

  Visual
  72 / 100

  Continue
   -->
                        <!-- end row -->

                     
                    <!-- end container-fluid -->
                    <div class="container">
 
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