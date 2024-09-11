
/* STUDENT Table */


/* INSTRUCTOR Table */
<?php
include "db_conn.php";

$id = $_GET["id"];
$sql = "DELETE FROM `instructor` WHERE ins_ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: instructor.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>

/* SUBJECT Table */
<?php
include "db_conn.php";

$id = $_GET["id"];
$sql = "DELETE FROM `instructor` WHERE ins_ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: subject.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>



/* SECTION Table */
<?php
include "db_conn.php";

$id = $_GET["id"];
$sql = "DELETE FROM `section` WHERE sec_ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: section.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>

/* CLASSROOM Table */
<?php
include "db_conn.php";

$id = $_GET["id"];
$sql = "DELETE FROM `classroom` WHERE cr_ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: classroom.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>

/* SECTION-SHCEDULE Table */
<?php
include "db_conn.php";

$id = $_GET["id"];
$sql = "DELETE FROM `section_schedule` WHERE ss_ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: sec-sched.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>

/* SECTION-STUDENT Table */
<?php
include "db_conn.php";

$id = $_GET["id"];
$sql = "DELETE FROM `section_student` WHERE ses_ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: sec-stud.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>



/* ADMIN STAFF Table */
<?php
include "db_conn.php";

$id = $_GET["id"];
$sql = "DELETE FROM `admin_staff` WHERE as_ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: admin.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>