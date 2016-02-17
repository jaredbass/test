Hey!
You searched for: <?php echo $genre ?>
<?php foreach ($dvds as $dvd) :?>

<table style="border-spacing:5px;" ="10">
    <tr>


<td>
Title:<br>  <?php echo $dvd->title?></td><td style="padding:0 100px 0 100px">
Rating:<br>  <?php echo $dvd->rating_name?></td>
    <td style="padding:0 100px 0 100px">
Genre:<br>  <?php echo $dvd->genre_name ?>   </td> <td style="padding:0 100px 0 100px">
Label: <br> <?php echo $dvd->label_name ?>   </td> <td style="padding:0 100px 0 100px">

</td></tr>
</td> <td style="padding:100px 100px 0 00px">

</form>
 <br>
</td></tr></table>
<?php endforeach; ?>