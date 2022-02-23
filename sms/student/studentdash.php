<?php
session_start();
if(isset($_SESSION['password']))
{
 echo "";
}
else{
    header("location: ../index.php");
}
?>
<?php
include("header.php");
?>

<div class="content">
        <div class="container-fluid">
        <!-- <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">timeline</i>
                  </div>
                  <p class="card-category">Attendance</p>
                  <h3 class="card-title">43/50
                    <small>class</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
          </div> -->

<div class="row">
<div class="col-lg-6 col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">Results</h4>
      <p class="card-category">All your Grades to the current date</p>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning">
          <th>ID</th>
          <th>Semester</th>
          <th>CGPA</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>First</td>
            <td>7.4</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Second</td>
            <td>9.8</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Third</td>
            <td>8.4</td>
          </tr>
        </tbody>
      </table>
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
