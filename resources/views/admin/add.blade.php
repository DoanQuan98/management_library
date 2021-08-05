@extends('admin.layout.master')
@section('content')
    <form class="container" action="{{route('admin.create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên sách</label>
            <input type="text" class="form-control" id="name" name="name">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            @endif
        </div>
        <div class="form-group">
            <label for="image">Ảnh hiển thị</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="author">Tên tác giả</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Thể loại</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category">
                <option value="Math">Truyện</option>
                <option value="physics">Sách</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Thêm mới</button>
        </div>
    </form>
@endsection
