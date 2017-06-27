<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Order_product;


class ShoppingCartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $order_pro=new Order_product();
        $order_pro->order_id=$request->order_id;
        $order_pro->product_id=$request->product_id;
        $order_pro->qty= $request->qty;
        $order_pro->save();

        $product= new Product;
        $product->product_id=$request->product_id;
        $product->name = $request->product_name;
        $product->price= $request->product_price;
        $product->qty= $request->qty;

        \Session::push('cart.orderProduct',$product);
        $shopping_cart=\Session::get('cart.orderProduct');
        $total= Order_product::total();
        $productsSize= Order_product::productsSize();
        $products= Product::paginate(10);
        return view('products.index',
        [
          'shopping_cart'=>$shopping_cart,
          'total'=>$total,
          'productsSize'=>$productsSize,
          'products'=>$products
        ]);
         $order=new Order_product();

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
    }
}
