 <?php

use Illuminate\Support\Facades\Route;
use App\Models\Address;
use App\Models\User;
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
Route::get('/insert',function(){
    $user = User::findOrFail(2);

    $address = new Address(['name'=>'4445 paulina av NY NY 11218']);

    $user->address()->save($address);

});
Route::get('/update',function(){
    $address = Address::find(2);
    $address->name = "1024 update Av, alaka";
    $address->save();
});
Route::get('/read', function(){
    $user = User::findOrFail(1);
    echo $user->address->name;
});

Route::get('/delete', function(){
    $user = User::findOrFail(1);
    $user->address()->delete();
});