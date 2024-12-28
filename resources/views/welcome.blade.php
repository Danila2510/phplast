<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
    <h1>Main Page</h1>
    <span><a href="{{route('about')}}">About</a></span>
    <span><a href="{{route('category')}}">Categories</a></span>
    <span><a href="{{route('products')}}">Products</a></span>
    </body>
</html>
