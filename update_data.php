<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="add_student.php"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="add_student.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          
          <br>
		  <br>
          <li class="nav-item">
            <span class="nav-link" href="#">
              <span class="menu-title"><h4>Form</h4></span>
            </span>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Student</span>
            </a>
          </li>
		  
		  <li class="nav-item">
            <a class="nav-link" href="course.php">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Course</span>
            </a>
          </li>
          
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <div class="border-none">
                  <p class="text-black">Notification</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <!--<span class="count count-varient1">7</span>-->
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0">View all activities</p>
                </div>
              </li>
              <li class="nav-item dropdown d-none d-sm-flex">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email-outline"></i>
                  <!--<span class="count count-varient2">5</span>-->
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  
                  
                  
                  <h6 class="p-3 mb-0">See all activity</h6>
                </div>
              </li>
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              
              
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
		
		 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">New Student </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">New Student</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> <a href="#">Student</a> </li>
                </ol>
              </nav>
            </div>
		
							<?php
								
								define("DB_HOST", "localhost");
								define("DB_USER", "root");
								define("DB_PASSWORD", "");
								define("DB_DATABASE", "demo");
								
								$id=$_GET['id'];

								//$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
								
								$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
								
								$sql="select * from student where id=$id";
								
								$result = mysqli_query($conn,$sql);
								
								if(mysqli_num_rows($result)>0)
								{
									while($row = mysqli_fetch_assoc($result)) {
										$fname = $row['fname'];
										$lname=$row['lname'];
										$course=$row['course'];
										$year=$row['year'];
										$contact=$row['contact'];
										$age= $row['age'];
										$dob=$row['birth'];
										$gender=$row['gender'];
									}
								}
									
								
								
								/*if (mysqli_num_rows($result) > 0) {
								// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
									
										echo "<option value=".$row['c_name'].">" . $row['c_name']."</option>";
									}
								} 
								*/
								
								
								?>
			
        <!-- main -->
		
		<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Student Form </h4>
                    
					<a href='index.php'><button aria-label="breadcrumb" class='btn btn-primary mr-2' name='back'>Back</button></a>
					<br>
					<br>
                    <form class="forms-sample" method="post" action="">
					
                      <div class="form-group">
					  
						
                        <label for="exampleInputName1">First Name</label>
                        <input type="text" class="form-control" value=<?php echo $fname ?> id="fname" name="fname" placeholder="First Name" />
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputName1">Last Name</label>
                        <input type="text" class="form-control" value=<?php echo $lname ?> id="lname" name="lname" placeholder="Last Name" />
                      </div>
					  
                      <div class="form-group">
                        <label for="exampleInputEmail3">Course</label>
							<select class="form-control form-control-lg" name="course" value=<?php echo $course ?> id="course" placeholder="-select-">
								<option value=<?php echo $course ?>><?php echo $course ?></option>
								
								<?php
								
								define("DB_HOST", "localhost");
								define("DB_USER", "root");
								define("DB_PASSWORD", "");
								define("DB_DATABASE", "demo");

								//$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
								
								$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
								
								$sql="select c_name from course";
								
								$result = mysqli_query($conn,$sql);
								
								if (mysqli_num_rows($result) > 0) {
								// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
									
										echo "<option value=".$row['c_name'].">" . $row['c_name']."</option>";
									}
								} 
								
								
								
								?>
								
							</select>
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputEmail3">Year</label>
							<select class="form-control form-control-lg" id="year"  name="year" placeholder="-Select-">
								<option value=<?php echo $year ?>><?php echo $year ?></option>
								<option value="First Year">First</option>
								<option value="Second Year">Second</option>
								<option value="Third Year">Third</option>
								<option value="Fourth Year">Fourth</option>
							</select>
                      </div>
					  
                      <div class="form-group">
                        <label for="exampleInputName1">Contact</label>
                        <input type="text" class="form-control" id="contact" value=<?php echo $contact ?> name="contact" placeholder="Contact" />
                      </div>
					  
                      <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="gender" name="gender" placeholder="-Select-">
							
							<?php
								
								if($gender == 'Male')
								{
									echo "<option value='Male' selected='selected'> $gender </option>";
									echo "<option value='Female'>Female</option>";
								}
								else
								{
									echo "<option value='Male' > $gender </option>";
									echo "<option value='Female' selected='selected'>Female</option>";
									
								}
								
							?>
							
                        </select>
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputName1">Age</label>
                        <input type="text" class="form-control" id="age" value=<?php echo $age ?> name="age" placeholder="Age" />
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" value=<?php echo $dob ?> name="dob" placeholder="Date of Birth" />
                      </div>
					  
                      <br>
					  
                      <button type="submit" class="btn btn-primary mr-2" name="update"> Update </button>
					  <a href='index.php'><button class="btn btn-light" >Cancel</button></a>
						
                      
                    </form>
                  </div>
                </div>
              </div>
		
		<!-- end main -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>


<?php 
	
	/*define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "demo");

	
								
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);*/
	
	$id=$_GET['id'];

	if (isset($_POST["update"])) {
		$fname = $_POST['fname'];
		$lname=$_POST['lname'];
		$course=$_POST['course'];
		$year=$_POST['year'];
		$contact=$_POST['contact'];
		$age= $_POST['age'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		
		$sql2="update student set fname='$fname',lname='$lname',course='$course',year='$year',contact='$contact',age=$age,birth='$dob',gender='$gender' where id=$id";
		
		
		
		$result=mysqli_query($conn, $sql2);
	
		//header("Location:index.php");
	
		
	
}
?>