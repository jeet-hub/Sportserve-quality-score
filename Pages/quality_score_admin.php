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
        <link rel="shortcut icon" href="../assets/images/favicon.ico">
        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Include Chart.js -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
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
<body>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<?php

include 'db.php';



// Fetch student marks along with acknowledgment status
$sql = "
    SELECT students.name, students.email,students.empid, marks.*
    FROM students
    LEFT JOIN marks ON students.id = marks.student_id
";
$result = $conn->query($sql);
?>

<!-- <h2>Responsive Table</h2>
<p>If you have a table that is too wide, you can add a container element with overflow-x:auto around the table, and it will display a horizontal scroll bar when needed.</p>
<p>Resize the browser window to see the effect. Try to remove the div element and see what happens to the table.</p>

<div style="overflow-x:auto;">
  <table class="table table-striped table-bordered">
    <tr>
    <th style="font-size:12px;">Student Name</th>
                    <th style="font-size:12px;">Email</th>
                    <th style="font-size:12px;">Subject 1 Marks</th>
                    <th style="font-size:12px;">Subject 2 Marks</th>
                    <th style="font-size:12px;">Subject 3 Marks</th>
                    <th style="font-size:12px;">Subject 4 Marks</th>
                    <th style="font-size:12px;">Subject 5 Marks</th>
                    <th style="font-size:12px;">Subject 6 Marks</th>
                    <th style="font-size:12px;">Subject 7 Marks</th>
                    <th style="font-size:12px;">Subject 8 Marks</th>
                    <th style="font-size:12px;">Subject 9 Marks</th>
                    <th style="font-size:12px;">Subject 10 Marks</th>
                    <th style="font-size:12px;">Subject 11 Marks</th>
                    <th style="font-size:12px;">Subject 12 Marks</th>
                    <th style="font-size:12px;">Achieved Score</th>
                    <th style="font-size:12px;">Total Score</th>
                    <th style="font-size:12px;">Percentage</th>
                    <th style="font-size:12px;">Acknowledged</th>
                    <th style="font-size:12px;">Acknowledgment Text</th>
    </tr>
   
   
    
  </table>
</div> -->
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

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0" style="display:flex;align-items: center;gap:40px;">
                    <!-- <li>
                        <button class="button-menu-mobile">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li> -->
                    <li>
                       <a href="Dashboard.php"> Dashboard</a>
                    </li>
                    <li>
                       <a href="Employees.php">Employee List</a> 
                    </li>
                    <li>
                        <a href="quality_score_admin.php">Quality Score</a>
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
<div class="container" style="align-item:center;display:flex;justify-content:center">
    <div class="row">
        <div class="one">
        <h4>Sport Serve - THE Quality Scoring Form</h4> 
        </div>
        <div class="tow">
           
        </div>
    </div>
</div>

<div style="overflow-x:auto; p-4"  style="padding:20px;">
        <table id="marksTable" class="tt table table-striped table-bordered" >
            <thead>
                <tr>
        <th style="font-size:12px;">Name</th>
        <th style="font-size:12px;">ID</th>
        <th style="font-size:12px;">Transparency</th>
        <th style="font-size:12px;">Helpfulness</th>
        <th style="font-size:12px;">Empathy</th>
        <th style="font-size:12px;">Opening</th>
        <th style="font-size:12px;">Effectively</th>
        <th style="font-size:12px;">Closing</th>
        <th style="font-size:12px;">Process & Policy</th>
        <th style="font-size:12px;">Call on hold</th>
        <th style="font-size:12px;">Active Listerning</th>
        <th style="font-size:12px;">Voice Modulation</th>
        <th style="font-size:12px;">Effective pronunciation</th>
        <th style="font-size:12px;">Timely manner</th>
        <th style="font-size:12px;">Achieved Score</th>
        <th style="font-size:12px;">Total Score</th>
        <th style="font-size:12px;">Percentage</th>
        <th style="font-size:12px;">Status</th>
        <th style="font-size:12px;">Acknowledgment</th>
                </tr>
            </thead>
            <tbody>
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
                        <td><?= $row['acknowledged'] ? '<span style="color:green;">Yes</span>' : '<span style="color:red;">No</span>' ?></td>
                        <td><?= $row['acknowledgment_text'] ? $row['acknowledgment_text'] : 'No Acknowledgment' ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
 
                </div>

                <script src="../assets/js/vendor.min.js"></script>

        <script src="../assets/libs/morris-js/morris.min.js"></script>
        <script src="../assets/libs/raphael/raphael.min.js"></script>

        <script src="../assets/js/pages/dashboard.init.js"></script>

        <script src="../assets/js/app.min.js"></script>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

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

</body>
</html>