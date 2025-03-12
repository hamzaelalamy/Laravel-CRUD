<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Niinja;

class NinjaController extends Controller
{
    public function index()
    {
        $users = Niinja::orderBy('created_at', 'desc')->get();
        return view('users.index', ["users" => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
        //fetch record with id
        $user = Niinja::findOrFail($id);
        return view('users.show', ["user" => $user]);
    }

    public function store()
    {
        // Validate the request...
        $validated = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'skill' => 'required',
        ]);

        // Create a new ninja using the validated data...
    }


}
