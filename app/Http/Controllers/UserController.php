<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('role', 0)->latest()->paginate(10);
        return view('user.index', [
            'user' => $user
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return to_route('users.index');
    }
}
