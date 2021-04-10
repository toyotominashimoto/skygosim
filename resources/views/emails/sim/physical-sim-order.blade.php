<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Physical SIM purchase</title>

    <style>
        .container {
            max-width: 500px;
            margin: auto;
            font-family: Roboto, 'sans-serif';
        }

        .logo {
            height: 40px;
        }

        .text-center {
            text-align: center;
        }

        h2 {
            margin: 1rem 0 1.2rem 0;
        }

        h3 {
            font-weight: normal;
        }
    </style>
</head>
<body>
<main>
    <div class="container">
        <img class="logo" src="{{config('app.url')}}/images/skygo_logo.png" alt="SkyGo">

        <h2 class="text-center">
            Order Confirmation
        </h2>

        <h3>Hello {{$user->first_name}} {{$user->last_name}},</h3>
        <h3>Thank you for shopping with us,</h3>
        <h3>Order number: {{$order->key}},</h3>

        <br>

        <h3>Ship To:</h3>
        <h3>{{$user->first_name}} {{$user->last_name}}</h3>
        <h3>{{$address->street}}</h3>
        <h3>{{$address->city}}</h3>
        <h3>{{$address->state}}</h3>
        <h3>{{$address->zip_code}}</h3>
    </div>
</main>
</body>
</html>
