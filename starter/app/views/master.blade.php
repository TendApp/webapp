<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Laravel 4.2 - Starter
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSS are placed here -->
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}

        <style>
            @section('styles')
                body {
                    padding-top: 60px;
                }
            @show
        </style>


    </head>

    <body>
        <!-- Container -->
        <div class="container">
            @if ($message = Session::get('success'))
                <div id="successMessage" class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Success</h4>
                    {{{ $message }}}
                </div>
            @endif

            <!-- Content -->
            @yield('content')

        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-1.11.2.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}

    </body>
</html>
