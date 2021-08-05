@extends('admin.layout.master')
@section('content')
    <form class="container" action="{{route('admin.update',$book->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Tên sách</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$book->book_name}}">
        </div>
        <div class="form-group">
            <label for="image">Ảnh hiển thị</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="author">Tên tác giả</label>
            <input type="text" class="form-control" id="author" name="author" value="{{$book->author_name}}">
        </div>
        <div class="form-group">
            <label for="price">giá</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$book->price}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Thể loại</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category">
                <option value="physics">Truyện</option>
                <option value="chemistry">Sách</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{$book->description}}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
@endsection
