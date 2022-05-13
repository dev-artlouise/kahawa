<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\Product;
use App\Size;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products   = DB::select('SELECT products.id AS product_id, product_name, product_description, product_image, products.category_id,
                                category.id AS category_id, category.name AS category_name,  category.description AS category_description FROM products 
                                INNER JOIN categories AS category ON products.category_id =  category.id');

        // $data       = DB::select('SELECT * FROM `users` 
        //                         INNER JOIN orders ON orders.user_id = users.id
        //                         GROUP BY orders.customer_name');
                                
        $sizes      = Size::all();

        return view('pages-user.products.index')
                ->with([
                    'products'  => $products,
                    'sizes'     => $sizes,
                    // 'data'     => $data,
                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products   = DB::select('SELECT products.id AS product_id, product_name, product_description, product_image, products.category_id,
                                category.id AS category_id, category.name AS category_name,  category.description AS category_description FROM products 
                                INNER JOIN categories AS category ON products.category_id =  category.id');

        $data       = DB::select('SELECT * FROM `users` 
                                INNER JOIN orders ON orders.user_id = users.id
                                GROUP BY orders.customer_name');
                                
        $sizes      = Size::all();

        return view('pages-user.products.create')
                ->with([
                    'products'  => $products,
                    'sizes'     => $sizes,
                    'data'     => $data,
                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages-user.products.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        echo 'cart';
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

        } else {
            
            $cart[$id] = [
                "name"      => $product->product_name,
                "quantity"  => 1,
                "price"     => 0,
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
