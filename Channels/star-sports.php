<?php
$json = 'star-sports.json';
include '../Events/ind.php';
include '../Events/ipl.php';

$Star_Sports = '
{
    "Name": "Star Sports",
    "Url": "https://bighra.crik.live/Channels/star.json",
    "ImageUrl": "https://assets.crik.live/Channels/star.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Star Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "Star Sports Hindi",
    "Url": "https://bighra.crik.live/Channels/star.json",
    "ImageUrl": "https://assets.crik.live/Channels/star-hindi.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Star Sports Hindi",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }';
        $Star_Sports1 = '[
        { 
"events": [' .$IPL0  . $Star_Sports . '
    ],
    "title": "Star Sports"
    }
]';

      file_put_contents('star.json',$Star_Sports1);
?>
