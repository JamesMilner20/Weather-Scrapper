<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <title>Weather Scraper</title>
  </head>
  <body>
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-6 offset-md-3 center">

        <h1 class="center white">Weather Predictor</h1>

        <p class="lead center white">Enter your city below to get a forcast</p>

        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, Accra...">

          </div>
          <button id="findMyWeather" class="btn btn-success btn-lg">Find Forcast for City</button>

          <div id="success" class="alert alert-success">
            success!
          </div>

          <div id="fail" class="alert alert-danger">
          Could not find weather data for that city. Please try again.
          </div>

          <div id="noCity" class="alert alert-danger">
            Please enter a city
          </div>

        </form>

        </div>

      </div>



    </div>

  </body>
</html>
