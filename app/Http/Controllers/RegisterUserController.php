<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userattrs = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
            'name' => ['required'],
        ]);
        $employerattrs = $request->validate([
            'employer' => ['required'],
            'logo' => ['required', 'image'],
        ]);

        $user = User::create($userattrs);
        $logoPath = $request->logo->store('logos');
        $user->employer()->create([
            'name' => $employerattrs['employer'],
            'logo' => $logoPath,
        ]);
        Auth::login($user);
        return redirect('/');
    }
}
