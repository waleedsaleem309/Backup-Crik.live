<?php
$json = 'a-sports.json';

$A = '
{
    "Name": "A Sports",
    "Url": "https://bighra.crik.live/Channels/a-sports.json",
    "ImageUrl": "https://assets.crik.live/Channels/a-sports.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "A Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }';
    $A1 = '[
    { 
"events": [ ' . $A  .  '
    ],
    "title": "A Sports"
    }
    ]';

            file_put_contents($json, $A1);
            
?>
