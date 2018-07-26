<?php include 'configs/dbConnection.php';?>
<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM add_doctor WHERE doctor_id=".$id);
    echo '<script>
    window.location.href = "doctorList.php";
    </script>';

} else {
  echo '<script>
    window.location.href = "doctorList.php";
    </script>';
}


?>