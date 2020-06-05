<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title','Ecommerce Website')</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,600,700" rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">

        <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
        />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
    </head>
    <body>
        @yield('content')

        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>