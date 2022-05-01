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
        $name = $_POST['name'];
        $class = $_POST['class'];
        $branch = $_POST['branch'];
        $email = $_POST['email'];
        $loginId = $_SESSION['id'];
        if (empty($name) || empty($class) || empty($branch) || empty($email)) {
            if (empty($name)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }

            if (empty($class)) {
                echo "<font color='red'>Class field is empty.</font><br/>";
            }

            if (empty($branch)) {
                echo "<font color='red'>Branch field is empty.</font><br/>";
            }
            if (empty($email)) {
                echo "<font color='red'>Email field is empty.</font><br/>";
            }
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {

            $result = mysqli_query($conn, "INSERT INTO `data`(name, class, branch,email, login_id) VALUES('$name','$class','$branch','$email', '$loginId')");

            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='profile1.php'>View Result</a>";
            echo "<br/><a href='welcome.php'>Back</a>";
        }
    }
    ?>
</body>

</html>