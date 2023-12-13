<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficerController extends Controller
{
    protected $connection = 'mysql_second';

    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'password' => 'required',
        ], [
            'user_id.required' => 'ใส่ username',
            'password.required' => 'ใส่ password',
        ]);

        $credentials = [
            'user_id' => $request->user_id,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            return redirect('/officer/search_member/search_member')->with('success','Login success');
        }

        return back()->with('error','Wrong username or Password');

    }

    public function officer()
    {
        return view('/officer/search_member/search_member');
    }
}
