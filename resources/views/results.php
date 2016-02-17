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
<form action="/reviews/new" method="get">

<input type="hidden" name="id" value="<?php echo $dvd->id?>">
<input type="hidden" name="rating" value="<?php echo $dvd->rating_name?>">
<input type="hidden" name="genre" value="<?php echo $dvd->genre_name?>">
<input type="hidden" name="label" value="<?php echo $dvd->label_name?>">
<input type="hidden" name="sound" value="<?php echo $dvd->sound_name?>">
<input type="hidden" name="format" value="<?php echo $dvd->format_name?>">
<input type="hidden" name="title" value="<?php echo $dvd->title?>">
<input type="submit" value="Leave a Review">

</form>
 <br>
</td></tr></table>
<?php endforeach; ?>

</body>
</html>
