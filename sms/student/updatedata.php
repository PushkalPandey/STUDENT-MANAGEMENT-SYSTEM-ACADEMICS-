<?php
    $rollno=$_POST['rollno'];
    $pwd=$_POST['pwd'];   
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcon=$_POST['pcon'];
    $std=$_POST['std'];
    $branch=$_POST['branch'];
    $id=$_POST['sid'];
//    $imagename=$_FILES['simg']['name'];
//    $tempname=$_FILES['simg']['tmp_name'];
    // move_uploaded_file($tempname,"../dataimg/$imagename");
    include("../dbcon.php");
    $qry="UPDATE `student` SET `name`='$name',`rollno`='$rollno',`standard`='$std',`branch`='$branch',`pcon`='$pcon',`city`='$city',`password`=MD5('$pwd') WHERE rollno='$id'";
//,image='$imagename' 

    $run=mysqli_query($con,$qry);
    if($run==true)
    {
        ?>
        <script>
            alert('Data Updated SUCCESSFUL');
            window.open("updateform.php?sid=<?php echo $id;?>","_self");
    </script>
    <?php   
    } 
    ?>
    <!-- Designed by ©Pushkal All right reserved 2021. -->