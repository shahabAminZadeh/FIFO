<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Coupons = Coupon::all();
        return view('admin.Coupons.index',compact('Coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Coupons.create');
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
            'name'=>'required',
            'code'=>'required|unique:coupons,code',
            'type'=>'required',
            'amount'=>'required_if:type,=,amount',
            'percent'=>'required_if:type,=,percent',
            'max_amount'=>'required_if:type,=,percent',
            'expired_at'=>'required',
        ]);
        Coupon::create([
            'name'=>$request->name,
            'code'=>$request->code,
            'type'=>$request->type,
            'amount'=>$request->amount,
            'percent'=>$request->percent,
            'max_amount'=>$request->max_amount,
            'expired_at'=>$request->expired_at,
            'body'=>$request->body,
        ]);
        alert()->success('عملیات موفق','ویرایش دسته با موفقیت انجام شد');
        return redirect()->route('admin.Coupons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon  $Coupon)
    {
        return view('admin.Coupons.show',compact('Coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $Coupon)
    {
        return view('admin.Coupons.edit',compact('Coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Coupon $Coupon)
    {
        $request->validate([
            'name'=>'required',
            'code'=>'required',
            'type'=>'required',
            'amount'=>'required_if:type,=,amount',
            'percent'=>'required_if:type,=,percent',
            'max_amount'=>'required_if:type,=,percent',
        ]);
        $Coupon->update([
            'name'=>$request->name,
            'code'=>$request->code,
            'type'=>$request->type,
            'amount'=>$request->amount,
            'percent'=>$request->percent,
            'max_amount'=>$request->max_amount,
            'expired_at'=>$request->expired_at,
            'body'=>$request->body,
        ]);
        alert()->success('عملیات موفق','ویرایش دسته با موفقیت انجام شد');
        return redirect()->route('admin.Coupons.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $Coupon)
    {
        $Coupon->delete();
        alert()->success('عملیات موفق','حذف  با موفقیت انجام شد');
        return redirect()->back();
    }
}
