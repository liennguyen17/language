@extends('welcome')
@section('content')

<h4>Cập nhật bài viết</h4>
<form action="{{route('post.update',[$post->post_id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
    <label for="exampleFormControlInput1">Tên bài viết</label>
    <input type="text" class="form-control" required  name="title" value="{{$post->title}}" id="exampleFormControlInput1" placeholder="Nhập tên bài viết:">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Nội dung bài viết</label>
    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" required  rows="4" placeholder="Nhập nội dung:">{{$post->content}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tác giả</label>
    <input type="text" class="form-control" required name="author" value="{{$post->post->author}}" id="exampleFormControlInput1" placeholder="Nhập tên tác giả:">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Hình ảnh</label>
    <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="Chọn tệp:">
    <img src="{{asset('/storage/post/'.$post->image)}}" width="150px" height="150px" alt="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Danh mục bài viết</label>
    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
      @foreach($category as $key => $cate)

      <option {{$cate->category_id==$post->category_id && $cate->locale==$locale ? 'selected' : ''}} value="{{$cate->category_id}}">{{$cate->title}}</option>

      @endforeach

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Hiển thị</label>
    <select class="form-control" name="status" id="exampleFormControlSelect1">
    @if($post->post->status==1)
      <option selected value="1">Hiện</option>
      <option value="0">Ẩn</option>
    @else
      <option value="1">Hiện</option>
      <option selected value="0">Ẩn</option>
    @endif
    </select>
  </div>
  
  <button type="submit" class="btn btn-outline-info">Cập nhật bài viết</button>

</form>
@endsection