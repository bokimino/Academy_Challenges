<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersControllers extends Controller
{
    public function index(){
        return view('users.home');
    }
    public function showForm()
    {
        return view('users.form');
    }
    public function processForm(Request $request)
    {
        $request->validate([
            'first_name' => 'required|alpha|max:15',
            'last_name' => 'required|alpha|max:25',
            'email' => 'nullable|email',
        ]);

        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
        ];

        $request->session()->put('user_data', $data);

        return redirect()->route('info');
    }
    public function showInfo(Request $request)
    {
        $data = $request->session()->get('user_data', []);

        return view('users.info', compact('data'));
    }

    public function clearSession(Request $request)
    {
        $request->session()->forget('user_data');

        return redirect()->route('home');
    }
}
