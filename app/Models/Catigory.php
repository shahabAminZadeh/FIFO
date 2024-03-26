<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catigory extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='catigories';
    public function Products(){
        return $this->hasMany(Product::class);
    }

}
