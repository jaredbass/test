

<html>
<head lang="en">
    <meta charset="UTF-8">
    <script src="jquery-1.11.2.js">
    </script>
    <title></title>
    <style>
        body {
            background-image: url("meandjan2.jpg");
            background-size: 100% 110%;
            color: black;
            opacity: 1;


        }

        a:hover{
            -webkit-stroke-width: 100.3px;
            -webkit-stroke-color: #FFFFFF;
            -webkit-fill-color: #FFFFFF;
            text-shadow: 5px 0px 40px black;
        }

        input[type=text]{
            background-color:lightgrey;
            opacity: .5;
            border: none;
            border-radius: 5px;
            text-align: center;
            outline:none;
        }

        #swap { vertical-align:top;
            width: 0;
            height: 3em;
        }

        #swap > span {
            position:absolute;
        }
    </style>
</head>

<body style="color:black">
<center>
<h1 style="font-family: avenir">How do you want to edit this entry?</h1>
<form method="post" action="/update/{{$username}}" style="margin-top:20%">
   {{ csrf_field() }}



        Title: <input type="text" name="title" value="{{$title}}">
        <br>
        Description:
        <input type="text" name="type_desc" size="2000" style="height: 20%; width: 50%;">


        </input>
        <br>

        <input type="submit">

    </form>
</center>

