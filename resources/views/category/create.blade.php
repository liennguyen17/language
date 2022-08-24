@extends('Welcome')
@section('content')
<br>
<h4>Thêm danh mục</h4>
<form method="POST" action="{{route('category.store')}}">
    @csrf
  <div class="form-group" >
    <label for="exampleInputEmail1">Tên danh mục (Tiếng Việt)</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title:vn" placeholder="Nhập tên danh mục:">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mô tả (Tiếng Việt)</label>
    <input type="text" class="form-control" name="desc:vn" id="exampleInputPassword1" placeholder="Nhập mô tả:">
  </div>
  <div class="form-group" >
    <label for="exampleInputEmail1">Tên danh mục (Tiếng Anh)</label>
    <input type="text" class="form-control" name="title:en" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên danh mục:">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mô tả (Tiếng Anh)</label>
    <input type="text" class="form-control" name="desc:en" id="exampleInputPassword1" placeholder="Nhập mô tả:">
  </div>
  <div class="form-group" >
    <label for="exampleInputEmail1">Tên danh mục (Tiếng Nhật)</label>
    <input type="text" class="form-control" name="title:jp" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên danh mục:">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mô tả (Tiếng Nhật)</label>
    <input type="text" class="form-control" name="desc:jp" id="exampleInputPassword1" placeholder="Nhập mô tả:">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Hiển thị</label>
    <select class="form-control" name="status" id="exampleFormControlSelect1">
      <option value="1">Hiển thị</option>
      <option value="0">Ẩn</option>
    </select>
  </div>
  <button type="submit" class="btn btn-outline-info">Thêm</button>
</form>
@endsection