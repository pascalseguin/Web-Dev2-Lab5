<?php
const EURO_RATE = 0.87;
const PD_RATE =  0.76;

function convertToEuro($usd) {
return number_format( ( $usd * EURO_RATE ), 0);
}
function convertToPound($usd) {
return number_format( $usd * PD_RATE , 0);
}

function generateBox($users,$name) {
    $GB = $users * 5;
    $email = $users * 2;
    $usDollars = $users * 10;
    if ($name == "Professional"){
        $usDollars = $usDollars * 0.90;
    }
    else if ($name == "Enterprise"){
        $usDollars = $usDollars * 0.80;
    }
     ?>
    <div class="box">
        <div>
            <header><?= $name; ?></header>
            <p><span><?= $users?></span> users</p>
            <p><span><?= $GB?></span> GB storage</p>
            <p><span><?= $email?></span> email accounts</p>
        </div>
        <footer><?="$" . $usDollars . " • €" . convertToEuro($usDollars) . " • £" . convertToPound($usDollars)?></footer>
    </div>
<?php
    }
?>