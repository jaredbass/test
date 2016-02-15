<?php
/**
 * Created by PhpStorm.
 * User: jaredbass
 * Date: 2/9/16
 * Time: 3:41 PM
 */ ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="results" method="get">
Title: <input type="text" name ="title">
    <br>


  <?php  echo'<select name="rating_id">';

  echo'<option value="0" selected="true">' . 'All' . '</option>';
    foreach ($ratings as $rating) :
?>Rating: <?php
      echo '<option value="'. $rating->rating_name.'">' .$rating->rating_name.'</option>';
             echo $rating->rating_name ?>

    <?php  endforeach; ?>
    </select>
    <br>


    <?php  echo'<select name="genre">';

    echo'<option value="0" selected="selected">' . 'All' . '</option>';
    foreach ($genres as $genre) :

        echo '<option value="'. $genre->genre_name.'">' .$genre->genre_name.'</option>';
        echo $genre->genre_name ?>

    <?php  endforeach; ?>
    </select>
    <input type="submit" value="submit">

</form>


