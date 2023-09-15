<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\UserAccount;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.guest-register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.guest-register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.UserAccount::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $userId = IdGenerator::generate(['table' => 'users','field'=>'accountID' ,'length' => 8, 'prefix' =>'User-']);
        

        $user = User::create([
            'accountID' =>$userId,
            'firstName' => $request->firstName,
            'middleName' => $request->middleName,
            'lastName' => $request->lastName,
            'contactNumber' => $request->contactNumber,
            'dateOfBirth' => NULL,
            'email' => $request->email,
            'userRole' => 'User',
            'password' => Hash::make($request->password),
        ]);
        // dd($useraccount);
        $user->assignRole('User');
        event(new Registered($user));

        // Auth::login($useraccount);

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserAccount $userAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserAccount $userAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserAccount $userAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserAccount $userAccount)
    {
        //
    }
}
