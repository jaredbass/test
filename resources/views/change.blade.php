@extends('layouts.searchresults')
@section('search_results')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>






 {{--'click to <a href="/add">add</a>'--}}

Welcome, delete or edit what you'd like!

@foreach ($results as $result)
    <center>
    <table style="border-spacing:5px;">
    <tr>

        <td style="padding:60px 00px 0 0px; color:black; font-family:avenir"> <br> {{ $result->id }}<br>



            <form action="/entry" method="get">

                <input type="submit" value="See More">
                <input type="hidden" name="title" value="{{ $result->id }}">
                <a href="/home"> Delete </a>
                <a href="/{{$username}}/edit/{{$result->id}}"> Edit </a>

                <!---->
            </form>
            <!-- <br>-->
        </td></tr>
    </table>
    </center>
@endforeach

    @stop