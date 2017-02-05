@extends('admin_template')

@section('content')
  <h2>Consumer area</h2>
  <a href="{{ route('consumer.create') }}">Create</a>
  <table class="table table-bordered table-hover dataTable">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($consumers as $consumer)
      <tr>
        <td>{{$consumer->name}}</td>
        <td>{{$consumer->address}}</td>
        <td>{{$consumer->city}}</td>
        <td>{{$consumer->state}}</td>
        <td>{{$consumer->phone}}</td>
        <td>{{$consumer->email}}</td>
        <td>{{$consumer->gender}}</td>
        <td>
          {{ Html::linkAction('ConsumerController@edit', 'EDIT', array($consumer->id)) }} 
          {!! Form::model($consumer, ['route' => ['consumer.destroy', $consumer->id], 'method' => 'DELETE']) !!}
            {{ Form::submit('DELETE', ['name' => 'submit']) }}
          {!! Form::close() !!}  
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection

