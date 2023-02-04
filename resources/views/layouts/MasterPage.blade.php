<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>Hello, world!</title>
    </head>

    @yield("script")
    <script>
        @yield("addition_script")
    </script>

    <style>
        @yield("addition_style")
        html,body{
            background-color: #fff;
        };
    </style>
    
    <body>
        <nav></nav>
        <div name="content">
            @yield("content")
        </div>
    </body>
</html>