<!doctype html>
<html xml:lang="{{ app()->getLocale() }}" lang="{{ app()->getLocale() }}">
<head>
    <title>Millions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" type="text/css" media="all" />
    <script src="//cdn.tailwindcss.com"></script>

</head>
<body>

@yield('content')

</body>
</html>
