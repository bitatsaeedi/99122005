<!DOCTYPE html>
<html>
<head>
    <title>Price Comparison</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F5F5F5;
    }

    h1 {
        text-align: center;
        font-size: 2em;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .app {
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #CCCCCC;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        max-width: 600px;
        margin-top: 50px;
    }

    .app img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .app-content {
        padding: 20px;
    }

    .app-content div {
        font-size: 1.2em;
        margin-bottom: 10px;
    }

    .app-content div:last-child {
        margin-bottom: 0;
    }

    </style>
</head>
<body>
    <h1>The Most Expensive:</h1>
    <div class="app">
        <div>
            <img src="{{ asset('storage/images/'.$mostExpensive->namePicture) }}">
        </div>
        <div class="app-content">
               <div>Brand: {{ $mostExpensive->brand }}</div>
                 <div>Color: {{ $mostExpensive->color }}</div>
                   <div>Price: {{ $mostExpensive->price }}</div>
                     <div>Speed: {{ $mostExpensive->speed }}</div>
        </div>
    </div>
</body>
</html>