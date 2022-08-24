@extends('Welcome')
@section('content')
<br>
<h4>Cập nhật danh mục</h4>
<form method="POST" action="{{route('category.update',[$category->id])}}">
    @method('PUT')
    @csrf
  <div class="form-group" >
    <label for="exampleInputEmail1">Tên danh mục </label>
    <input type="text" class="form-control" value="{{$category->title}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="Nhập tên danh mục:">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mô tả </label>
    <input type="text" class="form-control" value="{{$category->description}}" name="desc" id="exampleInputPassword1" placeholder="Nhập mô tả:">
  </div>

<!-- {{--  <div class="form-group">--}}
{{--    <label for="exampleFormControlSelect1">Hiển thị</label>--}}
{{--    <select class="form-control" name="status" id="exampleFormControlSelect1">--}}
{{--      <option value="1">Hiển thị</option>--}}
{{--      <option value="0">Ẩn</option>--}}
{{--    </select>--}}
{{--  </div>--}} -->
  <button type="submit" class="btn btn-outline-info">Thêm</button>
</form>
@endsection
