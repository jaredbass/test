@yield('portfolio_entry')
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
    <style>

        #logo {

            margin: 0 auto;
            margin-top: 9%;
            display:none;

        }

        #logo2 {
            margin: 0 auto;
            margin-top:8%;
            display:none;
        }

        #text {
            display:none;
            margin-top: 3%;
            color: black;
            font-family: avenir;
            font-size: 24pt;
            width: 45%;
        }

        #inc {
            display: none;
            border: 0px solid;
            width: 0.6%;
        }

        #text2 {
            display:none;
            font-family: avenir;
        }

        #text3 {
            display:none;
            font-family: avenir;
        }

        input[type=submit] {
            display: none;

        }

    </style>

    <script type="text/javascript">

        $(document).ready(function() {
            $('#logo').fadeIn(1500).delay(500).fadeOut(1500);
            $('#logo2').delay(3500).fadeIn(1000);
            $('#text').delay(3500).fadeIn(1000);
            $("#inc").delay(3500).fadeIn(1000);
            $("#text2").delay(3500).fadeIn(1000);
            $("#text3").delay(3500).fadeIn(1000);
            $(":submit").delay(3500).fadeIn(1000);
        });

    </script>

</head>