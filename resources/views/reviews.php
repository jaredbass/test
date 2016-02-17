<?php
//
//?>
<!---->
<style>
    .red {
        color: red;
    }
</style>
<center>
    <?php if (session('success')) :?>
    <p> Review was sucessfully added</p>
    <?php endif ?>
<!--    <p style="color: red;">-->

    <?php if (count($errors) > 0) : ?>
    <ul>
        <?php foreach($errors->all() as $error):?>
        <li class="red">

            <?php echo $error ?>
        </li>
        <
        <?php endforeach ?>
    </ul>
        <?php endif ?>
<!--    </p>-->
Movie: <?php echo $title ?>

    <br>Rating: <?php echo $rating?>
    <br>Genre: <?php echo $genre?>
    <br>Label: <?php echo $label?>
    <br>Sound: <?php echo $sound?>
    <br>Format: <?php echo $format?>
    <br>

<form action="/reviews" method="post">

<!--    <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
    <br>
    Leave a Review
    <br>
    <input type="text" name="dvd_id" value="<?php echo $ids?>" >
    <?php echo csrf_field() ?>



    <br>

   Rating: <select name="rank" value="<?php echo old('rank')?>">
        <option value="1" @if (old('rank') == '1') selected="selected" @endif>1</option>
        <option value="2" @if (old('rank') == '2') selected="selected" @endif>2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>

    </select>
    <br>
    Title of Review: <input type="text" name ="titleOfReview" value="<?php echo old('titleOfReview')?>">
    <br>
    Description: <textarea name="description"> <?php echo old('description')?></textarea>
<input type="submit" value="Add review!">
</form>
</center>


<?php foreach ($reviews as $review) :?>
    <br>
    <br>
Title:  <?php echo $review->title?>
    <br>
Description: <?php echo $review->description?>
    <br>
    Rating: <?php echo $review->rating?>
    <br>
    <br>

<?php endforeach; ?>