@extends('welcome')
@section('content')

<h4>Thêm bài viết</h4>
<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="exampleFormControlInput1">Tên bài viết</label>
    <input type="text" class="form-control" required  name="title" id="exampleFormControlInput1" placeholder="Nhập tên bài viết:">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Nội dung bài viết</label>
    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" required  rows="4" placeholder="Nhập nội dung:"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tác giả</label>
    <input type="text" class="form-control" required name="author" id="exampleFormControlInput1" placeholder="Nhập tên tác giả:">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Hình ảnh</label>
    <input type="file" name="image" required class="form-control" id="exampleFormControlInput1" placeholder="Chọn tệp:">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Danh mục bài viết</label>
    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
      @foreach($category as $key => $cate)

      <option value="{{$cate->category_id}}">{{$cate->title}}</option>

      @endforeach

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Hiển thị</label>
    <select class="form-control" name="status" id="exampleFormControlSelect1">
      <option value="1">Hiện</option>
      <option value="0">Ẩn</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-outline-info">Thêm bài viết</button>

</form>
@endsection