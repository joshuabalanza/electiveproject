<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM tbl_total ORDER BY id DESC");
?>
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rate.php">Rate</a>
      </li>
    </ul>
  </div>
</nav>
<!-- <div id="header">Header</div> -->
<!-- end of header -->

<div id="page" class="jumbotron">
<!-- Menu -->
<div id="menu" class="jumbotron">
  <h1 class="display-5">Data Visualization of Registered Motor Vehicle 2010 - 2013</h1>
  <div class="form-group">
  </div>
</div>
<!-- <div id="menu">Menu</div> -->
<!-- end of menu -->

<!-- Content -->
<div id="content" class="jumbotron">
 <table width='80%' border=0>

  <tr bgcolor='#CCCCCC'>
    <td>Year</td>
    <td>Rate</td>
    <td>Update</td>
  </tr>
  <?php 
  //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
  while($res = mysqli_fetch_array($result)) {     
    echo "<tr>";
    echo "<td>".$res['year']."</td>";
    echo "<td>".$res['rate']."</td>"; 
    echo "<td><a href=\"edit2.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";   
  }
  ?>
  </table>
  
                <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
</div>
<!-- <div id="content">Content</div> -->
<!-- end of content -->


<!-- footer -->
  <!-- navigation bar -->
  <!-- <div>
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#">&laquo;</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">5</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
            </li>
        </ul>
    </div>
-->
    <!-- end -->
<!-- <div id="footer">Footer</div> -->
<!-- end of footer -->
</div>
    

<script src="assets/js/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>