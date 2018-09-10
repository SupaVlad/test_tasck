<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->

    </head>
    <body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__search">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"></button>
                            </span>
                            <input type="text" class="form-control" placeholder="Search for...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header_info">

                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
    </body>
</html>
