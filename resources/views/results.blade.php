@extends('layouts.searchresults')
@section('search_results')

    <body style="font-color:White;">
    You searched for: {{ $title }}


    </body>
    </html>

@foreach ($results as $result)
<center>
<table style="border-spacing:5px;">
    <tr>

   <td style="padding:60px 00px 0 0px; color:whitesmoke; font-family:avenir"> <br> {{$result->id}}<br>



<form action="/entry" method="get">

    <input type="submit" value="See More">
<input type="hidden" name="title" value="{{$result->id}}">

</form>

   </td></tr>
</table>
    </center>
@endforeach


@stop