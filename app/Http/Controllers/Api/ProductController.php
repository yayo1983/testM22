<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    private $productService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // middleware para verificar que los métodos del constructor son llamados por usuarios autenticados
        //  $this->middleware('auth:sanctum');
        $this->productService = new ProductService();
    }


    public function getProducts(Request $request)
    {
        $result = $this->productService->getProducts();
        if (!$result) {
            return response()->json(['status' => 'error']);
        }
        return $result;
    }

    public function getfakeproducts (Request $request)
    {
        return Product::getFakeDataProducts();
    }
}