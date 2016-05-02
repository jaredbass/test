<?php
/**
 * Created by PhpStorm.
 * User: jaredbass
 * Date: 5/1/16
 * Time: 3:20 PM
 */ ?>
<html>
<head>
    <style>
a:hover{
    -webkit-stroke-width: 100.3px;
            -webkit-stroke-color: #FFFFFF;
            -webkit-fill-color: #FFFFFF;
            text-shadow: 5px 0px 40px black;
        }

        input[type=text]{
    background-color:lightgrey;
            opacity: .5;
            border: none;
            border-radius: 5px;
            text-align: center;
            outline:none;
        }

        #swap { vertical-align:top;
            width: 0;
            height: 3em;
        }

        #swap > span {
            position:absolute;
        }
    </style>
</head>

<body style="color:black">
<center>

<form method="post" action="addfinal.php">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
Title: <input type="text" name="title" >

    <br>
    <br>
    <br>
    <br>
Type: <input type="text" name="type_id" >




</input>

<br>
<br>
<br>
<br>
Description:
<input type="text" name="type_desc" size="2000" style="height: 20%; width: 50%;">
<br><br>
<br>
<br>
<br>




</input>
<br>

<!--<input type="hidden" name="id_main" value="--><?php //echo $row['id_main']; ?><!--">-->
<input type="submit">
</form>