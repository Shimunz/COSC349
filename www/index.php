<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>NZ to World Timezone Converter</title>
  <style>
    th { text-align: left; }
    
    .dropdowns {
    }
</style>
</head>

<body>
  <h1>NZ to World Timezone Converter</h1>

  <?php
   date_default_timezone_set("Pacific/Auckland");
   $NZT = date("h:i:sa d/m/yy");
   echo "The current time is " . $NZT . " in your local timezone (New Zealand - NZT)." . "<br>";

  $nztz = file_get_contents("http://192.168.10.13/query.php?timezone=NZ");
 

  ?>

  <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['submit'])){
   
   $user = $_POST['user'];
   $timezone = $_POST['timezone'];
   $db_host = '192.168.10.12';
   $db_name = 'fvision';
   $db_user = 'webuser';
   $db_passwd = 'insecure_db_pw';
   $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
   
   }
   
   ?>
  
  <div class="container">
    <p>Please select the timezones you would like to convert below:</p>
    <form action="index.php" method="post">
 
      Username: <input type="text" id="user" name="user"<br>
                       
      Country: <input type="text" name="timezone"<br>
      <input type="submit" value="Submit" name="submit">
    </form>
  </div>

  
  <?php
   if (isset($_POST['submit'])){
   
   $url = "http://192.168.10.13/query.php?timezone=" . $timezone;
   $qtz = file_get_contents($url);
   
   echo $timezone . " timezones: " . "<br>" . $qtz;
   }   
   ?>
  
  
</body>
</html>

<!--
    $pdo = new PD0($pdo_dsn, $db_user, $db_passwd);
 -->
