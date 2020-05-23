@extends('layouts.app')

@section('content')
<h2>Users</h2>

<table border=1 >
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Country</th>
        <th>State</th>
        <th>City</th>
    </tr>
    @foreach($finaldata as $value)

    <tr>
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['email'] }}</td>
        <td>{{ $value['country'] }}</td>
        <td>{{ $value['state'] }}</td>
        <td>{{ $value['city'] }}</td>
    </tr>
    @endforeach
</table>
@endsection
