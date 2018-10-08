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
    <select class="custom-select">
      <option selected="">Select Year to Visualized</option>
      <option value="1">2013</option>
      <option value="2">2012</option>
      <option value="3">2011</option>
      <option value="3">2010</option>
    </select>
  </div>
</div>
<!-- <div id="menu">Menu</div> -->
<!-- end of menu -->

<!-- Content -->
<div id="content" class="jumbotron">
<h1 class="display-5">Total Car Registered in year 2010 up to 2013 <br />is 28,927,228
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
                    indexLabel: "{name} - {y}%",
                    dataPoints: [
                        { y: 26.58, name: "Year 2013", exploded: true },
                        { y: 25.80, name: "Year 2012", exploded: true },
                        { y: 24.67, name: "Year 2011", exploded: true },
                        { y: 22.93, name: "Year 2010", exploded: true }
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
</div>
<!-- <div id="content">Content</div> -->
<!-- end of content -->


<!-- footer -->
  <!-- navigation bar -->
  <div>
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