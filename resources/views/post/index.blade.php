@extends('welcome')
@section('content')
    <h4>Liệt kê danh mục</h4>
    <table class="table table-hover">
  <thead>
    <tr class="table-info">
      <th scope="col">STT</th>
      <th scope="col">Title</th>
      <th scope="col">Locale</th>
      <th scope="col">Content</th>
      
      <th scope="col">Image</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>    
    @foreach($post as $key => $pos)
    <tr>
      <th scope="row">{{$key}}</th>
      <td>{{$pos->title}}</td>
      <td>{{$pos->locale}}</td>
      <td>{{$pos->content}}</td>
      
      <td><img src="{{asset('/storage/post/'.$pos->image)}}" width="200px" height="200px" alt=""></td>
      <td class="d-flex">
          <form action="{{route('post.destroy',[$pos->id])}}" method="POST">
              @method('DELETE')
              @csrf
              <button onclick="return confirm('Bạn muốn xóa bài viết này không?');" class="btn btn-outline-danger mr-2">Xóa</button>
          </form>
        <a class="btn btn-outline-primary" href="{{route('post.edit',[$pos->post_id])}}">Chỉnh sửa</a>
        
      </td>
    </tr>
    @endforeach
  </tbody>
@endsection