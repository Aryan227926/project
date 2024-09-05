@extends('backend.master')
@section('content')

<a  href="{{ route('users.create')}}" class="btn btn-primary">Create New</a>
<br>
<body>
   <table class='table'>
    <thead>
<tr>
    <th scope='col'>S.N</th>
    <th scope='col'>Name</th>
    <th scope='col'>Email</th>
    <th scope='col'>Action</th>
</tr>
</thead>
<tbody>


@forelse($users as $user)

<tr>
    <th scope="row">{{ $loop->iteration}}</th>
    <td>{{$user->name ?? '' }}</td>
    <td>{{ $user->email ?? ''}}</td>
    <td><a  href="{{ route('users.edit', $user->id)}}" class="btn btn-secondary">Edit</a> | <a  href="{{ route('users.delete',$user->id)}}" class="btn btn-danger">Delete</a></td>
</tr>

@empty
  <td> No Data</td>
  @endforelse
  </tbody>
</table>

@endsection