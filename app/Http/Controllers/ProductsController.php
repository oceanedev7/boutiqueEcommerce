<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index()
    {
        $displayProducts = Produit::all();
        // dd($displayProducts);
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
        $product = Produit::findOrFail($id);  
            return view("edit", compact('product'));;
    }

    
    public function update(Request $request, $id)
    {
        $validatedData=$request->validate(
            [
                'name' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
            ]);
        
            $update=Produit::findOrFail($id);           
            $update->update($validatedData);
    
            return redirect("/");

    }

    public function destroy($id)
    {
        $delete = Produit::findOrFail($id);
        $delete->delete();
        return redirect("/");}

    
}
