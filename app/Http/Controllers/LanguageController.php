<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        $validated = $request->validate([
            'locale' => ['required', 'string', 'in:en,ru,lv,de'],
        ]);

        App::setLocale($validated['locale']);

        return redirect()->back();
    }
}
