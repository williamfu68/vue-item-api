<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoList extends Model
{
    protected $table = 'imgList';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
