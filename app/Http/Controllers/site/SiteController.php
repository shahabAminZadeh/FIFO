<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Catigory;
use App\Models\Comment;
use App\Models\Coupon;
use App\Models\Post;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function shop(Catigory $Category)

    {
        if ($Category->id !=null){
            $Products=Product::where('Catigory_id',$Category->id)->get();
        }
        else{
            $Products=Product::all();
        }
        $Categories=Catigory::all();
        return view('site.shop',compact('Categories','Products'));
    }
    public function showProduct(Product $Product){
        $Comments=Comment::where('products_id',$Product->id)->where('is_active',1)->get();
        $similarProducts=Product::where('Catigory_id',$Product->Category_id)->get();
        return view('site.Product',compact('Product','similarProducts','Comments'));
    }
    public function blog(){
        $Posts=Post::all();
        return view('site.blog',compact('Posts'));
    }
    public function blog_single(Post $Post)
    {
        $news=Post::latest()->take(2)->get();
        $Categories=Catigory::all();
        return view('site.blog_single',compact('Post','Categories','news'));
    }
    public function CommentsSite(Request $request)
    {
        if (auth()->check())
        {
            $request->validate([
                'body'=>'required'
            ]);
            Comment::create
            ([
                'user_id'=>auth()->id(),
                'products_id'=>$request->products_id,
                'body'=>$request->body,
            ]);
            alert()->success('موفق','عملیات موفقیت لمیز است');
            return redirect()->back();
        }
        else
        {
            alert()->warning('هشدار','عملیات موفقیت امیز نبود!!!');
            return redirect()->back();
        }
    }
    public function CheckCoupon(Request $request)
    {
        if (auth()->check()) {
            $Coupon = Coupon::where('code', $request->code)->where('expired_at', '>', Carbon::now())->first();
            if ($Coupon == null) {
                alert()->error('هشدار', 'کد تخقیف وحود ندارد!!!');
                return redirect()->back();
            }
            if ($Coupon->type == 'amount') {
                session()->put('coupons', ['code' => $Coupon->code, 'amount' => $Coupon->amount]);
            } else {
                $totalPrice = \Cart::getTotal();
                $amount = (($totalPrice * $Coupon->percent) / 100) > ($Coupon->max_amoutn) ? $Coupon->max_amoutn : (($totalPrice * $Coupon->percent) / 100);
                session()->put('coupons', ['code' => $Coupon->code, 'amount' => $amount]);
            }
            alert()->success('موفق', 'عملیات موفقیت لمیز است');
            return redirect()->back();
        } else {
            alert()->warning('هشدار', 'اول باید در سایت لاگین کنید!!!');
            return redirect()->back();
        }
    }
    public function CheckOut()
    {
        return view('site.checkOut');
    }
}
