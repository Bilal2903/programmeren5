<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @yield('content')
</body>
</html>


{{--// connectie met database in .env file.--}}
{{--// php artisan migration:install--}}
{{--// php artisan make:migration creat_..._table--}}
{{--// php artisan migrate voor het echt uitvoeren--}}
{{--// status checken van database is "php artisan migrate:status"--}}
{{--// php artisan make:model .... (Product)--}}
{{--// om alle producten aan te roepen "$producs = Product::all();"--}}
{{--// sirus om dummy database door te suren vanuit Laravel--}}
