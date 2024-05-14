<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function set(Request $request)
    {
        $theme = $request->input('theme', 'emerald');

        session(['theme' => $theme]);

        return redirect()
            ->back();
    }
}
