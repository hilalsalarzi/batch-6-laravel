@extends('front-end.layout.app')

@section('title', 'Home Page')

@section('content')



<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($register as $users)

        {{ $users->city }}
        {{ $users->address }}


      <tr>

        <th scope="row">

            {{ $users->id }}
        </th>
        <td>{{ $users->name }}</td>
        <td>        {{ $users->email }}
        </td>
        <td>        {{ $users->phone }}
        </td>
      </tr>
      @endforeach
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>John</td>
        <td>Doe</td>
        <td>@social</td>
      </tr>
    </tbody>
  </table>

@endsection
