<?php include 'configs/dbConnection.php';?>
<?php

if (isset($_GET['delete'])) {
  $deleteID = $_GET['delete'];
    mysqli_query($con, "DELETE FROM add_patients WHERE patient_id=".$deleteID);
    echo '<script>
    window.location.href = "PatientsList.php";
    </script>';

} else {
  echo '<script>
    window.location.href = "PatientsList.php";
    </script>';
}


?>