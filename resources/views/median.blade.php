<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grand Code Test - Instructions</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #3192CE;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                padding: 1rem;
            }
            .title {
                font-size: 84px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .fixed-width {
                font-family: courier;
            }
            .half-width{
                width: 50%;
                float: left;
            }
        </style>
    </head>
    <body>
        <div class="position-ref m-b-md">
        <h1 class="title">Median</h1>
            <div class="half-width">Numbers: <span class="fixed-width">{{ implode(', ', $numbers) }}</span></div>

            <div class="half-width">Median: <span class="fixed-width">{{ sprintf("%0.2f", Numbers::median($numbers)) + 0 }}</span></div>
        </div>
    </body>
</html>
