<?php

use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\CatigoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\site\CartController;
use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\site\WishListController;
use App\Models\site\WishList;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashbord',function() {
    return view('admin.dashbord');
});

Route::prefix('admin/panel/')->name('admin.')->group(function (){
    Route::resource('Categories',CatigoryController::class);
    Route::resource('Products',ProductController::class);
    Route::resource('Post',PostController::class);
    Route::resource('comment',CommentController::class);
    Route::resource('Coupons',CouponController::class);

});
Route::get('Pcomment/{Comment}',[CommentController::class,'is_active'])->name('comments.is_active');
Route::get('/',function (){
    return view('site.index');
})->name('siteHome');
Route::get('shop/{Category?}',[SiteController::class,'shop'])->name('shop');
Route::get('product/{Product}',[SiteController::class,'showProduct'])->name('showProduct');
Route::get('blog/',[SiteController::class,'blog'])->name('blog');
Route::post('site/comments/',[SiteController::class,'CommentsSite'])->name('site.comments.store') ;
Route::get('addToWishlist/{Product}',[WishListController::class,'add'])->name('site.addToWishlist');
Route::get('addToCart/{Product}',[CartController::class,'add'])->name('site.addToCart');
Route::get('site/Cart',[CartController::class,'index'])->name('site.Cart');
Route::put('Cart/update',[CartController::class,'update'])->name('Cart.update');
Route::get('Cart/clear',[CartController::class,'Clear'])->name('Cart.Clear');
Route::get('Cart/remove/{Id}',[CartController::class,'remove'])->name('Cart.remove');
Route::get('removeFromWishlist/{Product}',[WishListController::class,'remove'])->name('site.removeFromWishlist');
Route::post('Coupon/Check',[SiteController::class,'CheckCoupon'])->name('Coupon.check');
Route::get('check_out',[SiteController::class,'CheckOut'])->name('CheckOut');
Route::post('Payment',[PaymentController::class,'Payment'])->name('site.Payment');
Route::get('Payment-verify',[PaymentController::class,'PaymentVerify'])->name('site.Payment.verify');
Route::get('blog/{Post}',[SiteController::class,'blog_single'])->name('blog_single');
Route::get('logout',function (){
    auth()->logout();
});
