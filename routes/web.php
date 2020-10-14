<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('/', function () {
    return App\Posts::get();
    
});*/
// Route::get("/","PostsController@index");
// Route::get("/posts/create","PostsController@create");
// Route::post("/posts/store","PostsController@store")->name("storeposts");
// Route::get("/formtosendpostmethod",function(){
// 	return view("guest.form");
// })->name("toreirect");


#
#
#

Route::get("/","ProductsController@index");

Route::get("/admin","ProductsController@index")->name("adminindex");
Route::get("/admin/create","ProductsController@create")->name("admincreate");

Route::get("/admin/show/{id}","ProductsController@show")->name("adminshow");


Route::get("/admin/edit/{id}","ProductsController@edit")->name("adminedit");

Route::post("/admin/store","ProductsController@store")->name("adminstore");
Route::post("/admin/update","ProductsController@update")->name("adminupdate");


Route::post("/admin/delete","ProductsController@delete")->name("admindelete");


Route::post("/admin/store/comments","ProductsController@store_comment")->name("store_comment");