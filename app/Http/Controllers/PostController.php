<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Posts=Post::all();
        return view('admin.post.index', compact('Posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'title'=>'required',
            'writer'=>'required',
            'body'=>'required',
            'image'=>'required',
        ]);
        $image_name=time().$request ->file('image')->getClientOriginalName();
        $request ->file('image')->move('uploads/',$image_name);
        Post::create([
            'title'=>$request->title,
            'writer'=>$request->writer,
            'body'=>$request->body,
            'image'=>$image_name,
        ]);
        alert()->success('عملیات موفق','ویرایش دسته با موفقیت انجام شد');
        return redirect()->route('admin.Post.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $Post)
    {
        return view('admin.post.show',compact('Post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $Post)
    {
        return view('admin.Post.edit',compact('Post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $Post)
    {
        $request ->validate([
            'title'=>'required',
            'writer'=>'required',
            'body'=>'required',
        ]);
        if ($request->has('image'))
        {
            $image_name=time().$request ->file('image')->getClientOriginalName();
            $request ->file('image')->move('uploads/',$image_name);
        }
        else{
            $image_name=$Post->image;
        }

        $Post->update([
            'title'=>$request->title,
            'writer'=>$request->writer,
            'body'=>$request->body,
            'image'=>$image_name,
        ]);
        alert()->success('عملیات موفق','ویرایش دسته با موفقیت انجام شد');
        return redirect()->route('admin.Post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $Post)
    {
        $Post->delete();
        alert()->success('عملیات موفق','حذف دسته با موفقیت انجام شد');
        return redirect()->back();
    }
}
