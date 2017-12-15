<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

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
        //$request->session()->put('locale', $request->locale);
        //$request->session()->save();
        return Redirect::back();
    }
}
