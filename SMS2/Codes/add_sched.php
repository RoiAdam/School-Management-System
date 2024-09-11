<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $sched_Time = $_POST['sched_Time'];
   $cs_ID = $_POST['cs_ID'];
   $ins_ID = $_POST['ins_ID'];
   $cr_ID = $_POST['cr_ID'];

   $sql = "INSERT INTO `schedule`(`sched_ID`, `sched_Time`, `cs_ID`, `ins_ID`, `cr_ID`) VALUES (NULL,'$sched_Time','$cs_ID','$ins_ID','$cr_ID')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: schedule.php?msg=New record created successfully");
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

    <title>School Management System/Add Schedule</title>
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
                    <h3>Add New Schedule</h3>
                    <p class="text-muted">Complete the form below to add a new user</p>
                </div>

                <div class="d-flex justify-content-center">
                    <form action="" method="post" style="width:40vw; min-width:300px;">

                        <div class="mb-3">
                            <label class="form-label">Time:</label>
                            <input type="address" class="form-control" name="sched_Time" placeholder="" required>
                        </div>


                        <div class="mb-3">
                            <th><label class="form-label">Subject:</label></th>
                            <td>
                                <select class="form-control input-sm" name="cs_ID" required>
                                    
                                    <?php 
                                    include "db_conn.php";

                                    $userrole = mysqli_query($conn, "SELECT * FROM course_subject");
                                    while ($c = mysqli_fetch_array($userrole)) {
                                    ?>
                                   
                                    <option value="<?php echo $c['cs_ID']?>"><?php echo $c['cs_Code'] ?></option>
                                    <?php } ?>
                                    

                                </select>
                            </td>
                        </div>

                        <div class="mb-3">
                            <th><label class="form-label">Instructor:</label></th>
                            <td>
                                <select class="form-control input-sm" name="ins_ID" required>
                                    
                                    <?php 
                                    include "db_conn.php";

                                    $userrole = mysqli_query($conn, "SELECT * FROM instructor");
                                    while ($c = mysqli_fetch_array($userrole)) {
                                    ?>
                                   
                                    <option value="<?php echo $c['ins_ID']?>"><?php echo $c['ins_lName'] ?></option>
                                    <?php } ?>
                                    

                                </select>
                            </td>
                        </div>

                        <div class="mb-3">
                            <th><label class="form-label">Classroom:</label></th>
                            <td>
                                <select class="form-control input-sm" name="cr_ID" required>
                                    
                                    <?php 
                                    include "db_conn.php";

                                    $userrole = mysqli_query($conn, "SELECT * FROM classroom");
                                    while ($c = mysqli_fetch_array($userrole)) {
                                    ?>
                                   
                                    <option value="<?php echo $c['cr_ID']?>"><?php echo $c['cr_Name'] ?></option>
                                    <?php } ?>
                                    

                                </select>
                            </td>
                        </div>


                        <div class="addbtn">
                            <button type="submit" class="savebtn btn btn-success" name="submit">Save</button>
                            <a href="schedule.php" class="btn btn-danger">Cancel</a>
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