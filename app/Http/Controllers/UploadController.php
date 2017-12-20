<?php

namespace App\Http\Controllers;
use \Input as Input;
use Evenement;

class UploadController extends Controller{

public function upload(){

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

}


}