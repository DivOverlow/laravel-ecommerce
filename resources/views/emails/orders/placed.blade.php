{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Email</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<p>--}}
{{--    This is the email that is being sent out.--}}
{{--</p>--}}
{{--    Order ID: {{ $order->id }} <br>--}}
{{--    Order Email: {{ $order->billing_email }} <br>--}}
{{--    Order Billing Name: {{ $order->billing_name }} <br>--}}
{{--    Order Total: ${{ round($order->billing_total / 100, 2) }} <br>--}}
{{--</body>--}}
{{--</html>--}}

@component('mail::message')
    # Order Received

    Thank you for your order.

    **Order ID:** {{ $order->id }}

    **Order Email:** {{ $order->billing_email }}

    **Order Name:** {{ $order->billing_name }}

    **Order Total:** ${{ round($order->billing_total / 100, 2) }}

    **Items Ordered**

    @foreach ($order->products as $product)
        Name: {{ $product->name }} <br>
        Price: ${{ round($product->price / 100, 2)}} <br>
        Quantity: {{ $product->pivot->quantity }} <br>
    @endforeach

    You can get further details about your order by logging into our website.

    @component('mail::button', ['url' => config('app.url'), 'color' => 'green'])
        Go to Website
    @endcomponent

    Thank you again for choosing us.

    Regards,<br>
    {{ config('app.name') }}
@endcomponent
