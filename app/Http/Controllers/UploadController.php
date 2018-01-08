<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;
use Image;
use \Input as Input;

class UploadController extends Controller
{

    public function index(Request $request)
    {
        {
            
            $medias = Media::latest()->paginate(10);
            return view('galerieimg.index', compact('medias'))
                ->with('i', ($request->input('page', 1) - 1) * 10);
    }
    }


public function create()
    {
        return view('galerieimg.create');
    }
    public function store(Request $request)
    {

        $projet = new Media();
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
            $img = Image::make($request->file('galerie_img'))->resize(400, 300);
            //    dd($img);
            $img->save($destination . $name);

// dd($destination);
            return redirect()->route('galerieimg.index')
                ->with('success', 'Media created successfully');
            // echo ('test');   

        }
    }
    public function show($id)
    {
        $Media = Media::find($id);
        return view('galerieimg.show', compact('Media'));
    }
    public function edit($id)
    {
        $Media = Media::find($id);
        return view('galerieimg.edit', compact('Media'));
    }
    public function update(Request $request, $id)
    {

        Media::find($id)->update($request->all());
        return redirect()->route('galerieimg.index')
            ->with('success', 'Media updated successfully');
    }
    public function destroy($id)
    {
dd($id);
        Media::find($id)->delete();
        // return redirect()->route('galerieimg.index')
            // ->with('success', 'Media deleted successfully');
    }
}
