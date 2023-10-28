@extends('layouts.app')

@section('content')
<div class="container">
  <h1>List of clients</h1>
  <div>
    <a class="btn btn-secondary" href="">New client</a>
  </div>

  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Photo</th>
          <th>Surname</th>
          <th>OtherNames</th>
          <th>D.O.B</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
</div>
@endsection