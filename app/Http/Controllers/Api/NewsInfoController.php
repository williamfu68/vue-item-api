<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsInfo;

class NewsInfoController extends Controller
{
    public function info1(Request $request) {
        return NewsInfo::find(1);
    }
    public function info2(Request $request) {
        return NewsInfo::find(2);
    }
    public function info3(Request $request) {
        return NewsInfo::find(3);
    }
    public function info4(Request $request) {
        return NewsInfo::find(4);
    }
    public function info5(Request $request) {
        return NewsInfo::find(5);
    }
    public function info6(Request $request) {
        return NewsInfo::find(6);
    }
    public function info7(Request $request) {
        return NewsInfo::find(7);
    }
    public function info8(Request $request) {
        return NewsInfo::find(8);
    }
    public function info9(Request $request) {
        return NewsInfo::find(9);
    }
    public function info10(Request $request) {
        return NewsInfo::find(10);
    }
}
