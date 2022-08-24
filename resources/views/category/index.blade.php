@extends('welcome');
@section('content')
    <h4>Liệt kê danh mục</h4>
    <table class="table table-hover">
  <thead>
    <tr class="table-primary">
      <th scope="col">STT</th>
      <th scope="col">Title</th>
      <th scope="col">Locale</th>
      <th scope="col">Description</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>    
    @foreach($category as $key => $cate)
    <tr>
      <th scope="row">{{$key}}</th>
      <td>{{$cate->title}}</td>
      <td>{{$cate->locale}}</td>
      <td>{{$cate->description}}</td>
      <td class="d-flex">
          <form action="{{route('category.destroy',[$cate->id])}}" method="POST">
              @method('DELETE')
              @csrf
              <button onclick="return confirm('Bạn muốn xóa danh mục này không?');" class="btn btn-outline-danger mr-2">Xóa</button>
          </form>
        <a class="btn btn-outline-primary h-25" href="{{route('category.edit',[$cate->id])}}">Chỉnh sửa</a>
        
      </td>
    </tr>
    @endforeach
  </tbody>
@endsection