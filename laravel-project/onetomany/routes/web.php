<?php

use App\Models\User;
use App\Models\post;
use Illuminate\Support\Facades\Route;

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
Route::get('/create', function(){
    $user=User::findOrFail(1);
    $user->posts()->save(new post(['title'=>'My first post', 'body'=>'I love laravel']));

});
Route::get('/read', function(){
$user = User::findOrFail(1);
foreach($user->posts as $post){

  echo $post->title . "<br>";

}
});
Route::get('/update',function(){
    $user = User::find(1);
    $user->posts()->where('id','=', 1)->update(['title'=>'I love laravel','body'=>'This is awesome']);

});
Route::get('/delete',function(){
$user = User::find(1);
$user->posts()->whereId(1)->delete();
});