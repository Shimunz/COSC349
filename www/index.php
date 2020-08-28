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
	

	$timeZones = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, 'NZ');
	foreach ( $timeZones as $key => $zoneName )
	{
		$dt = new DateTime();
		$tz = new DateTimeZone($zoneName);	
		$dt->setTimezone($tz);
		echo($zoneName . " = " . $dt->format('H:i:s') . "<br>");
	} 
   ?>
 
  <div class="container">
    <p>Please select the timezones you would like to convert below:</p>
    <form action="index.php" method="post">
      <label for="tzconvert">Username</label>
      <input class="usernames" type="text" id="user" name="user" placeholder="e.g. tvarsanyi" required><br>

      <label for="tzconvert">Your Country (please select from the dropdown)</label>
      <input class="dropdowns" list="timezones" name="tzTO" placeholder="e.g. AU" required><br>
      <datalist id="timezones">
        <option value="NZ">
        <option value="AU">
        <option value="GB">
      </datalist>
      <input type="submit" value="Submit">
    </form>
  </div>

  <a class="queryresults" href="http://192.168.10.13">Query Results</a>

  <?php
  $user = $_POST['user'];
  $tzTO = $_POST['tzTO'];
  $db_host = '192.168.10.12';
  $db_name = 'fvision';
  $db_user = 'webuser';
  $db_passwd = 'insecure_db_pw';
  $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
  $pdo = new PD0($pdo_dsn, $db_user, $db_passwd);
  ?>
  
</body>
</html>
