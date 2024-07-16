<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="jquery-3.6.4.min.js"></script>

  <title>Weather - New York</title>
  <style>
    h1{
        background-color:#85e0e0;
        color:white;
        text-align:center;
    }
    .col-md-2{
        background-color:#85e0e0;
        color:white;
        text-align:center;
        padding:5px;
        border-radius:10px;
        margin:25px;
    }
  </style>

</head>

<body>
    <h1>Weather Forecast</h1>
    <?php
        $apiKey = 'a6cf039f43c04d028af144147232006';
        $city = 'New%20York';
        
        $currentWeatherUrl = "http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$city}";
        $forecastUrl = "http://api.weatherapi.com/v1/forecast.json?key={$apiKey}&q={$city}&days=10";
                
        $currentWeatherResponse = file_get_contents($currentWeatherUrl);
        $currentWeatherData = json_decode($currentWeatherResponse);
        
        $forecastResponse = file_get_contents($forecastUrl);
        $forecastData = json_decode($forecastResponse);

        $currentTime=$currentWeatherData->location->localtime;
        echo"Local Time : ".$currentTime;

        if ($currentWeatherData && isset($currentWeatherData->current) && $forecastData && isset($forecastData->forecast->forecastday)) {
            $currentTemperature = $currentWeatherData->current->temp_c;
            $currentDescription = $currentWeatherData->current->condition->text;
            $currentIconUrl = $currentWeatherData->current->condition->icon;
        
            echo "<div style="."margin-left:635px"." class="."col-md-2".">Current temperature<br>";
            echo "<img src='$currentIconUrl' alt='Weather Icon'><br>";
            echo $currentDescription."<br>";
            echo $currentTemperature."°C</div>";

            echo"<div class="."row".">";
            foreach ($forecastData->forecast->forecastday as $forecastDay) {
                $date = $forecastDay->date;
                $minTemperature = $forecastDay->day->mintemp_c;
                $maxTemperature = $forecastDay->day->maxtemp_c;
                $avgTemperature = $forecastDay->day->avgtemp_c;
                $chanceOfRain = $forecastDay->day->daily_chance_of_rain;
                $description = $forecastDay->day->condition->text;
                $iconUrl = $forecastDay->day->condition->icon;
        
                echo "<div class="."col-md-2".">".$date;
                echo "<br><img src='$iconUrl' alt='Weather Icon'><br>";
                echo $description;
                echo"<br>".$avgTemperature."°C";
                echo"<br>Min Temp:".$minTemperature."°C";
                echo"<br>Max Temp:".$maxTemperature."°C";
                echo"<br>Chance of Rain:".$chanceOfRain."% </div>";
              }
              echo"</div>";
        } else {
            echo "Error retrieving weather data.";
        }
    ?>

</body>

</html>