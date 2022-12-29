<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel Recycling Bookstore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../img/Recycling Bookstore.png" type="image/x-icon">
</head>
<body>
 
<div class="container-fluid">
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="../img/Recycling Bookstore.png" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">Team Jarir</h4>
        <p class="font-weight-normal text-muted mb-0">Recycling Bookstore</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="products.php" class="nav-link text-dark bg-light">
                <i class="fa fa-book mr-3 text-primary fa-fw"></i>
                Products
            </a>
    </li>
    <li class="nav-item">
      <a href="support.php" class="nav-link text-dark">
                <i class="fa fa-envelope-o mr-3 text-primary fa-fw"></i>
                Support
            </a>
    </li>
    <li class="nav-item">
      <a href="cartlist.php" class="nav-link text-dark">
                <i class="fa fa-shopping-cart mr-3 text-primary fa-fw"></i>
                Order List
            </a>
    </li>
    <li class="nav-item">
      <a href="userinfo.php" class="nav-link text-dark">
                <i class="fa fa-user mr-3 text-primary fa-fw"></i>
                User Info
            </a>
    </li>
  </ul>

</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

  <!-- Demo content -->
  <h2 class="display-4 text-white">Recycling Bookstore Admin Panel</h2>

</div>
<!-- End demo content -->
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="main.js"></script>

</body>
</html>


