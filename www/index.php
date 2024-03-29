<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>NZ to World Timezone Converter</title>
<style type="text/css">
  th { text-align: left; }
  
  body {
      background-color: black;
      color: white;
  }

  
  .container {
      display: inline-block;
      text-align: right;
    }
  
  .boxes {
  }
  .submit {
  }

</style>
</head>

<body>
  <h1>NZ to World Timezone Converter</h1>
  
  <div class="intro">
  <?php
   date_default_timezone_set("Pacific/Auckland");
   $NZT = date("h:i:sa d/m/yy");
   echo "The current time is " . $NZT . " in your local timezone (NZ)." . "<br>";
                                                                                            
  $nztz = file_get_contents("http://192.168.10.13/query.php?timezone=NZ");
  ?>
	</div>       
           
	<p>Please select enter your username and the country which timezone(s) you wish to view below:</p>
                                            
  <div class="container">
    
    <form action="index.php" method="post">
      <label for="user">Username:</label>
      <input class="boxes" type="text" id="user" name="UserID" placeholder="user" required><br>
                  
      <label for="country">Country:</label>
      <input class="dropdown" list="countries" name="Timezone" placeholder="NZ" required><br>
      <datalist id="countries">
        <option value="AD">Andorra</option>
        <option value="AE">United Arab Emirates</option>
        <option value="AF">Afghanistan</option>
        <option value="AG">Antigua and Barbuda</option>
        <option value="AI">Anguilla</option>
        <option value="AF">Afghanistan</option>
        <option value="AM">Armenia</option>
        <option value="AO">Angola</option>
        <option value="AQ">Antarctica</option>
        <option value="AR">Argentina</option>
        <option value="AT">Austria</option>
        <option value="AU">Australia</option>
        <option value="CN">China</option>
        <option value="EG">Egypt</option>
        <option value="GB">Great Britain</option>
        <option value="HU">Hungary</option>
        <option value="NZ">New Zealand</option>
        <option value="US">United States</option>
      </datalist>
      <input type="submit" value="Submit" name="submit" style="width: 200px;">
    </form>
  </div>
  
  <?php
   
   $link = mysqli_connect('192.168.10.12', 'webuser', 'password123', '349asgn1');

   $UserID = $_POST['UserID'];
   $Timezone = $_POST['Timezone'];

   if ($stmt = mysqli_prepare($link, "INSERT INTO timezones (UserID, Timezone) VALUES (?, ?)")){
   mysqli_stmt_bind_param($stmt, 'ss', $UserID, $Timezone);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   }

   mysqli_close($link);
   ?>

  <?php
   if (isset($_POST['submit'])){
   $url = "http://192.168.10.13/query.php?timezone=" . $Timezone;
   $qtz = file_get_contents($url);
   echo "<br>" . "The timezones in  " . $Timezone . " are: " . "<br>" . $qtz;

        $link = mysqli_connect('192.168.10.12', 'webuser', 'password123', '349asgn1');

	if ($link->connect_error){
		die("Connection failed: " . $link->connect_error);
	}

	$qsql = "SELECT * FROM timezones WHERE userid='" . $UserID . "'";
	$result = $link->query($qsql);
        echo "<br>". $UserID . " Search history" . "<br>";	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo $row[Timezone] . "<br>";
		}
	} else {
		echo "0 results";
	}	
   }
   ?>
  
</body>
</html>
