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
include("../dbcon.php");
$sid=$_GET['sid'];
$sql="select * from student where rollno='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
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
                  <form method="post" action="updatedata.php" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Roll No</label>
                          <input type="number" name="rollno" value="<?php echo $data['rollno'];?>" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" name="pwd" value="<?php echo $data['password'];?>" required class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Full Name</label>
                          <input  type="text" name="name" value="<?php echo $data['name'];?>" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input  type="text" name="city" value="<?php echo $data['city'];?>" required class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact Number</label>
                          <input type="number" name="pcon" value="<?php echo $data['pcon'];?>" required class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Standard</label>
                          <input type="number" name="std" value="<?php echo $data['standard'];?>" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Branch</label>
                          <input type="text" name="branch" value="<?php echo $data['branch'];?>" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div >
                          <label class="bmd-label-floating">Image</label>
                          <a href="updateimg.php?sid=<?php echo $data['rollno'];?>"> <img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px"> </a> 
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="sid" value="<?php echo $data['rollno'];?>"></td>
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
document.querySelector('.for-active li:nth-child(3)').classList.add("active");
  </script>
<?php
include("footer.php");
?>

<!-- Designed by ©Pushkal All right reserved 2021. -->