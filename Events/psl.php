<?php
$PSL0 = '
{
"Name": "Lahore Qalandars vs Multan Sultan",
"Url": "https://bighra.crik.live/Events/psl.json",
"ImageUrl": "https://assets.crik.live/Events/psl/1.webp",
"startDate": "2023-03-18",
"startTime": "00:01",
"EventName": "PSL 8",
"endDate": "2023-03-18",
"endTime": "23:59"
},';

 $PSL =  '{    
    "events": [ ' . $PSL0 .
    '{
    "Name": "PSL Live",
    "Url": "https://bighra.crik.live/Channels.json",
    "ImageUrl": "https://assets.crik.live/Events/psl1.jpg",
    "startDate": "2022-2-2",
    "startTime": "00:00",
    "EventName": "PTV Sports",
    "endDate": "2023-02-11",
    "endTime": "00:00"
      }
      ],
"title": "PSL"
  }';
  $PSL1 = '[' . $PSL . ']';
    file_put_contents('psl.json', $PSL1)
?>





























