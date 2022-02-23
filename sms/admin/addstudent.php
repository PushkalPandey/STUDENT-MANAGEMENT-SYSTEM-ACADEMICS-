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
          <div class="row">
            <div class="col-md-10 mx-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Enter Details of the Student</h4>
                  <p class="card-category">Do fill all fields</p>
                </div>
                <div class="card-body">
                  <form method="post" action="addstudent.php" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Roll No</label>
                          <input type="number" name="rollno" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" name="password" required class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Full Name</label>
                          <input  type="text" name="name" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input  type="text" name="city" required class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact Number</label>
                          <input type="number" name="pcon" required class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Standard</label>
                          <input type="number" name="std" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Branch</label>
                          <input type="text" name="branch" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div >
                          <label class="bmd-label-floating">Image</label>
                          <input type="file" name="simg" >
                        </div>
                      </div>
                    </div>
                    <button  type="submit" name="submit" value="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

<script>
document.querySelector('.for-active li:nth-child(2)').classList.add("active");
  </script>
<?php
include("footer.php");
?>
<?php
if(isset($_POST['submit']))
{
    include("../dbcon.php");
    $rollno=$_POST['rollno'];
    $pwd=$_POST['password'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcon=$_POST['pcon'];
    $branch=$_POST['branch'];
    $std=$_POST['std'];
    $imagename=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    $qry="INSERT INTO student (rollno,name,password,city,pcon,standard,branch,image) VALUES('$rollno','$name',MD5('$pwd'),'$city','$pcon','$std','$branch','$imagename')";
    $run=mysqli_query($con,$qry);
    if($run==true)
    {
        ?>
        <script>
            alert('Data Inserted SUCCESSFUL');
    </script>
    <?php   
    } 
    
}  
?>
<!-- Designed by ©Pushkal All right reserved 2021. -->