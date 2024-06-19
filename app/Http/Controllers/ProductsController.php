<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index()
    {
        $displayProducts = Produit::all();
        return view(
        'produits', ['produits'=>$displayProducts]
        );}


    public function show(string $id)
    {
        $details=Produit::find($id);  
        return view(
            "details", compact('details'));
    ;}

    public function NewProduit()
    {
        return view("newproduit");
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Produit::create($request->all());
        return redirect("/");
    }


    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
}
