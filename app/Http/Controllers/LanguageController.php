<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        $validated = $request->validate([
            'language' => ['required', 'string', 'in:en,ru,lv,de'],
        ]);

        App::setLocale($validated['language']);
        Session::put('locale', $validated['language']);

        return redirect()->back();
    }
}
