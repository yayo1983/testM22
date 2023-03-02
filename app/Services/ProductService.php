<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class ProductService
{
    private $endpoint;

    public function __construct()
    {
        $this->endpoint = config('services.product.endpoint');
    }

    /**
     *  Request data from API of the all the products in the ecomerce wrodpress
     */
    public function getProducts()
    {
        try {
            $response = Http::get($this->endpoint. "todos");
            return $response;
        } catch (Exception $e) {
            $response =  false;
        }
    }
}