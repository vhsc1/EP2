<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order_product;
use DB;
class Orders_ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      //  $query = DB::table('users')->select('name');

//$users = $query->addSelect('age')->get();

//var_dump($user->name);
$order_products=DB::table('products')
->join('order_products','order_products.product_id','=','products.id')
->select('order_products.id','order_products.qty','products.name','products.Image')
->get();
//dd($con);
      //  $order_products = Order_product::paginate(10);
        return view("order_products.index",["order_products"=>$order_products]);
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
          Order_product::destroy($id);
        return redirect('/products');
    }
}
