<?php
include "db_conn.php";
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

    <title>School Management System/Dashboard</title>
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


                <div class="main-container">
                    <h2>Dashboard</h2>

                    <div class="dbrow">

                        <div class="cardbox card bg-secondary text-white">
                            <div class="card-body">
                                Total Students
                                    <?php 
                                    $sql = "SELECT * FROM `student`";
                                    $result = mysqli_query($conn, $sql);

                                    if($category_total = mysqli_num_rows($result)) {
                                        echo '<h4 class="mb-0"> '.$category_total.' </h4>';
                                    } else {
                                        echo '<h4 class="mb-0"> No Data </h4>';
                                    }
                                ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="student.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>                
                        </div>

                        <div class="cardbox card bg-secondary text-white">
                            <div class="card-body">
                                Total Instructors
                                    <?php 
                                    $sql = "SELECT * FROM `instructor`";
                                    $result = mysqli_query($conn, $sql);

                                    if($category_total = mysqli_num_rows($result)) {
                                        echo '<h4 class="mb-0"> '.$category_total.' </h4>';
                                    } else {
                                        echo '<h4 class="mb-0"> No Data </h4>';
                                    }
                                ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="instructor.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>                
                        </div>

                        <div class="cardbox card bg-secondary text-white">
                            <div class="card-body">
                                Total Subjects
                                    <?php 
                                    $sql = "SELECT * FROM `course_subject`";
                                    $result = mysqli_query($conn, $sql);

                                    if($category_total = mysqli_num_rows($result)) {
                                        echo '<h4 class="mb-0"> '.$category_total.' </h4>';
                                    } else {
                                        echo '<h4 class="mb-0"> No Data </h4>';
                                    }
                                ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="student.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>                
                        </div>

                       
                    </div>


                    <div class="dbrow">
                        



                    </div>



                    <h2>Schedule</h2>

                    <div class="dbrow">

                        <div class="cardbox card bg-secondary text-white">
                            <div class="card-body">
                                Total Section
                                    <?php 
                                    $sql = "SELECT * FROM `section`";
                                    $result = mysqli_query($conn, $sql);

                                    if($category_total = mysqli_num_rows($result)) {
                                        echo '<h4 class="mb-0"> '.$category_total.' </h4>';
                                    } else {
                                        echo '<h4 class="mb-0"> No Data </h4>';
                                    }
                                ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="section.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>                
                        </div>

                        <div class="cardbox card bg-secondary text-white">
                            <div class="card-body">
                                Total Classroom
                                    <?php 
                                    $sql = "SELECT * FROM `classroom`";
                                    $result = mysqli_query($conn, $sql);

                                    if($category_total = mysqli_num_rows($result)) {
                                        echo '<h4 class="mb-0"> '.$category_total.' </h4>';
                                    } else {
                                        echo '<h4 class="mb-0"> No Data </h4>';
                                    }
                                ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="classroom.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>                
                        </div>

                        <div class="cardbox card bg-secondary text-white">
                            <div class="card-body">
                                Total Section-Sched
                                    <?php 
                                    $sql = "SELECT * FROM `section_schedule`";
                                    $result = mysqli_query($conn, $sql);

                                    if($category_total = mysqli_num_rows($result)) {
                                        echo '<h4 class="mb-0"> '.$category_total.' </h4>';
                                    } else {
                                        echo '<h4 class="mb-0"> No Data </h4>';
                                    }
                                ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="section_schedule.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>                
                        </div>

                        <div class="cardbox card bg-secondary text-white">
                            <div class="card-body">
                                Total Section-Stud
                                    <?php 
                                    $sql = "SELECT * FROM `section_student`";
                                    $result = mysqli_query($conn, $sql);

                                    if($category_total = mysqli_num_rows($result)) {
                                        echo '<h4 class="mb-0"> '.$category_total.' </h4>';
                                    } else {
                                        echo '<h4 class="mb-0"> No Data </h4>';
                                    }
                                ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="section_student.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>                
                        </div>





                    </div>


                    
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