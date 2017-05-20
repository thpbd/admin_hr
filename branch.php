<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin & HR</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
  <script src="js/angular.js"></script>
  <script src="js/angular-ui-router.min.js"></script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container display-table">
	     <div class="row display-table-row">
		<!--side manu-->
    		<div class="col-md-2 display-table-cell valign-top" id="side-menu">
    		<div class="top-bar">
    			<div class="logo">
    			<img src="images/THP_logo.png" height= "40" width="40">
    			</div>
    			<span style="margin-left:29px; font-size:21px; color: #fff; margin-top:10px; float:left;">Admin & HRD</span>
    			</div>
		<div class="top-nav">
		<img src="images/sayem.jpg" class="img-circle" height= "60" width="60">
		<span style="font-size:16px; color: #fff; margin-left: 14px;">A. S. M Syem</span>
		<br>Assistant Manager, Accounts</br>
			<i class="fa fa-facebook-square" aria-hidden="true"></i>
			<i class="fa fa-twitter-square"></i>
			<i class="fa fa-envelope"></i>
		</div>
	<h2>Navigation</h2>
	<ul>
<li class="link">
<a href="index.php">
<span class="glyphicon glyphicon-th" aria-hidden="true">
<span>Dashboard</span></a>
</li>
<h2><span class="title">Basic Settings</span></h2>
<li class="link">
<a href="region.php">
<span class="glyphicon glyphicon-hand-right" aria-hidden="true">
<span>Region</span></a>
</li>
<li class="link">
<a href="district.php">
<span class="glyphicon glyphicon-hand-right" aria-hidden="true">
<span>District</span></a>
</li>
<li class="link">
<a href="upazila.php">
<span class="glyphicon glyphicon-hand-right" aria-hidden="true">
<span>Upazila</span></a>
</li>
<li class="link">
<a href="union.php">
<span class="glyphicon glyphicon-hand-right" aria-hidden="true">
<span>Union</span></a>
</li>
<li class="link">
<a href="branch.php">
<span class="glyphicon glyphicon-hand-right" aria-hidden="true">
<span>Branch</span></a>
</li>
<h2><span class="title">Manage Employee</span></h2>
<li class="link">
<a href="profile.php">
<span class="glyphicon glyphicon-hand-right" aria-hidden="true">
<span>Staff Profile</span></a>
</li>
<li class="link">
<a href="attendance.php">
<span class="glyphicon glyphicon-hand-right" aria-hidden="true">
<span>Attendance</span></a>
</li>
<li class="link">
<a href="salary.php">
<span class="glyphicon glyphicon-hand-right" aria-hidden="true">
<span>Salary</span></a>
</li>
<li class="link">
<a href="user.php">
<span class="glyphicon glyphicon-hand-right" aria-hidden="true">
<span>Users</span></a>
</li>

	</div>
	<!-- main content area-->
	<div class="col-md-10 display-table-cell valign-top box">
	<section id="header">
			<div class="row">
			<div class="nav-header clearfix">
		<div class="col-md-5">
		<input type="text" id="search-field" placeholder="search for anything..">
	</div>
		<div class="col-md-7">
	<ul class="pull-right">
	<li id="welcome"><h4>Welcome to Administration Area</h4></li>
	<li class="fixed-width">
	<a href="#">
	<span class="glyphicon glyphicon-bell"></span>
	<span class="label label-warning">5</span>
	</a>
	</li class="fixed-width">
	<li>
	<a href="#">
	<span class="glyphicon glyphicon-envelope"></span>
	<span class="label label-message">11</span>
	</a>
	</li>
	<li>
	<a href="#">
	<span class="glyphicon glyphicon-log-out"></span>
	logout
	</a>
	</li>
	</ul>
	</div>
	</div>
	</section>

<div class="col-md-10">

  <br>
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Branch Name</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="District">
    </div>
    <div class="form-group">
    <select class="form-control">
      <label for="exampleInputEmail1">Region Name</label>
  <option>Select Region</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  </select>
  </div>
  <div class="form-group">
  <select class="form-control">
    <label for="exampleInputEmail1">District Name</label>
  <option>Select District</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  </select>
  </div>
  <div class="form-group">
  <select class="form-control">
  <label for="exampleInputEmail1">Upazila Name</label>
  <option>Select Upazila</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  </select>
  </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>

</div>
</div>

  <!--footer start-->
	<section id="footer">
	<div class="admin-footer clearfix">
	<div class="pull-right">copyright@The Hunger Project Bangladesh
	</div>
	<div class="pull-left">
	<span>Admin System</span>
	</div>
	</div>
	</section>
		</div>
	</div>
	</div>
	</div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
