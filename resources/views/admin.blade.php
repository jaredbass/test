@extends('layouts.master')
@section('navigation_menu')



    {{ session('message') }}

    <a href="/home" style="font-family:avenir; text-decoration:none; color:white;">Search</a>

    <center>

        <p style="font-size: 64pt; margin-top:15%; color: white; font-family: avenir;">
            Administrator, huh?

        <form method="post" action="/profile">

            {{  csrf_field() }}
            <input type="text" id="username" name="username" placeholder="Username"  autofocus="autofocus"/>
            <br/>
            <input type="password" id="password" name="password" placeholder="Password"/>
            <br/>
            <input type="submit" id="login" value="Login"/>

        </form>

    </center>

@stop