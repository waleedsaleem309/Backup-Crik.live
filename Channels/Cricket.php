<?php
$json = 'Cricket.json';
include 'a-sports.php';
include 'star-sports.php';
include 'ten.php';
include 'ptv.php';
include '../Events/psl.php';
$Cricket_Channels = '[' .$PSL . ',' . $A1 . ',' . $PTV1 . ',' .$TEN1 . ',' . $Star_Sports1 . ']' ;
file_put_contents('Cricket.json', $Cricket_Channels);
file_put_contents('../Cricket_Channels.json', $Cricket_Channels);
echo $Cricket_Channels;
?>