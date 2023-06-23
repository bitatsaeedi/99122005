<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicycles</title>
    <style>
    body {
        background-color: #F5F5F5;
        font-family: Arial, sans-serif;
        color: #333333;
    }

    .card {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #CCCCCC;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .card img {
        width: 100%;
        height: auto;
    }

    .card-content {
        padding: 10px;
    }

    .card-title {
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 1em;
        margin-bottom: 5px;
    }

    .button {
        display: inline-block;
        background-color: #0099CC;
        color: #FFFFFF;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        margin-top: 20px;
    }

    .button:hover {
        background-color: #0077B3;
    }

    </style>
</head>
<body>
    <div class="container">
        <a class="add-link" href="/motorcycles/create">Add Motorcycle</a>
        <h1>List of available motorcycles:</h1>
        <div class="cards-container">
            @foreach($motorcycles as $motorcycle)
                <div class="card">
                    <div>
                        <img src="{{asset('storage/images/'. $motorcycle->namePicture)}}" alt="{{$motorcycle->manufacturer}} {{$motorcycle->model}}" title="{{$motorcycle->manufacturer}} {{$motorcycle->model}}">
                    </div>
                    <div class="card-body">
                        <<div class="card-title">{{ $bicycle->brand }}</div>
                    <div class="card-text">Color: {{ $bicycle->color }}</div>
                    <div class="card-text">Price: {{ $bicycle->price }}</div>
                    <div class="card-text">Speed: {{ $bicycle->speed }}</div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="compare-link">
            <a href="/motorcycles/compare">Compare Motorcycles by Price</a>
        </div>
    </div>
</body>
</html>