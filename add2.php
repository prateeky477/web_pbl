<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}


?>

<html>

<head>
    <title>Add Data</title>
</head>

<body>
    <?php

    include_once("config.php");

    if (isset($_POST['Submit'])) {
        $college = $_POST['College'];
        $class = $_POST['class'];
        $branch = $_POST['branch'];
        $rollno = $_POST['RollNo'];
        $loginId = $_SESSION['id'];

        // checking empty fields
        if (empty($college) || empty($class) || empty($branch) || empty($rollno)) {
            if (empty($college)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }

            if (empty($class)) {
                echo "<font color='red'>Class field is empty.</font><br/>";
            }

            if (empty($branch)) {
                echo "<font color='red'>Branch field is empty.</font><br/>";
            }
            if (empty($rollno)) {
                echo "<font color='red'>Email field is empty.</font><br/>";
            }


            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {
            $result = mysqli_query($conn, "INSERT INTO `data2`(college, class, branch,rollno, login_id) VALUES('$college','$class','$branch','$rollno', '$loginId')");

            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='profile1.php'>View Result</a>";
            echo "<br/><a href='welcome.php'>Back</a>";
        }
    }
    ?>
</body>

</html>