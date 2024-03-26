<?php

namespace App\Http\Controllers;

use App\Models\Catigory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products=Product::all();
        return view('admin.products.index',compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories=Catigory::all();
        return view('admin.products.create',compact('Categories'));
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
            'Category_id'=>'required',
            'name'=>'required',
            'price'=>'required',
        ]);
        $image_name=time().$request ->file('image')->getClientOriginalName();
        $request ->file('image')->move('uploads/',$image_name);
        Product::create([
            'Category_id'=>$request->Category_id,
            'name'=>$request->name,
            'body'=>$request->body,
            'price'=>$request->price,
            'sale_price'=>$request->sale_price,
            'image'=>$image_name,
            'is_active'=>$request->is_active,
        ]);
        alert()->success('عملیات موفق','ویرایش دسته با موفقیت انجام شد');
        return redirect()->route('admin.Products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $Product)
    {
        return view('admin.products.show',compact('Product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $Product)
    {
        $Categories = Catigory::all();
        return view('admin..products.edit',compact('Product','Categories'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $Product)
    {
        $request ->validate([
            'Category_id'=>'required',
            'name'=>'required',
            'price'=>'required',
        ]);
        if ($request->has('image'))
        {
            $image_name=time().$request ->file('image')->getClientOriginalName();
            $request ->file('image')->move('uploads/',$image_name);
        }
        else{
            $image_name=$Product->image;
        }

        $Product->update([
            'Category_id'=>$request->Category_id,
            'name'=>$request->name,
            'body'=>$request->body,
            'price'=>$request->price,
            'sale_price'=>$request->sale_price,
            'image'=>$image_name,
            'is_active'=>$request->is_active,
        ]);
        alert()->success('عملیات موفق','ویرایش دسته با موفقیت انجام شد');
        return redirect()->route('admin.Products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $Product)
    {
        $Product->delete();
        alert()->success('عملیات موفق','حذف دسته با موفقیت انجام شد');
        return redirect()->back();
    }
}
