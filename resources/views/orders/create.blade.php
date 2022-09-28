<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>EC create</title>
    </head>
    <body>
        <h1>EC Name</h1>
        <form action="/orders" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="order[title]" placeholder="タイトル" value="{{ old('order.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('order.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="order[body]" placeholder="商品説明">{{ old('order.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('order.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>