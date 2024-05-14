<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()
                ->route('dashboard.index');
        }

        return view('auth.index');
    }

    public function login(LoginRequest $request)
    {
        $request->validated();

        if (auth()->attempt($request->only('account', 'password'))) {
            return redirect()
                ->route('dashboard.index')
                ->with('status', [
                    'type' => 'success',
                    'message' => trans('auth/index.login_success'),
                ]);
        }

        return redirect()
            ->route('index')
            ->with('status', [
                'type' => 'error',
                'message' => trans('auth/index.failed'),
            ]);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()
            ->route('index')
            ->with('status', [
                'type' => 'success',
                'message' => trans('auth/index.logout_success'),
            ]);
    }
}
