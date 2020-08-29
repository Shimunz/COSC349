<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
  <body>
    <?php
     $timeZones = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, $_GET['timezone']);
     foreach ( $timeZones as $key => $zoneName ) {
    $dt = new DateTime();
    $tz = new DateTimeZone($zoneName);	
    $dt->setTimezone($tz);
    echo($zoneName . " = " . $dt->format('H:i:s') . "<br>");
    } 
    ?>
  </body>
</html>
