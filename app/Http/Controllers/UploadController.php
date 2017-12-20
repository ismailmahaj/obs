<?php

namespace App\Http\Controllers;
use \Input as Input;
use Evenement;

class UploadController extends Controller{

public function upload(){

<<<<<<< HEAD
    $this->validate($request, [
        'titre' => 'required',
        'lieu' => 'required',
    ]);
    Post::create($request->all());
    return redirect()->route('posts.index')
                    ->with('success','Post created successfully');
                    if(Input::hasFile('lien_image')){
                        echo 'Uploaded <br/>';
                        $file = Input::file('lien_image');
                        $file->move('uploads', $file->getClientOriginalName());
                    }// echo '<img src="uploads/' . $file->getClientOriginalName() . '" />';
}
=======

// if(Input::hasFile('file')){
// echo 'Uploaded <br/>';
// $file = Input::file('file');
// $file->move('uploads', $file->getClientOriginalName());
// echo '<img src="uploads/' . $file->getClientOriginalName() . '" />';
// }
>>>>>>> b6f57dbfd53134154a29af60709d92095ff40c82

}


}