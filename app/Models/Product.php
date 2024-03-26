<?php

namespace App\Models;

use App\Models\site\WishList;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Catigory(){
        return $this->belongsTo(Catigory::class);
    }
    public function Comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function checkWishList($userId)
    {
        return $this->hasMany(WishList::class)->where('User_id',$userId)->exists();

    }
}
