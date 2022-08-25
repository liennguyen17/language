<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('welcome.title_website')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- Styles -->



    </head>
    <body >
        <div class="container">
            <div class="col-md-12">
                <!-- <h2>@lang('Welcome.title_website')</h2> -->
                <h3 class="mt-5 text-md-center">{{__('welcome.title_website')}}</h3>
                <div class="btn-group btn-group-lg my-3">

                    <a class="btn btn-outline-info" href="{{ url('lang/en')}}">{{__('welcome.eng_lang')}}</a>
                    <a class="btn btn-outline-info" href="{{ url('lang/jp')}}">{{__('welcome.japan_lang')}}</a>
                    <a class="btn btn-outline-info" href="{{ url('lang/vn')}}">{{__('welcome.vietnam_lang')}}</a>
                </div>
                <br>
                <div class="btn-group my-3" >

                    <a href="{{route('category.create')}}" class="btn btn-info">Tạo danh mục</a>
                    <a href="{{route('category.index')}}" class="btn btn-info">Liệt kê danh mục</a>
                    <a href="{{route('post.create')}}" class="btn btn-info">Tạo bài viết</a>
                    <a href="{{route('post.index')}}" class="btn btn-info">Liệt kê bài viết</a>
                    <!-- <a href="{{url('/')}}" class="btn btn-info">Trang chủ</a> -->
                </div>
                
                <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">{{__('welcome.homepage')}}<span class="sr-only">(current)</span></a>
                        </li>
                       
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    </nav> -->
                    @yield('content')
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    </body>
</html>
