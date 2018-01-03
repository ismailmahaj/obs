<?php

namespace App\Http\Controllers;
use \Input as Input;
use Illuminate\Http\Request;
use Image;
use App\Media;

class UploadController extends Controller{

  public function index(Request $request)
    {
        {

            $media= Media::latest()->paginate(10);
            return view('/upload_img',compact('Medias'))
                ->with('i', ($request->input('page', 1) - 1) * 10);
               
        }

    }

  public function store(Request $request)
    {
       

$projet = new Media();
            $projet->lien = strip_tags($request->input('lien'));
            $projet->galerie_img = strip_tags($request->file('galerie_img')->getClientOriginalName());
           
  $projet->save();
     
if ($request->file('galerie_img')) {
            // Upload new groups logo
             $destination = public_path() . '/uploads/projet/galerie/' ; //$projet->id .'/' ;
            // // si le fichier n'existe pas alors le creer
            // if (!file_exists($destination)) mkdir($destination, 0777, true);
            // On prends l'extension original de l'image
            $extension = $request->file('galerie_img')->getClientOriginalExtension();

            // image enregistrer avec son nom
            $projet->galerie_img = $request->file('galerie_img')->getClientOriginalName();
            $name = $projet->galerie_img;

            // $name = $projet->galerie_img . '.' .$extension;
            $projet->galerie_img = $name;
            // On utilise l'image enregistrer avec sa taile et sa destination de sauvegarde
            $img = Image::make($request->file('galerie_img'))->resize(300, 300);
     
           $img->save($destination.$name);





   return redirect()->route('/upload_img', [$img])
                       ->with('success','Post created successfully');

    }
 }
}