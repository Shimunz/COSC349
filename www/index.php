<html>
<head>
<title>World Timezone Converter</title>
</head>

<body>
  <p><?php $time = file_get_contents("192.168.11.11?timezone=nzt");?></p>
  <p>The current local time is: <?php echo "$time";?></p>
  <p>HELP</p>
</body>
</html>
