<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $current_user = auth()->user();
        $users = User::all();

        return view('backoffice.users.index', compact('current_user', 'users'));
    }

    public function edit(User $user)
    {
        return view('backoffice.users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'avatar' => ['required', 'string', 'max:255'],
        ]);
        
        $user->update($attributes);

        return redirect('/users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users');
    }
}


