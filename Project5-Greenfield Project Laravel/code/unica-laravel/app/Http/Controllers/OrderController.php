<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
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

        // $products = Order::orderByDesc('id')->get();
        // $orderUser =  $products->user->id;

        // return view('manage_orders', 'orderUser');
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
        $this->validForm($request);

        $pro = new Order;

        // $pro->pro_name  = $request->input('pro_name');
        // $pro->order_notes  = $request->input('order_notes');


        // $pro->user_id = Auth::user()->id;


        $neworder = new Order();
        $newuser = Auth::user();
        $neworder->pro_name  = $request->input('pro_name');
        $neworder->order_notes  = $request->input('order_notes');
        $neworder->id = $newuser->user_id;
        $neworder->save();

        // $pro->save();

        // dd($pro->cat_id);
        return redirect('/shop');
    }

    public function validForm(Request $request)
    {
        $request->validate([

            'pro_name'          => 'required',
            'order_notes'       => 'required',
        ]);
        /* $input= $request->input(); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
