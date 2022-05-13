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
        $data       = DB::select('SELECT products.id AS product_id, product_name, product_description, product_image, products.category_id,
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
        try {
            $request->validate([
                'name' => 'required',
            ]);

            $data = new Product;

            $data->category_id          = $request->category_id;
            $data->product_name         = $request->name;
            $data->product_description  = $request->description;

            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/', $filename);
                $data->product_image = $filename;
            } else {
                return $request;
                $data->product_image = '';
            }

            // $data->category_id = $request->category_id;
            // $data->size_id = $request->size_id;

            $data->save();
            return back();

        } catch (\Throwable $th) {
            throw $th;
        }

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
        try {
            DB::table('products')->delete($id);

            session()->flash('success', 'Data Deleted');
            return back();

        } catch (\Throwable $th) {
            
            session()->flash('danger', 'Failed to Delete Data');
            return back();
            // throw $th;
        }
    }
}
