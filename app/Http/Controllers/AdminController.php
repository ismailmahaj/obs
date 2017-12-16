<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use App\Logger;
use App\Mail\Bienvenue;
use Excel;

class AdminController extends Controller
{
	public function getDashboard(){
		$newsletters_count = Newsletter::count();
		$newsletters = Newsletter::orderBy('created_at', 'desc')->take(20)->get();
		return view('admin.dashboard', compact('newsletters', 'newsletters_count'));
	}

	public function getMembers(){
		$newsletters = Newsletter::orderBy('created_at', 'desc')->paginate(15);
		return view('admin.members.list', compact('newsletters'));
	}	

	public function showMember(Newsletter $membre){
		return view('admin.members.show', compact('membre'));
	}

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMember()
    {
        return view('admin.members.create');
    }

    // public function storeMember(Request $request)
    // {
    //     if(strip_tags($request->input('categorie')) == "Pratiquant"){
    //         $identifiant = "p-";
    //     }else{
    //         $identifiant = "z-";
    //     }

    //     $membre = new Newsletter();
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

    //     return redirect('/admin/membres');
    // }

    public function export(){

        $newsletters = Newsletter::all();
        //$users = User::select('identifiant as Identifiant','created_at')->get();

        Excel::create('newsletters', function($excel) use($newsletters) {
            $excel->sheet('Sheet 1', function($sheet) use($newsletters) {
                $sheet->fromArray($newsletters);
            });
        })->export('xls');

        return redirect('/admin/members');
    }
    public function editMember(Newsletter $membre)
    {
        return view('admin.members.edit', compact('membre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    // public function updateMember(Request $request, Newsletter $membre)
    // {
    //     $membre->nom_binome = strip_tags($request->input('nom_binome'));
    //     $membre->categorie = strip_tags($request->input('categorie'));

    //     $membre->prenom_binome_a = strip_tags($request->input('prenom_binome_a'));
    //     $membre->nom_binome_a = strip_tags($request->input('nom_binome_a'));
    //     $membre->sexe_a = strip_tags($request->input('sexe_a'));
    //     $membre->email_binome_a = strip_tags($request->input('email_binome_a'));

    //     $membre->prenom_binome_b = strip_tags($request->input('prenom_binome_b'));
    //     $membre->nom_binome_b = strip_tags($request->input('nom_binome_b'));
    //     $membre->sexe_b = strip_tags($request->input('sexe_b'));
    //     $membre->email_binome_b = strip_tags($request->input('email_binome_b'));
    //     $membre->nom_coach_instructeur = strip_tags($request->input('nom_coach_instructeur'));
    //     $membre->club = strip_tags($request->input('club'));

    //     $membre->save();
    //     return redirect('/admin/membres');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    

    public function destroy(Newsletter $membre)
    {
        $membre->delete();
        return redirect('/admin/membres');
    }

    public function search(Request $request){
        $newsletters = Newsletter::where('nom_binome', 'LIKE', '%'. strip_tags($request->input('name')). '%')->get();
        return view('admin.members.search', compact('newsletters'));
    }


    /* use App\Event;

class AdminController extends Controller
{

    public function event_index(){
        $events = Event::all();
        return view('admin.events', ['events' => $events]);
    }

    public function event_create(){
        return view('admin.event_create');
    }

    public function event_store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'bail|required',
            'description' => 'required'
        ]);
        $event = new Event();
        $event->titre = $request->titre;
        $event->date = $request->date;
        $event->lieu = $request->lieu;
        $event->adresse = $request->adresse;
        $event->description = $request->description;
        $event->lien_billetterie = $request->lien_billetterie;
        $event->lien_image = $request->lien_image;
        $event->save();
        return redirect()->route('admin.events');
    }

    public function event_test_img(){
        return view('admin.test_img');
    }

    public function event_store_img(Request $request)
    {
        dd($request);
        $imageTempName = $request->lien_image;
        $imageName = $request->file('lien_image')->getClientOriginalName();
        dd($imageName);
        $path = base_path() . '/img/events/';
        $request->file('lien_image')->move($path , $imageName);
        DB::table('lien_image')
            ->where('lien_image', $imageTempName)
            ->update(['lien_image' => $imageName]);
        return redirect()->route('admin.events');
    }

    public function event_show($id)
    {
        $event = Event::find($id);
        return view('admin.event_show', ['event' => $event]);
    }

    public function event_edit($id)
    {
        $event = Event::find($id);
        return view('admin.event_edit', ['event' => $event]);
    } */


    /* public function event_update(Request $request)
    {
        $event=Event::find($request->id);
        $event->titre = $request->titre;
        $event->date = $request->date;
        $event->lieu = $request->lieu;
        $event->adresse = $request->adresse;
        $event->description = $request->description;
        $event->lien_billetterie = $request->lien_billetterie;
        $event->lien_image = $request->lien_image;
        $event->save();
        return redirect()->route('admin.events'); */

    /* public function event_delete($id)
    {
        $event= Event::find($id);
        $event->delete();
        return redirect()->route('admin.events'); */


}
