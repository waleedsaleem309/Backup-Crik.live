<?php
include 'u19.php';
$json = 'kass.json';
$Kass = '{ 
"events": [ 
{
    "Name": "AlKass 1",
    "Url": "https://bighra.crik.live/Channels/al-kass.json",
    "ImageUrl": "https://assets.crik.live/Channels/kass-1.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AlKass 1",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "AlKass 2",
    "Url": "https://bighra.crik.live/Channels/al-kass.json",
    "ImageUrl": "https://assets.crik.live/Channels/kass-2.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AlKass 2",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "AlKass 3",
    "Url": "https://bighra.crik.live/Channels/al-kass.json",
    "ImageUrl": "https://assets.crik.live/Channels/kass-3.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AlKass 3",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "AlKass 4",
    "Url": "https://bighra.crik.live/Channels/al-kass.json",
    "ImageUrl": "https://assets.crik.live/Channels/kass-4.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AlKass 4",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "AlKass 5",
    "Url": "https://bighra.crik.live/Channels/al-kass.json",
    "ImageUrl": "https://assets.crik.live/Channels/kass-5.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AlKass 5",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }
    ],
    "title": "Kass"
    }';
        $Kass1 = '{ 
"events": [ 
{
    "Name": "AlKass 1",
    "Url": "https://bighra.crik.live/Channels/al-kass.json",
    "ImageUrl": "https://assets.crik.live/Channels/kass-1.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AlKass 1",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "AlKass 2",
    "Url": "https://bighra.crik.live/Channels/al-kass.json",
    "ImageUrl": "https://assets.crik.live/Channels/kass-2.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AlKass 2",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "AlKass 3",
    "Url": "https://bighra.crik.live/Channels/al-kass.json",
    "ImageUrl": "https://assets.crik.live/Channels/kass-3.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AlKass 3",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "AlKass 4",
    "Url": "https://bighra.crik.live/Channels/al-kass.json",
    "ImageUrl": "https://assets.crik.live/Channels/kass-4.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AlKass 4",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "AlKass 5",
    "Url": "https://bighra.crik.live/Channels/al-kass.json",
    "ImageUrl": "https://assets.crik.live/Channels/kass-5.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AlKass 5",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }'  .   '
    ],
    "title": "Kass"
    }';
    //   echo $A1;
    $Kass2 = '[' . $Kass1 . ']';
      file_put_contents($json, $Kass2);
        // header("Location: https://crik.live/Channels/" . $json);
?>
