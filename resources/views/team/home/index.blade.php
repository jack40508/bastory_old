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
            @include('team.partials.headerarea')    
        </div>   
    </div>
    <div class="row">
        <div class="col-xs-2 col-md-2">
            @include('team.partials.leftcontent')    
        </div> 
        <div class="col-xs-10 col-md-8">
            @yield('content')    
        </div>
        <div class="col-xs-2 col-md-2">
            @include('team.partials.rightcontent')    
        </div>
    </div>
</body>
</html>