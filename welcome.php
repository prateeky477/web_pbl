<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>WEB CONNECT</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 80%;
      background-color: lightblue;
      padding: 34px;
      margin: auto;
    }

    .container h1,
    p {
      text-align: center;
    }

    p {
      font-size: 16px;
    }

    input,
    textarea {
      border: 2px solid black;
      width: 80%;
      border-radius: 6px;
      margin: 11px auto;
      padding: 7px;
      font-size: 25px;
    }

    form {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .btn {
      color: white;
      background: purple;
      padding: 15px 10px;
      font-size: 20px;
      border: 2px solid;
      border-radius: 10px;
    }

    .form {
      font-size: larger;
      font-weight: bolder;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      border: 10px;

    }

    body {
      background: linear-gradient(45deg, #042461 0%, rgba(225, 5, 34, 0) 70%), linear-gradient(135deg, #340447 10%, rgba(49, 5, 209, 0) 80%), linear-gradient(225deg, #0f053a 10%, rgba(10, 219, 216, 0) 80%), linear-gradient(315deg, #050813 100%, rgba(9, 245, 5, 0) 70%);
      text-align: center;
    }

    @import url(https://fonts.googleapis.com/css?family=Open+Sans:700);

    h1 {
      font-family: 'Open Sans', sans-serif;
      color: white;
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    .btn {
      position: relative;
      margin-top: 5%;
      background: transparent;
      border: 1px solid white;
      padding: 20px;
      font-size: 0.9em;
      width: 500px;
      color: white;
      box-shadow: 4px 4px 0px 0px white;
      font-family: 'Open Sans', sans-serif;
      font-weight: 700;
      letter-spacing: 5px;
      text-transform: uppercase;
      transition: all 300ms ease-in-out;
      left: 0;
      top: 0;
    }

    .btn:hover {
      left: 4px;
      top: 4px;
      box-shadow: 0 0 0 0 white;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Login System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>



      </ul>

      <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome " . $_SESSION['username'] ?></a>
          </li>
        </ul>
      </div>


    </div>
  </nav>

  <div class="container mt-4">
    <h3><?php echo "Welcome " . $_SESSION['username'] ?>!</h3>
    <div class="btn1">

      <a href="editt.html"><input type="button" class="btn" value="Edit personal info"></a>

      <br>
      <a href="edit1.html"><input type="button" class="btn" value="Edit Social Info"></a>
      <br><br>

      <a href="edit2.html"><input type="button" class="btn" value="Edit Academic Info"></a>
      <br><br>

      <a href="search.php"><input type="button" class="btn" value="Search"></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>