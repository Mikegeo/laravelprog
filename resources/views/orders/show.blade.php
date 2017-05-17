@extends('layouts.app')

@section('content')
      <div class="jumbotron text-center">
          <h2>{{ $order->id }}</h2>
          <p>
             <strong>Customer Name:</strong> {{ \App\User::find($order->users_id)->name }}<br>
              <strong>Product1:</strong> {{ $order->product1 }}<br>
              <strong>Product2:</strong> {{ $order->product2 }}<br>
              <strong>Product3:</strong> {{ $order->product3 }}<br>
              <strong>Product4:</strong> {{ $order->product4 }}<br>
              <strong>Collection date:</strong> {{ $order->datetime }}<br>
          </p>
      </div>
  @endsection
