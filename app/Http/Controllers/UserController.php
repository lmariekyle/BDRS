<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $roles = Role::all();
            $users = User::all();
        } catch (QueryException $e) {
            // Handle the database query exception.
            // You can log the error or display a user-friendly message.
            return view('error.index', ['message' => 'An error occurred while fetching data from the database.']);
        }
    
        return view('accounts.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $roles = Role::where('id', '>', 1)->paginate(3);
        $user=User::where('id',$id)->first();

        return view('accounts.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::where('id', $id)->first();
        $user->firstName=$request->firstName;
        $user->middleName=$request->middleName;
        $user->lastName=$request->lastName;
        $user->dateOfBirth=$request->dateOfBirth;
        $user->contactNumber=$request->contactNumber;
        $user->email=$request->email;
        $user->userRole=$request->userRole;
        $user->userStatus=$request->userStatus;
        $user->save();

        // return redirect('accounts.show',compact('user','personalInfo'))->with('success','Account has been Updated!');
        return redirect('/accounts')->with('success','Account has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
