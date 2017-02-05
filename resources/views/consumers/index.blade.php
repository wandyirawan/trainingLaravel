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
  </table>
@endsection

