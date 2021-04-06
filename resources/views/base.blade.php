<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Basic CRUD Application uing PHP Laravel')</title>
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container well">
        <h2 class="text-center" style="margin-top: 5px; padding-top: 0;">CRUD operation on MySQL using Laravel</h2>
        <h3 class="text-center" style="margin-top: 5px; padding-top: 0;">Test Application</h3>
    </div>

    <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>


    <div style="position: fixed; bottom: 10px; right: 10px; color: green;">
        <strong>
            Chandrayog
        </strong>
    </div>
</body>
</html>