<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Image;
use \Input as Input;

class UploadController extends Controller
{

    public function index(Request $request)
    {
        {

            $media = Post::latest()->paginate(10);
            return view('posts.index', compact('Posts'))
                ->with('i', ($request->input('page', 1) - 1) * 10);
            // dd($request);
        }

    }

    public function store(Request $request)
    {

        $projet = new Post();
        // $projet->lien = strip_tags($request->input('lien'));
        $projet->galerie_img = strip_tags($request->file('galerie_img')->getClientOriginalName());
        // dd($request->file('galerie_img')->getClientOriginalName());
        $projet->save();

        if ($request->file('galerie_img')) {
            // Upload new groups logo
            $destination = public_path() . '/uploads/projet/galerie/'; //s. $projet->id .'/' ;
            // // si le fichier n'existe pas alors le creer
            // if (!file_exists($destination)) mkdir($destination, 0777, true);
            // On prends l'extension original de l'image
            $extension = $request->file('galerie_img')->getClientOriginalExtension();
            // image enregistrer avec son ID et son nom
            // $projet->galerie_img = $projet->id.'_galerie_img';
            $projet->galerie_img = $request->file('galerie_img')->getClientOriginalName();

            $name = $projet->galerie_img;
            // $name = $projet->galerie_img . '.' .$extension;
            $projet->galerie_img = $name;
            // On utilise l'image enregistrer avec sa taile et sa destination de sauvegarde
            $img = Image::make($request->file('galerie_img'))->resize(300, 300);
            //    dd($img);
            $img->save($destination . $name);

// dd($destination);
            return redirect()->route('posts.index')
                ->with('success', 'Post created successfully');
            // echo ('test');   

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
