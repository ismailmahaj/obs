<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use \Input as Input;
use Image;
class VideosController extends Controller
{
    public function index(Request $request)
    {
        {

            $videos = Video::latest()->paginate(10);
            return view('videos.index', compact('videos'))
                ->with('i', ($request->input('page', 1) - 1) * 10);
            // dd($request);
        }

    }
    public function create()
    {
        return view('videos.create');
    }
    public function store(Request $request)
    {

        $projet = new Video();
        $projet->lien_video = strip_tags($request->input('lien_video'));
        $projet->img_video = strip_tags($request->file('img_video')->getClientOriginalName());

        $projet->save();

        if ($request->file('img_video')) {
            // Upload new groups logo
            $destination = public_path() . '/uploads/projet/galerie/videos/'; //s. $projet->id .'/' ;
            // // si le fichier n'existe pas alors le creer
            // if (!file_exists($destination)) mkdir($destination, 0777, true);
            // On prends l'extension original de l'image
            $extension = $request->file('img_video')->getClientOriginalExtension();
            // image enregistrer avec son ID et son nom
            // $projet->img_video = $projet->id.'_img_video';
            $projet->img_video = $request->file('img_video')->getClientOriginalName();

            $name = $projet->img_video;
            // $name = $projet->img_video . '.' .$extension;
            $projet->img_video = $name;
            // On utilise l'image enregistrer avec sa taile et sa destination de sauvegarde
            $img = Image::make($request->file('img_video'))->resize(300, 300);
            //    dd($img);
            $img->save($destination . $name);

            return redirect()->route('videos.index')
                ->with('success', 'Video created successfully');
        }
    }

    public function show($id)
    {
        $video = Video::find($id);
        return view('videos.show', compact('video'));
    }
    public function edit($id)
    {
        $video = Video::find($id);
        return view('videos.edit', compact('video'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'lien_video' => 'required',
            'img_video' => 'required',
        ]);
        Video::find($id)->update($request->all());
        return redirect()->route('videos.index')
            ->with('success', 'video updated successfully');
    }
    public function destroy($id)
    {
        Video::find($id)->delete();
        return redirect()->route('videos.index')
            ->with('success', 'video deleted successfully');
    }



    public function galerie(){
        
        $videos = Video::latest()->paginate(10);
        return view('pages/galerie_videos', compact('videos'));
            // ->with('i', (input('img_video', 1) - 1) * 10);
    }
}
