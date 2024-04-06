<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        [
            'id' => 1,
            'name' => 'Product ONE',
        ],
        [
            'id' => 2,
            'name' => 'Product TWO',
        ],
        [
            'id' => 3,
            'name' => 'Product THREE',
        ],
        [
            'id' => 4,
            'name' => 'Product FOUR',
        ],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Display all products.',
            'products' => $this->products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->products[-1] = ['id' => 5, 'name' => 'Product FIVE'];
        
        return response()->json([
            'message' => 'Product created successfully.'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'message' => 'Display product with ID: ' . $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            'message' => 'Product with ID: ' . $id . ' updated successfully.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            'message' => 'Product with ID: ' . $id . ' deleted successfully.',
        ]);
    }
}
