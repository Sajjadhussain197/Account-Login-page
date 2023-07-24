@extends('layout')
@section('content')
<h1>User List page</h1>
{{-- <?php print_r($user)?> --}}
<div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
@foreach ($user as $u)
<tbody>
    <tr>
      <th scope="row">{{ $u->id }}</th>
      <td>{{ $u->name }}</td>
      <td>{{ $u->email }}</td>

    </tr>

  </tbody>

@endforeach












  </table>







</div>
@endsection
