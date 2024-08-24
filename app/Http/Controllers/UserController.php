<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){

        $search = $request->input('search');
        $users = User::where('name', 'like', "%$search%")
                     ->orWhereHas('department', function ($query) use ($search) {
                         $query->where('name', 'like', "%$search%");
                     })
                     ->orWhereHas('designation', function ($query) use ($search) {
                         $query->where('name', 'like', "%$search%");
                     })
                     ->get();

        if ($request->ajax()) {
            return view('search', compact('users'));
        }

        return view('index', compact('users'));
    }

}
