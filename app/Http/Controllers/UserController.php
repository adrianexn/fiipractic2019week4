<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::with(['posts', 'orders.products'])->find($id);
        if($user)
        {
            // dd($user);
            // return response()->json($user);
            return view('user', ['user' => $user]);
        }
        return redirect('/');
    }
}
