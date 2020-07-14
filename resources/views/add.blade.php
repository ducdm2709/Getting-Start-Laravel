@extends('layout')

@section('content')
<div class="col-6">
    <form method="post" action="" class="mt-5">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" placeholder="Enter address" id="address" name="address">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
   
@endsection