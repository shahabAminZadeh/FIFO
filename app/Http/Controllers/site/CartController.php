<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $Product)
    {
        $rowId=$Product->id;
        \Cart::add(array(
            'id' => $rowId,
            'name' => $Product->name,
            'price' => $Product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $Product,
        ));
        alert()->success('موفق','عملیات موفقیت لمیز است');
        return redirect()->back();
    }
    public function index(){
        return view('site.Carts.index');
    }
    public function update(Request $request)
    {
        foreach ($request->quantity as $key=>$value)
        {
            \Cart::update($key, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $value
                ),
            ));
            alert()->success('موفق','سبد خرید شما با موفقیت بروزرسانی شد');
            return redirect()->back();
        }
    }
    public function remove($Id)
    {
        \Cart::remove($Id);
        alert()->success('موفق','با موفقیت حذف شد');
        return redirect()->back();
    }
    public function Clear()
    {
        \Cart::clear();
        alert()->success('موفق','سبد خرید شما با موفقیت خالی شد');
        return redirect()->back();
    }
}
