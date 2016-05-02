<html>
<head>
    <style>
        body {
            background-color: #2C3539;

        }

        .shape-left {

        }

        .shape-left #one {
            position:absolute;
            left:2.2%;
            bottom:0;
            width: 25%;
            height: 100%;
            opacity:0.4;
        }

        .shape-left #one:hover {
            opacity: 1;
        }
        .shape-left #two {
            position:absolute;
            left:27.2%;
            bottom:-30;
            width: 25%;
            height: 110%;
            opacity:0.4;
        }

        .shape-left #two:hover {
            opacity: 1;
        }
        .shape-left #three {
            position:absolute;
            left:52.2%;
            bottom:0;
            width: 25%;
            height: 100%;
            opacity:0.4;
        }
        .shape-left #three:hover {
            opacity: 1;
        }
        .shape-left #four {
            position:absolute;
            left:77.2%;
            bottom:0;
            width: 25%;
            height: 100%;
            opacity:0.4;
        }
        .shape-left #four:hover {
            opacity: 1;
        }

        .shape-left #four:hover + #textone {
            visibility:visible;
        }
        #rectangle {
            position:absolute;
            width:100%;
            height:160px;
            background:white;
            left:00%;
            bottom:10%;
        }

        #rectangle2 {
            position:absolute;
            z-index: 20;
            width:70px;
            height:120%;
            background:black;
            left:00%;
            bottom:0%;
        }

        #textone {
            margin-left:-69%;
            margin-top: 40px;
            font-family: quicksand;
            font-size: 18pt;


        }

        #texttwo {
            position:absolute;
            z-index: 12;
            margin-left:34%;
            margin-top:-110px;
            font-family: quicksand;
            font-size: 18pt;

        }

        #textthree {
            position:absolute;
            z-index: 12;
            margin-left:57%;
            margin-top:-110px;
            font-family: quicksand;
            font-size: 18pt;

        }

        #textfour {
            position:absolute;
            z-index: 12;
            margin-left:84%;
            margin-top:-110px;
            font-family: quicksand;
            font-size: 18pt;

        }
        #sidebar {
            position:absolute;
            font-family:quicksand;
            font-size: 28pt;
            margin-top: 350px;
            letter-spacing: 5px;
            left: -310;
            z-index:30;
            color:white;
            -ms-transform: rotate(-90deg); /* IE 9 */
            -webkit-transform: rotate(-90deg); /* Chrome, Safari, Opera */
            transform: rotate(7deg);
        }

        @media (max-width: 1150px) {

            #textone {
                margin-left:-65%;
                margin-top: 50px;
                font-family: quicksand;
                font-size: 12pt;


            }

            #texttwo {
                position:absolute;
                z-index: 12;
                margin-left:34.5%;
                margin-top:-70px;
                font-family: quicksand;
                font-size: 12pt;

            }

            #textthree {
                position:absolute;
                z-index: 12;
                margin-left:59%;
                margin-top:-70px;
                font-family: quicksand;
                font-size: 12pt;

            }

            #textfour {
                position:absolute;
                z-index: 12;
                margin-left:84%;
                margin-top:-70px;
                font-family: quicksand;
                font-size: 12pt;

            }

            @media (max-width: 950px) {

                #textone {
                    margin-left:-65%;
                    margin-top: 50px;
                    font-family: quicksand;
                    font-size: 12pt;


                }

                #texttwo {
                    position:absolute;
                    z-index: 12;
                    margin-left:33.5%;
                    margin-top:-70px;
                    font-family: quicksand;
                    font-size: 12pt;

                }

                #textthree {
                    position:absolute;
                    z-index: 12;
                    margin-left:57.5%;
                    margin-top:-70px;
                    font-family: quicksand;
                    font-size: 12pt;

                }

                #textfour {
                    position:absolute;
                    z-index: 12;
                    margin-left:84%;
                    margin-top:-70px;
                    font-family: quicksand;
                    font-size: 12pt;

                }

                @media (max-width: 750px) {

                    #textone {
                        margin-left:-64%;
                        margin-top: 50px;
                        font-family: quicksand;
                        font-size: 11pt;


                    }

                    #texttwo {
                        position:absolute;
                        z-index: 12;
                        margin-left:32%;
                        margin-top:-67px;
                        font-family: quicksand;
                        font-size: 11pt;

                    }

                    #textthree {
                        position:absolute;
                        z-index: 12;
                        margin-left:55.5%;
                        margin-top:-67px;
                        font-family: quicksand;
                        font-size: 11pt;

                    }

                    #textfour {
                        position:absolute;
                        z-index: 12;
                        margin-left:82%;
                        margin-top:-67px;
                        font-family: quicksand;
                        font-size: 11pt;

                    }

                    @media (max-width: 600px) {

                        #textone {
                            margin-left:-58%;
                            margin-top: 50px;
                            font-family: quicksand;
                            font-size: 10pt;


                        }

                        #texttwo {
                            position:absolute;
                            z-index: 12;
                            margin-left:31%;
                            margin-top:-60px;
                            font-family: quicksand;
                            font-size: 10pt;

                        }

                        #textthree {
                            position:absolute;
                            z-index: 12;
                            margin-left:54%;
                            margin-top:-60px;
                            font-family: quicksand;
                            font-size: 10pt;

                        }

                        #textfour {
                            position:absolute;
                            z-index: 12;
                            margin-left:80%;
                            margin-top:-60px;
                            font-family: quicksand;
                            font-size: 10pt;

                        }
                    }

    </style>
<body>

<div class="shape-left">
    <a id="first" href="/spotify/13Wrdjrb8wrDh1EKKqc4Y6"><div id="one" style="background-color:orangered;  background-size:130%;"> </div></a>
   <a href="/spotify/5VqGGKeWpIBRFh4M4XmqDK"> <div id="two" style="background-color:darkolivegreen; background-size:160%;"></div></a>
   <a href="/spotify/7EJf2RoD8f2Tm7hzpwK4bQ"> <div id="three" style="background-color:cornflowerblue; background-size:130% "></div></a>
  <a href="/spotify/1bt6q2SruMsBtcerNVtpZB">  <div id="four" style="background-color:mediumpurple; background-size:130%;"></div></a>



    <div id="rectangle">

        <center>
            <p id="textone">
                The Drums
                <br><br><b>
                    Beach Pop</b>
        </center>
        </p>
        <center>
            <p id="texttwo">
                FKA Twigs
                <br><br><b>
                    Experimental</b>
            </p>

            <p id="textthree">
                Shiny Toy Guns
                <br><br><b>
                    Electronica</b>
            </p>

            <p id="textfour">
                Fleetwood Mac
                <br><br><b>
                    Classic Rock</b>
                <br><br><br><a href="/home"> Go home</a>
            </p>


    </div>
    <div id="rectangle2">

    </div>

    <div id="sidebar">
        <a style="text-decoration: none; color:white" href="/home"><h1> Home </h1></a>



    </div>

</body>
</html>

<?php //echo session('message'); ?>


