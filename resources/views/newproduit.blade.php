<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau produit</title>
</head>
<body>
    
<form method="post" action="{{ route('ajouterProduits') }}">
        @csrf
       
            <input  type="text"  name="name" required>
        
        
            <textarea  name="description" required></textarea>
        
        
            <input type="text"  name="price" required>
        
       
            <button type="submit">Ajouter le produit</button>
        
    </form>
</body>
</html>