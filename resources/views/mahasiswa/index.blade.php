@extends('layout.master')
@section('title', 'Halaman Fakultas')

@section('content')
<h2>Fakultas</h2>

<table>
    <tr>
        <th>NPM</th>
        <th>Nama</th>
    </tr>
    @foreach ($allmahasiswa as $i)
    <tr>
        <td>{{$i->npm}}</td>
        <td>{{$i->nama}}</td>
    </tr>
    @endforeach
</table>

@endsection
