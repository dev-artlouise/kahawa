<?php

namespace App\Http\Controllers\admin;

use App\Product;
use App\Category;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data       = DB::select('SELECT products.id AS product_id, products.name AS product_name, products.description AS product_description, products.image, products.category_id,
                                category.id AS category_id, category.name AS category_name,  category.description AS category_description FROM products 
                                INNER JOIN categories AS category ON products.category_id =  category.id');
        $category   = Category::all();

        return view('pages-admin.settings.products.index')
        ->with([
            'data'      => $data,
            'category'  => $category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable',

            // 'category' => 'required',
            // 'size' => 'required',
        ]);

        $data = new Product;

        $data->category_id  = $request->category_id;
        $data->name         = $request->name;
        $data->description  = $request->description;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/', $filename);
            $data->image = $filename;
        } else {
            return $request;
            $data->image = '';
        }

        // $data->category_id = $request->category_id;
        // $data->size_id = $request->size_id;

        $data->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return redirect('admin/product');
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
}
