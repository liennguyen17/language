<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostTranslation;
use App\Models\Category;
use App\Models\CategoryTranslation;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = Session::get('locale');
        $post = PostTranslation::with('category')->where('locale',$locale)->get();
        return view('post.index')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locale = Session::get('locale');
        $category = CategoryTranslation::where('locale',$locale)->get();
        return view('post.create')->with(compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $locale = Session::get('locale');

        $post = new Post();
        $post->status = $data['status'];
        $post->author = $data['author'];
        $post->save();

        $post_translate = new PostTranslation();

        $image = $request->file('image');

        if($image){
            $get_name_image = $image->getClientOriginalName();//lay ten hinh anh abc.jpg

            $name_image = current(explode('.',$get_name_image));//tach ten anh dua vao dau cham abc

            $new_image = $name_image.rand(0,9999).'.'.$image->getClientOriginalExtension();//ten hinh anh cong voi duoi cua no_ abs8765.jpg

            $image->storeAs('public/post',$new_image);
        }
        $post_translate->title = $data['title'];
        $post_translate->content = $data['content'];
        $post_translate->category_id = $data['category_id'];
        $post_translate->post_id = $post->id;
        $post_translate->locale = $locale;
        $post_translate->image = $new_image;
        $post_translate->save();

        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $locale = Session::get('locale');
        $post = PostTranslation::with('post')->where('post_id',$id)->where('locale',$locale)->first();
        $category = CategoryTranslation::where('locale',$locale)->get();
        return view('post.edit')->with(compact('category','post','locale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $locale = Session::get('locale');

        $post = Post::find($id);
        $post->status = $data['status'];
        $post->author = $data['author'];
        $post->save();

        $post_translate = PostTranslation::where('post_id',$id)->where('locale',$locale)->first();

        $image = $request->file('image');

        if($image){
            $get_name_image = $image->getClientOriginalName();//lay ten hinh anh abc.jpg

            $name_image = current(explode('.',$get_name_image));//tach ten anh dua vao dau cham abc

            $new_image = $name_image.rand(0,9999).'.'.$image->getClientOriginalExtension();//ten hinh anh cong voi duoi cua no_ abs8765.jpg

            $image->storeAs('public/post',$new_image);
            $post_translate->image = $new_image;
        }
        $post_translate->title = $data['title'];
        $post_translate->content = $data['content'];
        $post_translate->category_id = $data['category_id'];
        $post_translate->post_id = $post->id;
        $post_translate->locale = $locale;
        
        $post_translate->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        PostTranslation::find($id)->delete();
        return redirect()->back();
    }
}
