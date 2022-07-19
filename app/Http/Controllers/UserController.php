<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create() {
        return view('users.create');
    }

    public function store() {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
        ]);
        return redirect('/users');
    }

    public function edit(User $user) {
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user) {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
        ]);
        return redirect('/users');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect('/users');
    }
}
