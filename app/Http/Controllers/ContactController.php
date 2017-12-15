<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    public function store(Request $request){
        //validation
        $this->validate($request, [
                'nom' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ]);
        $nom =$request->nom;
        $email=$request->email;
        $msg=$request->message;
        //enregistrer dans la DB
        $post = new Contact();
        $post->nom = $nom;
        $post->email = $email;
        $post->message = $msg;
        $post->save();
        //envoie de l'email
        Mail::send('emails.send', ['content' => $msg, 'nom' => $nom, 'email' => $email], function ($message)
        {
            $message->from('oussama@brusselart.be', 'Oussama Benali');
            $message->to('oussama@brusselart.be')->subject('Nouveau mail venant de oussamabenali.be');
        });
        //return response()->json(['message' => 'Request completed']);
        
        //renvoie vers la vue
        return view('pages/contact-confirmation');
    }
    public function send(Request $request){
        
    }
}
