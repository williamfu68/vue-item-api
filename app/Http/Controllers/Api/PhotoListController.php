<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhotoList;
use Illuminate\Support\Facades\DB;

class PhotoListController extends Controller
{
    public function all() {
        return PhotoList::all();
    }
    public function asRequired1() {
        return DB::select('select * from imglist where id between 1 and 2');
    }
    public function asRequired2() {
        return DB::select('select * from imglist where id between 3 and 4');
    }
    public function asRequired3() {
        return DB::select('select * from imglist where id between 5 and 6');
    }
    public function asRequired4() {
        return DB::select('select * from imglist where id between 7 and 8');
    }
    public function asRequired5() {
        return DB::select('select * from imglist where id between 9 and 10');
    }
    public function asRequired6() {
        return DB::select('select * from imglist where id between 11 and 12');
    }
    public function asRequired7() {
        return DB::select('select * from imglist where id between 13 and 14');
    }
    public function asRequired8() {
        return DB::select('select * from imglist where id between 15 and 16');
    }
}
