<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        $validated = $request->validate([
            'locale' => ['required', 'string', 'in:en,ru,lv,de'],
        ]);

        session()->put('locale', $validated['locale']);

        return redirect()->back();
    }
}
