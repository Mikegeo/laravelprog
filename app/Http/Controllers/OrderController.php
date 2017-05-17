<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Order;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class OrderController extends Controller
{
    /**
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return View::make('orders.index')
          ->with('orders', $orders);
    }
    /**
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $orders = Order::all();

        return View::make('orders.create')
        ->with('orders', $orders);
    }
    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $rules = array(
          'product1'  => 'required',
          'product2'=> 'required',
          'product3'        => 'required',
          'product4'       => 'required',
          'datetime' => 'required'
        );

          $order = new Order;
          $order->product1    = Input::get('product1');
          $order->product2    = Input::get('product2');
          $order->product3    = Input::get('product3');
          $order->product4    = Input::get('product4');
          $order->users_id     = Auth::user()->id;
          $order->datetime     = Input::get('datetime');
          $order->save();

          return Redirect::to('orders');
        }
    /**
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $order = Order::find($id);
      return View::make('orders.show')
        ->with('order', $order);
    }
    /**
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return View::make('orders.edit')
            ->with('order', $order);
    }
    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
      $rules = array(
        'product1'  => 'required',
        'product2'=> 'required',
        'product3'        => 'required',
        'product4'       => 'required',
        'datetime' => 'required'
      );
        $order = Order::find($id);
        $order->product1    = Input::get('product1');
        $order->product2    = Input::get('product2');
        $order->product3    = Input::get('product3');
        $order->product4    = Input::get('product4');
        $order->users_id     = Auth::user()->id;
        $order->datetime     = Input::get('datetime');
        $order->save();

        return Redirect::to('orders');
      }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return Redirect::to('orders');
    }
}
