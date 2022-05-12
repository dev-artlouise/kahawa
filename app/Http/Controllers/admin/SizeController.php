<?php

namespace App\Http\Controllers\admin;

use App\Size;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Size::all();
        
        return view('pages-admin.settings.sizes.index')
        ->with([
            'data' => $data,
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
            'size' => 'required',
            'price' => 'required',
        ]);

        $data = new Size;

        $data->size   = $request->size;
        $data->price  = $request->price;

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
        $data = Size::find($id);

        return view('pages-admin.settings.sizes.edit')
            ->with([
                'data' => $data,
            ]);
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
        $request->validate([
            'size' => 'required',
            'price' => 'required',
        ]);

        $data = Size::find($id);
 
        $data->size   = $request->size;
        $data->price  = $request->price;

        $data->save();
        // return back();
        return redirect('admin/size');
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
            DB::table('sizes')->delete($id);

            session()->flash('success', 'Data Deleted');
            return back();

        } catch (\Throwable $th) {
            
            session()->flash('danger', 'Failed to Delete Data');
            return back();
            // throw $th;
        }
    }
}
