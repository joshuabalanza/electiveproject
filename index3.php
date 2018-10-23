<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DV-RMV 2k10-2k13</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href=assets/sketchy/css/bootstrap.css />
    <link rel="stylesheet" type="text/css" href=assets/sketchy/css/bootstrap.min.css />
    <link rel="stylesheet" type="text/css" href=css_ko/style.css />
</head>
<body>

<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#">DV-RMV</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="index3.php">Add DATA</a>
      </li>
    </ul>
  </div>
</nav>
<!-- <div id="header">Header</div> -->
<!-- end of header -->

<div id="page" class="jumbotron">
<!-- Menu -->
    <div id="menu" class="jumbotron menu-sidebar d-none d-lg-block">
        <h1 class="display-5">Data Visualization of Registered Motor Vehicle</h1>
    </div>
<!-- <div id="menu">Menu</div> -->
<!-- end of menu -->

<!-- Content -->
    <div id="content" class="jumbotron">
        <h1 class="display-4">Add new Registered Motor Vehicles</h1>
        <br />
        <form action="register.inc.php" method="POST" enctype="multipart/form-data">
        <center>
            <div class="col-lg-10">
                <div class="row">
                    <div class="form-group form-group col-md-6">
                        <label class="col-form-label" for="inputDefault">Year</label>
                        <input type="number" class="form-control" placeholder="*Year" id="inputDefault" name="data_year" required>
                    </div>
                    <div class="form-group form-group col-md-6">
                        <label class="col-form-label" for="inputDefault">Private</label>
                        <input type="number" class="form-control" placeholder="*Private" id="inputDefault" name="data_private" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group form-group col-md-6">
                        <label class="col-form-label" for="inputDefault">For Hire</label>
                        <input type="number" class="form-control" placeholder="*For Hire" id="inputDefault" name="data_hire" required>
                    </div>
                    <div class="form-group form-group col-md-6">
                        <label class="col-form-label" for="inputDefault">Government</label>
                        <input type="number" class="form-control" placeholder="*Government" id="inputDefault" name="data_gov" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group form-group col-md-6">
                        <label class="col-form-label" for="inputDefault">Diplomatic</label>
                        <input type="number" class="form-control" placeholder="*Diplomatic" id="inputDefault" name="data_diplomatic" required>
                    </div>
                    <div class="form-group form-group col-md-6">
                        <label class="col-form-label" for="inputDefault">Tax Exempt</label>
                        <input type="number" class="form-control" placeholder="*Tax Exempt" id="inputDefault" name="data_exempt" required>
                    </div>

                    <!-- <?php
                    $year = date('Y');
                    echo $year;
                    ?> -->
                </div>
            </div>
            <br />
            <br />
        
                <button type="submit" class="btn btn-primary" name="save" >Submit</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-primary">Back</button>

            
        </center>
        </form>
    </div>


<!-- <div id="content">Content</div> -->
<!-- end of content -->

<!-- footer -->
  <!-- navigation bar -->
  <div>
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="index2.php">&laquo;</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="index.php">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="index2.php">2</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="index3.php">3</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">&raquo;</a>
            </li>
        </ul>
    </div>
    <!-- end -->
<!-- <div id="footer">Footer</div> -->
<!-- end of footer -->
</div>
    

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/canvasjs.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>