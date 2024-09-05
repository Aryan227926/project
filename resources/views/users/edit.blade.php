@extends('backend.master')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form  action='{{ route("users.update", $user->id)}}' method='POST'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="" aria-describedby="" name='name'value='{{ $user->name}}'>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="" aria-describedby="emailHelp" name='email'value='{{ $user->email}}'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="" name='password' value='{{ $user->password}}'>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection