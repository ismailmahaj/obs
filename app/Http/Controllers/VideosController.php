<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideosController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('pages.videos', ['videos' => $videos]);
    }
}