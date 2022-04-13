<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Menu - Capshall Order System</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href={{ asset('css/style.css') }} rel="stylesheet">
    <!-- AOS style-->
    <link href={{ asset('css/aos.css') }} rel="stylesheet" type="text/css" />
</head>

<body class="antialiased">
    <div>
        <img src="https://cafehenrie.com/wp-content/uploads/2021/09/online-food-ordering.jpg" class="header-img" />
    </div><br /><br /><br />
    <div class="center-content">
        <img src="https://www.orderontheway.com/editable/templates/default/images/logo.png" />
    </div><br /><br /><br />
    <div class="center-content">
        <a href="dashboard" class="menu-button">
            Go back to Menu
        </a>
    </div>

</body>

<footer>
    <!-- AOS -->
    <script src={{ asset('js/aos.js') }} type="text/javascript"></script>
    <script>
        AOS.init();
    </script>
</footer>

</html>
