<?php
    date_default_timezone_set('America/Lima');
    $timeH = date("H");
    $timeH2 = date("h");
    $timei = date("i");
    $timea = date("a");
    $timezone = date("e");

    echo "<h3>It's currently ".$timeH2.':'.$timei.' '.$timea.' in Peru! (UTC−05:00)'.'</h3><br>';

    if ($timeH < "12") {
        echo '<center><h1>Good morning!</h1></center>';
    } else
    if ($timeH >= "12" && $timeH < "17") {
        echo '<center><h1>Good afternoon!</h1></center>';
    } else

    if ($timeH >= "17" && $timeH < "19") {
        echo '<center><h1>Good evening!</h1></center>';
    } else

    if ($timeH >= "19") {
        echo '<center><h1>Good night!</h1></center>';
    }
?>