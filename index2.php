<?php
$con= mysqli_connect("localhost","root","","registered_vehicles");



$query = "SELECT * from tbl_vehicle_use ";
$result = mysqli_query($con,$query);

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
  <br />
  <br />
  <div class="form-group">
    <?php
    if(isset($_POST["fieldData"])) {
        $fielddata = $_POST["fieldData"];
        $query2 ="SELECT * from tbl_vehicle_use WHERE year = '$fielddata'";
        $result2 = mysqli_query($con,$query2);
    }
        
    ?>
  <form action="" method="POST">
    <select id="fieldData" name="fieldData" class="custom-select">

      <option selected="">Select Year to Visualize</option>
      <?php while($row = mysqli_fetch_array($result)):;?>
        <option><?php echo $row[0];?></option>; 
      <?php endwhile?>
      
    </select>
    <br />
    <br />
    <button id="btnko" type="submit" class="btn btn-info" name="submit">SUBMIT</button>
  </form>
  </div>
  
</div>
<!-- <div id="menu">Menu</div> -->
<!-- end of menu -->

<!-- Content -->
<div id="content" class="jumbotron">

<?php if(isset($_POST["fieldData"])):;?>
<?php $row = mysqli_fetch_array($result2);?>

<h1 class="display-5">Visualization of Car Registered in year
<?php echo "'".$row["year"]."'";?>
</h1>

<script>
            window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                exportEnabled: true,
                animationEnabled: true,
                // title:{
                //     text: "State Operating Funds"
                // },
                legend:{
                    cursor: "pointer",
                    itemclick: explodePie
                },
                data: [{
                    type: "pie",
                    showInLegend: true,
                    toolTipContent: "{name}: <strong>{y}%</strong>",
                    indexLabel: "{name} - {y}",
                    dataPoints: [                  
                            <?php  echo "{y: parseInt('".$row["private"]."'), name: 'Private ".$row["year"]."', exploded: true},";?>
                            <?php  echo "{y: parseInt('".$row["for_hire"]."'), name: 'For Hire ".$row["year"]."', exploded: true},";?>
                            <?php  echo "{y: parseInt('".$row["government"]."'), name: 'Government ".$row["year"]."', exploded: true},";?>
                            <?php  echo "{y: parseInt('".$row["diplomatic"]."'), name: 'Diplomatic ".$row["year"]."', exploded: true},";?>
                            <?php  echo "{y: parseInt('".$row["tax_exempt"]."'), name: 'Tax Exempt ".$row["year"]."', exploded: true},";?>
                    ]
                }]
            });
            chart.render();
            }

            function explodePie (e) {
                if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
                    e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
                } else {
                    e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
                }
                e.chart.render();

            }

            $(document).ready(function (e) {
                setTimeout(removeWatermark, 10);
            });
            function removeWatermark() {
                $("div#chartContainer > div > img").remove();
            }
                </script>
                <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<?php endif?>
</div>



<!-- <div id="content">Content</div> -->
<!-- end of content -->

<!-- footer -->
  <!-- navigation bar -->
  <div>
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="index.php">&laquo;</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="index.php">1</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="index2.php">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="index3.php">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="index3.php">&raquo;</a>
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