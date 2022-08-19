<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('user.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3']
        ]);

        $user->name = $request->input('name');
        $user->save();

        Toast::title('The user was updated');

        return redirect()->route('user.show', $user);
    }
}
