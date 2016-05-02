<?php
/**
 * Created by PhpStorm.
 * User: jaredbass
 * Date: 4/27/16
 * Time: 3:53 PM
 */?>
<html>
<head>
    <style>
body {
    background-image: url("saraspic`.jpg");

            background-size: 100% 125%;
            opacity: 1;
            font-family: avenir;

        }
    </style>
</head>
<body>

<center>


    <p style="font-size:45pt; margin-top: 0%; margin-right: 65%; color:white;">

        Welcome, {{$username}}


<p style="color:white; font-size: 44pt;">Dashboard</p>
<a href="/change/{{$username}}"
   style="text-decoration:none; color:white;">Delete and Edit</a>


<br/>

<br/>
<a href="/home" style="text-decoration:none; color:white;"> Home </a>
</body>
</html>