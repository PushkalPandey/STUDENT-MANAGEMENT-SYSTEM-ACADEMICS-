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
                  <h4 class="card-title">Update Details of the Student</h4>
                  <p class="card-category">Update the Picture</p>
                </div>
                <div class="card-body">
                  <form method="post" action="updateimgdata.php" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">IMAGE</label>
                          <a href="updateimg.php?sid=<?php echo $data['rollno'];?>"> <img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px"> </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div >
                          <label class="bmd-label-floating">Image</label>
                          <input type="file" name="simg">
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="sid" value="<?php echo $data['rollno'];?>">
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