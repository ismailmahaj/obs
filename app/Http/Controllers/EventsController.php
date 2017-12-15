<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenements;

class EvenementsController extends Controller
{
    public function index()
    {
        $events = Evenements::where('deleted_at', NULL)->get();
        return view('pages.events', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
}
