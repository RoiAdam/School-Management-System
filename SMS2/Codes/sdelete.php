<?php
include "db_conn.php";

$stud_ID = $_GET["id"];
$sql = "DELETE FROM `student` WHERE stud_ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: student.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>