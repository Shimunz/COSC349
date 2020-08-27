<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>World Timezone Converter</title>
  <style>
    th { text-align: left; }

    .dropdowns {
    }
</style>
</head>

<body>
  <h1>World Timezone Converter</h1>

  <?php
   date_default_timezone_set("Pacific/Auckland");
   echo "The current time is " . date("h:i:sa") . " in your local timezone (New Zealand - NZT).";
   ?>
  

  <div class="container">
    <p>Please select the timezones you would like to convert below:</p>
    <form action="/index.php">

      <input type="time" id="time" name="time" placeholder="Select the desired time" required><br>
      
      <input class="dropdowns" list="timezones" placeholder="Select your timezone from the dropdown below" required><br>
      <datalist id="timezones">
        <option value="NZT">
        <option value="GMT">
        <option value="PST">
      </datalist>

      <input class="dropdowns" list="timezones" placeholder="Select your timezone" required><br>
      <datalist id="timezones">
        <option value="NZT">
        <option value="GMT">
        <option value="PST">
      </datalist>
      <input type="submit" value="Submit">
    </form>
  </div>
  <a class="queryresults" href="http://192.168.10.13">Query Results</a>
</body>
</html>
