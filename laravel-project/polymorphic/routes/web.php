<?php

use Illuminate\Support\Facades\Route;
use App\Models\staff;
use App\Models\Photo;
use App\Models\product;
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
Route::get('/create',function(){
    $staff = staff::find(1);
    $staff->photos()->create(['path'=>'example.jpg']);

});
Route::get('/read',function(){
    $staff = staff::findOrFail(1);
    foreach($staff->photos as $photo){
        return $photo->path;

    }
});
    Route::get('/update',function(){
     $staff = staff::findOrFail(1);
      $photo = $staff->photos()->whereId(1)->first();
      $photo->path = "Update example.jpg";
      $photo->save();
 

});
Route::get('/delete', function(){
$staff = staff::findOrFail(1);
$staff->photos()->whereId(1)->delete();

});

