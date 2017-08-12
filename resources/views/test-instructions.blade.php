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
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
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
            .strike {
                text-decoration: line-through;
            }
        </style>
    </head>
    <body>
        <img src="https://app.grand.co/0c6d3f82ce2358dc8e6b69b8ed81586c.svg" width="300">
        <!-- Instructions -->
        <div class="position-ref m-b-md">
            <h1>Test instructions</h1>
            <p>Fork this test into your own Github account.</p>
            <p>Submit a pull request when you are ready to submit your test.</p>
            <h2>1. Dependency Injection</h2>
            <p>Create a class that has methods to do the following:
                <ul>
                    <li>Return the average of a randomly generated array,</li>
                    <li>Return the median of a randomly generated array</li>
                </ul>
            </p>
            <p>Also in that class, include a method that randomly generates an array, with between 3 and 10 elements, with values ranging from 1 and 99. Examples: 
                <ul>
                    <li><span class="fixed-width">[1,23,5,18,19]</span> This is valid.</li>
                    <li><span class="fixed-width strike">[1,39]</span> There are too few elements.</li>
                    <li><span class="fixed-width strike">[1,5,10,99,1293,39]</span> The max value for an element is 99.</li>
                </ul>
            </p>
            <p>Make an alias for this class, and autoload it in <span class="fixed-width">config/app.php</span></p>
            <h2>2. Routes</h2>
            <p>Add two routes that expose the methods from the above class. The views should be reachable via browser. When the view is loaded, be sure to include the source array that's randomly generated in the request.</p>
            <h2>3. Middlewares</h2>
            <p>Create additional routes that require a header named <span class="fixed-width">magical-header</span>. The associated value is irrelevant, it just needs to be present on the request.</p>
            <p>Requests made to these routes that do not have the <span class="fixed-width">magical-header</span> header should return a status code of <span class="fixed-width">418</span>.</p>
            <h2>4. Databases</h2>
            <p>The default SQLite database has been created and set for you. Create a migration that creates a table to store:
                <ul>
                    <li>the route being requested,</li>
                    <li>the time of the request,</li>
                    <li>a boolean value if the request was made with the <span class="fixed-width">magical-header</span></li>
                </ul>
            </p>
            <p> Each request to one of the created routes should log the above.</p>
            <h2>5. Testing (optional)</h2>
            <p>If you have time, create tests using PHPUnit that test the routes and responses.</p>
            <h2>6. Documentation (optional)</h2>
            <p>Use something like APIGen or Swagger, whatever you prefer, to automatically generate documentation for the routes you've created.</p>
        </div>
    </body>
</html>
