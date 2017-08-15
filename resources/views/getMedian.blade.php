<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grand Code Test - Instructions</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     </head>
    <body>
        <h3>Source</h3>
        <h4>[ {{implode("','",$data_obj->random_array)}} ]</h4>
        <h4>Median: {{$data_obj->median_value}}</h4>
    </body>

</html>