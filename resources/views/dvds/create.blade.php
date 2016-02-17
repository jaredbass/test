<?php

/**
 * Created by PhpStorm.
 * User: jaredbass
 * Date: 2/16/16
 * Time: 10:40 AM
 */

echo "Insert a new DVD";

?>

{{--{{Form::method="post"}}--}}
    {{--<input style="text">--}}
    {{ Form::open(['url' => 'create']) }}
    {{ Form::text('value') }}
    {{ form::select('genre', $genres , Input::old('genre')) }}
    {{ Form::select('label', $label , Input::old('label')) }}
    {{ Form::select('sound', $sound , Input::old('sound')) }}
    {{ Form::select('rating', $rating , Input::old('rating')) }}
    {{ Form::select('format', $format , Input::old('format')) }}

{{--</form>--}}
