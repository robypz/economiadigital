<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(12);
        return view('user.index',compact('users'));
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect(route('user.index'));
    }
}
