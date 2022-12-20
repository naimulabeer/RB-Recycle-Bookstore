<!--
<?php
session_start();
if (!isset($_SESSION['username']))
    header("location: login.php?Message=Login To Continue");
?>
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/my.css" type="text/css">
    <style>
        #books .row {
            margin-top: 30px;
            font-weight: 800;
        }

        @media only screen and (max-width: 760px) {
            #books .row {
                margin-top: 10px;
            }
        }

        .book-block {
            margin-top: 20px;
            margin-bottom: 10px;
            padding: 10px 10px 10px 10px;
            border: 1px solid #DEEAEE;
            border-radius: 10px;
            height: 100%;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    </nav>
    <div id="top">
        <div id="searchbox" class="container-fluid" style="width:112%;margin-left:-6%;margin-right:-6%;">
            <div>
                <form role="search" method="POST" action="Result.php">
                    <input type="text" class="form-control" name="keyword" style="width:80%;margin:20px 10% 20px 10%;" placeholder="Search for a Book , Author Or Category">
                </form>
            </div>
        </div>
        <?php

        ?>
    </div>;

</body>

</html>