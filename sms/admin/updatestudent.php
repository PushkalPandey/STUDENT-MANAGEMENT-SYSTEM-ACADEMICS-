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


        <div class="container-fluid mt-5 pt-5">
          <div class="row">
            <div class="col-md-10 mx-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Enter Details of the Student to search</h4>
                  <!-- <p class="card-category">Do fill all fields</p> -->
                </div>
                <div class="card-body">
                  <form method="post" action="updatestudent.php">
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Standard</label>
                          <input  type="number" name="standard" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Student's Name</label>
                          <input type="text" name="stuname" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button  type="submit" name="submit" value="search" class="btn btn-primary pull-right">Search Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain" style="margin:0">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Details</h4>
                  <p class="card-category">Students with matching details</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          S.NO.
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Roll.NO.
                        </th>
                        <th>
                          Edit
                        </th>
                      </thead>
                    </table>
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
if(isset($_POST['submit']))
{
    include("../dbcon.php");
    $standard=$_POST['standard'];
    $name=$_POST['stuname'];
    $sql="select * from student where standard='$standard' or name like '%$name%'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)<1)
    {
        echo "<tr><td colspan='5'>NO RECORD FOUND</td></tr>";
    }
    else{
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
            ?>
            <div class="container-fluid">
            <div class="d-flex flex-row justify-content-evenly mb-3 pb-3" style="border-bottom:1px solid rgba(180, 180, 180, 0.1);overflow-x:scroll;">
         <div class="col-2 text-white"><?php echo $count;?></div>
         <div class="col-3 text-white"> <img src="../dataimg/<?php echo $data['image'];?>" style="max-width:50px"></div>
         <div class="col-3 text-white"><?php echo $data['name'];?></div>
         <div class="col-2 text-white"><?php echo $data['rollno'];?></div>
         <div class="col-2 text-white text-primary"><a href="updateform.php?sid=<?php echo $data['rollno'];?>">Edit</a></div>
        </div>
        </div>
          <?php
        }
    }
}
?>
<?php
include("footer.php");
?>
<!-- Designed by ©Pushkal All right reserved 2021. -->