<?php
include '../Channels/a-sports.php';
include '../Channels/ptv.php';
include '../Channels/ten.php';
include '../Channels/sky.php';
include '../Channels/super.php';
include '../Channels/willow.php';
include '../Channels/star-sports.php';
include 'ind.php';
include 't20-wo.php';
include 'bpl.php';
include 'ipl.php';
$Cricket = '[
{
    "events" : ['. $IPL0 . $IND.  $T20_Women . $BPL  . $PTV . ','  . $TEN . ',' . $Star_Sports . ',' . $Sky . ',' . $Willow
    .'],
    "title" : "Cricket"
    }
]';
file_put_contents('Cricket.json', $Cricket);

echo $Cricket;
?>