@extends('backend.master')
@section('content')
 
    
<form  action='{{ route("users.store")}}' method='POST'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="" aria-describedby="" name='name'>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="" aria-describedby="emailHelp" name='email'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="" name='password'>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection