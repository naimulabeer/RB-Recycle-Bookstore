<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Recycling Bookstore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/app.css">

    <style>
        body {
            background-color: #cbc0d3;
        }
    </style>

</head>

<body>

    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" style="color: #d6eadf;" href="home.php">Recycling Bookstore</a>
            <span style="font-size: 1.5em; color: #809bce;">
                <i class="fas fa-book-open"></i>
            </span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto ">
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" style="color: antiquewhite" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-book"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #bbd0ff;">
                            <a class="dropdown-item" href="recyclebooks.php">Recycled Books</a>
                            <a class="dropdown-item" href="academic.php">Academics</a>
                            <a class="dropdown-item" href="literatureandfiction.php">Literature</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="otherbooks.php">Other Books</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" style="color: antiquewhite" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='fas fa-user' style='font-size:12px'></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>

                    </li>

                    <a class="nav-item nav-link" href="about.php" style="color: antiquewhite" ;>
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </a>
                    <a class="nav-item nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

        </nav>
    </div>

<?php


    $PID = $_GET["PID"];

    $Title = $_GET["Title"];

    $Author = $_GET["Author"];

    $MRP = $_GET["MRP"];

    $Price = $_GET["Price"];

    $Discount = $_GET["Discount"];

    $Available = $_GET["Available"];

    $Description = $_GET["Description"];

    $Category = $_GET["Category"];



    require_once('config.php');

    $conn = mysqli_connect($servername, $username, $password, $dbname)

        or die("Can not connect");



    mysqli_query($conn, "INSERT INTO products VALUES ( '$PID', '$Title', '$Author', '$MRP', '$Price', '$Discount', '$Available', '$Description', '$Category' )")

        or die("Can not execute query");

    ?>

    <div class="page-content p-5" id="content">

        <?php

        echo "Record inserted:<br> PID = $PID <br> Title = $Title <br> Author = $Author <br> MRP = $MRP <br> Price = $Price <br> Discount = $Discount <br> Available = $Available <br> Description = $Description <br> Category = $Category";



        ?>

        <div class="page-content p-5" id="content">
            <p><a href=recyclebooks.php>Show Recycled Books</a>
        </div>