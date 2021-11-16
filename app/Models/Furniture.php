<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    protected $fillable =['id','name','price','avatar'];
    public $timestamps = false;
    use HasFactory;
}
