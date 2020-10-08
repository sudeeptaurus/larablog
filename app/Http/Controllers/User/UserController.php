<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        $users = User::all();
        return view('backpanel.users.index', compact('users'));
    }

    public function create ()
    {
        return view('backpanel.users.create');
    }

    public function store (Request $request)
    {
//        return \request()->all();
//        return $request->all();

//        $user = User::create([
//            'name'      => $request->name,
//            'email'     => $request->email,
//            'password'  => bcrypt($request->password),
//        ]);

        $user = User::create($request->all());

        return redirect()
            ->route('user.index')
            ->with('success', $user->name." User Created Successfully");
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('backpanel.users.edit', compact('user'));
    }
}
