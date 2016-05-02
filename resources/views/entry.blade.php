@extends('layouts.entries')
@section('portfolio_entry')


<center>


    @foreach ($entry as $myEntry)
    <image id = "logo" src="{{$myEntry->type_url}}" style="width:20%; height:60%;">
        <table style="border-spacing:5px;">
        <tr>

            <td id = "text" style="padding:60px 00px 0 0px; color:black; font-family:avenir"> <br> {{$myEntry->id}}<br>
          <br>
                <image id = "logo2" src="{{$myEntry->type_url}}" style="width:50%; height:15%;">
<br>
            <td id = "text2" style="padding:60px 00px 0 0px; color:black; font-family:avenir"> <br> {{$myEntry->type_desc}}<br>

            </p>

        @endforeach

<a href="/home"> Return home </a>




   @stop