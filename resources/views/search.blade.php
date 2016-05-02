
@extends('layouts.master')
@section('navigation_menu')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>

{{ session('message') }}
    {{ session('msg') }}
    {{session('delete')}}

<a href="/admin">Administrator?</a>
<a id = "music" href="/music" style="float:right;">Check out my favorite music</a>
<form method="get" action="/results">
            <center>

        <p style="font-size: 64pt; margin-top:15%; color: white; font-family: avenir;">
            Search 'Em Up
            </center>
          </p>
    <br>
    <text id="sentence"> Look for <span id="swap"></span> </text>

    <script>
        var txt = ['design', 'technology', 'engineering', 'writing', 'business'],
            n = txt.length,
            $swap = $('#swap'),
            $span,
            c = -1;

        // CREATE SPANS INSIDE SPAN
        for(var i=0; i<txt.length; i++) $swap.append($('<span />',{text:txt[i]}));
        // HIDE AND COLLECT THEM
        $span = $("span", $swap).hide();

        (function loop(){
            c = ++c % n;
            $swap.animate({width: $span.eq( c ).width() });
            $span.stop().fadeOut().eq(c).fadeIn().delay(1000).show(0, loop);
        }());

    </script>

    <br>

    <input id = "autofocus" type="text" name="title" autofocus="autofocus">
    <input type="submit" value="search" style="visibility:hidden;">

</form>


@stop
