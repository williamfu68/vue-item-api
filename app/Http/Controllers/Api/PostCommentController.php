<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class PostCommentController extends Controller
{
    public function insert(Request $request) {
        $content = $request->content;
        // Log::info($content);
        return DB::insert("insert into comments (user_name,add_time,content) values ('匿名用户','2020-07-04 12:12:12','$content')");
    } 
}
