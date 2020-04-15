<html>
<head>
<title>Lab 11</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">  
<link rel="stylesheet" href="css/lab11-ex03.css">    
</head>
<body>
<h1>Age calculator</h1>
<?php 
$birthday = mktime(0,0,0,4,18,1998); //Jan 15, 2014 00:00:00
$today = time(); // current time in seconds since 1970.
$secondsOld = $today - $birthday;
?>
<ul>
   <li><?= $secondsOld  ?> seconds, or </li>
   <li><?= $secondsOld/(60*60*24) ?> days, or </li>
   <li><?= $secondsOld/(60*60*24*30.42) ?> months, or </li>
   <li><?= $secondsOld/(60*60*24*365.25) ?> years</li>
</ul>
</body>
</html>
