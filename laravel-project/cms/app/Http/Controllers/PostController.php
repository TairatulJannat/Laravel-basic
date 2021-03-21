<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;
use App\Models\post;
class PostController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        //
        $posts = post::all();
        return view('posts.index' , compact('posts'));
    }
 
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        //
        return view('posts.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(CreatePostRequest $request)
    {
        //
        $input = $request->all();
        if($file = $request->file('file')) {

         $name = $file->getClientOriginalName();
         $file->move('images', $name);
         $input['path'] =$name;




        }
        post::create($input);
        //  echo "<br>";
        //  echo $file->getClientOriginalName();

        // $this->validate($request, [
        //      'title'=>'required|max:4',
        //      'content'=>'required|max:4'
        // ]);
        // return $request->title;
        // post::create($request->all());
        // return redirect('/posts');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show($id)
    {
        //
        $post = post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    {
        //
        $post = post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {
        //
        $post = post::findOrFail($id);
        $post->update($request->all());
        return redirect('posts');

    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        //
        $post = post::findOrFail($id);
        $post->delete();
        
    }
   

    public function contact()
    {
        $people=['tamima','tami','jannat'];
        return view('contact',compact('people'));
    }
    public function show_post($id,$name,$password)
    {
        return view('post',compact('id','name','password'));
    }

}
