<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of Vehicles</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0!important;
        }
        .container {
            width: 100%;
            padding: 10px;
        }

        .toppane {
            width: 100%;
            height: 50vh;
            
        }

        .leftpane {
            width: 50%;
            height: 110vh;
            background-image: url('{{URL('/images/cars.jpg')}}');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 15px;
        }

        
        #motorcycles {
            background-position: center center;
            background-image: url('{{URL('/images/motorcycles.png')}}');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 15px;
        }

        
        #buses {
            background-image: url('{{URL('/images/buses.jpg')}}');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 15px;
        }

        .rightpane {
            width: 50%;
            height: 110vh;
            background-color: yellow;
        }
        #airplanes {
            background-image: url('{{URL('/images/airplanes.jpg')}}');
            background-size: cover;
            background-position: center;
            padding: 15px;
        }
        #bicycles {
            background-image: url('{{URL('/images/bicycles.jpg')}}');
            background-size: cover;
            background-position: center;
            padding: 15px;
        }
        .d-flex {
            display: flex;
        }

    </style>
</head>
<body>
    <h1 style="text-align:center;">List of Vehicles</h1>
    <div class="container">
        <div class="toppane" id="motorcycles">
            Click <a style="color:skyblue;" href="http://127.0.0.1:8000/motorcycles">here</a> to see our motorcycles.
            <br>
            <span style="font-size: small;">We offer a wide range of motorcycles with different specifications and features.</span>
        </div>
        <div class="d-flex">
            <div class="leftpane" id="cars">
                Click <a style="color:skyblue;" href="http://127.0.0.1:8000/cars">here</a> to see our cars.
            </div>
            <div class="rightpane" id="airplanes">
                Click <a style="color:red;" href="http://127.0.0.1:8000/airplanes">here</a> to see our airplanes.
            </div>
        </div>
        <div class="d-flex">
            <div class="leftpane" id="buses">
                Click <a style="color:skyblue;" href="http://127.0.0.1:8000/buses">here</a> to see our buses.
            </div>
            <div class="rightpane" id="bicycles">
                Click <a style="color:red;" href="http://127.0.0.1:8000/bicycles">here</a> to see our bicycles.
            </div>
        </div>
    </div>
</body>
</html>