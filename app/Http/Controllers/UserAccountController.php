<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Property;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\UserAccount;
use Illuminate\Support\Facades\DB;
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
        $user = Auth::user();
        $users = DB::table('users')->count();
        $inquiries = DB::table('inquiries')->count();
        $properties = DB::table('properties')->count();
        return view('dashboard',compact('user','users','inquiries','properties'));
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

        $user->assignRole('User');
        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     */
    public function showinquiries()
    {
        $user=Auth::user();
        $check = DB::table('inquiries')
            ->where('clientEmail', '=', $user->email)
            ->paginate(5);

        $inq = $check;

        return view('profile.inquiries', compact('inq'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($userAccount)
    {
        $user = User::where('id', $userAccount)->first();
        return view('profile.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $userAccount)
    {
        $user=User::where('id', $userAccount)->first();
        $user->firstName=$request->firstName;
        $user->middleName=$request->middleName;
        $user->lastName=$request->lastName;
        $user->contactNumber=$request->contactNumber;
        $user->email=$request->email;

        $user->save();

        // return redirect('accounts.show',compact('user','personalInfo'))->with('success','Account has been Updated!');
        return redirect()->back()->with('success','Account has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserAccount $userAccount)
    {
        //
    }
}
