<!DOCTYPE html>
<html lang="e-">
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

    .app {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #CCCCCC;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .app img {
        width: 100%;
        height: auto;
    }

    .app-content {
        padding: 10px;
    }

    .app-title {
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .app-text {
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
        <div class="app-container">
            @foreach($motorcycles as $motorcycle)
                <div class="app">
                    <div>
                        <img src="{{asset('storage/images/'. $motorcycle->namePicture)}}" alt="{{$motorcycle->manufacturer}} {{$motorcycle->model}}" title="{{$motorcycle->manufacturer}} {{$motorcycle->model}}">
                    </div>
                    <div class="app-body">
                        <<div class="app-title">{{ $bicycle->brand }}</div>
                          <div class="app-text">Color: {{ $bicycle->color }}</div>
                           <div class="app-text">Price: {{ $bicycle->price }}</div>
                            <div class="app-text">Speed: {{ $bicycle->speed }}</div>
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