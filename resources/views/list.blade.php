<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    <div class="container">
        @foreach ($movies as $movie)
        <div class="card">
            <h3>{{$movie->title}} </h3>
            <h5>{{$movie->original_title}} </h5>
            <h6>{{$movie->nationality}} </h6>
            <h3 class="vote">{{$movie->vote}} </h3>
            <h5 class="data">{{$movie->date}} </h5>
        </div>
        @endforeach
    </div>

</body>
</html>

<style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
.container{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.card{
    width: 200px;
    border: solid 2px black;
    margin: 10px
}


</style>