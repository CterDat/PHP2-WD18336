@extends('layout.main')
@section('content')
    <h1>{{ $header }}</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
            <td>Hành động</td>
        </tr>
        @foreach($products as $pr)
            <tr>
                <td>{{ $pr->id }}</td>
                <td>{{ $pr->name }}</td>
                <td>{{ $pr->price }}</td>
                <td>{{ $pr->image }}</td>
                <td>
                    <a href="{{ route('edit-product/'.$pr->id) }}">Sửa</a>
                    <a href="">Xóa</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection