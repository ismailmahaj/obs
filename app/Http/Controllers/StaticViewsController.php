<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Mail\Bienvenue;
use App\Mail\Nouveau;
use Validator;

class StaticViewsController extends Controller
{
    public function getHome(){
    	return view('home');
    }

    public function inscription(){
    	return view('front.inscription');
    }

    // public function storeMember(Request $request)
    // {
    //     $this->validate($request, [
    //         'nom_binome' => 'required',
    //         'categorie' => 'required',
    //         'prenom_binome_a' => 'required',
    //         'nom_binome_a' => 'required',
    //         'sexe_a' => 'required',
    //         'email_binome_a' => 'required',
    //         'prenom_binome_b' => 'required',
    //         'nom_binome_b' => 'required',
    //         'sexe_b' => 'required',
    //         'email_binome_b' => 'required',
    //         'nom_coach_instructeur' => 'required',
    //         'club' => 'required',
    //         'accord' => 'required',
    //     ]);

    //     if(strip_tags($request->input('categorie')) == "Pratiquant"){
    //         $identifiant = "p-";
    //     }else{
    //         $identifiant = "z-";
    //     }

    //     $membre = new Customer();
    //         $membre->identifiant = "tmp";
    //         $membre->nom_binome = strip_tags($request->input('nom_binome'));
    //         $membre->categorie = strip_tags($request->input('categorie'));

    //         $membre->prenom_binome_a = strip_tags($request->input('prenom_binome_a'));
    //         $membre->nom_binome_a = strip_tags($request->input('nom_binome_a'));
    //         $membre->sexe_a = strip_tags($request->input('sexe_a'));
    //         $membre->email_binome_a = strip_tags($request->input('email_binome_a'));

    //         $membre->prenom_binome_b = strip_tags($request->input('prenom_binome_b'));
    //         $membre->nom_binome_b = strip_tags($request->input('nom_binome_b'));
    //         $membre->sexe_b = strip_tags($request->input('sexe_b'));
    //         $membre->email_binome_b = strip_tags($request->input('email_binome_b'));
    //         $membre->nom_coach_instructeur = strip_tags($request->input('nom_coach_instructeur'));
    //         $membre->club = strip_tags($request->input('club'));

    //         $membre->save();

    //         $membre->identifiant = $identifiant . $membre->id;
    //         $membre->save();

    //     \Mail::to($membre->email_binome_a)->send(new Bienvenue());
    //     \Mail::to($membre->email_binome_b)->send(new Bienvenue());
    //     \Mail::to("info@destinytrophy.be")->send(new Nouveau());

    //     return redirect('/')->with('status', 'Profile updated!');  ;
    // }

    public function getAccueil(){
        return view('front.accueil');
    } 
    
    public function getEvent(){
        return view('front.event');
    }

    public function getGallery(){
        return view('front.gallery');
    }

    public function getContact(){
        return view('front.contact');
    }
}
