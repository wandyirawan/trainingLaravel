@extends('admin_template')

@section('content')
  <div class="box box-info">
    <div class="box-body">
    
  <div class="col-sm-4">
  {!! Form::model($consumer, ['class'=>'form-horizontal','action' => 'ConsumerController@store']) !!}

    <div class="form-group">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('address', 'Adress') !!}
      {!! Form::text('address', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('city', 'City') !!}
      {!! Form::text('city', '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('state', 'State') !!}
      {!! Form::text('state', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('phone', 'Phone') !!}
      {!! Form::text('phone', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email', '',['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('gender', 'Gender') !!}
      {!! Form::radio('gender', 'F', ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-success" type="submit">Create</button>

  {!! Form::close() !!}  

</div>
    </div>
  </div>
@endsection

