<html>
<head>
<title>Lab 11</title>
<style>
   img { float:left; width: 132px; display: block; margin-right: 10px;}
   h2 { margin: 0; font-size: 1.25em;}
</style>
</head>
<body>
<?php
$thumbnail = "120010.jpg";
$title = "Portrait of Eleanor of Toledo";
$img = "<img src='images/$thumbnail' alt='$title' title='$title' />";
$era = "15th Century";
$year = 1799;
if ($year < 1500) {
$era = "Early times";
} else if ($year >= 1500 && $year < 1600) {
$era = "16th Century";
} else if ($year >= 1600 && $year < 1700) {
$era = "17th Century";
} else if ($year >= 1700 && $year < 1800) {
$era = "18th Century";
} else {
$era = "Modern times";
}
     
?> 

<h2><?php echo $era; ?></h2>

<?= $img ?>
</body>
</html>
