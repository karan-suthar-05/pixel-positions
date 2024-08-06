<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{

    public function create()
    {
        return view("auth.register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required',Password::min(5),'confirmed']
        ]);
        $employerAttributes = $request->validate([
            'employer' => ['required'],
            'logo' => [File::types(['png','jpg','webp'])]
        ]);

        $user = User::create($userAttributes);
        $logoPath = "";
        if($request->logo != null)
        {
            $logoPath = $request->logo->store('logos','public');
        }
        $user->employer()->create([
            'name' => $request->employer,
            'logo' => $logoPath
        ]);
        Auth::login($user);
        return redirect("/");
    }


}
