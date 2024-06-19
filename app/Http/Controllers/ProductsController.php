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







    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    
}
