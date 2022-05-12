<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Helpers\Helper;

use App\Order;
use App\Product;
use App\Size;
use App\Payment;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products   = DB::select('SELECT products.id AS product_id, products.name AS product_name, products.description AS product_description, products.image, products.category_id,
                                category.id AS category_id, category.name AS category_name,  category.description AS category_description FROM products 
                                INNER JOIN categories AS category ON products.category_id =  category.id');

        $data       = DB::select('SELECT * FROM `users` 
                                INNER JOIN orders ON orders.user_id = users.id
                                GROUP BY orders.customer_name');
                                
        $sizes      = Size::all();

        return view('pages-admin.orders.index')
                ->with([
                    'products'  => $products,
                    'sizes'     => $sizes,
                    'data'     => $data,
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

            $data_order = new Order;

            $order_number = Helper::IDGenerator($data_order, 'order_number', 5, 'ORDER');

            $orders = $request->input('rows');

            foreach ($orders as $rows) {

                $data [] = [
                    'order_number'  => $order_number,
                    'customer_name' => $request->customer_name,
                    'order_type'    => $request->order_type,
                    'remarks'       => $request->remarks,
                    'status'        => 'Pending',

                    'quantity'      => $rows['quantity'],

                    'user_id'       => Auth::user()->id,
                    'product_id'    => $rows['product_id'],
                    'size_id'       => $rows['size_id'],

                    'created_at'    => today(),
                    'updated_at'    => today(),
                ];
            }

            $insert_order = Order::insert($data);

            $payment = new Payment;

            $payment->total_amount      = $request->total_amount;
            $payment->payment_status    = 'Not Paid';
            $payment->remarks           = $request->remarks;
            $payment->user_id           = Auth::user()->id;
            $payment->order_id          = Order::latest('id')->first()->id;

            $payment->save();

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
        return view('pages-admin.orders.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data       = DB::select('SELECT * FROM orders 
                            INNER JOIN users    ON orders.user_id       = users.id
                            INNER JOIN products ON orders.product_id    = products.id
                            INNER JOIN sizes    ON orders.size_id       = sizes.id
                            WHERE orders.order_number = ?',[$id]);

        return view('pages-admin.orders.show');
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
        try {
            $sql = DB::update(
                'UPDATE orders SET updated_at = ?, remarks = ?, status = ? WHERE order_number = ?',
                [today(), $request->remarks, $request->status, $id]
            );
            
            session()->flash('success', 'Data Updated successfuly');
            return back();

        } catch (\Throwable $th) {

            session()->flash('danger', 'Data Failed to Update');
            return back();
            // throw $th;
        }
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

            DB::table('orders')->delete($id);

            session()->flash('success', 'Data Deleted');
            return back();

        } catch (\Throwable $th) {

            session()->flash('danger', 'Failed to Delete Data');
            return back();
            // throw $th;
        }
    }
}
