<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title>QA Dashboard</title>
  </head>

  <body class="container">
    <h1 class="display-3">PrinterLogic QA</h1>
    <br>
    <h6>Last Updated:</h6>
    <!-- <p id="demo"></p>
    <script>
    var d = new Date();
    document.getElementById("demo").innerHTML = d;
    </script> -->

    <p>Date/Time: <span id="datetime"></span></p>

    <script>
      var dt = new Date();
      document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
  </script>


  <div id="mx1" class="carousel slide" data-ride="carousel" data-interval="10000">
  <div class="carousel-inner">
    <!-- Begin Legend -->
    <div class="carousel-item active">
      <h2>Legend</h2>
      <div class="progress border border-dark" style="height: 40px; line-height: 40px;">
        <div class="progress-bar-1" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><strong>PASSED</strong></div>
        <div class="progress-bar-2" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><strong>BLOCKED</strong></div>
        <div class="progress-bar-3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><strong>FAILED</strong></div>
        <div class="progress-bar-4" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><strong>RETEST</strong></div>
        <div class="progress-bar-5" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><strong>UNTESTED</strong></div>
      </div>
      <br>
    <!-- End Legend -->

    <!-- Begin Printer Cloud Progress -->
    <div class="border border-dark">
      <h2>PrinterCloud Smoke Develop (36 / 228 untested)<span> Began Sept. 6</span></h2>
      <div class="progress" style="height: 40px; line-height: 40px;">
        <div class="progress-bar-1" role="progressbar" style="width: 71%" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"><strong>71%</strong></div>
        <div class="progress-bar-2" role="progressbar" style="width: 3%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"><strong>3%</strong></div>
        <div class="progress-bar-3" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"><strong>8%</strong></div>
        <!-- <div class="progress-bar-4" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"><strong>1%</strong></div> -->
        <div class="progress-bar-5" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"><strong>22%</strong></div>
      </div><br>

  <h3>Notes:</h3>
    <ul>
      <h4><li>PrinterCloud testing BLOCKED by OPS-858</li>
      <li>PrinterCloud testing BLOCKED by Driver MS Deployment</li>
      <li>CPA testing on HP is BLOCKED by "Non-valid Certs"</li></h4>
    </ul>
    </div>
    <br>
    <br>

  <!-- End Printer Cloud Progress -->

  <!-- Begin OnPrem 18.2 Progress -->
  <div class="border border-dark">
    <h2>OnPrem 18.2 Smoke Develop - Starting Soon!</h2>
    <div class="progress" style="height: 40px; line-height: 40px;">
      <!-- <div class="progress-bar-1" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><strong>40%</strong></div>
      <div class="progress-bar-2" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><strong>10%</strong></div>
      <div class="progress-bar-3" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><strong>10%</strong></div>
      <div class="progress-bar-4" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"><strong>5%</strong></div> -->
      <div class="progress-bar-5" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><strong>100%</strong></div>
    </div><br>
  </div>
<br>
<!-- End OnPrem 18.2 Progress -->

<!-- Begin OnPrem 18.2 MX#1 Progress -->
<!-- <div class="border border-dark">
  <h2>OnPrem 18.2 MX#1 - Starting Soon!</h2>
    <div class="progress" style="height: 40px; line-height: 40px;"> -->
      <!-- <div class="progress-bar-1" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><strong>40%</strong></div>
      <div class="progress-bar-2" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><strong>10%</strong></div>
      <div class="progress-bar-3" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><strong>10%</strong></div>
      <div class="progress-bar-4" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"><strong>5%</strong></div> -->
      <!-- <div class="progress-bar-5" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><strong>100%</strong></div>
    </div><br>
  </div> -->
</div>
<!-- End OnPrem 18.2 MX#1 Progress -->

<!-- Begin JIRA tickets -->
<div class="carousel-item">
<!-- <img class="d-block w-100" src="img/testing.jpg" alt="JiRA tickets"> -->
<iframe src="https://printerlogic.testrail.com/index.php?/plans/view/1628" width="1200" height="400"></iframe>
</div>
<!-- End JIRA tickets -->




<!-- Begin Cartoon -->
    <div class="carousel-item">
      <br>
      <iframe src="https://printerlogic.testrail.com/index.php?/plans/progress/1628" width=1200"" height="500"></iframe>
      <!-- <img class="d-block w-100" src="img/dilbert.jpg" alt="Dilbert Cartoon"> -->
    </div>
<!-- End Cartoon -->

      <div class="carousel-item">
        <h2>Bugs ready for testing</h2>
        <br>
      <img class="d-block w-100" src="img/testing.jpg" alt="JIRA tickets in testing">
      <br>
      <h3>Notes:</h3>
      <ul>
        <h4><li>PI-10982 is blocked by OPS-858</li>
        <li>PI-11195, 11159 waiting for driver microservice deployment</li>
        <li>PI-11254 is blocked by PI-11034</li></h4>
      </ul>
    </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
