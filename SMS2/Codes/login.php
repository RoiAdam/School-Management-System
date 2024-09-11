<?php 
    include("db_conn.php");

    if(isset($_POST['submit'])) {
        $as_uName = $_POST['username'];
        $as_pWord = $_POST['password'];

        $sql = "SELECT as_uName, as_pWord FROM admin_staff WHERE as_uName = '$as_uName' AND as_pWord = '$as_pWord'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count>0) {
            header("Location: home.php?msg=Login Successfully");
        } else {
            header("Location: login.php?msg=Login Unsuccessfully");
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System/Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-login-index">

    <div class="form">

        <form class="subform" action="login.php" method="POST">
            <div class="upperform">
                <h2>Login Form</h2>
                <label>Username</label> <br>
                <input type="text" name="username" required> <br>
                <label>Password</label> <br>
                <input type="password" name="password" required> <br>
                <div class="btn">
                    <button type="submit" name="submit">
                        <label>Login</label>
                    </button> <br>
                </div>
            </div>
            <div class="button">
                <div>Don't have an Account?</div>
                <a href="login.php" class="signup">Signup</a>
            </div>
        </form>

        <!-- FOOTER -->
        <footer>
            <p>Copyright © 2024 - Roi and Friends</p>
        </footer>

    </div>

</body>

</html>