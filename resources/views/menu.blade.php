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
    </div>
    <div class="food-tray">
        <p class="tray-title"> Your Food Tray: @foreach ($tray as $item)
                {{ DB::table('menu')->where('id', $item->food_id)->first()->name }},
            @endforeach
        </p>
        <p class="tray-total"> Total: ₦{{ number_format($total) }} </p>
        <input type="text" id="total" value="{{ $total }}" hidden>
        <div style="float: right; margin-top: -40px">
            <script src="https://js.paystack.co/v1/inline.js"></script>
            <button onClick="payWithPaystack()" class="purchase-btn">
                Complete Purchase
            </button>
            </form>
        </div>
    </div>

    <ul class="menu-grid">
        @foreach ($food_menu as $menu)
            <li data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ $menu->id * 300 }}">
                <div>
                    <img src={{ $menu->img_url }} class="food-img" />
                    <div class="content-center">
                        <p class="food-name">{{ $menu->name }} - ₦{{ number_format($menu->price) }}</p>
                        <a href="/add-to-tray/{{ $menu->id }}/{{ $menu->price }}" class="food-btn">
                            Add to Tray
                        </a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

</body>

<footer>
    <!-- AOS -->
    <script src={{ asset('js/aos.js') }} type="text/javascript"></script>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript">
        function payWithPaystack() {
            var handler = PaystackPop.setup({
                key: 'pk_test_cac295804e488023c4abc6b8d0688b2149375017',
                email: "user@user.com",
                amount: document.getElementById('total').value + "00",
                currency: "NGN",
                callback: function(response) {
                    // Send the token to your server
                    console.log(response.reference);
                    window.location.href = '/success';
                },
                onClose: function() {
                    // alert('window closed');
                }
            });
            handler.openIframe();
        }
    </script>
</footer>

</html>
