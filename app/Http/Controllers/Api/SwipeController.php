<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Swipe;

class SwipeController extends Controller
{
    public function all() {
        return Swipe::all();
    }
}
