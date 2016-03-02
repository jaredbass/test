


<html>
<head>

    <title></title>


</head>
<body>

    @foreach($tracks->artists as $artist)

        <div id="hi">
            <center>
            <h1>{{$artist->name}}</h1>
            </center>
            @endforeach

            @foreach($tracks->images as $image)

            <img src={{$image -> url}}>

            @endforeach






        </div>

</body>
</html>
