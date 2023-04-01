<?php
include '../Events/worldcup.php';
include '../Events/psl.php';

$json = 'ten.json';
$TEN = '{
    "Name": "Ten Sports",
    "Url": "https://bighra.crik.live/Channels.json",
    "ImageUrl": "https://assets.crik.live/Channels/Ten-Sports.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Ten Sports",
    "endDate": "2050-12-19",
    "endTime": "12:00"
    }';
    
    
      $TEN1 = '[
      { 
         "events":
             ['
        . $PSL0 . $TEN .   '
    ],
    "title": "Ten Sports"
  }
]';
      file_put_contents($json , $TEN1);
?>
