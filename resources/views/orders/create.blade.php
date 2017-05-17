@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-6">
        {!! Form::open(array('url' => 'orders')) !!}

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

        {!! Form::submit('Place your order!', array('class' => 'btn btn-primary')) !!}

        {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
