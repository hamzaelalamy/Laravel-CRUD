<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Niinja;
use App\Models\Dojo;

class NinjaController extends Controller
{
    public function index()
    {
        $users = Niinja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        return view('users.index', ["users" => $users]);
    }

    public function create()
    {
        $dojos = Dojo::all();
        return view('users.create', ["dojos" => $dojos]);
    }

    public function show(Niinja $user)
    {
        //fetch record with id
        $user->load('dojo');
        return view('users.show', ["user" => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'email' => 'required|email',
            'dojo_id' => 'required|exists:dojos,id'
        ]);

        Niinja::create($validated);

        return redirect()->route('users.index')->with('success', 'User added successfully');
    }

    public function destroy(Niinja $user) {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }

}
