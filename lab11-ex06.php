<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  
    <title>Lab 11</title>   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">    
    <link rel="stylesheet" href="css/lab11-ex06.css">
</head>
<body>
<main class="container">
    <article class="box">
      <div class="pagination">
      <?php
      $start = 10;
      $end = 21;
      $active = 16;
for ($i=$start; $i<$end; $i++) {
echo "<a href='#' ";
if ($i == $active) echo "class='active'";
echo ">$i</a>";
}
?>
        <a href="#">1</a>
        <a href="#" class="active">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
      </div>
    </article>      
</main>    
</body>
</html>