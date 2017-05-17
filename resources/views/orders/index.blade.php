@extends('layouts.app')

@section('content')

  <h1>All Orders</h1>

  <table class="table table-striped table-bordered">
      <head>
          <tr>
              <td>Order id</td>
              <td>Product 1</td>
              <td>Product 2</td>
              <td>Product 3</td>
              <td>Product 4</td>
              <td>Date of Colection</td>
          </tr>
      </head>
      <body>
      @foreach($orders as $key => $value)
          <tr>
              <td>{{ $value->id }}</td>
              <td>{{ $value->product1 }}</td>
              <td>{{ $value->product2 }}</td>
              <td>{{ $value->product3 }}</td>
              <td>{{ $value->product4 }}</td>
              <td>{{ $value->datetime }}</td>

              <td>
             @if(Auth::user()->id == $value->users_id)
               
                  {!! Form::open(array('url' => 'orders/' . $value->id, 'class' => 'pull-right')) !!}
                  {!! Form::hidden('_method', 'DELETE') !!}
                  {!! Form::submit('Delete your order', array('class' => 'btn btn-warning')) !!}
                  {!! Form::close() !!}

                  <a class="btn btn-small btn-info" href="{{ URL::to('orders/' . $value->id . '/edit') }}">Edit your Order</a>
              @endif
              <a class="btn btn-small btn-success" href="{{ URL::to('orders/' . $value->id) }}">Show this Order</a>
              </td>
          </tr>
      @endforeach
      </body>
  </table>
@endsection
