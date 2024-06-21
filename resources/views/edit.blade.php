<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Modifier produit</title>
</head>

<body>
@foreach ($products as $produit)
<div> {{ $produit->name }}</div>
<div> {{ $produit->description }}</div>
<div> {{ $produit->price }} €</div>

<a href="{{ route('editerProduits', $produit->id) }}" ><i class="fa-solid fa-pencil"></i></a>
<a href="{{ route('supprimerProduits', $produit->id) }}" ><i class="fa-solid fa-trash"></i></a>

@endforeach


<form action="{{ route('modifierProduits', $product->id) }}" method="post">
@csrf
        <input value ="{{ $product->name }}" type="text"  name="name" >
        <textarea name="description"> {{ $product->description }}</textarea>
        <input value ="{{ $product->price}}" type="text"  name="price" >
        <button type="submit"> Modifier </button>
</form>
</body>
</html>