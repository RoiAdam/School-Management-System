<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $stud_fName = $_POST['stud_fName'];
  $stud_lName = $_POST['stud_lName'];
  $stud_Gender = $_POST['stud_Gender'];
  $stud_Email = $_POST['stud_Email'];
  $stud_Course = $_POST['stud_Course'];
  $stud_Year = $_POST['stud_Year'];

  $sql = "UPDATE `student` SET `stud_fName`='$stud_fName',`stud_lName`='$stud_lName',`stud_Gender`='$stud_Gender',`stud_Email`='$stud_Email', `stud_Course`='$stud_Course', `stud_Year`='$stud_Year' WHERE `student`.`stud_ID` = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: student.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>School Management System/Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div>

        <header>
            <a class="nav-link active" aria-current="page" href="home.php">
                <img src="Pictures/ispsc_logo2.png" alt="">
            </a>
        </header>

        <div class="mid-content">
            <section>

                <div class="sidebar flex-shrink-0 p-3">


                    <div class="logo">
                        <a href="home.php">
                            <img src="Pictures/ispsc_logo.png" alt="">
                        </a>
                    </div>


                    <ul class="list-unstyled ps-0">
                        <li class="border-top my-3"></li>


                        <li class="mb-1">
                            <button
                                class="sidenav btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed">
                                <a class="ahome" href="home.php">Home</a>
                            </button>
                        </li>


                        <li class="mb-1">
                            <button
                                class="sidenav btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Dashboard
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="dboard.php"
                                            class="dropbtn link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a>
                                    </li>
                                    <li><a href="student.php"
                                            class="dropbtn link-body-emphasis d-inline-flex text-decoration-none rounded">Students</a>
                                    </li>
                                    <li><a href="instructor.php"
                                            class="dropbtn link-body-emphasis d-inline-flex text-decoration-none rounded">Instructors</a>
                                    </li>
                                    <li><a href="subject.php"
                                            class="dropbtn link-body-emphasis d-inline-flex text-decoration-none rounded">Subjects</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="mb-1">
                            <button
                                class="sidenav btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Schedule
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="section.php"
                                            class="dropbtn link-body-emphasis d-inline-flex text-decoration-none rounded">Section</a>
                                    </li>
                                    <li><a href="classroom.php"
                                            class="dropbtn link-body-emphasis d-inline-flex text-decoration-none rounded">Classroom</a>
                                    </li>
                                    <li><a href="schedule.php"
                                            class="dropbtn link-body-emphasis d-inline-flex text-decoration-none rounded">Schedule</a>
                                    </li>
                                    <li><a href="sec-sched.php"
                                            class="dropbtn link-body-emphasis d-inline-flex text-decoration-none rounded">Section-Schedule</a>
                                    </li>
                                    <li><a href="sec-stud.php"
                                            class="dropbtn link-body-emphasis d-inline-flex text-decoration-none rounded">Section-Student</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="mb-1">
                            <button
                                class="sidenav btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                Account
                            </button>
                            <div class="collapse" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="admin.php"
                                            class="dropbtn link-body-emphasis d-inline-flex text-decoration-none rounded">Admin</a>
                                    </li>
                                    <li><a href="login.php"
                                            class="dropbtn link-body-emphasis d-inline-flex text-decoration-none rounded">LogOut</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>

                </div>


                <div class="list-container">

                <div class="text-center mb-4">
                    <h3>Edit Student Information</h3>
                    <p class="text-muted">Click update after changing any information</p>
                </div>

                <?php
                $sql = "SELECT * FROM `student` WHERE stud_ID = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>

                <div class="container d-flex justify-content-center">
                    <form action="" method="post" style="width:50vw; min-width:300px;">
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Firstname:</label>
                                <input type="text" class="form-control" name="stud_fName"
                                    value="<?php echo $row['stud_fName'] ?>">
                            </div>

                            <div class="col">
                                <label class="form-label">Lastname:</label>
                                <input type="text" class="form-control" name="stud_lName"
                                    value="<?php echo $row['stud_lName'] ?>">
                            </div>
                        </div>

                        <div class="mb-3">
                            <th><label class="form-label">Gender:</label></th>
                            <td>
                                <select class="form-control input-sm" name="stud_Gender" value="<?php echo $row['stud_Gender'] ?>">
                                    <option value="Male" >Male</option>
                                    <option value="Female" >Female</option>
                                </select>
                            </td>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" class="form-control" name="stud_Email" value="<?php echo $row['stud_Email'] ?>">
                        </div>

                        <div class="mb-3">
                            <th><label class="form-label">Course:</label></th>
                            <td>
                                <select class="form-control input-sm" name="stud_Course" value="<?php echo $row['stud_Course'] ?>">
                                    <option value="BSCS" >BSCS</option>
                                    <option value="BSIT" >BSIT</option>
                                    <option value="BSCE" >BSCE</option>
                                    <option value="BSDS" >BSDS</option>
                                    <option value="BSIS" >BSIS</option>
                                </select>
                            </td>
                        </div>

                        <div class="mb-3">
                            <th><label class="form-label">Course:</label></th>
                            <td>
                                <select class="form-control input-sm" name="stud_Year" value="<?php echo $row['stud_Year'] ?>">
                                    <option value="1st Year" >1st Year</option>
                                    <option value="2nd Year" >2nd Year</option>
                                    <option value="3rd Year" >3rd Year</option>
                                    <option value="4th Year" >4th Year</option>
                                </select>
                            </td>
                        </div>

                        

                    



                        <div class="addbtn">
                            <button type="submit" class="savebtn btn btn-success" name="submit">Update</button>
                            <a href="student.php" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
                   


                    
                </div>   

            

                



            </section>
        </div>



        <!-- FOOTER -->
        <footer>
            <p>Copyright © 2024 - Roi and Friends</p>
        </footer>

    </div>




    <script src="Script/script.php"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>