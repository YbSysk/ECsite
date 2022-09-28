<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>EC</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        <h1>EC Name</h1>
        <div class='posts'>
            @foreach ($orders as $order)
             <div class='post'>
                 <a href='/orders/{{ $order->id }}'><h2 class='title'>{{ $order->title }}</h2></a>
                 <p class='body'>{{ $order->body }}</p>
             </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{ $orders->links() }}
        </div>
        
        [<a href='/orders/create'>create</a>]
        
    </body>
</html>