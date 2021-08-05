@extends('admin.layout.master')
@section('content')
    <div class="container">
        <form class="form-inline my-2 my-lg-0" method="get" action="{{route('admin.search')}}">
            <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div>
            <a class="btn btn-primary" href="{{route('admin.create')}}">Thêm</a>
        </div>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Sách</th>
                <th>Hình ảnh</th>
                <th>Tên tác giả</th>
                <th>giá</th>
                <th>Thể loại</th>
                <th>Mô tả</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($book as $key => $books)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $books->book_name }}</td>
                    <td><img src="{{ asset('storage/'.$books->image)}}" alt="" style="width: 40px;height: 50px"></td>
                    <td>{{ $books->author_name }}</td>
                    <td>{{ $books->categories }}</td>
                    <td>{{ $books->price }}</td>
                    <td>{{ $books->description }}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.edit',$books->id)}}">Sửa</a></td>
                    <td><a class="btn btn-danger" href="{{ route('admin.delete',$books->id) }}">Xóa</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
