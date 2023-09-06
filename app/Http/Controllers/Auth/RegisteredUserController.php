<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $roles=Role::all();
        return view('auth.register',compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'middleName' => $request->middleName,
            'lastName' => $request->lastName,
            'contactNumber' => $request->contactNumber,
            'dateOfBirth' => $request->dateOfBirth,
            'userRole' =>$request->userRole,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole($request->userRole);

        event(new Registered($user));

        // Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
