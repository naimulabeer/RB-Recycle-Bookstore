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
        body{
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


    <div class="page-content p-5" id="content">

<div class="mx-auto" style="width: 200px;">
    <h1 style="font-size: 20px;">Selling a Book</h1>
</div>

<form method=get action=productsold.php style="border:0.5px solid #ece2d0;">
    <div class="form-group col-sm-3">
        <label for="PID"></label>
        <input type="text" class="form-control" id="PID" name="PID" placeholder="Enter Product ID">
        <small id="passwordHelpInline" class="text-muted">
      Must be Recycled books Category
    </small>
    </div>
    <div class="form-group col-md-7">
        <label for="Title"></label>
        <input type="text" class="form-control" name="Title" placeholder="Enter book Title">
    </div>
    <div class="form-group col-md-7">
        <label for="Author"></label>
        <input type="text" class="form-control" name="Author" placeholder="Enter book Author">
    </div>

    <div class="form-group col-md-3">
        <label for="MRP"></label>
        <input type="text" class="form-control" name="MRP" placeholder="Original Book Price Tk.">
    </div>

    <div class="form-group col-md-3">
        <label for="Price"></label>
        <input type="text" class="form-control" name="Price" placeholder="Price Tk.">
    </div>

    <div class="form-group col-md-3">
        <label for="Discount"></label>
        <input type="text" class="form-control" name="Discount" placeholder="Discount %">
    </div>

    <div class="form-group col-md-3">
        <label for="Available"></label>
        <input type="text" class="form-control" name="Available" placeholder="Available Books">
    </div>

    <div class="form-group col-md-8">
        <label for="Description"></label>
        <textarea rows="10" class="form-control" name="Description" placeholder="Books Description">
        </textarea>
    </div>

    <div class="form-group col-md-8">
    <div class="form-row align-items-center">
        <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="Category"></label>
            <select class="custom-select mr-md-5" name="Category" id="inlineFormCustomSelect">
                <option selected>Book Category</option>
                <option value="Recycled">Recycled</option>
            </select>
        </div>
    </div>
    </div>


    <div class="form-group col-md-2">
            <button type="submit" class="btn btn-primary">Publish</button>
    </div>

</form>

</div>