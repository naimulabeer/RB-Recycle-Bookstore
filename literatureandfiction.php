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
        #top {
            border: 0px solid #DEEAEE;
            background: #fff;

            border-radius: 10px;
        }

        #searchbox {
            background: #99CCFF;
            overflow: hidden;
        }

        #books {
            margin-bottom: 50px;
        }

        @media only screen and (width: 767px) {
            body {
                margin-top: 100px;
            }
        }

        #books .row {
            margin-top: 20px;
            margin-bottom: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: bold;
        }

        @media only screen and (max-width: 760px) {
            #books .row {
                margin-top: 10px;
            }
        }
    </style>

</head>


<body>

<div>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background: #4a4e69;">
            <a class="navbar-brand" href="home.php">Recycling Bookstore</a>
            <span style="font-size: 1.5em; color: black;">
                <i class="fas fa-book-open"></i>
            </span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto ">
                    <a class="nav-item nav-link " href="userhome.php" style="color: antiquewhite" ;>User Home <span class="sr-only">(current)</span></a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" style="color: antiquewhite" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='fas fa-user' style='font-size:12px'></i>
                            User
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="userprofile.php">User Profile</a>
                            <a class="dropdown-item" href="subscriberslogout.php">Logout</a>
                        </div>
                    </li>
                    <a class="nav-item nav-link" href="#" style="color: antiquewhite" ;><i class="fa fa-heart"></i></a>
                    <a class="nav-item nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

        </nav>
    </div>

    <div id="top">
        <div id="searchbox" class="container-fluid" style="width:100%;margin-left:0%;margin-right:0%;">
            <div>
                <form role="search" action="Result.php" method="post">
                    <input type="text" name="keyword" class="form-control" placeholder="Search for a Book , Author Or Category" style="width:80%;margin:20px 10% 20px 10%;">
                </form>
            </div>
        </div>

        <div class="container-fluid" id="books">
            <div class="row">
                <div class="col-sm-12 text-center" id="heading">
                    <h2 style="color:rgb(228, 55, 25);text-transform:uppercase;margin-bottom:0px;"> Literature and Fiction </h2>
                </div>
            </div>

            <?php
            include("config.php");
            $query = "SELECT * FROM products WHERE Category='Literature' ORDER BY Price";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            $i = 0;

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $path = "img/books/" . $row['PID'] . ".jpg";
                    $description = "description.php?ID=" . $row["PID"];
                    if ($i % 4 == 0)
                        echo '<div class="row">';
                    echo '
               <a href="' . $description . '">
                <div class="col-sm text-center">
                    <div class="book-block" style="border :3px solid #DEEAEE;">
                        <img class="book block-center img-responsive" src="' . $path . '">
                        <hr>
                         ' . $row["Title"] . '<br>
                        ' . $row["Price"] . '  &nbsp
                        <span style="text-decoration:line-through;color:#828282;"> ' . $row["MRP"] . ' </span>
                        <span class="label label-warning">' . $row["Discount"] . '%</span>
                    </div>
                </div>
                
               </a> ';
                    $i++;
                    if ($i % 4 == 0)
                        echo '</div>';
                }
            }
            echo '</div>';

            ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <?php
            include 'footer.php';
            ?>