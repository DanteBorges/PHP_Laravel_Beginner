<?php

use Illuminate\Support\Facades\Route;


//Route::get('/posts/{id}', [App\Http\Controllers\PostsController::class, 'index']);

//Route::resource('posts', '\App\Http\Controllers\PostsController');

Route::get('/contact','\App\Http\Controllers\PostsController@contact');
Route::get('/dandan','\App\Http\Controllers\PostsController@dandan');
Route::get('/post{id}',[App\Http\Controllers\PostsController::class, 'show_post']);


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


Route::get('/', function () {
    return view('welcome');
    
});

/*Route::get('/about', function () {
    return "Hi i am about page";
    
});

Route::get('/contact', function () {
    return "hi i am contact page" ;
    
});

Route::get('/post/{id}/{name}', function($id, $name){

    return "This is post number ".$id." ".$name ;

});
Route::get('/admin/posts/exemple', array('as'=>'admin.home' ,function(){
    $url = route('admin.home');
    return "this url is". $url;
}));*/
Route::group(['middleware'=>['web']], function () {
    
    
});