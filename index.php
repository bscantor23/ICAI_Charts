<?php

require_once "models/Edition.php";

$editions = (new Edition())->getEditions();
echo $editions[1]->toString();
echo "<br>";







?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="presentation/js/jquery.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart', 'bar']
    });

    google.charts.setOnLoadCallback(drawChartPie);
    google.charts.setOnLoadCallback(drawChartBar);

    async function drawChartPie() {

      const result = await $.ajax({
        url: "getPieInfo.php",
        dataType: "json",
        type: "GET",
      });

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'state');
      data.addColumn('number', 'papers');
      data.addRows([
        ['Accepted', parseInt(result["accepted"])],
        ['Rejected', parseInt(result["rejected"])],
      ]);

      var options = {
        'width': 400,
        'height': 300
      };

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('chart_div_pie'));
      chart.draw(data, options);
    }

    async function drawChartBar() {

      const results = await $.ajax({
        url: "getBarInfo.php",
        dataType: "json",
        type: "GET",
      });

      var data = google.visualization.arrayToDataTable(results);

      var options = {
        'width': 2100,
        'height': 400,
      };

      var chart = new google.charts.Bar(document.getElementById('chart_div_bar'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>

</head>

<body>

  <form method="GET" name="edition" action="getInfoCharts.php">
    <select name="edition">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
  </form>

  <!--Div that will hold the pie chart-->
  <div id="chart_div_pie"></div>
  <div id="chart_div_bar" style="overflow-x:scroll"></div>

</body>


</html>