@extends('layout.main')
@section('content')
    <h1>{{ $header }}</h1>
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif
    <a href="{{ route('add-product/') }}">Thêm</a>
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
                <td>

                    <a href="{{ route('detail-product/'.$pr->id) }}">Sửa</a>
                    <a href="{{ route('delete-product/'.$pr->id) }}">Xóa</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection