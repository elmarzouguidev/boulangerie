<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Ma Boulangerie AdminPanel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="{{asset('frontEnd/css/reset.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('frontEnd/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('frontEnd/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('frontEnd/css/color.css')}}">
        @yield('MuStyle')
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('frontEnd/images/favicon.ico')}}">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            
           @yield('content')
           
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        @include('frontEnd.layouts.scripts')          
    </body>
</html>