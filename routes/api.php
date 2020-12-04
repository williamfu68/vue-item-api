<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getSwipe','Api\SwipeController@all');

Route::get('/getNewsList','Api\NewsListController@all');

Route::get('/getNewsInfo1','Api\NewsInfoController@info1');
Route::get('/getNewsInfo2','Api\NewsInfoController@info2');
Route::get('/getNewsInfo3','Api\NewsInfoController@info3');
Route::get('/getNewsInfo4','Api\NewsInfoController@info4');
Route::get('/getNewsInfo5','Api\NewsInfoController@info5');
Route::get('/getNewsInfo6','Api\NewsInfoController@info6');
Route::get('/getNewsInfo7','Api\NewsInfoController@info7');
Route::get('/getNewsInfo8','Api\NewsInfoController@info8');
Route::get('/getNewsInfo9','Api\NewsInfoController@info9');
Route::get('/getNewsInfo10','Api\NewsInfoController@info10');

Route::get('/getComments1/pageIndex=1','Api\CommentController@all');
Route::get('/getComments1/pageIndex=2','Api\CommentController@all');
Route::get('/getComments2/pageIndex=1','Api\CommentController@all');
Route::get('/getComments2/pageIndex=2','Api\CommentController@all');
Route::get('/getComments3/pageIndex=1','Api\CommentController@all');
Route::get('/getComments3/pageIndex=2','Api\CommentController@all');
Route::get('/getComments4/pageIndex=1','Api\CommentController@all');
Route::get('/getComments4/pageIndex=2','Api\CommentController@all');
Route::get('/getComments5/pageIndex=1','Api\CommentController@all');
Route::get('/getComments5/pageIndex=2','Api\CommentController@all');
Route::get('/getComments6/pageIndex=1','Api\CommentController@all');
Route::get('/getComments6/pageIndex=2','Api\CommentController@all');
Route::get('/getComments7/pageIndex=1','Api\CommentController@all');
Route::get('/getComments7/pageIndex=2','Api\CommentController@all');
Route::get('/getComments8/pageIndex=1','Api\CommentController@all');
Route::get('/getComments8/pageIndex=2','Api\CommentController@all');
Route::get('/getComments9/pageIndex=1','Api\CommentController@all');
Route::get('/getComments9/pageIndex=2','Api\CommentController@all');
Route::get('/getComments10/pageIndex=1','Api\CommentController@all');
Route::get('/getComments10/pageIndex=2','Api\CommentController@all');

Route::post('/postComments','Api\PostCommentController@insert');

Route::get('/getAllCategory','Api\CategoryController@all');

Route::get('/getPhoto/0','Api\PhotoListController@all');

Route::get('/getPhoto/1','Api\PhotoListController@asRequired1');
Route::get('/getPhoto/2','Api\PhotoListController@asRequired2');
Route::get('/getPhoto/3','Api\PhotoListController@asRequired3');
Route::get('/getPhoto/4','Api\PhotoListController@asRequired4');
Route::get('/getPhoto/5','Api\PhotoListController@asRequired5');
Route::get('/getPhoto/6','Api\PhotoListController@asRequired6');
Route::get('/getPhoto/7','Api\PhotoListController@asRequired7');
Route::get('/getPhoto/8','Api\PhotoListController@asRequired8');

Route::get('/getPhotoInfo/1','Api\PhotoInfoController@info1');
Route::get('/getPhotoInfo/2','Api\PhotoInfoController@info2');
Route::get('/getPhotoInfo/3','Api\PhotoInfoController@info3');
Route::get('/getPhotoInfo/4','Api\PhotoInfoController@info4');
Route::get('/getPhotoInfo/5','Api\PhotoInfoController@info5');
Route::get('/getPhotoInfo/6','Api\PhotoInfoController@info6');
Route::get('/getPhotoInfo/7','Api\PhotoInfoController@info7');
Route::get('/getPhotoInfo/8','Api\PhotoInfoController@info8');
Route::get('/getPhotoInfo/9','Api\PhotoInfoController@info9');
Route::get('/getPhotoInfo/10','Api\PhotoInfoController@info10');
Route::get('/getPhotoInfo/11','Api\PhotoInfoController@info11');
Route::get('/getPhotoInfo/12','Api\PhotoInfoController@info12');
Route::get('/getPhotoInfo/13','Api\PhotoInfoController@info13');
Route::get('/getPhotoInfo/14','Api\PhotoInfoController@info14');
Route::get('/getPhotoInfo/15','Api\PhotoInfoController@info15');
Route::get('/getPhotoInfo/16','Api\PhotoInfoController@info16');

Route::get('/getThumbnail/1','Api\ThumbnailController@thumb1');
Route::get('/getThumbnail/2','Api\ThumbnailController@thumb2');
Route::get('/getThumbnail/3','Api\ThumbnailController@thumb3');
Route::get('/getThumbnail/4','Api\ThumbnailController@thumb4');
Route::get('/getThumbnail/5','Api\ThumbnailController@thumb5');
Route::get('/getThumbnail/6','Api\ThumbnailController@thumb6');
Route::get('/getThumbnail/7','Api\ThumbnailController@thumb7');
Route::get('/getThumbnail/8','Api\ThumbnailController@thumb8');
Route::get('/getThumbnail/9','Api\ThumbnailController@thumb9');
Route::get('/getThumbnail/10','Api\ThumbnailController@thumb10');
Route::get('/getThumbnail/11','Api\ThumbnailController@thumb11');
Route::get('/getThumbnail/12','Api\ThumbnailController@thumb12');
Route::get('/getThumbnail/13','Api\ThumbnailController@thumb13');
Route::get('/getThumbnail/14','Api\ThumbnailController@thumb14');
Route::get('/getThumbnail/15','Api\ThumbnailController@thumb15');
Route::get('/getThumbnail/16','Api\ThumbnailController@thumb16');

