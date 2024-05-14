<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function set(Request $request)
    {
        $language = $request->input('language') ?? 'en';

        session(['language' => $language]);

        return redirect()
            ->back();
    }
}
