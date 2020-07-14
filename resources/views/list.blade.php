@extends('layout')

@section('content')
    <h1>List Restaurant are here!</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($listRestaurant as $item)
                <tr>
                    <td>{{$item -> name}}</td>
                    <td>{{$item -> email}}</td>
                    <td>{{$item -> address}}</td>
              </tr>
            @endforeach
        </tbody>
      </table>
@endsection