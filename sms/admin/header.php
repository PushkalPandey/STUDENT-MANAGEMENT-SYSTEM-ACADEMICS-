<html>
<head>
<meta charset="UTF-8">
<title>
Student Management System
</title>
<meta http-equiv="Cache-control" content="public">
	<meta name="author" content="Sanskar Srivastava">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="revisit-after" content="1 days">
	
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <style>
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
</style>
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          University<br>Management System
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav for-active">
          <li class="nav-item">
            <a class="nav-link" href="admindash.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addstudent.php">
              <i class="material-icons">add_circle</i>
              <p>INSERT STUDENTS</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="updatestudent.php">
              <i class="material-icons">update</i>
              <p>UPDATE STUDENTS</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deletestudent.php">
              <i class="material-icons">delete</i>
              <p>DELETE STUDENTS</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <i class="material-icons">logout</i>
                  <p class="d-lg-none d-md-block">
                    LogOut
                  </p>
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

<!-- Designed by ©Pushkal All right reserved 2021. -->