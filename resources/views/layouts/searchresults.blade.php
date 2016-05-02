@yield('search_results')

<html>
<head lang="en">
    <meta charset="UTF-8">
    <script src="jquery-1.11.2.js">
    </script>
    <title></title>
    <style>
        body {
            background-image: url("chloes.jpg");
            background-size: 100% 130%;
            opacity: 1;


        }

        a:hover{
            -webkit-stroke-width: 100.3px;
            -webkit-stroke-color: #FFFFFF;
            -webkit-fill-color: #FFFFFF;
            text-shadow: 5px 0px 40px black;
        }

        input[type=text]{
            background-color:white;
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