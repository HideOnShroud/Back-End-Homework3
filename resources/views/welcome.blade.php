<html lang="en">
<head>
    <meta charset="TF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Youtube ViUdeos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    @foreach ($video as $video)
    <div class="videos">
        <h3 class="title">{{ $video['name'] }}</h3>
        <p class="desc">{{ $video['desc'] }}</p>
        <iframe width="640" height="360"src={{ $video['link'] }}></iframe>
    </div>
    @endforeach
</body>
</html>