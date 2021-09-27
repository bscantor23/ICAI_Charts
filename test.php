<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ICAI 2021</title>
  <link rel="icon" type="image/png" href="img/logos/icai2.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" />
</head>

<body>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 text-center">
        <img src="img/logos/icai.png" width="200">
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
            <select class="custom-select" id="edition">
              <option value="-1">Select edition</option>
              <option value="3">2020</option>
              <option value="2">2019</option>
              <option value="1">2018</option>
            </select>

          </div>
        </div>
      </div>
    </div>
    <div id="result">

    </div>

    <div class="text-center text-muted">
      &copy; ITI Research Group<br>2018 - 2021 All rights reserved
    </div>
  </div>
  <br>
</body>

</html>