<?php
include 'header.php';
?>



    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-300" src="bk1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-300" src="p1.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-300" src="p3.jpeg" alt="Third slide">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recycled Books</h5>
                        <a href="recyclebooks.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Academics</h5>
                        <a href="academic.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Literature</h5>
                        <a href="literatureandfiction.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Other Books</h5>
                        <a href="otherbooks.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <blockquote class="blockquote text-right">
            <p class="mb-0">“If you want to read a perfect book there is only one way: write it.”</p>
            <footer class="blockquote-footer">Ambrose Bierce, <cite title="Source Title">A Cynic Looks at Life</cite></footer>
        </blockquote>
    </div>
<?php
include 'footer.php';
?>