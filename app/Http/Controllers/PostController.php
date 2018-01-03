<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Image;
use \Input as Input;

class PostController extends Controller
{
    public function index(Request $request)
    {
        {

            $posts = Post::latest()->paginate(10);
            return view('posts.index', compact('posts'))
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

        $projet = new Post();
        $projet->titre = strip_tags($request->input('titre'));
        $projet->date = strip_tags($request->input('date'));
        $projet->adresse = strip_tags($request->input('adresse'));
        $projet->description = strip_tags($request->input('description'));
        $projet->lien_billetterie = strip_tags($request->input('lien_billetterie'));
        $projet->lieu = strip_tags($request->input('lieu'));
        $projet->lien_image = strip_tags($request->file('lien_image')->getClientOriginalName());
        // dd($request->file('lien_image')->getClientOriginalName());
        $projet->save();

        if ($request->file('lien_image')) {
            // Upload new groups logo
            $destination = public_path() . '/uploads/projet/'; //$projet->id .'/' ;
            // // si le fichier n'existe pas alors le creer
            // if (!file_exists($destination)) mkdir($destination, 0777, true);
            // On prends l'extension original de l'image
            $extension = $request->file('lien_image')->getClientOriginalExtension();
            // image enregistrer avec son ID et son nom
            // $projet->lien_image = $projet->id.'_lien_image';
            $projet->lien_image = $request->file('lien_image')->getClientOriginalName();

            $name = $projet->lien_image;
            // $name = $projet->lien_image . '.' .$extension;
            $projet->lien_image = $name;
            // On utilise l'image enregistrer avec sa taile et sa destination de sauvegarde
            $img = Image::make($request->file('lien_image'))->resize(300, 300);
            //    dd($img);
            $img->save($destination . $name);

// dd($destination);

            return redirect()->route('posts.index')
                ->with('success', 'Post created successfully');

        }
    }
    
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'titre' => 'required',
            'lieu' => 'required',
        ]);
        Post::find($id)->update($request->all());
        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully');
    }
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
}
