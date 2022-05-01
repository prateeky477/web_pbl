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
    //including the database connection file
    include_once("config.php");

    if (isset($_POST['Submit'])) {
        $linkedin = $_POST['linkedin'];
        $github = $_POST['github'];
        $instagram = $_POST['instagram'];
        $facebook = $_POST['facebook'];
        $loginId = $_SESSION['id'];

        if (empty($linkedin) || empty($github) || empty($instagram) || empty($facebook)) {
            if (empty($linkedin)) {
                echo "<font color='red'>linkedin field is empty.</font><br/>";
            }

            if (empty($github)) {
                echo "<font color='red'>github field is empty.</font><br/>";
            }

            if (empty($instagram)) {
                echo "<font color='red'>instagram field is empty.</font><br/>";
            }
            if (empty($facebook)) {
                echo "<font color='red'>Facebook field is empty.</font><br/>";
            }


            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {


            $result = mysqli_query($conn, "INSERT INTO `data1`(linkedin, github, instagram ,facebook, login_id) VALUES('$linkedin','$github','$instagram','$facebook', '$loginId')");

            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='profile1.php'>View Result</a>";
            echo "<br/><a href='welcome.php'>Back</a>";
        }
    }
    ?>
</body>

</html>