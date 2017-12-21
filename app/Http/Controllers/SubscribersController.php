<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Subscribers;
class SubscribersController extends Controller
{
    // inscription newsletter
    public function store(Request $request){
        
        $this->validate($request, [
                'email' => 'required|email|unique:subscribers,email'
            ]);
        $post = new Subscribers();
        $post->email = $request->email;
        $post->save();
        Mail::send(['text'=>'mail'],['name', 'Oussama'], function($message){
            $message->to('elouazzanitawfiq@gmail.com', 'To Towfiq')->subject("Oussama Benali - Merci de l'inscription");
            $message->from('info@oussamabenali.be', 'Oussama Benali');


        });
        return view('pages/subscribe-confirmation');
    }
    // création et récupération fichier CSV
    public function generate_csv(){
        $people = Subscribers::all('email');
        $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(\Schema::getColumnListing('email'));
        foreach ($people as $person) {
            $csv->insertOne($person->toArray());
        }
        $csv->output('emails.csv');
    }
}