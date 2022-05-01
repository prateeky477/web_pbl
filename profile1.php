<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>
<?php
require('config.php');
$result = mysqli_query($conn, "SELECT * FROM `data`,`data1`,`data2` WHERE `data`.`login_id`=" . $_SESSION['id'] . " AND `data1`.`login_id`=" . $_SESSION['id'] . " AND `data2`.`login_id`=" . $_SESSION['id'] . "");
while ($row = mysqli_fetch_array($result)) {
  $name = $row['name'];
  $class = $row['class'];
  $branch = $row['branch'];
  $Email = $row['email'];
  $linkedin = $row['linkedin'];
  $github = $row['github'];
  $instagram = $row['instagram'];
  $college = $row['college'];
  $roll = $row['rollno'];
  $facebook=$row['facebook'];
  break;
}
mysqli_close($conn);
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style1.css">
</head>

<body>
  <div class="container">
    <div class="main-body">

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="alt.webp" alt="User" class="rounded-circle" width="150">
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                  </svg>
                  <?php
                  echo "<a href=$linkedin>Website</a>"
                  ?>
                </h6>
                <span class="text-secondary">
                </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                  </svg>
                  <?php
                  echo "<a href=$github>Github</a>"
                  ?></h6>
                <span class="text-secondary">
                </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                  </svg>
                  <?php
                  echo "<a href=$instagram>Instagram</a>"
                  ?></h6>
                </h6>
                <span class="text-secondary">
                </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                  </svg>
                  <?php
                  echo "<a href=$facebook>Facebook</a>"
                  ?></h6>
                </h6>
                <span class="text-secondary">

                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <?php
                  echo $name;
                  ?>
                </div>
                <div class="col-sm-9 text-secondary">

                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <?php
                  echo $class;
                  ?>
                </div>
                <div class="col-sm-9 text-secondary">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <?php
                  echo $branch;
                  ?>
                </div>
                <div class="col-sm-9 text-secondary">
                </div>
              </div>
              <hr>
              <div class="row">
                <?php
                echo $Email;
                ?>
              </div>
              <div class="row">
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <?php
                  echo $roll;
                  ?>
                </div>
                <div class="col-sm-9 text-secondary">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <?php
                  echo $college;
                  ?>
                </div>
                <div class="col-sm-9 text-secondary">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info " target="__blank" href="search.php">Search</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</body>

</html>