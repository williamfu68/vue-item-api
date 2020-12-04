<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsList;

class NewsListController extends Controller
{
    public function all() {
        return NewsList::all();
    }
}
