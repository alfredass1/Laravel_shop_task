<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function allProducts() {

        $products = Product::select(
            'products.*',
            'categories.category as category_name'
        )->join("categories", 'categories.id', '=', 'products.catid')
        ->get();

        return $products ;
    }

    public function storeOrders(Request $request){

        $orders = Order::create([
            'buyerName' => request('buyerName'), //name
            'buyerLastName' => request('buyerLastName'), //name
            'buyerAddress' => request('buyerAddress'),
            'productID' => request('productID'),
            'productQuantity' => request('productQuantity'),
        ]);



        return response($request);
    }

}
