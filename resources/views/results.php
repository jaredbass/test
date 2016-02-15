<?php
/**
 * Created by PhpStorm.
 * User: jaredbass
 * Date: 2/9/16
 * Time: 3:41 PM
 */?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<p>
    You searched for: <?php echo $title?>
    <?php echo $rating?>
    <?php echo $genre?>
</p>

<?php foreach ($dvds as $dvd) :?>

<table style="border-spacing:5px;" ="10">
    <tr>
   <td style="padding:60px 00px 0 0px"> Title:  <br> <?php echo $dvd->title?></td>

<td>
Rating:<br>  <?php echo $dvd->rating_name?></td>
    <td style="padding:0 100px 0 100px">
Genre:<br>  <?php echo $dvd->genre_name ?>   </td> <td style="padding:0 100px 0 100px">
Label: <br> <?php echo $dvd->label_name ?>   </td> <td style="padding:0 100px 0 100px">
Sound:<br>  <?php echo $dvd->sound_name ?>   </td> <td style="padding:0 100px 0 100px">
Format:<br>  <?php echo $dvd->format_name ?>
</td></tr>
</td> <td style="padding:100px 100px 0 00px">

<input type="submit" value="Review This">


 <br>
</td></tr></table>
<?php endforeach; ?>

</body>
</html>
