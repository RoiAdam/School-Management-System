<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
    $cs_ID = $_POST['cs_ID'];
    $cs_Code = $_POST['cs_Code'];
    $cs_Title = $_POST['cs_Title'];
    $cs_Units = $_POST['cs_Units'];
    $cs_Hours = $_POST['cs_Hours'];

  $sql = "UPDATE `course_subject` SET `cs_Code`='$cs_Code',`cs_Title`='$cs_Title',`cs_Units`='$cs_Units', `cs_Hours`='$cs_Hours' WHERE `course_subject`.`cs_ID` = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: subject.php?msg=Data updated successfully");
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
                    <h3>Edit Subject Information</h3>
                    <p class="text-muted">Click update after changing any information</p>
                </div>

                <?php
                $sql = "SELECT * FROM `course_subject` WHERE cs_ID = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>

                <div class="container d-flex justify-content-center">
                    <form action="" method="post" style="width:50vw; min-width:300px;">

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Code:</label>
                                <input type="text" class="form-control" name="cs_Code"
                                    value="<?php echo $row['cs_Code'] ?>">
                            </div>

                            <div class="col">
                                <label class="form-label">Title:</label>
                                <input type="text" class="form-control" name="cs_Title"
                                    value="<?php echo $row['cs_Title'] ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Units:</label>
                                <input type="text" class="form-control" name="cs_Units"
                                    value="<?php echo $row['cs_Units'] ?>">
                            </div>

                            <div class="col">
                                <label class="form-label">Hours:</label>
                                <input type="text" class="form-control" name="cs_Hours"
                                    value="<?php echo $row['cs_Hours'] ?>">
                            </div>
                        </div>


                        <div class="addbtn">
                            <button type="submit" class="savebtn btn btn-success" name="submit">Update</button>
                            <a href="subject.php" class="btn btn-danger">Cancel</a>
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