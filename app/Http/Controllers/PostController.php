<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \Input as Input;
use Intervention\Image\ImageManagerStatic as Image;

use App\Post;


class PostController extends Controller
{
    public function index(Request $request)
    {
        {

            $posts= Post::latest()->paginate(10);
            return view('posts.index',compact('posts'))
                ->with('i', ($request->input('page', 1) - 1) * 10);
                // dd($request);
        }

    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'required',
            'lieu' => 'required',
        ]);
if(Input::hasFile('lien_image')){
// dd( Input::file('lien_image')->getClientOriginalName());
$filename = Input::file('lien_image')->getClientOriginalName();
$file = Input::file('lien_image');
// $file->move(public_path('uploads'), $file->getClientOriginalName());}
$file->move($filename);}

// echo '<img src="uploads/' . $file->getClientOriginalName() . '" />';

        Post::create($request->all());
        // dd($_FILES);:
        return redirect()->route('posts.index')
                        ->with('success','Post created successfully');



    }
    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.show',compact('post'));
    }
    public function edit($id)
    {
        $post= Post::find($id);
        return view('posts.edit',compact('post'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'titre' => 'required',
            'lieu' => 'required',
        ]);
        Post::find($id)->update($request->all());
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
    public function upload(){
        
        
        if(Input::hasFile('file')){
        echo 'Uploaded <br/>';
        $file = Input::file('file');
        $file->move('uploads', $file->getClientOriginalName());
        // echo '<img src="uploads/' . $file->getClientOriginalName() . '" />';
        }
    }
}
