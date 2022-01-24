@extends('layout')
@section('title', 'AddStudent')

@section('content')

<div class="container my-5">
   <form action="" method="post">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="name" name="name" class="form-control"  placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label  class="form-label">email</label>
        <input type="number" name="email" class="form-control"  placeholder="email@example.com">
      </div>
    <div class="mb-3">
        <label  class="form-label">city</label>
        <input type="city" name="city" class="form-control"  placeholder="city@example.com">
      </div>
   
      <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('index')}}" class="btn btn-primary">Go Back</a>
   </form>
</div>

@endsection