<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Config;
use App;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Session;

/**
 * Change session locale
 * @param  Request $request
 * @return Response
 */

class TranslationController extends Controller
{
    public function changeLocale(Request $request)
    {
        $this->validate($request, ['locale' => 'required|in:fr,ar']);
        session(['locale' => $request->locale]);
        $request->session()->put('locale', $request->locale);
        $request->session()->save();
        return Redirect::back();
    }
    public function switchLang($lang)
    {
        //dd( Session::get('locale'));
       // dd(config('app.languages'));
        if (in_array($lang, config('app.languages'))) {
            Session::put('locale', $lang);
            Config::set('app.locale', $lang);
            App::setLocale($lang);
            
        }
        return Redirect::back();
    }
}
