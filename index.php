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
  <title>ICAI 2021</title>
  <link rel="icon" type="image/png" href="presentation/assets/icai2.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script ype="text/javascript" src="presentation/js/jquery.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="presentation/js/charts.js"></script>
</head>

<body>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 text-center">
        <img src="presentation/assets/icai.png" width="200" alt="">
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
              <option id="pred" value="">Select Edition</option>
              <?php foreach ($editions as $edition) { ?>
                <option value="<?php echo $edition->getYear() ?>"><?php echo $edition->getYear() ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div id="chart_content" style="display:none;">
      <h3>Accepted Papers</h3>
      <div class="d-flex">
        <h4>Total Submissions:</h4>
        <h4 id="papers"></h4>
      </div>
      <div id="chart_div_pie"></div>
      <h3>Papers by Topic</h3>
      <div id="chart_div_bar"></div>
    </div>
    <hr>
    <h3>Organized by</h3>
    <div class="text-center">
      <a href="https://www.udistrital.edu.co" target="_blank"><img src="presentation/assets//ud.png" height="100" data-toggle="tooltip" data-placement="bottom" title="Universidad Distrital Francisco Jose de Caldas" alt=""></a> <a href="https://www.frba.utn.edu.ar/" target="_blank"><img src="presentation/assets//utn.png" height="100" data-toggle="tooltip" data-placement="bottom" title="Universidad Tecnológica Nacional Facultad Regional Buenos Aires" alt=""></a>
    </div>
    <h3>Sponsored by</h3>
    <div class="text-center">
      <a href="http://www.itiud.org" target="_blank"><img src="presentation/assets//iti.png" height="100" data-toggle="tooltip" data-placement="bottom" title="Information Technologies Innovation Research Group" alt=""></a> <a href="http://www.springer.com" target="_blank"><img src="presentation/assets//springer2.jpg" height="100" data-toggle="tooltip" data-placement="bottom" title="Springer" alt=""></a> <a href="https://www.strategicbp.net/" target="_blank"><img src="presentation/assets/sbp.png" height="100" data-toggle="tooltip" data-placement="bottom" title="Science Based Platforms" alt=""></a>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="card bg-light">
          <div class="card-header">Visitors</div>
          <div class="card-body">
            <script type="text/javascript" id="clustrmaps" src="//cdn.clustrmaps.com/map_v2.js?d=p1GQ85WJS_ieJFW7M6EtdMiVy9rV7Gz2ZMyKu44nWFw&cl=ffffff&w=a"></script>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center text-muted">
      &copy; ITI Research Group<br>2018 - 2021 All rights reserved
    </div>
  </div>
  <br>
  <script src="presentation/js/app.js"></script>
</body>

</html>