<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>World Timezone Converter</title>
  <style>
    th { text-align: left; }
</style>
</head>

<body>
  <h1>World Timezone Converter</h1>
   <?php
    $time = file_get_contents('192.168.11.11?timezone=nzt');
    ?>
  <p>The current local time is: <?php echo "$time";?></p>
</body>
</html>
