<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\site\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function add(Product $Product)
    {
        if (auth()->check())
        {
            //$wishList=WishList::where('Product_id',$Product->id)->where('user_id',auth()->id())->count();
            if ($Product->checkWishList(auth()->id()))
            {
                alert()->Warning('ناموفق','به لیست علاقه مندی ها اضافه نشد');
                return redirect()->back();
            }
            else
            {
                WishList::create([
                    'User_id'=>auth()->id(),
                    'Product_id'=>$Product->id,
                ]);
                alert()->success('موفق','به لیست علاقه مندی ها اضافه شد');
                return redirect()->back();

            }
        }
        else
        {
            alert()->error('هشدار','برای اضافه کردن به لیست باید ابتدا در سایت ثبت نام کنید');
            return redirect()->back();
        }
    }
    public function remove(Product $Product)
    {
        if (auth()->check())
        {
            //$wishList=WishList::where('Product_id',$Product->id)->where('user_id',auth()->id())->count();
            if(WishList::where('Product_id',$Product->id)->where('user_id',auth()->id())->delete())
            {
                alert()->Warning('ناموفق','به لیست علاقه مندی ها اضافه نشد');
                return redirect()->back();
            }
        }
        else
        {
            alert()->error('هشدار','برای اضافه کردن به لیست باید ابتدا در سایت ثبت نام کنید');
            return redirect()->back();
        }
    }
}
