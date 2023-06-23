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
    <a href="/bicycle/create4" class="button">Add Bicycle</a>
    <h1>Our bicycles that are available:</h1>
    <div>
        @foreach($bicycles as $bicycle)
            <div class="card">
                <img src="{{asset('storage/images/'. $bicycle->namePicture)}}" alt="{{ $bicycle->brand }}">
                <div class="card-body">
                        <<div class="card-title">{{ $bicycle->brand }}</div>
                    <div class="card-text">Color: {{ $bicycle->color }}</div>
                    <div class="card-text">Price: {{ $bicycle->price }}</div>
                    <div class="card-text">Speed: {{ $bicycle->speed }}</div>
                    </div>
            </div>
        @endforeach
    </div>

    <a href="/bicycle/compare" class="button">Compare bicycles</a>
</body>
</html>