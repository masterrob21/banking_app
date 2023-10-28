@extends('layouts.app')

@section('content')
<div class="container bg-white">
  <h1>List of Customers</h1>
  <div>
    <a class="btn btn-secondary" href="">New client</a>
  </div>
  <p></p>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th>Photo</th>
          <th>CustomerNo</th>
          <th>Surname</th>
          <th>OtherNames</th>
          <th>D.O.B</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @if(count($clients) < 1)
        <tr>
          <td colspan="5"><h2 class="text-danger">No record found</h2></td>
        </tr>
        @else
        @foreach ($clients as $client)
          <tr>
            <td><img class="image_icon" src="{{ asset('storage/' . $client->image) }}" alt="photo"></td>
            <td>{{ $client->clientNumber }}</td>
            <td>{{ $client->surname }}</td>
            <td>{{ $client->othernames }}</td>
            <td>{{ $client->dob }}</td>
            <td>
              <a class="btn btn-secondary btn-sm" href=""><i class="bi bi-person-vcard"></i></a>
              <a class="btn btn-warning btn-sm" href=""><i class="bi bi-pencil-fill"></i></a>
              <a class="btn btn-danger btn-sm" href=""><i class="bi bi-trash"></i></a>
            </td>
          </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
</div>
@endsection