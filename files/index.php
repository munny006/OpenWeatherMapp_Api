<?php
$error='';
 $weather = '';
 $icon = '';
if (array_key_exists('submit',$_GET)) {

 if (!$_GET['city']) {
   $error = "Sorry ,Your Input field is Empty";
 }

 if ($_GET['city']) {
  $ApiData = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=");
  $weatherArray = json_decode($ApiData,true);

$tempCelicus =  $weatherArray['main']['temp'] -273.15;

  $weather = "<b>".$_GET['city']." ".$tempCelicus."&degC</b><br>";

  $weather .= "<b> Weather Codition : </b>".$weatherArray['weather']['0']['description'];


}



}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible"content="ie=edge">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Weather App</title>
</head>
<body>
  <section id="getstarted" class=" text-center text-light">
   <div class="dark-overlay">
    <div class="container">
      <form class="col-md-6 m-auto py-5">
        <div class="input-group mb-3">
          <input name="city" type="text" class="form-control  mt-5" placeholder="Enter a location for Weather..." />
          <div class="input-group-append">
            <button name="submit" type="submit" class="btn btn-danger mt-5">
              Search
            </button>


          </div>
        </div>
      </form>

      <div class="weather-status text-white text-center">
        <img
        id="WeatherIconStatus"
        src="https://openweathermap.org/img/wn/<?php echo $icon = $weatherArray['weather'][0]['icon'];?>@2x.png"alt="" / style = "">
        <div class="output">
          <?php 
          if ($weather) {
            echo '<div class = "alert alert-success" role = "alert">'.$weather.'</div>';

          }
          else if($error){
            echo '<div class = "alert alert-danger" role = "alert">'.$error.'</div>';
          }

          ?>
        </div>
      </div>


    </div>

  </section>

  <script src="../js/jquery2.js"></script>
  <script src="../js/munny.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</body>

</html>