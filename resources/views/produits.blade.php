<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique E-commerce</title>
</head>
<body>
    <h1>Boutique E-commerce</h1>

<nav> 

</nav>

<main>
@foreach ($produits as $produit)
<a href="{{ route('afficherDetails', $produit->id) }}"><div> {{ $produit->name }}</div></a>
<div> {{ $produit->price }}</div>
@endforeach
</main>

<footer>

</footer>

</body>
</html>