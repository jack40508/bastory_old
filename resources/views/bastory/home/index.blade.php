<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="row">
        <div class="col-xs-12 col-md-12">
            @include('bastory.partials.headerarea')    
        </div>   
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12">
            @yield('content')    
        </div> 
    </div>
</body>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</html>