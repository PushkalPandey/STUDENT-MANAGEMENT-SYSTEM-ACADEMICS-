<?php
session_start();
if(isset($_SESSION['password']))
{
    echo "";
}
else{
    header("location: ../admin.php");
}
?>
<?php
include("header.php");
?>

<div class="content">
        <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Welcome to Admin Dashboard</h4>
            </div>
            <div class="col-md-12">
              <div class="places-buttons">
                <div class="row">
                  <div class="col-md-6 ml-auto mr-auto text-center mt-4">
                    <h4 class="card-title">
                      Select any of the following actions.
                    </h4>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="row">
                      <div class="col-md-4">
                      <a href="addstudent.php"><button class="btn btn-primary btn-block">INSERT STUDENTS</button></a>
                      </div>
                      <div class="col-md-4">
                      <a href="updatestudent.php"><button class="btn btn-primary btn-block">UPDATE STUDENTS</button></a>
                      </div>
                      <div class="col-md-4">
                      <a href="deletestudent.php"><button class="btn btn-primary btn-block">DELETE STUDENTS</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<script>
document.querySelector('.for-active li:nth-child(1)').classList.add("active");
  </script>
<?php
include("footer.php");
?>
<!-- Designed by ©Pushkal All right reserved 2021. -->
