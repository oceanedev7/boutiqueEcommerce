<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Modifier produit</title>
</head>
<body>
@foreach ($produits as $produit)
<a href="{{ route('afficherDetails', $produit->id) }}"><div> {{ $produit->name }}</div></a>
<div> {{ $produit->price }} €</div>
@endforeach



<a href="{{ route('editerTaches', $task->id) }}" id="modifier"><i class="fa-solid fa-pencil"></i></a>
<a href="{{ route('supprimerTaches', $task->id) }}" id="supprimer"><i class="fa-regular fa-square-minus"></i></i></a>
</body>
</html>