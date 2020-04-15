<html>
<head>
<title>Lab 11</title>
<style>
   img { float:left; width: 132px; }
   div { margin-left: 140px; }
   h1 { margin: 0; font-size: 1.5em;}
   h2 { margin: 0; font-size: 1.25em;}
</style>
</head>
<body>
<?php
   $thumbnail = "120010.jpg";
   $title = "Portrait of Eleanor of Toledo";
   $artist = "Agnolo Bronzino";
   $year = 1545;
   $width = 115;
   $height = 96;
   $medium = "Oil on Panel";
   $era = "Post Renaissance";     
?> 

<img src="images/<?=$thumbnail?>" />
<div>
   <h1><?= $title ."(" . $year .")" ?></h1>
   <h2>By <?= $artist ?></h2>
   <p><?=$height . "cm x " . $width . "cm"?>
   <br/><?=$medium?>
   <br/><?=$era?>
   <br/>
   </p>
</div>


</body>
</html>
