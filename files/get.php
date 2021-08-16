
<?php

if (array_key_exists('submit', $_GET)) {
 if(!$_GET['city']){

  $error = "Your input Field Is Empty";

 }
 if ($_GET['city']) {
  $apiData =  file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=7f22531527a66485d35163dbe233f923");
  echo "$apiData";
 }
}



?>









<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.87.0">
  <title>Weather App</title>

  <!--<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-static/">-->



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


  <link rel="stylesheet" href="../css/style.css">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="navbar-top.css" rel="stylesheet">
</head>
<body>

  <div class="container py-3 my-4 mt-2">
  
  <<div class="weather-status text-light text-center">
    <img id="WeatherIconStatus"src="https://openweathermap.org/img/wn/02d@2x.png"alt="" />
    <h1 id="city">Result City</h1>
    <h3><span id="Temperature"></span> <span>&deg;C Temperature</span></h3>

    <h1 id="status" class="lead">Status</h1>
    <h3><span id="feels"></span><span>&deg;C feels like</span></h3>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>
</html>
