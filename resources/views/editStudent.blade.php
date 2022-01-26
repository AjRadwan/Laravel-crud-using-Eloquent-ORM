@extends('layout')
@section('title', 'AddStudent')

@section('content')

<div class="container my-5">
   <form action="" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="name" name="name" class="form-control"  value="{{$student->name}}">
      </div>
      <div class="mb-3">
        <label  class="form-label">Roll</label>
        <input type="email" name="email" class="form-control"  value="{{$student->email}}">
      </div>
    <div class="mb-3">
        <label  class="form-label">Address</label>
        <input type="city" name="city" class="form-control"  value="{{$student->city}}">
      </div>
   
      <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('index')}}" class="btn btn-primary">Go Back</a>
   </form>
</div>

@endsection