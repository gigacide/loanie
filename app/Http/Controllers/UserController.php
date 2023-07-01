<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve all users with their assigned roles
        $users = User::with('roles')->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        // Retrieve all roles to populate a dropdown or checkbox list
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'user_id' => 'required',
            'role_id' => 'required',
        ]);

        // Assign the role to the user
        $user = User::findOrFail($validatedData['user_id']);
        $user->roles()->attach($validatedData['role_id']);

        return redirect()->route('user-roles.index')->with('success', 'Role assigned successfully.');
    }

    public function destroy($userId, $roleId)
    {
        // Detach the role from the user
        $user = User::findOrFail($userId);
        $user->roles()->detach($roleId);

        return redirect()->route('user-roles.index')->with('success', 'Role removed successfully.');
    }
}
