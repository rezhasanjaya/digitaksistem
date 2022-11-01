<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
      $users = User::latest()->paginate(20);
      return view('user-management.index', ["title" => "Users"], compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/user-management')
            ->with('success', 'Akun Berhasil Dihapus');
    }
}
