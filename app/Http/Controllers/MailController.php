<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\User;



class MailController extends Controller
{
    public function send()
    {
        // Mail::send(['text'=>'mail'],['name', 'Oussama'], function($message){
        //     $message->to('elouazzanitawfiq@gmail.com', 'To Towfiq')->subject("Oussama Benali - Merci de l'inscription");
        //     $message->from('info@oussamabenali.be', 'Oussama Benali');


        // });
    }




}

//     public function store()
//     {
//         $this->validate(request(), [
//             'name' => 'required',
//             'email' => 'required|email',
//             'password'=> 'required|confirmed'
//         ]);
//         $user = User::create(
//             request(['name','email','password'])
//         );
//         auth()->login($user);

//         \Mail::to($user)->send(new Welcome($user));

//         return redirect()->home();
//     }
//        public function sendMsg(){
//         \Mail::raw('Nom : ' . strip_tags(Input::get('name')) .' --- ' .
//            'Email : ' . strip_tags(Input::get('email')) .' --- ' .
//            'Sujet : ' . strip_tags(Input::get('subject')) .' --- ' .
//            'Gsm : ' . strip_tags(Input::get('phone')) .' --- ' .
//            'Message : ' . strip_tags(Input::get('message'))
//             , function($message){
//             $message->from('ismailmahaj@gmail.com', Input::get('name'));
//             $message->to('ismailmahaj@gmail.com')->subject('Nouveau mail venant de technichauff.be');
//         });
//         //dd('stop sended');
//         Session::flash('status', "Special message goes here");
//         return redirect()->back();
//     }
// }