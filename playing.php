<meta charset="utf-8">

<?php
$server = "radio.opu.ua"; //IP (x.x.x.x or domain name)
$iceport = "8000"; //Port
$iceurl = "/radioonpu"; //Mountpoint
$online = "<font color=lime><b>Online</b> </font><br />";
$offline = "<font color=red><b>Offline</b></font><br />";

if($fp = @fsockopen($server, $iceport, $errno, $errstr, '1')) {
    fclose($fp);
    $ice_status=$online;
//    echo "Радиостанция: $ice_status";
    $stats = file("http://" . $server . ":" . $iceport . "/status2.xsl");
    $status = explode(",", $stats[5]);
    $artist = explode("-", $status[5]);
    $artist[1] = iconv('utf-8', 'cp1252', $artist[1]);
    $artist[1] = iconv('cp1251', 'utf-8', $artist[1]);
    $artist[2] = iconv('utf-8', 'cp1252', $artist[2]);
    $artist[2] = iconv('cp1251', 'utf-8', $artist[2]);
    echo "<b>Сейчас в эфире:</b> " . $artist[1] . "-" . $artist[2];
//    echo "<br />";
//    echo "<b>Listeners:</b> <b> " . $status[3] . "</b>";
//    echo "</p>";
    //echo "<br />";
    //echo "<p><a href=http://" . $server . ":" . $iceport . "/" . $iceurl . " target=new><b>Listen!</b></a></p>";

} else {

    $ice_status=$offline;
    echo "<p><b>Радиостанция:</b> $ice_status";
}

?>
</center>