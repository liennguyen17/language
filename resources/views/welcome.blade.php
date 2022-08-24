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
                <h3 class="mt-5">{{__('welcome.title_website')}}</h3>
                <a href="{{ url('lang/en')}}">{{__('welcome.eng_lang')}}</a>
                <a href="{{ url('lang/jp')}}">{{__('welcome.japan_lang')}}</a>
                <a href="{{ url('lang/vn')}}">{{__('welcome.vietnam_lang')}}</a>
                <br>
                <div class="btn-group my-3" >

                    <a href="{{route('category.create')}}" class="btn btn-info">Tạo danh mục</a>
                    <a href="{{route('category.index')}}" class="btn btn-info">Liệt kê danh mục</a>
                    <a href="" class="btn btn-info">Tạo bài viết</a>
                    <a href="" class="btn btn-info">Liệt kê bài viết</a>
                    <a href="" class="btn btn-info">Trang chủ</a>
                </div>
                @yield('content')
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    </body>
</html>
