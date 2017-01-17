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
    

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>
    <script>
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }   
    </script>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()">open</span>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
      <div class="row">
        <div class="col-xs-12 col-md-12" style="background-color:#FF0000;">
            cover
            @yield('cover')    
        </div>   
        </div>
        <div class="row">
            <div class="col-xs-4 col-md-2" style="background-color:#EE82EE;">
                login
                @yield('login')    
            </div>
            <div class="col-xs-8 col-md-10" style="background-color:#FFFF00;">
                toolbar
                @yield('toolbar')    
            </div> 
        </div>
        <div class="row" id="board">
            <div class="col-xs-12 col-md-8" style="background-color:#00FF00;">
                game
                @yield('game')
            </div>
            <div class="col-xs-12 col-md-4" style="background-color:#00FFFF;">
                board
                @yield('board')
            </div>
        </div>
    </div>
</body>
</html>