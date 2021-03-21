<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use App\Models\post;
use App\Models\User;
use App\Models\Role;
use App\Models\country;
use App\Models\photo;
use App\Models\Tag;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/post/{id}/{name}', function($id, $name){
//     return "This is post number".$id ."" . $name;
// });
// Route::get('admin/posts/example', array('as'=>'admin.home', function(){
//     $url = route('admin.home');
//     return "This url is" .$url;
// }));
// Route::get('/post/{id}', 'App\Http\Controllers\PostController@index');
// Route:: resource('posts', 'PostController') ;
// Route::get('/contact', 'PostController@contact') ;
// Route::get('/post/{id}/{name}/{password}', 'PostController@show_post') ;
// Route::get('/insert', function(){

// DB::insert('insert into posts(title,content) values(?,?)',['PHP with Laravel is awesome one','Laravel is the best thing that has happened to PHP Language']);


// });

// Route::get('/read', function(){
//          $results  = DB::select('select * from posts where id=?',[1]);
//          foreach($results as $post){
//                   return $post-> title . " " . $post-> content;
               
//          }
// });

// Route::get('/update', function(){
//          $updated  = DB::update('update posts set title="Update title" where id=?',[1]);
//          return $updated;
// // }); 

// Route::get('/delete', function(){
//          $deleted  = DB::delete('delete from posts where id=?',[1]);
//          return $deleted;
// }); 

// Route::get('/read', function(){
//          $posts = Post::all();
//          foreach($posts as $post){
//            return $post->title;

//          }
// }); 
// Route::get('/findwhere',function(){
//          $posts = post::where('id',3)->orderBy('id','desc')->take(1)->get();
//          return $posts;

// });

// Route::get('/basicinsert',function(){
//          $post=Post::find(3);
//          $post->title = 'New Eloquent title insert into update';
//          $post->content = 'Wow eloquent is really cool yyyaa';
//          $post->save();
// });
// Route::get('/update',function(){
//    post::where('id',2)->where('is_admin',0)->update(['title'=>'New PHP TITLE', 'content'=>'I love my instructor Edwin']);     
// });
// 
//  Route::get('/softDelete',function(){
//    post::find(5)->delete();
//  });

//  Route::get('/restore',function(){
//          post::withTrashed()->where('id',5)->restore();
//        });

//        Route::get('/forcedelete',function(){
//          post::onlyTrashed()->where('is_admin',0)->forceDelete();
//        });
//        //Has one relationship
//        Route::get('/user/{id}/post',function($id){
//         return User::find($id)->post->content;
//       }); 
//       Route::get('/post/{id}/user',function($id){
//         return post::find($id)->user->name;
//       }); 

// //one to many

//       Route::get('/posts',function(){
//         $user = User::find(1);
//         foreach($user->posts as $post){
//           echo $post->title . "<br>";
//         }
//       }); 
// //many to many

//       Route::get('/user/{id}/role',function($id){
//         $user = User::find($id);
//         foreach($user->roles as $role){
//          return $role->name;
//         }
//       });
    
//       Route::get('user/pivot',function(){
//         $user = User::find(1);
//         foreach($user->roles as $role){

//           echo $role->pivot->created_at;
//         }
//       });

//       Route::get('/user/country',function(){
//        $country = country::find(2);
//        foreach($country->posts as $post){

//         return $post->title;
//        }
//       });

//       Route::get('user/photos',function(){
//         $user = User::find(2);
//         foreach($user->photos as $photo){
 
//          return $photo->path;
//         }
//        });
//        Route::get('photo/{id}/post',function($id){
//         $photo = photo::findOrFail($id);
     
 
//          return $photo->imageable;
        
//        });
//       //  Route::get('/tag/video',function(){
//       //   $tag = Tag::find(1);
//       //   foreach($tag->videos as $video){
//       //     echo $video->name;
//       //   }
//       // });


//         Route::get('/tag/post',function(){
//           $tag = Tag::find(2);
//           foreach($tag->posts as $post){
//             echo $post->title;
//           }
          
        
//        });

Route::group(['middleware'=>'web'],function(){

         Route::resource('/posts','PostController');
});
