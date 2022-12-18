<?php ob_start();
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>User Registration for Recycling Bookstore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #2F4F4F;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(47, 79, 79, 1), rgba(47, 70, 90,1));
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
            <a class="navbar-brand" href="home.php">Recycling Bookstore</a>
            <span style="font-size: 1.5em; color: black;">
                <i class="fas fa-book-open"></i>
            </span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto ">
                    <a class="nav-item nav-link " href="home.php" style="color: antiquewhite" ;>Home <span class="sr-only">(current)</span></a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" style="color: antiquewhite" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Books
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="biographies.php">Biographies</a>
                            <a class="dropdown-item" href="academicandprofessional.php">Academics</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="otherbooks.php">Other Books</a>
                        </div>
                    </li>
                    <a class="nav-item nav-link" href="about.php" style="color: antiquewhite" ;>About Us</a>
                    <a class="nav-item nav-link" href="login.php" style="color: antiquewhite" ;>Login</a>
                    <a class="nav-item nav-link" href="register.php" style="color: antiquewhite" ;>Register</a>
                    <a class="nav-item nav-link" href="#" style="color: antiquewhite" ;><i class="fa fa-heart"></i></a>
                    <a class="nav-item nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

        </nav>
    </div>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                            <form action="" method="post">

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control form-control-lg" />
                                            <label class="form-label" for="fname"></label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" required name="lname" id="lname" placeholder="Last Name" class="form-control form-control-lg" />
                                            <label class="form-label" for="lname"></label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-1">

                                        <div class="form-outline">
                                            <input type="email" name="email" required id="email"  placeholder="Email Address" class="form-control form-control-lg" />
                                            <label class="form-label" for="email"></label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-1">

                                        <div class="form-outline">
                                            <input type="password" required name="pw" minlength="8" maxlength="15" id="pwd" placeholder="Enter Password" class="form-control form-control-lg" />
                                            <label class="form-label" for="pwd"></label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-1">

                                        <div class="form-outline">
                                            <input type="password" class="form-control" required minlength="8" name="cpw" maxlength="15" id="pwd" placeholder="Re-enter Password" class="form-control form-control-lg" />
                                            <label class="form-label" for="pwd"></label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-1">

                                        <input type="number" class="form-control" required id="age" name="age" placeholder="Enter age" class="form-control form-control-lg" />
                                        <label class="form-label" for="age"></label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-1">

                                        <input type="text" class="form-control" required id="num" placeholder="Enter your number" required name="pno" maxlength="10" minlength="10" class="form-control form-control-lg" />
                                        <label class="form-label" for="num"></label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">

                                        <input type="text" class="form-control" required name="add" id="add" placeholder="Enter your address" class="form-control form-control-lg" />
                                        <label class="form-label" for="add"></label>

                                    </div>
                                </div>
                                <a href="login.php" class="form-link">Already a member? Log In </a><br><br>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    session_start();
    if (isset($_POST["submit"])) {
        $varname = $_POST["fname"];
        $varlname = $_POST["lname"];
        $varemail = $_POST["email"];
        $varpassword = $_POST["pw"];
        $varcpassword = $_POST["cpw"];
        $varage = $_POST["age"];
        $varpnumber = $_POST["pno"];
        $varaddress = $_POST["add"];
        if ($varpassword != $varcpassword) {
            echo "<h4>Entered Passwords do not match! Try Again.</h4>";
        } else {
            require_once('config.php');
            $user_check_query = "SELECT * FROM userinfo WHERE email = '$varemail' LIMIT 1";
            $result = mysqli_query($conn, $user_check_query);
            $user = mysqli_fetch_assoc($result);
            if ($user) {
                if ($user['email'] === $varemail) {
                    echo "<br>";
                    echo "<h4>Email already exists!</h4>";
                }
            } else {
                $query = "INSERT INTO userinfo (firstname,lastname,email,password,age,pnumber,address) 
                          VALUES('$varname','$varlname', '$varemail','$varpassword','$varage','$varpnumber','$varaddress')";
                mysqli_query($conn, $query);
                $_SESSION['username'] = $varemail;
                $_SESSION['success'] = "You are now logged in";
                header('location: sample.php');
            }
            mysqli_close($conn);
        }
    }
    ob_end_flush();
    ?>

    </div>
</body>

</html>