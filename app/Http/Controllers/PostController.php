<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        {

            $posts= Post::latest()->paginate(10);
            return view('posts.index',compact('posts'))
                ->with('i', ($request->input('page', 1) - 1) * 10);
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
        Post::create($request->all());
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
}