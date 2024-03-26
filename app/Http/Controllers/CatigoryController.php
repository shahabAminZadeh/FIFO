<?php

namespace App\Http\Controllers;

use App\Models\Catigory;
use Illuminate\Http\Request;

class CatigoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categories=Catigory::all();
        return view('admin.Cat.index',compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Cat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

          'name'=>'required'

        ]);
        Catigory::create([
           'name'=>$request->name,
        ]);
        alert()->success('عملیات موفق','ثبت عملیات با موفقیت انجام شد');
        return redirect()->route('admin.Categories.create');


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Catigory $Category)
    {
        return view('admin.Cat.show',compact('Category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Catigory $Category)
    {
        return view('admin.Cat.edit',compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Catigory $Category)
    {
        $request->validate([

            'name'=>'required'

        ]);
        $Category->update([
            'name'=>$request->name,
        ]);
        alert()->success('عملیات موفق','ویرایش دسته با موفقیت انجام شد');
        return redirect()->route('admin.Categories.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catigory $Category)
    {
        $Category->delete();
        alert()->success('عملیات موفق','ثبت عملیات با موفقیت انجام شد');
        return redirect()->back();
    }
}
