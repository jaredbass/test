<?php if (session('success')) :?>
    <p> DVD was sucessfully added</p>
<?php endif ?>


<?php
echo "Insert a new DVD";

?>

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

<form method="post" action="/dvds/create">
    <?php echo csrf_field() ?>


    <input style="text" name="Title" value="<?php echo old('Title')?>">

    <select name="genre">
<?php foreach ($genres as $list) :?>

<?php echo '<option value="'. $list.'">' .$list.'</option>';
        echo $list ?>

 <?php  endforeach; ?>
    </select>

    <select name="sound">
        <?php foreach ($sounds as $list) :?>

            <?php echo '<option value="'. $list.'">' .$list.'</option>';
            echo $list ?>

        <?php  endforeach; ?>
    </select>


    <select name="label">
        <?php foreach ($label as $list) :?>

            <?php echo '<option value="'. $list.'">' .$list.'</option>';
            echo $list ?>

        <?php  endforeach; ?>
    </select>


    <select name="rating">
        <?php foreach ($rating as $list) :?>

            <?php echo '<option value="'. $list.'">' .$list.'</option>';
            echo $list ?>

        <?php  endforeach; ?>
    </select>

    <select name="format">
        <?php foreach ($format as $list) :?>

            <?php echo '<option value="'. $list.'">' .$list.'</option>';
            echo $list ?>

        <?php  endforeach; ?>
    </select>

    <input type="submit" value="Create DVD">



</form>
<!--{{--{{Form::method="post"}}--}}-->
<!--    {{--<input style="text">--}}-->
<!--    {{ Form::open(['url' => 'create']) }}-->
<!--    {{ Form::text('value') }}-->
<!--    {{ form::select('genre', $genres , Input::old('genre')) }}-->
<!--    {{ Form::select('label', $label , Input::old('label')) }}-->
<!--    {{ Form::select('sound', $sound , Input::old('sound')) }}-->
<!--    {{ Form::select('rating', $rating , Input::old('rating')) }}-->
<!--    {{ Form::select('format', $format , Input::old('format')) }}-->
<!---->
<!--{{--</form>--}}-->
