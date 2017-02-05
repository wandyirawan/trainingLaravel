@extends('admin_template')

@section('content')
  <div class="box box-info">
    <div class="box-body">
    
  <div class="col-sm-4">
    @if( isset($consumer) )
      {!! Form::model($consumer, ['route' => ['consumer.update', $consumer->id], 'method' => 'PUT']) !!}
      echo "banana";
    @else
      {!! Form::open(['route' => 'consumer.store']) !!}
    @endif

    <div class="form-group">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', Input::old('fieldname1'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('address', 'Adress') !!}
      {!! Form::text('address',  Input::old('fieldname1'),['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('city', 'City') !!}
      {!! Form::text('city',  Input::old('fieldname1'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('state', 'State') !!}
      {!! Form::text('state',  Input::old('fieldname1'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('phone', 'Phone') !!}
      {!! Form::text('phone',  Input::old('fieldname1'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email',  Input::old('fieldname1'),['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('gender', 'Gender') !!}
      
      {!! Form::label('gender', 'Male') !!}
      {!! Form::radio('gender', 'M', ['class' => 'form-control']) !!}
      {!! Form::label('gender', 'Female') !!}
      {!! Form::radio('gender', 'F', ['class' => 'form-control']) !!}
    </div>

     {{ Form::submit('Save', ['name' => 'submit']) }}

  {!! Form::close() !!}  

</div>
    </div>
  </div>
@endsection

