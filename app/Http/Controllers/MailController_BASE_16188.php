<?php 

namespace App\Http\Controllers;

use App\User;

use App\Mail\Welcome;

class RegistrationController extends Controllers
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password'=> 'required|confirmed'
        ]);
        $user = User::create(
            request(['name','email','password'])
        );
        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        return redirect()->home();
    }
       public function sendMsg(){
        \Mail::raw('Nom : ' . strip_tags(Input::get('name')) .' --- ' .
           'Email : ' . strip_tags(Input::get('email')) .' --- ' .
           'Sujet : ' . strip_tags(Input::get('subject')) .' --- ' .
           'Gsm : ' . strip_tags(Input::get('phone')) .' --- ' .
           'Message : ' . strip_tags(Input::get('message'))
            , function($message){
            $message->from('ismailmahaj@gmail.com', Input::get('name'));
            $message->to('ismailmahaj@gmail.com')->subject('Nouveau mail venant de technichauff.be');
        });
        //dd('stop sended');
        Session::flash('status', "Special message goes here");
        return redirect()->back();
    }
}