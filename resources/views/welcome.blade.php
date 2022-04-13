<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capshall Order System</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href={{ asset('css/style.css') }} rel="stylesheet">
</head>

<body class="antialiased">
    <div>
        <img src="https://cafehenrie.com/wp-content/uploads/2021/09/online-food-ordering.jpg" class="banner-img" />
        <div class="center-content">
            <a href="dashboard" class="menu-button">
                Go to Food Menu
            </a>
        </div>
    </div>
</body>

</html>
