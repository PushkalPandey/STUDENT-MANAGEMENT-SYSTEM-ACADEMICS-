<?php
    $id=$_POST['sid'];
    $imagename=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    include("../dbcon.php");
    $qry="update student set image='$imagename' where rollno='$id'"; 

    $run=mysqli_query($con,$qry);
    if($run==true)
    {
        ?>
        <script>
            alert('IMAGE Updated SUCCESSFUL');
            window.open("updateform.php?sid=<?php echo $id;?>","_self");
    </script>
    <?php   
    } 
    ?>
    <!-- Designed by ©Pushkal All right reserved 2021. -->