@extends('layouts.app')

@section('content')
  <h1>Edit {{ $order->id }}</h1>

  <!-- if there are creation errors, they will show here -->
  {!! Form::model($order, array('route' => array('orders.update', $order->id), 'method' => 'PUT')) !!}

  <div class="form-group">
    {!! Form::label('product1', 'Choose from here:') !!}
    {!! Form::select('product1',['Chocolate cake'=>'Chocolate Cake','Fruit cake'=>'Fruit Cake','Apple Pie'=>'Apple Pie', 'Souffle'=>'Souffle', 'Lava Cake'=>'Lava Cake'], Input::old('product1'), array('class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('product2', 'Choose from here:') !!}
    {!! Form::select('product2',['None'=>'None','Chocolate cake'=>'Chocolate Cake','Fruit cake'=>'Fruit Cake','Apple Pie'=>'Apple Pie', 'Souffle'=>'Souffle', 'Lava Cake'=>'Lava Cake'], Input::old('product2'), array('class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('product3', 'Choose from here:') !!}
    {!! Form::select('product3',['None'=>'None','Chocolate cake'=>'Chocolate Cake','Fruit cake'=>'Fruit Cake','Apple Pie'=>'Apple Pie', 'Souffle'=>'Souffle', 'Lava Cake'=>'Lava Cake'], Input::old('product3'), array('class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('product4', 'Choose from here:') !!}
    {!! Form::select('product4',['None'=>'None','Chocolate cake'=>'Chocolate Cake','Fruit cake'=>'Fruit Cake','Apple Pie'=>'Apple Pie', 'Souffle'=>'Souffle', 'Lava Cake'=>'Lava Cake'], Input::old('product4'), array('class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('datetime', 'Collection Date') !!}
    {!! Form::date('datetime', Input::old('datetime'), array('class' => 'form-control')) !!}
  </div>

      {!! Form::submit('Edit the Order!', array('class' => 'btn btn-primary')) !!}

  {!! Form::close() !!}
  @endsection
