<?php

require_once "models/Edition.php";
$editions = (new Edition())->getEditions();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="presentation/js/jquery.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script>
    let pieChart;
    let barChart;
    let papers_num = 0;

    const options = {
      'width': 1100,
      'height': 400,
    };

    google.charts.load('current', {
      'packages': ['corechart', 'bar']
    });

    google.charts.setOnLoadCallback(drawCharts);

    async function drawCharts() {

      const results = await $.ajax({
        url: "getGraphsInfo.php",
        dataType: "json",
        type: "POST",
        data: {
          "year": <?php echo end($editions)->getYear() ?>
        }
      });

      papers_num = results[1]["papers"];

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'state');
      data.addColumn('number', 'papers');
      data.addRows([
        ['Accepted', parseInt(results[1]["accepted"])],
        ['Rejected', parseInt(results[1]["rejected"])],
      ]);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('chart_div_pie'));
      chart.draw(data, options);
      pieChart = chart;

      var data = google.visualization.arrayToDataTable(results[0]);
      var chart = new google.charts.Bar(document.getElementById('chart_div_bar'));
      chart.draw(data, google.charts.Bar.convertOptions(options));
      barChart = chart;

    }
  </script>
</head>

<body>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 text-center">
        <img src="presentation/assets/icai.png" width="200">
      </div>
      <div class="col-lg-9 col-md-12">
        <h4>
          <i><strong>Fourth International Conference on Applied Informatics</strong></i>
        </h4>
        <h5>
          28 to 30 October 2021 <br>Universidad Tecnológica Nacional Facultad Regional Buenos Aires <br> Buenos Aires, Argentina <i class="text-danger">ONLINE</i>
        </h5>
      </div>
    </div>
    <br>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><span class="fas fa-home" aria-hidden="true"></span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Conference </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?pid=call">Call for Papers</a>
              <a class="dropdown-item" href="index.php?pid=dates">Important Dates</a>
              <a class="dropdown-item" href="index.php?pid=submission">Submission</a>
              <a class="dropdown-item" href="index.php?pid=call4W">Call for
                Workshops</a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="index.php?pid=acceptedWorkshops">Workshops</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?pid=committees">Committees</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?pid=keynotes">Keynote Speakers</a>
              <a class="dropdown-item" href="index.php?pid=acceptedPapers">Accepted Papers</a>
            </div>

          </li>
          <li class="nav-item"><a class="nav-link" href="index.php?pid=proceedings">Proceedings</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?pid=registration">Registration</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Stats </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?pid=statsAllEditions">All
                Editions</a>
              <a class="dropdown-item" href="index.php?pid=statsIcai">ICAI</a>
              <a class="dropdown-item" href="index.php?pid=statsIcaiWorkshops">ICAI Workshops</a>

            </div>

          </li>
          <li class="nav-item"><a class="nav-link" href="index.php?pid=contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Previous Editions </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://icai.itiud.org/2020/" target="_blank">ICAI 2020</a> <a class="dropdown-item" href="https://icai.itiud.org/2019/" target="_blank">ICAI 2019</a>
              <a class="dropdown-item" href="https://icai.itiud.org/2018/" target="_blank">ICAI 2018</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <div class="row mt-3">
      <div class="col-lg-4"></div>
      <div class="col-lg-4 text-center">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <label class="input-group-text">Edition</label>
            </div>
            <select class="custom-select" id="editions">
              <?php foreach ($editions as $edition) { ?>
                <option value="<?php echo $edition->getYear() ?>"><?php echo $edition->getYear() ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <h3>Accepted Papers</h3>
    <div class="d-flex">
      <h4>Total Submissions:</h4>
      <h4 id="papers"></h4>
    </div>
    <div id="chart_div_pie"></div>
    <h3>Accepted Papers</h3>
    <div id="chart_div_bar"></div>

    <div class="text-center text-muted">
      &copy; ITI Research Group<br>2018 - 2021 All rights reserved
    </div>
  </div>
  <br>

  <script type="text/javascript">
    console.log(papers_num);
    let papers = document.getElementById("papers");

    papers.textContent = papers_num;

    let selectElement = document.getElementById("editions");
    selectElement.addEventListener('change', async () => {

      let year = selectElement.value;

      const results = await $.ajax({
        url: "getGraphsInfo.php",
        dataType: "json",
        type: "POST",
        data: {
          year
        }
      });

      console.log(results);

      var pieData = new google.visualization.DataTable();
      pieData.addColumn('string', 'state');
      pieData.addColumn('number', 'papers');
      pieData.addRows([
        ['Accepted', parseInt(results[1]["accepted"])],
        ['Rejected', parseInt(results[1]["rejected"])],
      ]);

      var barData = google.visualization.arrayToDataTable(results[0]);

      pieChart.draw(pieData, options);
      papers.textContent = results[1]["papers"];

      barChart.draw(barData, google.charts.Bar.convertOptions(options));
    })
  </script>


</body>


</html>