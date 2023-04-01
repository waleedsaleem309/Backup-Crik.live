<?php
$json = 'bt.json';
$BT_Sports = '{ 
"events": [ 
{
    "Name": "BT Sports 1",
    "Url": "https://bighra.crik.live/Channels/bt-sports.json",
    "ImageUrl": "https://assets.crik.live/Channels/bt-1.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "BT Sports 1",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "BT Sports 2",
    "Url": "https://bighra.crik.live/Channels/bt-sports.json",
    "ImageUrl": "https://assets.crik.live/Channels/bt-2.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "BT Sports 2",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "BT Sports 3",
    "Url": "https://bighra.crik.live/Channels/bt-sports.json",
    "ImageUrl": "https://assets.crik.live/Channels/bt-3.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "BT Sports 3",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }
    ],
    "title": "BT Sports"
    }';
        $BT_Sports1 = '{ 
"events": [ 
{
    "Name": "BT Sports 1",
    "Url": "https://bighra.crik.live/Channels/bt-sports.json",
    "ImageUrl": "https://assets.crik.live/Channels/bt-1.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "BT Sports 1",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "BT Sports 2",
    "Url": "https://bighra.crik.live/Channels/bt-sports.json",
    "ImageUrl": "https://assets.crik.live/Channels/bt-2.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "BT Sports 2",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "BT Sports 3",
    "Url": "https://bighra.crik.live/Channels/bt-sports.json",
    "ImageUrl": "https://assets.crik.live/Channels/bt-3.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "BT Sports 3",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    } '. '
    ],
    "title": "BT Sports"
    }';
    //   echo $A1;
    $BT_Sports2 = '[' . $BT_Sports1 . ']';
      file_put_contents($json, $BT_Sports2);
        // header("Location: https://crik.live/Channels/" . $json);
?>
