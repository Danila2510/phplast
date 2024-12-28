<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        .product-card h2 {
            font-size: 20px;
            margin: 0 0 10px;
            color: #444;
        }
        .product-card p {
            margin: 5px 0;
            color: #666;
        }
        .product-card .price {
            font-weight: bold;
            color: #28a745;
        }
        .product-card .category {
            font-style: italic;
            color: #888;
        }
    </style>
</head>
<body>
<h1>Products Page</h1>
<div class="product-list">
    @foreach($products as $product)
        <div class="product-card">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p class="price">Цена: {{ $product->price }} грн</p>
            <p class="category">Категория: {{ $product->category->title ?? 'Без категории' }}</p>
        </div>
    @endforeach
</div>
</body>
</html>
